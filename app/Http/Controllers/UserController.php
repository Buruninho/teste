<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $active_users = User::whereNull('soft_deleted_at')->get();

        return view('user.list', compact('active_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user_data = $request->except('_token');

        $user_data['name'] = $user_data['name'].' '.$user_data['surname'];
        
        $user_data['password'] = Hash::make($user_data['password']);

        try {
    
            $new_user = User::create($user_data);
        } catch (\Exception $e) {
            
            return response()->json($e->getMessage(), 500);
        }

        return response()->json($new_user, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try {
            
            $user = User::find($id)->delete();

        } catch (\Exception $e) {
            
            return response()->json($e->getMessage(), 500);
        }

        return response()->json(['deleted' => 'Usuário deletado com sucesso!'], 200);
    }
}
