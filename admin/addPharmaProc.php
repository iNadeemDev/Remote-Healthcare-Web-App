<?php

    include "connection.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $pass = $_POST['password'];
        $age = $_POST['age'];
        $datetime = date("Y-m-d H:i:s");
        $type = 'Pharmacist';

        $existSql = "select * from users where username = '$username'";
        $results = mysqli_query($con, $existSql);
        $numRows = mysqli_num_rows($results);
        if($numRows > 0) {
            echo "User already exists!";
        }
        else {
            $sql = "INSERT INTO `users`(`Name`,`Username`,`Email`,`Phone`, `Gender`, `Password`, `Age`, `Date`, `Type`, `Address`) VALUES ('$name', '$username', '$email', '$phone', '$gender', '$pass','$age', '$datetime', '$type', '$address') ";

            if($con->query($sql) == true){
                header("location: index.php");
            }
        }
    }
?>