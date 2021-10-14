<!-- MODAL de Administrador -->

<div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark align-items-center">
                <img class="mail_icon" src="./Images/Logo Favicon.png" alt="email icon">
                <h5 class="modal-title text-white" style="margin-left:10px;" id="exampleModalLabel">Log In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="contact.php" method="post">
                    <p class="text-primary">Solo acceso de administrador</strong></p>
                    <div class="form-group">
                        <label for="cl_username" class="col-form-label">Usuario :</label>
                        <input type="text" name="cl_username" class="form-control" id="cl_username" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="cl_password" class="col-form-label">Contraseña :</label>
                        <input type="password" name="cl_password" class="form-control" id="cl_password" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Log In</button>
                        <!-- Add the action name - value pair -->
                        <input type="hidden" name="action" value="login">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>