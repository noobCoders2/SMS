<?php
include('function.php');
include('routes.php');

$servername =  "localhost";
$username = "root";
$password = "";
$dbname = "school_management_system";

//connection
try{
    $conn = mysqli_connect($servername,
                        $username,
                        $password,
                        $dbname);

    // testing kung connected ---Success naman---
    // if($conn){ 
    //     echo "connected successfully";
    //     dd($conn);
    // }

    if($conn->connect_error){
        error_log("Connection Failed $conn->connect_error");
        dd($conn->connect_error);
    }   
}catch(Exception $e){
    error_log("Database connection exception:" . $e->getMessage());
    dd($e->getMessage());
}

$sql  = "CREATE DATABASE IF NOT EXISTS $dbname";

if($conn->query($sql) === TRUE){
    echo "Database created successfully";
}else{
    dd($conn->error);
}


$conn->close();



?>
