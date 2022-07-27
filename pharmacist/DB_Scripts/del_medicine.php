<?php

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = $con->real_escape_string($_POST["del-id"]);

	$sql = "DELETE FROM `medicines` WHERE id=$id";

	if ($con->query($sql) == true) {
		echo   "Medicine deleted successfully!";
		header("location: ../index.php");
	} else {
		echo "An error occured!";
	}
}
?>