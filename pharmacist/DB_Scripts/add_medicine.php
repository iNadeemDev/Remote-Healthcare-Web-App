<?php

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $con->real_escape_string($_POST["add-name"]);
	$type = $con->real_escape_string($_POST["add-type"]);
	$price = $con->real_escape_string($_POST["add-price"]);
	$stock = $con->real_escape_string($_POST["add-stock"]);
	$exp = $con->real_escape_string($_POST["add-exp"]);
	$desc = $con->real_escape_string($_POST["add-desc"]);
	$expDate = date("Y-m-d", strtotime($exp));

	$sql = "INSERT INTO medicines ( `Name`, `Type`, `Stock`, `Price`, `ExpiryDate`, `Description`) 
			VALUES ('$name', '$type', '$stock', '$price', '$expDate', '$desc')";

	if ($con->query($sql) == true) {
		echo   "Medicine added successfully!";
		header("location: ../index.php");
	} else {
		echo "An error occured!";
	}
}
?>