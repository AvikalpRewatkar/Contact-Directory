<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    if ($conn){
        die("Connection to this database failed due to ".mysqli_connect_error());
    }
    echo "Success connecting to DataBase";
    
?>