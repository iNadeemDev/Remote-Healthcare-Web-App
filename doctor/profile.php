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
							$customerInfo = mysqli_query($con,"SELECT users.Name, users.Username,doctors.ID, users.Email, users.Phone, users.Age, users.Gender, users.Address, specialities.Title, doctors.Experience, doctors.Description FROM users
							INNER JOIN doctors ON users.ID = doctors.User_ID
							INNER JOIN specialities ON doctors.Spec_ID = specialities.ID
							WHERE doctors.ID = '$dr_id'");
							$resultInfo = mysqli_fetch_assoc($customerInfo);
						?>
						
						<div class="row">
							<div class="profile-img col-sm-12 col-md-6 mx-sm-auto mb-2">
								<img src="https://source.unsplash.com/300x300?hospital" width="250" height="250" alt="user-default image">
							</div>
							<div class="profile-info col-sm-12 col-md-6">
								<h3 class="mb-4"><?php echo $resultInfo['Name'] ?></h3>

								<div class="row">
									<div class="col-sm-12 col-lg-6">
									<p>Username</p>
								<div>
									<i class="fas fa-user-tag me-3"></i><span><?php echo $resultInfo['Username'] ?></span>
								</div>

								<hr>

								<p>Doctor ID</p>
								<div>
									<i class="fas fa-fingerprint me-3"></i><span><?php echo $resultInfo['ID'] ?></span>
								</div>

								<hr>

								<p>Email</p>
								<div>
									<i class="fas fa-at me-3"></i><span><?php echo $resultInfo['Email'] ?></span>
								</div>

								<hr>

								<p>Phone</p>
								<div>
									<i class="fas fa-phone-square-alt me-3"></i><span><?php echo $resultInfo['Phone'] ?></span>
								</div>

								<hr>

								<p>Age</p>
								<div>
									<i class="fas fa-user-clock me-3"></i><span><?php echo $resultInfo['Age'] ?></span>
								</div>

								<hr>

									</div>



									<div class="col-sm-12 col-lg-6">
									<p>Gender</p>
								<div>
									<?php
										if($resultInfo['Gender'] == 'Male' || $resultInfo['Gender'] == 'male'){
											echo "<i class='fas fa-male me-4'></i></i><span>".$resultInfo['Gender']."</span>";
										}
										else{
											echo "<i class='fas fa-female me-3'></i></i><span>".$resultInfo['Gender']."</span>";
										}
									?>
								</div>

								<hr>

								<p>Address</p>
								<div>
									<i class="fas fa-map-marker-alt me-3"></i><span><?php echo $resultInfo['Address'] ?></span>
								</div>

								<hr>

								<p>Speciality</p>
								<div>
									<i class="fas fa-hospital-user me-3"></i><span><?php echo $resultInfo['Title'] ?></span>
								</div>

								<hr>

								<p>Experience</p>
								<div>
									<i class="fas fa-user-tie me-3"></i><span><?php echo $resultInfo['Experience'] ?></span>
								</div>

								<hr>

								<p>Summary</p>
								<div>
									<i class="fas fa-user-tie me-3"></i><span><?php echo $resultInfo['Description'] ?></span>
								</div>

								<hr>
									</div>
								</div>
								

								

								
							</div>
						</div>

						<hr>

					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Including scripts for bootstrap and custom scripts  -->
	<?php include('sections/scripts.php') ?>

</body>

</html>