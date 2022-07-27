<?php
    include 'connection.php';

    $user_ID = $_GET['dr_id'];
    $sql = "DELETE FROM users WHERE ID = '$user_ID'";
    if($con->query($sql) == true) {
        header("location: index.php");
    }
?>
