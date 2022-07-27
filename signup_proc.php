<?php

    include 'connection.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "post")
    {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $type = "Customer";
        $address = $_POST["address"];
        $datetime = date("Y-m-d H:i:s");

        $existSql = "select * from users where username = '$username'";
        $results = mysqli_query($con, $existSql);
        $numRows = mysqli_num_rows($results);
        if($numRows > 0) {
            header("location: signup.php?status=1");
        }
        else if(($password == $cpassword)) {
                $sql = "INSERT INTO users( `Name`, `Username`, `Email`, `Phone`, `Age`, `Gender`, `Password`, `Date`, `Type`, `Address`) VALUES ('$name', '$username', '$email', '$phone', '$age', '$gender', '$password', '$datetime', 'customer', '$address')";
    
                if($con->query($sql) == true)
                {
                    echo "record added successfully.";
                    header("location: login.php");
                }
                else 
                {
                    echo "Password do not match or invalid username!";
                }
        }


        
    }
    else{
        echo "You are trying something wrong!";
    }
?>