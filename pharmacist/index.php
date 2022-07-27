<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- JQuery -->
	<script src="JQuery/jquery.min.js"></script>
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- CSS -->
	<link rel="stylesheet" href="Styles/style.min.css">
	
	<!-- Title -->
	<title>Pharmacist</title>
</head>

<body>

	<div class="main-flex">

		<!-- Put Navbar Here! -->
		<div>
			<?php include('navbar.php') ?>
		</div>

		<div class="content-main">

			<div class="sidebar-container">

				<div class="sidebar">

					<div class="sidebar-top">
						<a class="t-container" onclick="toggleActive()">
							<div class="toggle"></div>
						</a>
						<a class="sidebar-item" id="btn-dash">
							<img class="sidebar-item-icon" src="Images/dashboard.png" alt="Dashboard">
							<span>Dashboard</span>
						</a>
						<a class="sidebar-item sidebar-selected" id="btn-meds">
							<img class="sidebar-item-icon" src="Images/home.png" alt="Home">
							<span>Medicines</span>
						</a>
						<a class="sidebar-item" id="btn-orders">
							<img class="sidebar-item-icon" src="Images/order.png" alt="Profile">
							<span>Orders</span>
						</a>
					</div>

					<div class="sidebar-bottom">
						<a class="sidebar-item" href="../logout.php">
							<img class="sidebar-item-icon" src="Images/logout.png" alt="Logout">
							<span class="noselect">Logout</span>
						</a>
					</div>

				</div>

				<!-- Put Main Content Inside This DIV! -->
				<div class="sidebar-content">
					<?php
					if (isset($_GET['section'])) {
						$sec = $_GET['section'];
						if ($sec == 'Dashboard') {
							include('dashboard.php');
						} elseif ($sec == 'Orders') {
							include('orders.php');
						} else {
							include('medicines.php');
						}
					} else {
						include('medicines.php');
					}
					?>
				</div>

			</div>

		</div>

	</div>

	<script>
		function toggleActive() {
			$('.t-container').toggleClass('active');
			$('.sidebar').toggleClass('active');
		}

		$('#btn-dash').on('click', (e) => {
			window.location = 'index.php?section=Dashboard'
		})

		$('#btn-meds').on('click', (e) => {
			window.location = 'index.php?section=Medicines'
		})

		$('#btn-orders').on('click', (e) => {
			window.location = 'index.php?section=Orders'
		})
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>