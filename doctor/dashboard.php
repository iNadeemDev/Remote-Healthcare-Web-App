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
					<div class="dashboard container">


						<div class="row text-center justify-content-between">

							<div class="col-sm-12 col-lg-6">
								<div class="dashboard-card color-bg-mixed mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="far fa-calendar-check"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Appointments</h5>
										</div>
										<div class="card-title">View all your appointments details in one place!</div>
										<a href="appointments.php" class="btn btn-info m-1">View Now</a>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-lg-6">
								<div class="dashboard-card color-bg-green mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-laptop-medical"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Patients</h5>
										</div>
										<div class="card-title">View all your patients details here</div>
										<a href="bookappointment.php" class="btn btn-info m-1">View Now</a>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-lg-6">
								<div class="dashboard-card color-bg-blue-green mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-hospital-user"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Specialities</h5>
										</div>
										<div class="card-title">You can see your profile details here</div>
										<a href="specialities.php" class="btn btn-info m-1">View Profile</a>
									</div>
								</div>
							</div>

							<div class="col-sm-12 col-lg-6">
								<div class="dashboard-card color-bg-rainbow mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-user-circle"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">My Profile</h5>
										</div>
										<div class="card-title">You can see your profile details here</div>
										<a href="specialities.php" class="btn btn-info m-1">View Profile</a>
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