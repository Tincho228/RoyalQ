<?php
/*
* Proxy connection to the phpmotors database
*/ 
function gdConnect(){
    $server = 'localhost';
    $dbname= 'gdeportivas'; // ganancia_gdeportivas
    $username = 'iClient'; // ganancia_iClient
    $password = 'Y(1.XJx4rpl/3i/H';
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