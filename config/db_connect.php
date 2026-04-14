<?php


/*
=====================================
CONNECT TO MYSQL
=====================================
*/
$servername =  "localhost";
$username = "root";
$password = "";
$dbname = "school_management_system";

//connection
try{
    $conn = new mysqli($servername, $username, $password, $dbname);

    // testing kung connected ---Success naman---
    // if($conn){ 
    //     echo "connected successfully";
    //     dd($conn);
    // }

    if($conn->connect_error){
        error_log("Connection Failed: " . $conn->connect_error);
        die("Connection Failed Please Contact Developer");
    }   
}catch(Exception $e){
    error_log("Database connection exception: " . $e->getMessage());
    die("Database connection exception:" . $e->getMessage());
}


$sql  = "CREATE DATABASE IF NOT EXISTS $dbname";

if($conn->query($sql) === TRUE){
    echo "Database created successfully";
}else{
    die("Database creation failed");
}

?>