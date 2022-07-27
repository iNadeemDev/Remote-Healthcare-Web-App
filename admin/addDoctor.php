<!-- -->
<?php
include 'connection.php';
$id=1;
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

	<!-- Title -->
	<title>Dashboard</title>

	<style>
		.form-container {
			padding: 30px;
			background-color: white;
			border-radius: 5px;
		}

		.bg {
			background: url('bg4.jpg') no-repeat;
			width: 100%;
			height: 100%;
			background-size: cover;
		}

		.error {
			color: #FF0000;
		}

		.signup-main>div {
			display: flex;
			gap: 20px;
		}

		.signup-main>div>div {
			flex-basis: 100%;
		}

		@media only screen and (max-width:877px) {
			.login-area {
				opacity: 1;
			}

			.signup-main>div {
				display: block;
			}
		}
	</style>

</head>

<body>


	<!-- Put Navbar Here! -->
	<div>
		<?php include('topbar.php') ?>
	</div>

	<div class="main-flex">

		<div class="content-main">

			<div class="sidebar-container">

				<?php include('sections/sidebar.php')?>
				<!-- DASHBOARD CONTENT HERE -->
				<div class="sidebar-content bg">
					<div class="row gx-0 justify-content-center" style="margin: 0 2%;">
						<div class="login-area col-sm-12 col-md-6 col-lg-5 col-xl-5 col-xxl-4">
							<h2 class="text-white text-center m-3">Add Doctor</h2>
							<form action="addDocProc.php" method="POST" id="form" class="form-container">
								<div class="signup-main">
									<div>
										<div class="mb-3">
											<input type="text" class="form-control" id="name" name="name"
												placeholder="Name" required>
										</div>
										<div class="mb-3">
											<input type="text" class="form-control" id="username" name="username"
												placeholder="Username" required>
										</div>
									</div>
									<div>
										<div class="mb-3">
											<input type="email" class="form-control" id="email" name="email"
												placeholder="Email" required>
										</div>
										<div class="mb-3">
											<input type="tel" class="form-control" id="Phone" name="phone"
												placeholder="Phone Number" required>
										</div>
									</div>
									<div>
										<div class="mb-3">
											<input type="number" class="form-control" id="age" name="age"
												placeholder="Age" required>
										</div>
										<div class="mb-3">
											<select class="form-select" name="gender" id="gender">
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
									</div>
									<div>
										<div class="mb-3">
											<input type="text" class="form-control" id="address" name="address"
												placeholder="Address" required>
										</div>
										<div class="mb-3">
											<input type="password" class="form-control" id="password" name="password"
												placeholder="Password" required>
										</div>
									</div>

									<div>
										<div>
											<select class="mb-3 form-select" name="speciality" id="">
												
											<?php
												$specQry = mysqli_query($con, "SELECT * FROM specialities");
												while($specRes = mysqli_fetch_assoc($specQry))
												{
													?>
												<option value="<?php echo $specRes['ID'] ?>"><?php echo $specRes['Title'] ?></option>
												<?php } ?>
											
											</select>
										</div>
										<div class="mb-3">
											<input type="number" class="form-control" id="password" name="experience"
												placeholder="Experience" required>
										</div>
									</div>
									
									<div>
										<div class="mb-3">
											<textarea type="text" class="form-control" id="password" name="description"
												placeholder="Description" required></textarea>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-info text-white w-100 mb-3">Submit</button>
							</form>
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

	<?php include('sections/script.php')?>

</body>

</html>