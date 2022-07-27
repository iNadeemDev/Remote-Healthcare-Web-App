<?php
    include '../connection.php';
    session_start();
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $pulse = $_POST['pulse'];
    $bmi = $_POST['bmi'];
    $temperature = $_POST['temperature'];
    $bp_up = $_POST['bp_up'];
    $bp_down = $_POST['bp_down'];
    $id = $_SESSION['id'];

    $insert_update_vitals = "INSERT INTO vitals (`CustomerID`,`age`, `height`, `weight`, `pulse_rate`, `bmi`, `temperature`, `bp_up`, `bp_low`) VALUES('$id','$age', '$height', '$weight', '$pulse', '$bmi', '$temperature', '$bp_up', '$bp_down') ON DUPLICATE KEY UPDATE 
    `age` = '$age',
    `height` = '$height',
    `weight` = '$weight',
    `pulse_rate` = '$pulse',
    `bmi` = '$bmi',
    `temperature` = '$temperature',
    `bp_up` = '$bp_up',
    `bp_low` = '$bp_down'";

    if($con->query($insert_update_vitals) == true){
        header("location: vitals.php");
    }
    else{
        echo "Error in updating the vitals" . mysqli_error($con);
    }
?>