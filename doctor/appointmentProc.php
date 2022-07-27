<?php
include '../connection.php';
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $appt_id = $_GET['appt_id'];
    $status = $_GET['status'];
    $statusQry = "UPDATE appointments SET Status='$status' WHERE Appt_ID = '$appt_id'";
    if($con->query($statusQry) == true){
        header("location: appointments.php");
    }
    else{
        echo "Something went wrong";
    }
}
else if($_SERVER["REQUEST_METHOD"] == "POST"){
    $msg = $_POST['message'];

    $drmessage = $con->prepare("INSERT INTO appointments (`CartID` , `MedicineID` , `Quantity`) VALUES (?,?,?)");
    $drmessage->bind_param("isi", $cartid , $med_id , $quantity);
    $drmessage->execute();
}

?>