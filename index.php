<?php
// Create or access a Session
session_start();


require_once './connection.php';
require_once './model.php';


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'login':
        $cl_username = filter_input(INPUT_POST, 'cl_username', FILTER_SANITIZE_STRING);
        $cl_password = filter_input(INPUT_POST, 'cl_password', FILTER_SANITIZE_STRING);

        // Check for missing data
        if (empty($cl_username) || empty($cl_password)) {
            $_SESSION['message'] = '<p class="text-right text-light">Error!</p>';
            include './index.php';
            exit;
        }
        // Query the database in order to obtain th client information
        $client_data = getClientInformation($cl_username);
        
        if(!$client_data['cl_username']){
            $_SESSION['message'] = '<p class="text-right text-light">Usuario invalido!</p>';
            include './index.php';
            exit;
        }
        else {
            $hashCheck = password_verify($cl_password, $client_data['cl_password']);
        }
        // If the hashes don't match create an error
        // and return to the login view
        if (!$hashCheck) {
            $_SESSION['message'] = '<p class="text-right text-light">Password invalido!</p>';
            include './index.php';
            exit;
        }else {
        // A valid user exists, log them in
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['message'] = '<a class="text-right text-light" href="contact.php?action=logout">Bienvenido Gabriel</a>';
        // Remove the password from the array
        // the array_pop function removes the last
        // element from an array
        array_pop($client_data);
        // Store the array into the session
        $_SESSION['client_data'] = $client_data;
    
        // Send them to the admin view
        include './index.php';
        exit;
        }
        break;
    case 'editAdmin':
        include './editAdmin-view.php';
        break;
    case 'editUser_admin':
        $cl_id = filter_input(INPUT_POST, 'cl_id', FILTER_SANITIZE_NUMBER_INT);
        $cl_username = filter_input(INPUT_POST, 'cl_username', FILTER_SANITIZE_STRING);
        // check for missin data
        if (empty($cl_username)) {
            $_SESSION['message_addUser'] = '<p class="text-danger">Completa todos los campos</p>';
            include './editAdmin-view.php';
            exit;
            }
        // send data to the model
        $regOutcome = updateAdmin($cl_id, $cl_username);
        if($regOutcome === 1){
            $_SESSION['message_addUser'] = '<p class="text-primary">El usuario ha sido actualizado</p>';
            $_SESSION['client_data']['cl_username'] = $cl_username;
            include './editAdmin-view.php';
        }
        break;
    case 'editPassword_admin':
        $cl_id = filter_input(INPUT_POST, 'cl_id', FILTER_SANITIZE_NUMBER_INT);
        $cl_password = filter_input(INPUT_POST, 'cl_password', FILTER_SANITIZE_STRING);
        $cl_password_repeat = filter_input(INPUT_POST, 'cl_password_repeat', FILTER_SANITIZE_STRING);
        // Check for missin data
        if (empty($cl_password) || empty($cl_password_repeat)) {
            $_SESSION['message_password'] = '<p class="text-danger">Completa todos los campos</p>';
            include './editAdmin-view.php';
            exit;
            }
        // Check for equal passwords
        if ($cl_password != $cl_password_repeat) {
            $_SESSION['message_password'] = '<p class="text-danger">Las contraseñas no son iguales</p>';
            include './editAdmin-view.php';
            exit;
        }
        // Hash password
        $hashedPassword = password_hash($cl_password, PASSWORD_DEFAULT);
        // Send data to the model
        $regOutcome = updatePassword($cl_id, $hashedPassword);
        if($regOutcome === 1){
            $_SESSION['message_password'] = '<p class="text-primary">La contraseña ha sido actualizada</p>';
            include './editAdmin-view.php';
        }
        break;
    case 'account':
        // Get the list of users
        $users_list = getUsersList();
        include './account.php';
        break;
    case 'addUser':
        include './addUser-view.php';
        break;
    case 'registerUser':
        $user_firstName = filter_input(INPUT_POST, 'user_firstName', FILTER_SANITIZE_STRING);
        $user_lastName = filter_input(INPUT_POST, 'user_lastName', FILTER_SANITIZE_STRING);
        $user_cellphone = filter_input(INPUT_POST, 'user_cellphone', FILTER_SANITIZE_STRING);
        $user_link = filter_input(INPUT_POST, 'user_link', FILTER_SANITIZE_STRING);
        // Check if all fields are not empty
        if (empty($user_firstName) || empty($user_lastName) || empty($user_cellphone) || empty($user_link)) {
            $_SESSION['message_addUser'] = '<p class="text-danger">Completa todos los campos</p>';
            include './addUser-view.php';
        exit;
        }
        // Send data to the model
       $regOutcome = registerUser($user_firstName, $user_lastName, $user_cellphone, $user_link);


        // Check if result is successfull
       if($regOutcome === 1){
            $_SESSION['message_addUser'] = '<p class="text-primary">Se agregó '. $user_firstName .' a tu lista</p>';
            include './addUser-view.php';
        }
        else {
            $_SESSION['message_addUser'] = '<p class="text-danger">No se pudo agregar a'. $user_firstName .'</p>';
            include './addUser-view.php';
        }
    
        break;
    case 'edit':
        $user_id = filter_input(INPUT_GET, 'user_id', FILTER_SANITIZE_STRING);
        $user_info = getUserInfo($user_id);
        include './editUser-view.php';
        break;
    case 'editUser':
        $user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
        $user_firstName = filter_input(INPUT_POST, 'user_firstName', FILTER_SANITIZE_STRING);
        $user_lastName = filter_input(INPUT_POST, 'user_lastName', FILTER_SANITIZE_STRING);
        $user_cellphone = filter_input(INPUT_POST, 'user_cellphone', FILTER_SANITIZE_STRING);
        $user_link = filter_input(INPUT_POST, 'user_link', FILTER_SANITIZE_STRING);
        // Check for missing data
        if (empty($user_firstName) || empty($user_lastName) || empty($user_cellphone) || empty($user_link)) {
            $_SESSION['message_addUser'] = '<p class="text-danger">Completa todos los campos</p>';
            include './editUser-view.php';
            exit;
            }
        // send data to the model
        $regOutcome = updateUser($user_id, $user_firstName, $user_lastName, $user_cellphone, $user_link);
        // Check if deletion is successfull
        if($regOutcome === 1){
            $users_list = getUsersList();
            $_SESSION['message_addUser'] = '<p class="text-warning bg-dark text-center">El usuario '. $user_firstName .' ha sido actualizado</p>';
            header("location:./contact.php?action=account");
        }
        break;
    case 'delete':
        $user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
        $regOutcome = deleteUser($user_id);
        // Check if deletion is successfull
        if($regOutcome === 1){
            $users_list = getUsersList();
            header("location:./contact.php?action=account");
        }
        break;
    case 'logout':
        session_destroy();
        header('location:./index.php');
        break;
    case 'contact':
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
        // $selected_email = filter_input(INPUT_POST, 'selected_email', FILTER_SANITIZE_STRING);
        // $email_from = "Sitio Web";
        // $email_subject = "Consulta de ".$name;
        // $email_body = "Nombre: $name.\n".
        // "Email: $email.\n".
        // "Mensaje: $message.\n"; 
        // $to = "consultas@royalq-mundial.com";
        // $headers = "De: $email_from \r\n";
        // $headers.= "Responder a: $email \r\n";
        // mail($to, $email_subject, $email_body, $headers);
        // header("location: index.php");
        break;
    case'activate':
        $user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
        // deactivate current user
        $users_list = getUsersList();
        foreach($users_list as $key => $user){
            if($user['user_status'] === "1" ){
                $current_user_id = $user['user_id'];
            }
        }
        $regOutcome = deactivate_current_user($current_user_id);
        if($regOutcome === 1){
            $result = activate_new_user($user_id);  
            if($result === 1){
                $users_list = getUsersList();
                $_SESSION['message_addUser'] = '<p class="text-warning bg-dark text-center">El usuario ha sido activado</p>';
                header("location:./contact.php?action=account");
            }
        }
        
        //activate_new_user($user_id);
        break;
    case 'template':
        include "./views/template.php";
        break;
    default:
        // chequear client selected y editar index.php
        // create the administrator
        $selected_name = "Mariano Galdeano";
        $selected_phone ="2604375615";
        $selected_binance_link = "L3UEOOFA";
        $selected_qbot_link ="2JBS4";
        $selected_email = "consultas@royalq-mundial.com";

        include './views/home.php';
}

?>