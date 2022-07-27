<?php
    include 'connection.php';

    $email = $_POST['email'];
    $datetime = date("Y-m-d H:i:s");
    
    $newsletter = $con->prepare ("INSERT INTO newsletters (email , date_added) VALUES (?,?)");
    $newsletter -> bind_param("ss", $email, $datetime);
    $newsletter->execute();

    
    $newsletter->close();
	$con->close();
    header("location: index.php");

?>