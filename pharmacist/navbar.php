<?php
	include '../connection.php';
	// Initialize session
	session_start();
    $id = $_SESSION["id"];

	if ($_SESSION["loggedin"] !== true) {
		header('location: ../login.php');
		exit;
	}
?>

<div class="header-text">
	<span class="noselect">🌡 Pharmacy Management System 🌡</span>
</div>