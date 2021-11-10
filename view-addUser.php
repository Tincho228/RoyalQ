<!doctype html>
<html lang="en">

<head>
    <title>Agregar Usuario</title>
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
    <div class="wrapper_header">
        <img src="Images/bk_hero_image.jpg" alt="" class="background_img">
        <header>
            <!-- NAV -->
            <?php include './header.php'?>
        </header>
    </div>
    <!-- MAIN -->
    <div class="wrapper_main">
        <main>
            <div class="row justify-content-center">
                <div class="col col-sm-12 col-md-8 col-lg-6">
                    <div class="modal-content" style="margin-bottom:30px;">
                        <div class="modal-header bg-dark align-items-center">
                            <img class="mail_icon" src="./Images/Logo Favicon.png" alt="email icon">
                            <h5 class="modal-title text-white" style="margin-left:10px;" id="exampleModalLabel">Agregar Usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="text-white">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="contact.php" method="post">
                                <div class="form-group">
                                    <label for="user_firstName" class="col-form-label">Nombre:</label>
                                    <input type="text" name="user_firstName" class="form-control" id="user_firstName"
                                        placeholder="Juan" required>
                                </div>
                                <div class="form-group">
                                    <label for="user_lastName" class="col-form-label">Apellido :</label>
                                    <input type="text" name="user_lastName" class="form-control" id="user_lastName"
                                        placeholder="Perez" required>
                                </div>
                                <div class="form-group">
                                    <label for="user_cellphone" class="col-form-label">Celular:</label>
                                    <input class="form-control" name="user_cellphone" id="user_cellphone"
                                         required>
                                </div>
                                <div class="form-group">
                                    <label for="user_link" class="col-form-label">Usuario de GD :</label>
                                    <input type="text" name="user_link" class="form-control" id="user_link"
                                         required>
                                </div>
                                <?php
                                    if (isset($_SESSION['message_addUser'])) {
                                        echo $_SESSION['message_addUser'];
                                    } 
                                ?>
                                <div class="modal-footer d-flex justify-content-end">
                                    <a href="./contact.php?action=account" class="btn btn-secondary">Volver</a>
                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                    <!-- Add the action name - value pair -->
                                    <input type="hidden" name="action" value="registerUser">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
    <!--      FOOTER         -->
    <?php include './footer.php'?>

    <?php unset($_SESSION['message_addUser']); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="Js/main.js"></script>
</body>

</html>