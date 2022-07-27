<form action="DB_Scripts/del_medicine.php" method="post" class="add-meds">

	<div class="man-meds">

		<input name="del-id" type="text" class="man-lbl flex-centered" readonly="true" required="true">

		<div class="man-txt-wrapper">
			<input name="del-name" type="text" maxlength="50" class="man-txt" placeholder="Name" readonly="true" required="true">
			<span class="man-txt-underline"></span>
		</div>

		<input type="submit" value="Delete Medicine" class="man-btn">

	</div>

</form>