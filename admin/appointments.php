<!-- -->
<?php
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
		.bg {
            background:url('bg4.jpg') no-repeat;
            width: 100%;
            height: 100%;
            background-size: cover;
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

                <?php include('sections/sidebar.php') ?>

				<!-- DASHBOARD CONTENT HERE -->
				<div class="sidebar-content bg">
					<div class="container appointments">
						<hr class="text-white">
							<h1 class="text-center text-white">Appointments</h1>
						<hr class="text-white">
						<h3 class="text-white">Coming Appointments: </h3>
						<table class="table text-white">
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
								</tr>
							</th>
							<tbody class="text-white">
								<?php
									$dateToday = date("Y-m-d");
									$timeNow = date("H:i:s");
									$comingQry = mysqli_query($con, "SELECT appointments.Appt_ID, appointments.checkup_date, appointments.checkup_time, appointments.Dr_ID, appointments.Cust_Msg, appointments.Status, appointments.Dr_Msg FROM `users` 
									INNER JOIN doctors ON users.ID = doctors.User_ID
									INNER JOIN appointments ON doctors.ID = appointments.Dr_ID
									WHERE appointments.checkup_date > '$dateToday' OR (checkup_date = '$dateToday' AND checkup_time > '$timeNow')");

									
                                    $num = 1;
									while($rowComing = mysqli_fetch_array($comingQry)){
										$datetime = $rowComing['checkup_date'];
										$datetime = new DateTime($datetime);
								?>
								<tr>
									<td><?php echo $num ?></td>
									<td><?php echo $rowComing['Appt_ID'] ?></td>
									<?php
										$dr_id = $rowComing['Dr_ID'];
										$DrQry = mysqli_query($con,"SELECT Name FROM doctors
										INNER JOIN users ON doctors.User_ID = users.ID
										WHERE doctors.ID = $dr_id");

										$drName = mysqli_fetch_assoc($DrQry);
									?>
									<td><?php echo $drName['Name'] ?></td>
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
								</tr>
								<?php 
                                $num++;
                                }  ?>
							</tbody>
						</table>
						<hr class="m-5">
						<h3 class="text-white">Previous Appointments: </h3>
						<table class="table text-white">
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
								</tr>
							</th>
							<tbody>
								<?php
									$dateToday = date("Y-m-d");
									$timeNow = date("H:i:s");
									$comingQry = mysqli_query($con, "SELECT appointments.Appt_ID, appointments.checkup_date, appointments.checkup_time, appointments.Dr_ID, appointments.Cust_Msg, appointments.Status, appointments.Dr_Msg FROM `users` 
									INNER JOIN doctors ON users.ID = doctors.User_ID
									INNER JOIN appointments ON doctors.ID = appointments.Dr_ID
									WHERE appointments.checkup_date < '$dateToday' OR (checkup_date = '$dateToday' AND checkup_time < '$timeNow')");

									
                                    $n = 1;
									while($rowComing = mysqli_fetch_array($comingQry)){
								?>
								<tr>
									<td><?php echo $n ?></td>
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
								</tr>
								<?php 
                                $n++;
                                } ?>
							</tbody>
						</table>
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