<!-- MODAL de Activar usuario -->

<div class="modal fade" id="activateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark align-items-center">
                <h5 class="modal-title text-white" style="margin-left:10px;" id="exampleModalLabel">Activar usuario.
                    </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="index.php" method="post">
                    <h5 class="text-center" id="activateModal_title"></h5>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Activar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancelar</button>
                        <!-- Add the action name - value pair -->
                        <input type="hidden" id="activate_user_id" name="user_id" value="">
                        <input type="hidden" name="action" value="activate">

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>