<?php
include "../connection.php";
if($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "post")
{
    session_start();
    $id = $_SESSION['id'];
    $check_date =  $_POST['date'];
    $check_time = $_POST["time"];
    $doctor_id = $_POST["doctor"];
    $msg = $_POST['message'];
    $status = 0;

    $appt_add = $con->prepare("INSERT INTO appointments (`checkup_date` , `checkup_time` , `CustomerID` , `Dr_ID` , `Status` , `Cust_Msg`) VALUES (?,?,?,?,?,?)");
    $appt_add->bind_param("ssiiis", $check_date, $check_time, $id, $doctor_id, $status, $msg);
    $appt_add->execute();

    header("location: appointments.php");
}
else{
    echo "Warning! you are trying something wrong.";
}
?>