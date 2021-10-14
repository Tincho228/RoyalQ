<!-- MODAL de Erros de usuario -->

<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark align-items-center">
                <img class="mail_icon" src="./Images/Logo Favicon.png" alt="email icon">
                <h5 class="modal-title text-white" style="margin-left:10px;" id="exampleModalLabel">Eliminar usuario.
                    </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="contact.php" method="post">
                    <h5 class="text-center" id="errorModal_title"></h5>
                    
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">Entiendo</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>