<?php

    include "connection.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $new_username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $pass = $_POST['password'];
        $age = $_POST['age'];
        $ph_id = $_POST['ph_id'];

        $datetime = date("Y-m-d H:i:s");
        $type = 'Pharmacist';

        
        $userQry = mysqli_query($con, "SELECT ID FROM users WHERE ID= '$ph_id'");
        $userRes = mysqli_fetch_assoc($userQry);
        $user_id = $userRes['ID'];
        $usernameQry = mysqli_query($con, "SELECT Username FROM users WHERE ID= '$user_id'");
        $usernameRes = mysqli_fetch_assoc($usernameQry);
        $username = $usernameRes['Username'];

        $sql = "UPDATE users SET `Name` = '$name', `UserName` = '$new_username',`Email`='$email', `Phone` = '$phone', `Gender`='$gender',`Password`='$pass', `Age`='$age', `Date`='$datetime',`Address`='$address' WHERE ID = '$user_id'";
        if($con->query($sql) == true){
            header("location: index.php");
        }

    }
?>