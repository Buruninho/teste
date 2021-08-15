@extends('layout.main')

@section('title', 'Listagem de usuários')
@section('header', 'Lista de usuários cadastrados')

@section('nav_button')
    <div id="nav-button">

        <button class="btn btn-success" id="create-user-button"> <i class="fa fa-plus rotate"></i> Cadastrar usuário</button>
    </div>
@endsection

@section('main_content')

    <div id="table-wrapper">

        <table class="table" id="user-table">
            <thead>
                <tr>
                    <th scope="col">Apelido</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($active_users as $userIndex => $user)
                    
                    <tr id="row-{{ $user->id }}">
                        
                        <td scope="col">{{ $user->username }}</td>
                        <td scope="col">{{ $user->name }}</td>
                        <td scope="col">
                            <button class="btn btn-primary" type="button" id="edit-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar este usuário"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger" type="button" id="delete-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Deletar este usuário" onclick="deleteUser({{ $user->id }})"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('user.components.modal_create')

    @include('user.components.modal_update')

@endsection