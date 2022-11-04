<?php
    $server_name = "localhost";
    $database_name = "school-data";
    $user_name = "root";
    $password = "";

    $conn = mysqli_connect($server_name, $user_name, $password, $database_name);
    if ($conn){
        //echo "database connection successfully";
    }else{
        die("connection failed: " . mysqli_connect_error());
    }
?>