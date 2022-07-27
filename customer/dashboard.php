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
<title>Dashboard</title>
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
					<div class="dashboard">

						<div class="row text-center justify-content-between">

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-cherry mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-laptop-medical"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Book Consultation</h5>
										</div>
										<div class="card-title">Book a Consultation as per your convenience!</div>
										<a href="bookappointment.php" class="btn btn-info m-1">Book Now</a>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-mixed mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="far fa-calendar-check"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">My Appointments</h5>
										</div>
										<div class="card-title">View all your appointments details in one place!</div>
										<a href="appointments.php" class="btn btn-info m-1">View Now</a>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-red-blue mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-shopping-cart"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Order Medicines</h5>
										</div>
										<div class="card-title">How about the pharmacy coming to your doorstep?</div>
										<a href="e-shop.php" class="btn btn-info m-1">Order Now</a>
									</div>
								</div>
							</div>
							

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-orange mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-user-md"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Doctors</h5>
										</div>
										<div class="card-title">Book a Consultation as per your convenience!</div>
										<a href="doctors.php" class="btn btn-info m-1">View Doctors</a>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-cyan mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-hospital-user"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Specialities</h5>
										</div>
										<div class="card-title">Lorem ipsum, dolor sit amet adipisicing elit.</div>
										<a href="specialities.php" class="btn btn-info m-1">View Specialities</a>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-green-dark mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-shield-virus"></i>
										</div>
										<div class="mb-4">
											<h5 class="packages.php">Health Plans</h5>
										</div>
										<div class="card-title">Subscribe to best suited health plan!</div>
										<a href="#appointments" class="btn btn-info m-1">Subscribe Now</a>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-blue-dark mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-address-card"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">My Vitals</h5>
										</div>
										<div class="card-title">Your can see and update your health vitals here!</div>
										<a href="vitals.php" class="btn btn-info m-1">View Now</a>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-blue-green mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-user-cog"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">My Profile</h5>
										</div>
										<div class="card-title">Your profile and settings are here!</div>
										<a href="profile.php" class="btn btn-info m-1">View Now</a>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-rainbow mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-shopping-cart"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Book Consultation</h5>
										</div>
										<div class="card-title">Book a Consultation as per your convenience!</div>
										<a href="consultation.php" class="btn btn-info m-1">Book Now</a>
									</div>
								</div>
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