<?php include_once 'DB_Scripts/get_medicines.php'; ?>

<div class="ph-flex-container">

	<div class="container">

		<div class="content-title">

			<span class="noselect">Medicines List</span>

		</div>


		<div class="flex-spacehor flex-wrap">

			<div>
				<input type="button" id='med-add-btn' value="Add Medicine" class="ph-btn">
			</div>

			<div class="search-container">
				<input type="search" class="txtSearch" placeholder="Search...">
				<input type="image" class="btnSearch" src="Images/magnify.png" onclick="searchMeds()">
			</div>

		</div>

		<div class="table-responsive mt-3">

			<table class="text-white table table-bordered text-center" id="tblMeds">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Type</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Expiry Date</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>

					<?php foreach ($medicines as $i => $product) { ?>
						<tr>
							<td> <?php echo $product[0] ?> </td>
							<td><?php echo $product[1] ?></td>
							<td><?php echo $product[2] ?></td>
							<td><?php echo $product[3] ?></td>
							<td><?php echo $product[4] ?></td>
							<td><?php echo date("d-m-Y", strtotime($product[5])) ?></td>
							<td> <input class="edit-med" type="image" src="Images/rename-box.png"></td>
							<td> <input class="del-med" type="image" src="Images/close.png"></td>
						</tr>
					<?php } ?>

				</tbody>
			</table>

		</div>

	</div>

</div>

<div class="flex-centered med-form" id='med-add-form'>
	<?php include_once('addmedicine.php') ?>
</div>

<div class="flex-centered med-form" id='med-edit-form'>
	<?php include_once('editmedicine.php') ?>
</div>

<div class="flex-centered med-form" id='med-del-form'>
	<?php include_once('deletemedicine.php') ?>
</div>

<script>
	window.onclick = function(e) {
		if (e.target.classList.contains('med-form')) {
			e.target.style.display = "none"
		}
	}

	function searchMeds() {
		var q = $('.txtSearch').val().toLowerCase()
		$('#tblMeds tbody tr').each((i, elem) => {
			elem = $(elem)
			txt = elem.text().toLowerCase()
			if (txt.indexOf(q) < 0)
				elem.hide()
			else
				elem.show()
		})
	}

	function updateForms(elem) {
		var s_text = $(elem).text().split('\n')
		var old_date = s_text[6].trim().split('-');
		var newDate = `${old_date[2]}-${old_date[1]}-${old_date[0]}`
		// Edit form
		$('#med-edit-form *[name="edit-id"]').val(s_text[1].trim())
		$('#med-edit-form *[name="edit-name"]').val(s_text[2].trim())
		$('#med-edit-form *[name="edit-type"]').val(s_text[3].trim())
		$('#med-edit-form *[name="edit-price"]').val(s_text[4].trim())
		$('#med-edit-form *[name="edit-stock"]').val(s_text[5].trim())
		$('#med-edit-form *[name="edit-exp"]').val(newDate)
		// Delete form
		$('#med-del-form *[name="del-id"]').val(s_text[1].trim())
		$('#med-del-form *[name="del-name"]').val(s_text[2].trim())
	}

	$('.txtSearch').on('change', (e) => {
		searchMeds()
	})

	$('#med-add-btn').on("click", function(e) {
		$('#med-add-form').css('display', 'flex')
	});

	$('#tblMeds tbody tr .edit-med').on("click", function(e) {
		var _row=$(this).parent().parent()
		updateForms(_row)
		$('#med-edit-form').css('display', 'flex')
	});

	$('#tblMeds tbody tr .del-med').on("click", function(e) {
		var _row=$(this).parent().parent()
		updateForms(_row)
		$('#med-del-form').css('display', 'flex')
	});
</script>