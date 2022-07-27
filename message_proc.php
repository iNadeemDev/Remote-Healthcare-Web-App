<?php

include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$datetime = date('Y-m-d H:i:s');

$messageSql = $con->prepare("INSERT INTO messages (`name` , `email` , `phone` , `message` , `date_added`) VALUES (?,?,?,?,?)");
$messageSql->bind_param("sssss", $name,$email,$phone,$message,$datetime);
$messageSql->execute();

$messageSql->close();
$con->close();

?>