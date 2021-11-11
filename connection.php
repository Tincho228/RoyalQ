<?php
/*
* Proxy connection to the phpmotors database
*/ 
function gdConnect(){
    $server = 'localhost';
    $dbname= 'ganancia_gdeportivas'; // ganancia_gdeportivas
    //$dbname= 'ganancia_gdeportivas'; // ganancia_gdeportivas habilitar cuando se hace el link
    $username = 'ganancia_iClient'; 
    $password = 'tsIa0H=vd1f^';
    $dsn = 'mysql:host='.$server.';dbname='.$dbname;
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    // Create the actual connection object and assign it to a variable

    try {
     $link = new PDO($dsn, $username, $password, $options);
     return $link;
    } catch(PDOException $e) {
       echo "error de conexion";
     exit;
    }
   }
?>