<?php
    include 'connection.php';

    $user_ID = $_GET['sp_id'];
    $sql = "DELETE FROM specialities WHERE ID = '$user_ID'";
    if($con->query($sql) == true) {
        header("location: index.php");
    }
?>
