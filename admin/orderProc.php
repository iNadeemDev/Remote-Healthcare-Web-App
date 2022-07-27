<?php
include 'connection.php';
$cartID = $_GET['order_id'];
$status = $_GET['status'];
echo $cartID;
echo '<br>';
echo $status;

// $updateStatus = "UPDATE cart SET Paid = '$status' WHERE ID = '$cartID'";
// if($con->query($updateStatus) == true){
//     header("location: orders.php");
// }
// else{
//     echo "Something went wrong";
// }
?>