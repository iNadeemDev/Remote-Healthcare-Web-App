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
        $doc_id = $_POST['dr_id'];

        
        $spec = $_POST['speciality'];
        $exp = $_POST['experience'];
        $desc = $_POST['description'];

        $datetime = date("Y-m-d H:i:s");
        $type = 'Doctor';

        
        $userQry = mysqli_query($con, "SELECT User_ID FROM doctors WHERE ID= '$doc_id'");
        $userRes = mysqli_fetch_assoc($userQry);
        $user_id = $userRes['User_ID'];

        $usernameQry = mysqli_query($con, "SELECT Username FROM users WHERE ID= '$user_id'");
        $usernameRes = mysqli_fetch_assoc($usernameQry);
        $username = $usernameRes['Username'];


            // $sql = "INSERT INTO `users`(`Name`,`Username`,`Email`,`Phone`, `Gender`, `Password`, `Age`, `Date`, `Type`, `Address`) VALUES ('$name', '$username', '$email', '$phone', '$gender', '$pass','$age', '$datetime', '$type', '$address') ";
            $sql = "UPDATE users SET `Name` = '$name', `UserName` = '$new_username',`Email`='$email', `Phone` = '$phone', `Gender`='$gender',`Password`='$pass', `Age`='$age', `Date`='$datetime',`Address`='$address' WHERE ID = '$user_id'";
            if($con->query($sql) == true){
                //$drQry = "INSERT INTO doctors (`User_ID` , `Spec_ID` , `Experience` , `Description`) VALUES ('$User_ID' ,'$spec', '$exp', '$desc')";
                $drQry = "UPDATE doctors SET `Spec_ID`='$spec', `Experience`='$exp',  `Description`='$desc' WHERE ID='$doc_id'";
                if($con->query($drQry) == true){
                    header("location: index.php");
                }
            }


    }
?>