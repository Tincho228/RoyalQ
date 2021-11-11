<!-- MODAL de Eliminar usuario -->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <form action="index.php" method="post">
                    <h5 class="text-center" id="deleteModal_title"></h5>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                        <!-- Add the action name - value pair -->
                        <input type="hidden" id="user_id" name="user_id" value="">
                        <input type="hidden" name="action" value="delete">

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>