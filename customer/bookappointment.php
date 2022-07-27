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
<title>Booking an Appointment</title>
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
						<h2 class="text-center py-2">Enter your appointment credentials here</h2>
						<hr>
                        <form class="w-50 mx-auto" action="bookingProc.php" method="POST">
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Choose Date</label>
                                <input type="date" class="form-control" min="<?php echo date('Y-m-d') ?>" name="date" value="">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Choose Time</label>
                                <input type="time" class="form-control" name="time" min="09:00" max="18:00" value="">
								<span class="form-text">From: 09:00 To 18:00</span>
                            </div>
                            <div class="mb-2">
								<?php
									if(isset($_GET['dr_id'])) {
										$doc_id = $_GET['dr_id'];
										?>
										<input type="hidden" value="<?php echo $doc_id ?>" name="doctor">
										<?php

									} else {
										?>
										
										<label for="exampleInputPassword1" class="form-label">Choose Doctor</label>
										<select name="doctor" id="" class="form-select" required>
										<?php
											$fetchDrs = mysqli_query($con, "SELECT doctors.ID, users.Name FROM doctors
											INNER JOIN users ON doctors.User_ID = users.ID");
											while($row = mysqli_fetch_array($fetchDrs))
											{
												
										?>
										<option value="<?php echo $row['ID'] ?>"><?php echo $row['Name'] ?></option>
										<?php } ?>
									</select>
									<?php
									}
								?>
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputPassword1" class="form-label">Type Your Message</label>
                                <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Message..."></textarea>

                            </div>
                            <button type="submit" class="btn btn-info w-100 text-light">Submit</button>
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