<?php

// Insert a new administrator
function regClient($cl_username, $cl_password ){
    $db = gdConnect();
    $sql = 'INSERT INTO clients (cl_username, cl_password )
        VALUES (:cl_username, :cl_password )';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    //  Binding values
    $stmt->bindValue(':cl_username', $cl_username, PDO::PARAM_STR);
    $stmt->bindValue(':cl_password', $cl_password, PDO::PARAM_STR);
    
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}
// Update admin information
function updateAdmin($cl_id, $cl_username){
    $db = gdConnect();
    // The SQL statement
    $sql = 'UPDATE clients SET cl_username = :cl_username WHERE cl_id = :cl_id';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':cl_id', $cl_id, PDO::PARAM_INT);  
    $stmt->bindValue(':cl_username', $cl_username, PDO::PARAM_STR); 
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}
// update password 
function updatePassword($cl_id, $cl_password){
    $db = gdConnect();
    // The SQL statement
    $sql = 'UPDATE clients SET cl_password = :cl_password WHERE cl_id = :cl_id';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':cl_id', $cl_id, PDO::PARAM_INT);  
    $stmt->bindValue(':cl_password', $cl_password, PDO::PARAM_STR); 
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}
// Insert a new user
function registerUser($user_firstName, $user_lastName, $user_cellphone, $user_binance_link, $user_royal_link){
    $db = gdConnect();
    $sql = 'INSERT INTO users (user_firstName, user_lastName, user_cellphone, user_binance_link, user_royal_link )
        VALUES (:user_firstName, :user_lastName, :user_cellphone, :user_binance_link, :user_royal_link)';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    //  Binding values
    $stmt->bindValue(':user_firstName', $user_firstName, PDO::PARAM_STR);
    $stmt->bindValue(':user_lastName', $user_lastName, PDO::PARAM_STR);
    $stmt->bindValue(':user_cellphone', $user_cellphone, PDO::PARAM_STR);
    $stmt->bindValue(':user_binance_link', $user_binance_link, PDO::PARAM_STR);
    $stmt->bindValue(':user_royal_link', $user_royal_link, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}
// Get client information by client username
function getClientInformation($cl_username){
    // Create a connection object using the phpmotors connection function
    $db = gdConnect();
    // The SQL statement
    $sql = 'SELECT cl_id, cl_username, cl_password  FROM clients WHERE cl_username = :cl_username';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':cl_username', $cl_username, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // We expect a single record to be returned, thus the use of the fetch() method.
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
    // Close the database interaction
    $stmt->closeCursor();
    return $clientData;
}
function getUsersList(){
    // Create a connection object using the phpmotors connection function
    $db = gdConnect();
    // The SQL statement
    $sql = 'SELECT * FROM users';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // Insert the data
    $stmt->execute();
    // We expect a single record to be returned, thus the use of the fetch() method.
    $clientData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Close the database interaction
    $stmt->closeCursor();
    return $clientData;
}
function deleteUser($user_id){
    // Delete a specific user
    $db = gdConnect();
    $sql = $sql = 'DELETE FROM users WHERE user_id = :user_id';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT); 
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}
function getUserInfo($user_id){
    // Create a connection object using the phpmotors connection function
    $db = gdConnect();
    // The SQL statement
    $sql = 'SELECT user_id, user_firstName, user_lastName, user_cellphone, user_link FROM users WHERE user_id = :user_id';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    // Insert the data
    $stmt->execute();
    // We expect a single record to be returned, thus the use of the fetch() method.
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
    // Close the database interaction
    $stmt->closeCursor();
    return $clientData;
}
function updateUser($user_id, $user_firstName, $user_lastName, $user_cellphone, $user_link){
    $db = gdConnect();
    // The SQL statement
    $sql = 'UPDATE users SET user_firstName = :user_firstName, user_lastName = :user_lastName, 
	user_cellphone = :user_cellphone, user_link = :user_link WHERE user_id = :user_id';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);  
    $stmt->bindValue(':user_firstName', $user_firstName, PDO::PARAM_STR); 
    $stmt->bindValue(':user_lastName', $user_lastName, PDO::PARAM_STR); 
    $stmt->bindValue(':user_cellphone', $user_cellphone, PDO::PARAM_STR); 
    $stmt->bindValue(':user_link', $user_link, PDO::PARAM_STR); 
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}
function deactivate_current_user($user_id){
    $db = gdConnect();
    // The SQL statement
    $sql = 'UPDATE users SET user_status = 0 WHERE user_id = :user_id';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);  
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}
function activate_new_user($user_id){
    $db = gdConnect();
    // The SQL statement
    $sql = 'UPDATE users SET user_status = 1 WHERE user_id = :user_id';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);  
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}
?>
