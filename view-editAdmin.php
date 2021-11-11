<!doctype html>
<html lang="en">

<head>
  <title>Ganancias-deportivas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Comienza a incrementar tus ganancias de forma segura">
  <link rel="stylesheet" href="Css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- Favicon code -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

  <!--      HEADER         -->
  <div class="container-fluid bg-highlight">
        <!-- Nav bar -->
        <?php include "./common-header.php" ?>
        <div class="row justify-content-center bg-light" style="padding: 30px 0px;">
            <div class="col-sm-12 col-md-6 col-lg-8">
                <!-- Main title -->
                <div class="modal-content" style="margin-bottom:30px;">
                        <div class="modal-header bg-light align-items-center justify-content-start">
                            <h5 class="modal-title font-body" style="margin-left:10px;">Editar mi Cuenta</h5>
                        </div>
                        <div class="modal-body">
                            <form action="index.php" method="post">
                                <h5><i class="fa fa-user-circle" aria-hidden="true"></i> Cambiar usuario</h5>
                                <div class="form-group">
                                    <label for="cl_firstName" class="col-form-label">Usuario</label>
                                    <input type="text" name="cl_username" class="form-control"
                                        value = <?php if(isset($_SESSION['client_data']['cl_username'])){echo $_SESSION['client_data']['cl_username'];}?>>
                                </div>
                                <?php
                                    if (isset($_SESSION['message_addUser'])) {
                                        echo $_SESSION['message_addUser'];
                                    } 
                                ?>
                                <div class="d-flex justify-content-end">
                                    <a style="margin-right: 10px;" href="./index.php?action=account" class="btn btn-secondary">Volver</a>
                                    <button type="submit" class="btn btn-primary">Cambiar</button>
                                    <!-- Add the action name - value pair -->
                                    <input type="hidden" name="action" value="editUser_admin">
                                    <input type="hidden" name="cl_id" value= <?php if(isset($_SESSION['client_data']['cl_id'])){echo $_SESSION['client_data']['cl_id'];} ?>>
                                </div>
                            </form>
                        </div>
                        <div class="modal-body">
                            <form action="index.php" method="post">
                                <h5><i class="fa fa-key" aria-hidden="true"></i> Cambiar contraseña</h5>
                                <div class="form-group">
                                    <label for="cl_firstName" class="col-form-label">Nueva contraseña</label>
                                    <input type="password" name="cl_password" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label for="cl_password_repeat" class="col-form-label">Repetir contraseña :</label>
                                    <input type="password" name="cl_password_repeat" class="form-control"required>
                                </div>
                                <?php
                                    if (isset($_SESSION['message_password'])) {
                                        echo $_SESSION['message_password'];
                                    } 
                                ?>
                                <div class="d-flex justify-content-end">
                                    <a style="margin-right: 10px;" href="./index.php?action=account" class="btn btn-secondary">Volver</a>
                                    <button type="submit" class="btn btn-primary">Cambiar</button>
                                    <!-- Add the action name - value pair -->
                                    <input type="hidden" name="action" value="editPassword_admin">
                                    <input type="hidden" name="cl_id" value= <?php if(isset($_SESSION['client_data']['cl_id'])){echo $_SESSION['client_data']['cl_id'];} ?>>
                                </div>
                            </form>
                        </div>

                    </div>
            </div>
        </div>
  </div>
  
  <!--      FOOTER         -->
  <?php unset($_SESSION['message_addUser']); ?>
  <?php unset($_SESSION['message_password']); ?>

  <?php include "./common-footer.php" ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>