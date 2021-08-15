
<div class="modal fade" id="create-user-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="create-user-modal-title">Cadastro de usuários</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form class="row g-3" id="user-form" method="post" action="#" autocomplete="off">
                    @csrf
                    <div class="col-md-6">
                        <label for="name" class="form-label">Primeiro nome:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required />
                    </div>
                    <div class="col-md-6">
                        <label for="surname" class="form-label">Sobrenome:</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Digite seu sobrenome" required />
                    </div>
                    <div class="col-12">
                        <label for="username" class="form-label">Apelido</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Seu apelido na plataforma" required />
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required />
                    </div>
                   
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="user-form" id="submit-user-form">Cadastrar</button>
            </div>
        </div>
    </div>
</div>