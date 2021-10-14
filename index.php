<?php

/*********************************
  
    THIS IS THE MAIN CONTROLLER

**********************************/

// Create or access a Session
session_start();



// Get the database connection file
//require_once 'shared/db-connection.php';
//require_once 'shared/helper-functions.php';


$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

// Check if the firstname cookie exists, get its value

switch ($action){
    case 'template':
    include "./views/template.php";
    break;
     
    default:
    echo "nada pasa";
    include "./views/home.php";
    break;
 }
 ?>