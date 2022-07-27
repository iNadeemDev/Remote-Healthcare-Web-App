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
<title>Specialities</title>
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
					<div class="specialities container">
						<hr>
						<h1 class="text-center">Specialities</h1>
						<hr>
						<div class="row justify-content-between specialities">



							<?php
								$specialitiesQry = mysqli_query($con, "SELECT * FROM specialities");
								while($specialitiesRes = mysqli_fetch_array($specialitiesQry))
								{
							?>
							<div class="col-md-4 col-6 mb-2">
								<div class="card m-1">
									<img class="card-img-top"
										src="../images/specialities/<?php echo $specialitiesRes['Title']?>.jpg"
										alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title p-0 m-0">
											<?php echo $specialitiesRes['Title'] ?>
										</h5>
										<hr class="d-none d-sm-block">
										<p class="card-text d-none d-sm-block">
											<?php echo $specialitiesRes['Description'] ?>
										</p>
										<a href="#" class="btn text-white" style="background-color: #DFB57A;">More
											Info</a>
									</div>
								</div>
							</div>

							<?php } ?>

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