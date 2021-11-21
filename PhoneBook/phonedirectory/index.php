<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    if (!$conn) {
        die("Connection failed".$conn->connect_error);
    }
    else {
        echo "Successfully submitted";
    }
    
    
?>