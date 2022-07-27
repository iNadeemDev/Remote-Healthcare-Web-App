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
<title>Cart</title>
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
					<hr>
					<h2 class="text-center my-4">Order Details</h2>
					<hr>
                    <table class="table table-striped  table-hover container">
                        <thead>
							<tr>
								<th>Sr. No</th>
								<th>Product Image</th>
								<th>Product Name</th>
								<th>Type</th>
								<th>Quantity</th>
								<th>Unit Price</th>
								<th>Sub Total</th>
								<th>Remove</th>
							</tr>
                        </thead>
						<tbody>
							<?php
								$cartquery = mysqli_query($con, "SELECT cart_item.Quantity, medicines.Price AS med_price, cart.ID AS cart_id, cart_item.ID AS cart_item_id, 
								medicines.Name, medicines.Type, medicines.ID AS med_id FROM cart
								INNER JOIN cart_item ON cart.ID = cart_item.CartID
								INNER JOIN medicines ON cart_item.MedicineID = medicines.ID
								WHERE cart.CustomerID = $id");

								$count=0;
								while($row = mysqli_fetch_array($cartquery))
								{
									$subTotal = $row['Quantity'] * $row['med_price'];
									$cartid = $row['cart_id'];
									$cart_item_id = $row['cart_item_id'];
							?>
							<tr>
								<td><?php echo ++$count ?></td>
								<td><img src="../images/medicineimg.jpeg" width="50" height="50" alt="product image"></td>
								<td><?php echo $row['Name'] ?></td>
								<td><?php echo $row['Type'] ?></td>
								<td><?php echo $row['Quantity'] ?></td>
								<td><?php echo $row['med_price'] ?></td>
								<td><?php echo $subTotal ?></td>
								<td><a href="deleteitemproc.php?med_id=<?php echo $row['med_id'] ?>&cart=<?php echo $cartid ?>&cart_item_id=<?php echo $cart_item_id ?>"><i class="fas fa-trash-alt"></i></a></td>
							</tr>
							<?php 
								}
								$cartQuery = mysqli_query($con, "SELECT * FROM cart WHERE CustomerID = $id");
								
								$resultCart = mysqli_fetch_assoc($cartQuery);
							?>
							<tr>
								<td colspan="4">
									<?php
										$paidStatusQuery = mysqli_query($con, "SELECT Paid FROM cart WHERE CustomerID=$id");
										$paidResult = mysqli_fetch_assoc($paidStatusQuery);
										$isPaid = $paidResult['Paid'];

										if($isPaid == 0){
											echo "Order Status:  <span style='color: red'>Pending</span>";
										}
										else{
											echo "Order Status:  <span style='color: green'>Confirmed</span>";
										}
									?>
								</td>
								<td colspan="4" class="text-end p-1">Total Bill in Rs. :<?php echo $resultCart['Price'] ?></td>
							</tr>
						</tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>

	<!-- Including scripts for bootstrap and custom scripts  -->
	<?php include('sections/scripts.php') ?>

</body>

</html>