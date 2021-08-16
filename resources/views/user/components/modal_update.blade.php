
<div class="modal fade" id="edit-user-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-user-modal-title">Editando <span id="user-name-modal-title"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form class="row g-3" id="edit-user-form" method="GET" action="#" autocomplete="off">
                    @csrf
                    <div class="col-md-12">
                        <label for="edit-name" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="edit-name" name="name" required />
                    </div>

                    <div class="col-12">
                        <label for="edit-username" class="form-label">Apelido</label>
                        <input type="text" class="form-control" id="edit-username" name="username"  required />
                    </div>
                   
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" form="edit-user-form" class="submit-button" id="submit-edit-user-form">Salvar mudanças</button>
            </div>
        </div>
    </div>
</div>