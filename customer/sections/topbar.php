<?php
	include '../connection.php';
	// Initialize session
	session_start();
    $id = $_SESSION["id"];

	if ($_SESSION["loggedin"] !== true) {
		header('location: ../login.php');
		exit;
	}
	$result = mysqli_query($con, "SELECT count(*) as count FROM users
	INNER JOIN cart ON users.ID = cart.CustomerID
	INNER JOIN cart_item ON cart.ID = cart_item.CartID
	WHERE cart.CustomerID=$id");

	$row = mysqli_fetch_array($result);
	$total = $row['count'];
?>

<div class="bg-info topbar">
	<div class="d-inline-block">
		<i class="fab fa-medrt right_items"></i>
		<h1 class="title right_items">ALFACARE</h1>
	</div>
	<div class="d-inline-block">
		<a href="#cart" style="color: #fff">
			<div class="d-inline-block left_items">
				<i class="fas fa-shopping-cart"></i>
				<a href="cart.php" style="color: #fff"><span class="cart">Cart</span></a>
				<span class="items"><?php echo $total ?></span>

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