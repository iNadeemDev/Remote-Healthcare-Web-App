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
						<h2 style="text-align: center; color: white; padding: 30px;">Sales </h2>
						<div class="table-responsive">
							<table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Serial No.</th>
                                        <th>ID</th>
                                        <th>Customer</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Price</th>
										<th>Action</th>
                                    </tr>    
                                </thead>

                                <?php
                                    include "connection.php";
                                    $records = mysqli_query($con, "SELECT cart.CustomerID, users.Name, users.Email, users.Address, cart.Price, cart.ID from users INNER JOIN cart ON cart.CustomerID = users.ID WHERE `Paid` = '1'");                    
                                    $num = 1;
                                    while($data = mysqli_fetch_array($records)) {
                                ?>

                                <tbody class="text-white">
                                    <tr>
                                        <td><?php echo $num ?></td>
                                        <td><?php echo $data['CustomerID']?></td>
                                        <td><?php echo $data['Name']?></td>
                                        <td><?php echo $data['Email']?></td>
                                        <td><?php echo $data['Address']?></td>
                                        <td><?php echo $data['Price']?></td>
                                        <td>
                                            <a href="orderProc.php?order_id=<?php echo $cartID ?>&status=1"><button class="btn btn-success">Confirm Order</button></a>
                                            <a href="orderProc.php?order_id=<?php echo $cartID ?>&status=0"><button class="btn btn-danger">Cancel Order</button></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php
                                $num++;
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