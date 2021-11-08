<!-- MODAL of Contact -->

<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-highlight">
            <div class="modal-header transparent align-items-center">
                <img class="mail_icon" src="./Images/logo.png" alt="email icon" style="width:60px;"> 
                <h5 class="modal-title text-white" style="margin-left:10px;" id="exampleModalLabel">Envianos tu
                    pregunta.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">&times;</span>
                </button>
            </div>
            <div class="modal-body text-light">
                <form action="./index.php" method="post">
                    <div class="form-group">
                        <label for="name" class="col-form-label">Nombre :</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Juan Perez" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email :</label>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="ejemplo@mail.com.ar" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-form-label">Mensaje :</label>
                        <textarea class="form-control" name="message" id="message"
                            placeholder="Ingrese aqui su consulta" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <!-- Add the action name - value pair -->
                        <input type="hidden" name="action" value="contact">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
