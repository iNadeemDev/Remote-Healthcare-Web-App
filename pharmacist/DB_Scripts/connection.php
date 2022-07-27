<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "alfacare";

    $con = new mysqli($server, $user, $pass, $db);

    if($con->connect_error) {
        die("connection failed!".$con->connect_error);
    }
?>