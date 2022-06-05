<?php
    include "config.php";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pasword = $_POST['pasword'];
    $city = $_POST['city'];
    $mysql = "INSERT INTO users(firstname,lastname,email,password,city) values ('$fname','$lname','$email','$pasword','$city')";

    if($conn->query($mysql)){
        header("location:list.php");
    }
    else{
        echo "Some error occured";
    }

?>