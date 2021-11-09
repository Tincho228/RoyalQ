<!doctype html>
<html lang="en">

<head>
    <title>Gracias</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/styles.css">

    <!-- Favicon Code -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favivon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body>
    <div class="container-fluid bg-highlight">
        <!-- Nav bar -->
        <?php require "../common/header.php" ?>
        <div class="row justify-content-center bg-light" style="padding: 25vh 0px;">
            <div class="col-sm-12 col-md-6 col-lg-8 text-center">
                <!-- Main title -->
                <h1>Welcome to admin PHP</h1>

                <div class="modal-content">
                    <div class="modal-header bg-dark align-items-center">
                        <img class="mail_icon" src="./Images/Logo Favicon.png" alt="email icon">
                        <h5 class="modal-title text-white" style="margin-left:10px;" id="exampleModalLabel">Log
                            In</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="contact.php" method="post">
                            <p class="text-primary">Solo acceso de administrador</strong></p>
                            <div class="form-group">
                                <label for="cl_username" class="col-form-label">Usuario :</label>
                                <input type="text" name="cl_username" class="form-control" id="cl_username" required
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="cl_password" class="col-form-label">Contraseña :</label>
                                <input type="password" name="cl_password" class="form-control" id="cl_password"
                                    required>
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
    </div>
    <!--  Footer  -->
    <?php include "../common/footer.php" ?>

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