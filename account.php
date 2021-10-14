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
    <div class="wrapper_header">
        <img src="Images/bk_hero_image.jpg" alt="" class="background_img">
        <header>

            <!-- nav  -->
            <?php include './header.php'?>
            
        </header>
    </div>
    <!-- MAIN -->
    <div class="wrapper_main">
    <main>
        
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8"  style="margin-bottom:30px;">
                <!-- Informacion de cliente -->
                <h2 class="text-center text-light" >Administrador</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <tr>
                            <th scope="row">1</th>
                            <td>Gabriel</td>
                            <td>Sanchez</td>
                            <td><?php  echo $_SESSION['client_data']['cl_username']; ?></td>
                            <td class="text-center"><a href="./contact.php?action=editAdmin"><i class="fas fa-edit text-secondary"></i></a>  </td>
                        </tr>
                    </tbody>
                </table>
                
                <!-- Informacion de usuarios -->
                <h2 class="text-center text-light">Usuarios</h2>
                <?php
                    if (isset($_SESSION['message_addUser'])) {
                    echo $_SESSION['message_addUser']; } 
                ?>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Activar</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    
                    <tbody class="table-light">
                    <?php
                        if (isset($users_list)) {
                           foreach($users_list as $key => $user){
                                ?>
                        <tr>
                            <th scope="row"><?php echo $key?></th>
                            <td><?php echo $user['user_firstName'] ?></td>
                            <td><?php echo $user['user_lastName'] ?></td>
                            <td class="text-center"><?php 
                                    if($user['user_status'] === "0" ){
                                        echo '<a onclick="active(this)" data-id ='. $user['user_id'] .' data-name = '. $user['user_firstName'] .' class="text-secondary"><i class="far fa-square"></i></a>';
                                    }
                                    else {
                                        echo '<a class="text-success" href=""><i class="fas fa-check-square"></i></a>';
                                    }
                                ?>
                            </td>
                            <td><a onclick="delet(this)" data-id = <?php echo $user['user_id']?> data-name = <?php echo $user['user_firstName']?> data-status = <?php echo $user['user_status']?> ><i class="fas fa-trash text-secondary" style="margin-right:10px;"></i></a> <a href="./contact.php?action=edit&user_id=<?php echo $user['user_id']; ?>"><i class="fas fa-edit text-secondary"></i></a></td>
                        </tr>
                    <?php } }?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-start"><a class="btn btn-success" href="./contact.php?action=addUser"><i class="fas fa-plus"></i> Agregar</a></div>
            </div>
        </div>
    </main>
    <script>
        function delet(comp){
            var id = comp.dataset.id;
            var name = comp.dataset.name;
            var modal_title = document.getElementById("deleteModal_title");
            var status = comp.dataset.status;
            if (status === "1"){
                modal_title = document.getElementById("errorModal_title");
                modal_title.textContent = "No se puede eliminar a "+ name + "!!! Tenes que activar otro usuario para poder eliminarlo";
                $('#errorModal').modal('show');    
            }else{
            modal_title.textContent = "¿Estás seguro de eliminar a "+ name + "?";
            var user_id = document.getElementById("user_id")
            user_id.value = id;
            $('#deleteModal').modal('show');}
        }
        function active(comp){
            var id = comp.dataset.id;
            var name = comp.dataset.name;
            var modal_title = document.getElementById("activateModal_title");
            modal_title.textContent = "¿Seguro quieres activar a "+ name + "?";
            var user_id = document.getElementById("activate_user_id")
            user_id.value = id;
            $('#activateModal').modal('show');
        }
    </script>
    <?php include 'modal-delete.php' ?>
    <?php include 'modal-activate.php' ?>
    <?php include 'modal-error.php' ?>
    
    </div>
    <!--      FOOTER         -->
    <?php include './footer.php' ?>
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
    <script src="./Js/main.js"></script>
    
</body>

</html>