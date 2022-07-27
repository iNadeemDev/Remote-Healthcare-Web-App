<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS -->
	<link rel="stylesheet" href="Styles/style.min.css">
	<!-- JQuery -->
	<script src="JQuery/jquery.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- Title -->
<title>Profile</title>
</head>

<body>


	<!-- Put Navbar Here! -->
	<div>
		<?php include('sections/topbar.php') ?>
	</div>

	<div class="main-flex">

		<div class="content-main">

			<div class="sidebar-container">
				<?php include('sections/sidebar.php') ?>

				<!-- DASHBOARD CONTENT HERE -->
				<div class="sidebar-content">
					<div class="profile container">
						<hr>
						<h2 class="text-center">My Profile</h2>
						<hr>

						<?php
							$customerInfo = mysqli_query($con,"SELECT * FROM users WHERE ID='$id'");
							$resultInfo = mysqli_fetch_assoc($customerInfo);
						?>
						
						<div class="row">
							<div class="profile-img col-sm-12 col-md-4 mx-sm-auto mb-2">
								<img src="https://source.unsplash.com/300x300?laptop" width="250" height="250" alt="user-default image">
							</div>
							<div class="profile-info col-sm-12 col-md-8">
								<h3><?php echo $resultInfo['Name'] ?></h3>
								<div>
									<i class="fas fa-user-tag me-3"></i><span><?php echo $resultInfo['Username'] ?></span>
								</div>

								<br>

								<div>
									<i class="fas fa-fingerprint me-3"></i><span><?php echo $resultInfo['ID'] ?></span>
								</div>

								<br>

								<div>
									<i class="fas fa-at me-3"></i><span><?php echo $resultInfo['Email'] ?></span>
								</div>

								<br>

								<div>
									<i class="fas fa-phone-square-alt me-3"></i></i><span><?php echo $resultInfo['Phone'] ?></span>
								</div>

								<br>

								<?php
									if($resultInfo['Gender'] == 'Male' || $resultInfo['Gender'] == 'male'){
										echo "<div><i class='fas fa-male me-4'></i></i><span>".$resultInfo['Gender']."</span></div>";
									}
									else{
										echo "<div><i class='fas fa-female me-3'></i></i><span>".$resultInfo['Gender']."</span></div>";
									}
								?>

								
							</div>
						</div>

						<hr>

						<h2 class="text-center">Health Vitals</h2>

						<?php
							$vitalsQry = mysqli_query($con, "SELECT * FROM vitals WHERE vital_id='$id'");
							$vitalRes = mysqli_fetch_assoc($vitalsQry);
						?>

						<hr>

						<div class="row">
							<div class="col-4">
								<p>Age</p>
								<div>
									<i class="fas fa-calendar me-3"></i><span><?php echo $vitalRes['age'] ?>  Years</span>
								</div>

								<hr>
								
								<p>Height</p>
								<div>
									<i class="fas fa-arrows-alt-v me-3"></i><span><?php echo $vitalRes['height'] ?> Inches</span>
								</div>

								<hr>

								<p>Weight</p>
								<div>
									<i class="fas fa-weight me-3"></i><span><?php echo $vitalRes['weight'] ?> Kg</span>
								</div>

								<hr>

								<p>Pulse Rate</p>
								<div>
								<i class="fas fa-heartbeat me-3"></i><span><?php echo $vitalRes['pulse_rate'] ?> pulses per minute</span>
								</div>

								<hr>

							</div>

							<div class="col-4">
								<p>Temperature</p>
								<div>
									<i class="fas fa-temperature-high me-3"></i><span><?php echo $vitalRes['temperature'] ?> <sup>o</sup>F</span>
								</div>


								<hr>

								<p>BMI</p>
								<div>
									<i class="fas fa-universal-access me-3"></i><span><?php echo $vitalRes['bmi'] ?></span>
								</div>


								<hr>

								<p>BP Up</p>
								<div>
									<i class="fas fa-arrow-alt-circle-up me-3"></i><span><?php echo $vitalRes['bp_up'] ?></span>
								</div>


								<hr>

								<p>BP Low</p>
								<div>
									<i class="fas fa-arrow-alt-circle-down me-3"></i><span><?php echo $vitalRes['bp_low'] ?></span>
								</div>

								<hr>
							</div>

							<div class="col-4 ms-0">
								<img src="images/health_vitals.svg" alt="vitals health" width="400" height="400">
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Including scripts for bootstrap and custom scripts  -->
	<?php include('sections/scripts.php') ?>

</body>

</html>