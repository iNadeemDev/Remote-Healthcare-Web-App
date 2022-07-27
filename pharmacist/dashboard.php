<div class="dashboard">

	<div class="wc-text">
		Welcome! <?php echo $_SESSION["name"] ?>
	</div>

	<div class="row text-center justify-content -between">

		<div class="col-md-6 col-lg-4">
			<div class="dashboard-card color-bg-cherry mb-4">
				<div class="card-statistic-3 py-5">
					<div class="card-icon">
						<i class="fas fa-laptop-medical"></i>
					</div>
					<div class="mb-4">
						<h5 class="card-title">View Medicines</h5>
					</div>
					<div class="card-title">View all the medicines available in pharmacy!</div>
					<a href="consultation.php" class="btn btn-info mt-3">View Now</a>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4">
			<div class="dashboard-card color-bg-mixed mb-4">
				<div class="card-statistic-3 py-5">
					<div class="card-icon">
						<i class="far fa-calendar-check"></i>
					</div>
					<div class="mb-4">
						<h5 class="card-title">Manage Medicines</h5>
					</div>
					<div class="card-title">Add, edit and delete medicines!</div>
					<a href="appointments.php" class="btn btn-info mt-3">Manage</a>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4">
			<div class="dashboard-card color-bg-cyan mb-4">
				<div class="card-statistic-3 py-5">
					<div class="card-icon">
						<i class="fas fa-hospital-user"></i>
					</div>
					<div class="mb-4">
						<h5 class="card-title">View Orders</h5>
					</div>
					<div class="card-title">View all the orders and sales of pharmacy!</div>
					<a href="specialities.php" class="btn btn-info mt-3">View Now</a>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4">
			<div class="dashboard-card color-bg-green-dark mb-4">
				<div class="card-statistic-3 py-5">
					<div class="card-icon">
						<i class="fas fa-shield-virus"></i>
					</div>
					<div class="mb-4">
						<h5 class="packages.php">Confirm Payment</h5>
					</div>
					<div class="card-title">Confirm payments of orders!</div>
					<a href="#appointments" class="btn btn-info mt-3">View Now</a>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4">
			<div class="dashboard-card color-bg-blue-green mb-4">
				<div class="card-statistic-3 py-5">
					<div class="card-icon">
						<i class="fas fa-address-card"></i>
					</div>
					<div class="mb-4">
						<h5 class="card-title">Cancel Payment</h5>
					</div>
					<div class="card-title">Cancel payments of orders!</div>
					<a href="vitals.php" class="btn btn-info mt-3">View Now</a>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-lg-4">
			<div class="dashboard-card color-bg-blue-dark mb-4">
				<div class="card-statistic-3 py-5">
					<div class="card-icon">
						<i class="fas fa-user-cog"></i>
					</div>
					<div class="mb-4">
						<h5 class="card-title">My Profile</h5>
					</div>
					<div class="card-title">Your profile and settings are here!</div>
					<a href="profile.php" class="btn btn-info mt-3">View Now</a>
				</div>
			</div>
		</div>

	</div>

</div>