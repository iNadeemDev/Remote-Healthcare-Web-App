<?php include 'DB_Scripts/get_orders.php';

foreach ($carts as $order) { ?>
	<?php $cartID = $order[0] ?>
	<?php $medicines = getCartItems($cartID) ?>

	<div class="card-body">
		<div class="row">
			<div class="col d-flex">
				<p class="me-auto">ID: <?php echo $order[0] ?></p>
				<p class="ms-auto">Date: <?php echo date("d-m-Y", strtotime($order[1])) ?></p>
			</div>
		</div>
		<h5>Medicines List</h5>
		<div class="table-wrapper mb-2">
			<table class="table table-striped table-dark">
				<thead>
					<tr>
						<th>Medicine</th>
						<th>Quantity</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($medicines as $product) { ?>
						<tr>
							<td> <?php echo $product[0] ?> </td>
							<td><?php echo $product[1] ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<h6>Total price: <?php echo $order[3] ?>/- Rs.</h6>
		<?php if ($order[2]) { ?>
			<button type="button" name="<?php echo $cartID; ?>" class="btn btn-dark w-100 cancel-btn">Cancel Payment</button>
		<?php } else { ?>
			<button type="button" name="<?php echo $cartID; ?>" class="btn btn-dark w-100 confirm-btn">Confirm Payment</button>
		<?php } ?>
	</div>

<?php } ?>