<?php
	include '../connection.php';
	// Initialize session
	session_start();
	if ($_SESSION["loggedin"] !== true) {
		header('location: ../login.php');
		exit;
	}
    $id = $_SESSION["id"];
	$dr_id = $_SESSION["dr_id"];


	$dateToday = date("Y-m-d");
	$timeNow = date("H:i:s");
	$result = mysqli_query($con, "SELECT count(*) as count FROM users
	INNER JOIN doctors ON users.ID = doctors.User_ID
	INNER JOIN appointments ON doctors.ID = appointments.Dr_ID
	WHERE doctors.ID = '$id' AND (checkup_date > '$dateToday' OR ( checkup_date = '$dateToday' AND checkup_time > '$timeNow'))");

	$row = mysqli_fetch_array($result);
	$total = $row['count'];
?>

<div class="bg-info topbar">
	<div class="d-inline-block">
		<i class="fab fa-medrt right_items"></i>
		<h1 class="title right_items">ALFACARE</h1>
	</div>
	<div class="d-inline-block">
		<a href="appointments.php">
			<div class="d-inline-block left_items">
				<i class="far fa-calendar-check"></i>
				<a href="appointments.php"><span class="cart">Appointments</span></a>
				<span class="items"><?php echo $total ?></span>

			</div>
		</a>
		<a href="#msgs">
			<div class="d-inline-block left_items">
				<i class="fas fa-comment-dots"></i>
				<span>Messages</span>
			</div>
		</a>
		<div class="d-inline-block">
			<a href="profile.php"><img class="profile-img" style="border-radius: 50%; width: 40px; hieght: 40px" src="images/user.png" alt="user"></a>
		</div>
	</div>
	
</div>