<?php

    include "connection.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['name'];
        $desc = $_POST['description'];
        
        $sql = "INSERT INTO `specialities`(`Title`,`Description`) VALUES ('$title', '$desc')";

        if($con->query($sql) == true){
                header("location: index.php");
        }
    }
?>