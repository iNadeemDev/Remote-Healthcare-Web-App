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
<title>Vitals</title>
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
					<div class="vitals container">
						<hr>
						<h2 class="text-center py-2">Update Your Health Vitals Here</h2>
						<hr>
                        <?php
                            $vitalsQuery = mysqli_query($con, "SELECT * FROM vitals WHERE vital_id = '$id'");
                            $vitalResult = mysqli_fetch_assoc($vitalsQuery);
                        ?>
                        <form class="w-50 mx-auto" action="vitalsaddproc.php" method="POST">
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Age in Years</label>
                                <input type="number" class="form-control" min="0" max="200" name="age" value="<?php echo $vitalResult['age']?>">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Height in Inches</label>
                                <input type="number" class="form-control" min="0" max="150" name="height" value="<?php echo $vitalResult['height']?>">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Weight in Kg</label>
                                <input type="number" class="form-control" min="0" max="200" name="weight" value="<?php echo $vitalResult['weight']?>">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Pulse Rate</label>
                                <input type="number" class="form-control" min="0" max="150" name="pulse" value="<?php echo $vitalResult['pulse_rate']?>">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">BMI</label>
                                <input type="number" class="form-control" name="bmi" value="<?php echo $vitalResult['bmi']?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Temperature in FH</label>
                                <input type="number" class="form-control" min="0" max="150" name="temperature" value="<?php echo $vitalResult['temperature']?>">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">BP Up</label>
                                <input type="number" class="form-control" min="0" max="700" name="bp_up" value="<?php echo $vitalResult['bp_up']?>">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">BP Down</label>
                                <input type="number" class="form-control" min="0" max="700" name="bp_down" value="<?php echo $vitalResult['bp_low']?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Including scripts for bootstrap and custom scripts  -->
	<?php include('sections/scripts.php') ?>

</body>

</html>