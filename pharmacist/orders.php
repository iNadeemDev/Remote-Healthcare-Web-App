<div class="orders-container">

	<div class="content-title">
		<span class="noselect">Orders</span>
	</div>

	<div class="orders-content">
		<?php include_once('orderitems.php') ?>
	</div>

</div>

<script>
	function cancelPay() {
		var _val = $(this).attr("name")
		$.ajax({
			type: "POST",
			url: "DB_Scripts/get_orders.php",
			data: {
				'idtocancel': _val
			}
		}).done(function(msg) {
			alert(msg)
			reloadItems()
		})
	}

	function confirmPay() {
		var _val = $(this).attr("name")
		$.ajax({
			url: "DB_Scripts/get_orders.php",
			type: "POST",
			data: {
				'idtoconfirm': _val
			}
		}).done(function(msg) {
			alert(msg)
			reloadItems()
		})
	}

	$('.cancel-btn').click(cancelPay)
	$('.confirm-btn').click(confirmPay)

	function reloadItems() {
		$.ajax({
			type: "GET",
			url: 'orderitems.php',
			success: function(data) {
				$('.orders-content').html(data)
				$('.cancel-btn').click(cancelPay)
				$('.confirm-btn').click(confirmPay)
			}
		});
	}
</script>