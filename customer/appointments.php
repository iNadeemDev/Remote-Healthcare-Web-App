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
<title>Appointments</title>
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
					<div class="container appointments">
						<hr>
						<div class="d-flex justify-content-between" >
							<h1 class="text-center">My Appointments</h1>
							<a href="bookappointment.php"><button class="btn btn-info">Book New Appointment</button></a>
						</div>
						<hr>
						<h3>Coming Appointments: </h3>
						<table class="table table-striped table-hover">
							<th>
								<tr>
									<th>Sr. No</th>
									<th>Appt. ID</th>
									<th>Doctor</th>
									<th>Patient Message</th>
									<th>Checkup Date</th>
									<th>Checkup Time</th>
									<th>Status</th>
									<th>Doctor Remarks</th>
									<th>Action</th>
								</tr>
							</th>
							<tbody>
								<?php
									$dateToday = date("Y-m-d");
									$timeNow = date("H:i:s");
									$comingQry = mysqli_query($con, "SELECT appointments.Appt_ID, appointments.checkup_date, appointments.checkup_time, appointments.Dr_ID, appointments.Cust_Msg, appointments.Status, appointments.Dr_Msg FROM `appointments` 
									INNER JOIN users ON appointments.CustomerID = users.ID
									INNER JOIN doctors ON appointments.Dr_ID = doctors.ID
									WHERE CustomerID = '$id' AND (checkup_date > '$dateToday' OR ( checkup_date = '$dateToday' AND checkup_time > '$timeNow'))");

									

									while($rowComing = mysqli_fetch_array($comingQry)){
										$datetime = $rowComing['checkup_date'];
										$datetime = new DateTime($datetime);
								?>
								<tr>
									<td>1</td>
									<td><?php echo $rowComing['Appt_ID'] ?></td>
									<?php
										$dr_id = $rowComing['Dr_ID'];
										$DrQry = mysqli_query($con,"SELECT Name FROM doctors
										INNER JOIN users ON doctors.User_ID = users.ID
										WHERE doctors.ID = $dr_id");

										$drName = mysqli_fetch_assoc($DrQry);
									?>
									<td><?php echo $drName['Name'] ?></td>
									<td><?php echo $rowComing['Cust_Msg'] ?></td>
									<td><?php echo $rowComing['checkup_date'] ?></td>
									<td><?php echo $rowComing['checkup_time'] ?></td>
									<td><?php echo $rowComing['Cust_Msg'] ?></td>
									<td>
										<?php 
											$status = $rowComing['Status'];
											if($status == 0){
												echo "Processing";
											}
											else if($status == 1){
												echo "Accepted";
											}
											else if($status == -1){
												echo "Rejected";
											}
											else if($status == 2){
												echo "Done";
											}
											else{
												echo "Something went wrong";
											}
										?>
									</td>
									<td><?php echo $rowComing['Dr_Msg'] ?></td>
									<td>
										<button class="btn btn-success m-1">Done</button>
										<button class="btn btn-danger m-1">Remove</button>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<hr class="m-5">
						<h3>Previous Appointments: </h3>
						<table class="table table-striped table-hover">
							<th>
								<tr>
									<th>Sr. No</th>
									<th>Appt. ID</th>
									<th>Doctor</th>
									<th>Patient Message</th>
									<th>Checkup Date</th>
									<th>Checkup Time</th>
									<th>Status</th>
									<th>Doctor Remarks</th>
									<th>Edit,Remove</th>
								</tr>
							</th>
							<tbody>
								<?php
									$comingQry = mysqli_query($con, "SELECT appointments.Appt_ID, appointments.checkup_date, appointments.checkup_time, appointments.Dr_ID, appointments.Cust_Msg, appointments.Status, appointments.Dr_Msg FROM `appointments` 
									INNER JOIN users ON appointments.CustomerID = users.ID
									INNER JOIN doctors ON appointments.Dr_ID = doctors.ID
									WHERE CustomerID = '$id' AND (checkup_date < '$dateToday' OR ( checkup_date = '$dateToday' AND checkup_time < '$timeNow'))");

									

									while($rowComing = mysqli_fetch_array($comingQry)){
								?>
								<tr>
									<td>1</td>
									<td><?php echo $rowComing['Appt_ID'] ?></td>
									<?php
										$dr_id = $rowComing['Dr_ID'];
										$DrQry = mysqli_query($con,"SELECT Name FROM doctors
										INNER JOIN users ON doctors.User_ID = users.ID
										WHERE doctors.ID = $dr_id");

										$drName = mysqli_fetch_assoc($DrQry);
									?>
									<td><?php echo $drName['Name'] ?></td>
									<td><?php echo $rowComing['Cust_Msg'] ?></td>
									<td><?php echo $rowComing['checkup_date'] ?></td>
									<td><?php echo $rowComing['checkup_time'] ?></td>
									<td>
										<?php 
											$status = $rowComing['Status'];
											if($status == 0){
												echo "Processing";
											}
											else if($status == 1){
												echo "Confirmed";
											}
											else if($status == -1){
												echo "Rejected";
											}
											else{
												echo "Something went wrong";
											}
										?>
									</td>
									<td><?php echo $rowComing['Dr_Msg'] ?></td>
									<td>R</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Including scripts for bootstrap and custom scripts  -->
	<?php include('sections/scripts.php') ?>

</body>

</html>