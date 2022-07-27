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
							<h1 class="text-center">Appointments</h1>
						<hr>
						<h3>Coming Appointments: </h3>
						<table class="table table-striped table-hover">
							<th>
								<tr>
									<th>Sr. No</th>
									<th>Appt. ID</th>
									<th>Patient Name</th>
									<th>Patient Message</th>
									<th>Checkup Date</th>
									<th>Checkup Time</th>
									<th>Status</th>
									<th>Doctor Remarks</th>
									<th>Operation</th>
								</tr>
							</th>
							<tbody>
								<?php
									$dateToday = date("Y-m-d");
									$timeNow = date("H:i:s");
									$comingQry = mysqli_query($con, "SELECT appointments.Appt_ID, users.Name, appointments.Cust_Msg, appointments.checkup_date, appointments.checkup_time, appointments.Status, appointments.Dr_Msg, appointments.CustomerID FROM `users` 
									INNER JOIN doctors ON doctors.User_ID = users.ID
									INNER JOIN appointments ON appointments.Dr_ID = doctors.ID
									WHERE doctors.ID = '$dr_id' AND (checkup_date > '$dateToday' OR ( checkup_date = '$dateToday' AND checkup_time > '$timeNow'))");									

									$count=1;
									while($rowComing = mysqli_fetch_array($comingQry)){
										$Appt_ID = $rowComing['Appt_ID'];
								?>
								<tr>
									<td><?php echo $count++ ?></td>
									<td><?php echo $Appt_ID ?></td>
									<?php
										$user_id = $rowComing['CustomerID'];
										$patQry = mysqli_query($con, "SELECT Name FROM users WHERE ID = '$user_id'");
										$patRes = mysqli_fetch_assoc($patQry);
										$patName = $patRes['Name'];
									?>
									<td><?php echo $patName ?></td>
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
										<a href="appointmentProc.php?appt_id=<?php echo $Appt_ID ?>&status=1"><button class="btn btn-success m-1">Accept</button></a>
										<!-- <button class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#modalAccept">Accept</button> -->
										<a href="appointmentProc.php?appt_id=<?php echo $Appt_ID ?>&status=-1"><button class="btn btn-danger m-1">Reject</button></a>
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
									<th>Patient Name</th>
									<th>Patient Message</th>
									<th>Checkup Date</th>
									<th>Checkup Time</th>
									<th>Status</th>
									<th>Doctor Remarks</th>
									<th>Operation</th>
								</tr>
							</th>
							<tbody>
								<?php
									$dateToday = date("Y-m-d");
									$timeNow = date("H:i:s");
									$comingQry = mysqli_query($con, "SELECT appointments.Appt_ID, users.Name, appointments.Cust_Msg, appointments.checkup_date, appointments.checkup_time, appointments.Status, appointments.Dr_Msg, appointments.CustomerID FROM `users` 
									INNER JOIN doctors ON doctors.User_ID = users.ID
									INNER JOIN appointments ON appointments.Dr_ID = doctors.ID
									WHERE doctors.ID = '$dr_id' AND (checkup_date < '$dateToday' OR ( checkup_date = '$dateToday' AND checkup_time < '$timeNow'))");									

									$count=1;
									while($rowComing = mysqli_fetch_array($comingQry)){
								?>
								<tr>
									<td><?php echo $count++ ?></td>
									<td><?php echo $rowComing['Appt_ID'] ?></td>
									<?php
										$user_id = $rowComing['CustomerID'];
										$patQry = mysqli_query($con, "SELECT Name FROM users WHERE ID = '$user_id'");
										$patRes = mysqli_fetch_assoc($patQry);
										$patName = $patRes['Name'];
									?>
									<td><?php echo $patName ?></td>
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
										<?php
											if($status == 0){
												?>
												<button class="btn btn-success m-1">Accept</button>
												<button class="btn btn-danger m-1">Reject</button>
												<?php
											}
										?>
										
									</td>
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

<!-- The Modal -->
<div class="modal" id="modalAccept">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Accepting New Appointment</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
		<form action="appointment.php" method="POST">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Type your response</label>
				<input type="text" class="form-control" name="message">
			</div>
			<button type="submit" class="btn btn-info">Submit</button>
		</form>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</body>

</html>