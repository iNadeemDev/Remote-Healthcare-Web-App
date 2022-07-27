<!-- -->
<?php
$id=4;
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS -->
	<link rel="stylesheet" href="Styles/style.css">
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
		<?php include('topbar.php') ?>
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
											<h5 class="card-title">See Appointments</h5>
										</div>
										<div class="card-title">See all Appointments of Customers here!</div>
										<a href="appointments.php" class="btn btn-info m-1">See Now</a>
									</div>
								</div>
							</div>


							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-cyan mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-user-md"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Doctors</h5>
										</div>
										<div class="card-title">View all Doctor here</div>
										<a href="showDoctor.php" class="btn btn-info m-1">View Now</a>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-orange mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-medkit"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Pharmacists</h5>
										</div>
										<div class="card-title">View all Pharmacists</div>
										<a href="showPharma.php" class="btn btn-info m-1">View Now</a>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-blue-green mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-user"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Customers</h5>
										</div>
										<div class="card-title">View all Customers here</div>
										<a href="Customers.php" class="btn btn-info m-1">View Now</a>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-red-blue mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-cart-plus"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Sales</h5>
										</div>
										<div class="card-title">View all sales here</div>
										<a href="sales.php" class="btn btn-info m-1">View Now</a>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-lg-4">
								<div class="dashboard-card color-bg-green mb-4">
									<div class="card-statistic-3 py-5">
										<div class="card-icon">
											<i class="fas fa-cart-arrow-down"></i>
										</div>
										<div class="mb-4">
											<h5 class="card-title">Specialities</h5>
										</div>
										<div class="card-title">View all Specialities here</div>
										<a href="showSpeciality.php" class="btn btn-info m-1">View Now</a>
									</div>
								</div>
							</div>
							
						</div>




					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>

	<?php include('sections/script.php') ?>

</body>

</html>