<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed".$conn->connect_error);
    }
    else {
        // echo "Successfully connected";
    }

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $nickname = $_POST['nickname'];
    $mobileno = $_POST['mobileno'];
    $workno = $_POST['workno'];
    $email = $_POST['email'];
    $hstreet = $_POST['hstreet'];
    $hcity = $_POST['hcity'];
    $hstate = $_POST['hstate'];
    $hcountry = $_POST['hcountry'];
    $hpostcode = $_POST['hpostcode'];
    $wstreet = $_POST['wstreet'];
    $wcity = $_POST['wcity'];
    $wstate = $_POST['wstate'];
    $wcountry = $_POST['wcountry'];
    $wpostcode = $_POST['wpostcode'];
    $birthday = $_POST['birthday'];
    $anniversary = $_POST['anniversary'];



    $sql = "INSERT INTO `phonebook`.`contactdetails` (`firstname`, `middlename`, `lastname`, `nickname`, `mobileno`, `workno`, `email`, `hstreet`, `hcity`, `hstate`, `hcountry`, `hpostcode`, `wstreet`, `wcity`, `wstate`, `wcountry`, `wpostcode`, `birthday`, `anniversary`) VALUES ('$firstname', '$middlename', '$lastname', '$nickname', '$mobileno', '$workno', '$email', '$hstreet', '$hcity', '$hstate', '$hcountry', '$hpostcode', '$wstreet', '$wcity', '$wstate', '$wcountry', '$wpostcode', '$birthday', '$anniversary');";

    // echo $sql;    

    if ($conn->query($sql) == true) {
        // echo "Succefully inserted";
        header("Location: ../index.html");
    }
    else {
        echo "Error $sql <br> $conn->error";
    }

    $conn->close();

?>

