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
<title>Doctors</title>
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

				<?php #generate random string
					function generateRandomString($length = 5) {
						return substr(str_shuffle(str_repeat($x='abcdefghijklmnoyzABCDEFGHIJKLMNOPQRSYZ', ceil($length/strlen($x)) )),1,$length);
					}
				?>
				<!-- DASHBOARD CONTENT HERE -->
				<div class="sidebar-content">
					<div class="container">
						<h3 class="text-center py-4"><strong>My Patients</strong></h3>
						<div class="row">

							<?php
								$DrQry = mysqli_query($con, "SELECT * FROM users
								INNER JOIN doctors ON users.ID = doctors.User_ID
								INNER JOIN appointments ON doctors.ID = appointments.Dr_ID
								WHERE doctors.ID = '$id'");

								while($row = mysqli_fetch_array($DrQry))
								{

								
							?>

							<div class="col-12 col-md-4">
								<div class="card m-1">
									<?php
										if($row['Gender'] == "Male" || $row['Gender'] == "male"){
											?>
											<img class="card-img-top" src="https://source.unsplash.com/400x300?doctor,male,
											<?php										
												echo  generateRandomString();
											?>
											" alt="Card image cap">

											<?php
										}else{
											?>
											<img class="card-img-top" src="https://source.unsplash.com/400x300?doctor,
											<?php										
												echo  generateRandomString();
											?>
											" alt="Card image cap">

											<?php

										}
									?>
									<div class="card-body">
										<?php
											$cust_id = $row['CustomerID'];
											$customerQry = mysqli_query($con, "SELECT * FROM users where ID='$cust_id'");
											$custRes = mysqli_fetch_assoc($customerQry);
										?>
										<h5 class="card-title p-0 m-0"><?php echo $custRes['Name'] ?></h5>
										<hr>
										<p class="card-text">Phone: <?php echo $custRes['Phone'] ?></p>
										<p class="card-text">Email: <?php echo $custRes['Email'] ?></p>
										<p class="card-text">Age: <?php echo $custRes['Age'] ?></p>
										<p class="card-text">Gender: <?php echo $custRes['Gender'] ?></p>
										<p class="card-text">Address: <?php echo $custRes['Address'] ?></p>
										<hr>
										<a href="patient_vitals.php?pat_id=<?php echo $cust_id ?>" class="btn text-white" style="background-color: #DFB57A;">View Vitals</a>
									</div>
								</div>
							</div>

							<?php } ?>

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