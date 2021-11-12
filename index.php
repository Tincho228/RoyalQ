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

    // Client control
    case 'login-view':
        include "./view-login.php";
        break;
    case 'login':
        $cl_username = filter_input(INPUT_POST, 'cl_username', FILTER_SANITIZE_STRING);
        $cl_password = filter_input(INPUT_POST, 'cl_password', FILTER_SANITIZE_STRING);

        // Check for missing data
        if (empty($cl_username) || empty($cl_password)) {
            $_SESSION['message'] = '<div class="alert alert-danger">Complete todos los campos</div>';
            include './view-login.php';
            exit;
        }
        // Query the database
        $client_data = getClientInformation($cl_username);
        
        
        if(!$client_data['cl_username']){
            $_SESSION['message'] = '<div class="alert alert-danger">Usuario invalido</div>';
            include './view-login.php';
            exit;
        }
        else {
            $hashCheck = password_verify($cl_password, $client_data['cl_password']);
        }
        // If the hashes don't match create an error
        // and return to the login view
        if (!$hashCheck) {
            $_SESSION['message'] =  '<div class="alert alert-danger">Password invalido</div>';
            include './view-login.php';
            exit;
        }else {
        // A valid user exists, log them in
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['message'] =  '<div class="alert alert-success">Ingreso exitoso!!!!</div>';
        // Remove the password from the array
        // the array_pop function removes the last
        // element from an array
        array_pop($client_data);
        // Store the array into the session
        $_SESSION['client_data'] = $client_data;
        // Send them to the admin view
          
        include "./view-login.php";
        exit;
        }
        break;
    case 'logout':
        session_destroy();
        header("location: ./index.php");
        break;
    case 'editAdmin':
        include './view-editAdmin.php';
        break;
    case 'editUser_admin':
        $cl_id = filter_input(INPUT_POST, 'cl_id', FILTER_SANITIZE_NUMBER_INT);
        $cl_username = filter_input(INPUT_POST, 'cl_username', FILTER_SANITIZE_STRING);
        // check for missin data
        if (empty($cl_username)) {
            $_SESSION['message_addUser'] = '<div class="alert alert-danger">Completa todos los campos</div>';
            include './view-editAdmin.php';
            exit;
            }
        // send data to the model
        $regOutcome = updateAdmin($cl_id, $cl_username);
        if($regOutcome === 1){
            $_SESSION['message_addUser'] = '<div class="alert alert-success">El usuario ha sido actualizado</div>';
            $_SESSION['client_data']['cl_username'] = $cl_username;
            include './view-editAdmin.php';
        }
        break;
    case 'editPassword_admin':
        $cl_id = filter_input(INPUT_POST, 'cl_id', FILTER_SANITIZE_NUMBER_INT);
        $cl_password = filter_input(INPUT_POST, 'cl_password', FILTER_SANITIZE_STRING);
        $cl_password_repeat = filter_input(INPUT_POST, 'cl_password_repeat', FILTER_SANITIZE_STRING);
        // Check for missin data
        if (empty($cl_password) || empty($cl_password_repeat)) {
            $_SESSION['message_password'] = '<div class="alert alert-danger">Completa todos los campos</div>';
            include './view-editAdmin.php';
            exit;
            }
        // Check for equal passwords
        if ($cl_password != $cl_password_repeat) {
            $_SESSION['message_password'] = '<div class="alert alert-danger">Las contraseñas no son iguales</div>';
            include './view-editAdmin.php';
            exit;
        }
        // Hash password
        $hashedPassword = password_hash($cl_password, PASSWORD_DEFAULT);
        // Send data to the model
        $regOutcome = updatePassword($cl_id, $hashedPassword);
        if($regOutcome === 1){
            $_SESSION['message_password'] = '<div class="alert alert-success">La contraseña ha sido actualizada</div>';
            include './view-editAdmin.php';
        }
        break;
    
    case 'account':
        // Get the list of users
        $users_list = getUsersList();
        include './view-admin.php';
        break;
    
    case 'addUser':
        include './view-addUser.php';
        break;
    case 'registerUser':
        $user_firstName = filter_input(INPUT_POST, 'user_firstName', FILTER_SANITIZE_STRING);
        $user_lastName = filter_input(INPUT_POST, 'user_lastName', FILTER_SANITIZE_STRING);
        $user_cellphone = filter_input(INPUT_POST, 'user_cellphone', FILTER_SANITIZE_STRING);
        $user_binance_link = filter_input(INPUT_POST, 'user_binance_link', FILTER_SANITIZE_STRING);
        $user_royal_link = filter_input(INPUT_POST, 'user_royal_link', FILTER_SANITIZE_STRING);
        // Check if all fields are not empty
        if (empty($user_firstName) || empty($user_lastName) || empty($user_cellphone) || empty($user_binance_link) || empty($user_royal_link)) {
            $_SESSION['message_addUser'] = '<div class="alert alert-danger">Completa todos los campos</div>';
            include './view-addUser.php';
        exit;
        }
        // Send data to the model
       $regOutcome = registerUser($user_firstName, $user_lastName, $user_cellphone, $user_binance_link, $user_royal_link);


        // Check if result is successfull
       if($regOutcome === 1){
            $_SESSION['message_addUser'] = '<div class="alert alert-success">Se agregó '. $user_firstName .' a tu lista</div>';
            include './view-addUser.php';
        }
        else {
            $_SESSION['message_addUser'] = '<div class="alert alert-danger">No se pudo agregar a'. $user_firstName .'</div>';
            include './view-addUser.php';
        }
    
        break;
    case 'edit':
        $user_id = filter_input(INPUT_GET, 'user_id', FILTER_SANITIZE_STRING);
        $user_info = getUserInfo($user_id);
        include './view-editUser.php';
        break;
    case 'editUser':
        $user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_NUMBER_INT);
        $user_firstName = filter_input(INPUT_POST, 'user_firstName', FILTER_SANITIZE_STRING);
        $user_lastName = filter_input(INPUT_POST, 'user_lastName', FILTER_SANITIZE_STRING);
        $user_cellphone = filter_input(INPUT_POST, 'user_cellphone', FILTER_SANITIZE_STRING);
        $user_binance_link = filter_input(INPUT_POST, 'user_binance_link', FILTER_SANITIZE_STRING);
        $user_royal_link = filter_input(INPUT_POST, 'user_royal_link', FILTER_SANITIZE_STRING);
        // Check for missing data
        if (empty($user_firstName) || empty($user_lastName) || empty($user_cellphone) || empty($user_binance_link) || empty($user_royal_link) ) {
            $_SESSION['message_addUser'] = '<div class="alert alert-danger">Completa todos los campos</div>';
            include './view-editUser.php';
            exit;
            }
        // send data to the model
        $regOutcome = updateUser($user_id, $user_firstName, $user_lastName, $user_cellphone, $user_binance_link, $user_royal_link );
        // Check if deletion is successfull
        if($regOutcome === 1){
            $users_list = getUsersList();
            $_SESSION['message_addUser'] = '<div class="alert alert-success">El usuario '. $user_firstName .' ha sido actualizado</div>';
            header("location:./index.php?action=account");
        }
        break;
    case 'delete':
        $user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
        $regOutcome = deleteUser($user_id);
        // Check if deletion is successfull
        if($regOutcome === 1){
            $users_list = getUsersList();
            header("location:./index.php?action=account");
        }
        break;
    
    case 'contact':
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
        $selected_email = filter_input(INPUT_POST, 'selected_email', FILTER_SANITIZE_STRING);
        $email_from = "Sitio Web";
        $email_subject = "Consulta de ".$name;
        $email_body = "Nombre: $name.\n\n";
        $email_body .="Telefono: $phone \r\n";
        "Email: $email.\n".
        "Mensaje: $message.\n"; 
        $to = "consultas@royalq-mundial.com";
        $headers = "De: $email_from \r\n";
        $headers.= "Responder a: $email \r\n";
        mail($to, $email_subject, $email_body, $headers);
        include "./view-thankYou.php";
        break;
    case 'activate':
        $user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
        $current_user_id = "";
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
                $_SESSION['message_addUser'] = '<div class="alert alert-success text-center">El usuario ha sido activado</div>';
                header("location:./index.php?action=account");
            }
        }
        break;
    case 'template':
        include "./view-template.php";
        break;
    case 'tutorials':
        include "./view-tutorials.php";
        break;
    
    default:
        // register new admin

        // $cl_username="gaby1234";
        // $cl_password="Gabriel.3030";
        // $hashedPassword = password_hash($cl_password, PASSWORD_DEFAULT);
        // regClient($cl_username, $hashedPassword );
        
        // Get users list and check

        $users_list = getUsersList();
        $active_user ="";
        foreach($users_list as $key => $user){
            if($user['user_status'] === "1" ){
                $active_user = $user;
            }
        }
        include './view-home.php';
        break;
}

?>