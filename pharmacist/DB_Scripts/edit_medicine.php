<?php

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = $con->real_escape_string($_POST["edit-id"]);
	$name = $con->real_escape_string($_POST["edit-name"]);
	$type = $con->real_escape_string($_POST["edit-type"]);
	$price = $con->real_escape_string($_POST["edit-price"]);
	$stock = $con->real_escape_string($_POST["edit-stock"]);
	$exp = $con->real_escape_string($_POST["edit-exp"]);
	$desc = $con->real_escape_string($_POST["edit-desc"]);
	$expDate = date("Y-m-d", strtotime($exp));

	$sql = "UPDATE `medicines` SET 
		`Name`='$name', `Type`='$type', `Stock`='$stock', `Price`='$price', `ExpiryDate` ='$expDate', `Description`='$desc'
		WHERE id=$id";

	if ($con->query($sql) == true) {
		echo   "Medicine edited successfully!";
		header("location: ../index.php");
	} else {
		echo "An error occured!";
	}
}
