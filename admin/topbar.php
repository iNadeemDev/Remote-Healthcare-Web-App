<?php
	include 'connection.php';
	// // Initialize session
	session_start();
    $id = $_SESSION["id"];

	if ($_SESSION["loggedin"] !== true) {
		header('location: ../login.php');
		exit;
	}
?>

<div class="bg-info topbar">
	<div class="d-inline-block">
		<i class="fab fa-medrt right_items"></i>
		<h1 class="title right_items">ALFACARE</h1>
	</div>
	<div class="d-inline-block">
		<a href="Orders.php" style="color: #fff">
			<div class="d-inline-block left_items">
				<i class="fas fa-cart-arrow-down"></i>
				<a href="orders.php" style="color: #fff"><span class="cart">Orders</span></a>

			</div>
		</a>
		<!-- <a href="#msgs">
			<div class="d-inline-block left_items">
				<i class="fas fa-comment-dots"></i>
				<span>Messages</span>
			</div>
		</a> -->
		<div class="d-inline-block ms-4">
			<a href="profile.php"><img class="profile-img" style="border-radius: 50%; width: 40px; hieght: 40px" src="images/user.png" alt="user"></a>
		</div>
	</div>
	
</div>