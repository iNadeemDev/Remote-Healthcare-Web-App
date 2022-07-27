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
					<div class="container">
                    <a href="addDoctor.php"><button class="btn btn-info text-white p-2 m-3 float-end">Add Pharmacist</button></a>
						<h2 style="text-align: center; color: white; padding: 30px;">Pharmacists </h2>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead class="table-dark">
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
                                        <th>Address</th>
                                        <th colspan="2">Operations</th>
									</tr>	
								</thead>

								<?php
                            include "connection.php";
                            $profile = mysqli_query($con, "SELECT * FROM users WHERE `Type` = 'Pharmacist'");                    
                            while($data = mysqli_fetch_array($profile)) {
                        ?>

								<tbody class="text-white">
									<tr>
										<td>
											<?php echo $data['ID']?>
										</td>
										<td>
											<?php echo $data['Name']?>
										</td>
										<td>
											<?php echo $data['Email']?>
										</td>
										<td>
											<?php echo $data['Phone']?>
										</td>
                                        <td>
											<?php echo $data['Address']?>
										</td>
                                        <td>
											<a href="editPharma.php?ph_id=<?php echo  $data['ID']?>">Edit</a>
										</td>
                                        <td>
											<a href="deletePharma.php?ph_id=<?php echo  $data['ID']?>">Delete</a>
										</td>

									</tr>
								</tbody>
								<?php
                        }
                        ?>
							</table>
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