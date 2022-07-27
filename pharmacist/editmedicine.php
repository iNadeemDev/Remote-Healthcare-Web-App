<form action="DB_Scripts/edit_medicine.php" method="post" class="add-meds">

	<div class="man-meds">

		<input name="edit-id" type="text" class="man-lbl flex-centered" readonly="true" required="true">

		<div class="man-txt-wrapper">
			<input name="edit-name" type="text" maxlength="50" class="man-txt" placeholder="Name" required="true">
			<span class="man-txt-underline"></span>
		</div>

		<div class="man-txt-wrapper">
			<select name="edit-type" class="man-txt">
				<option value="Capsule">Capsule</option>
				<option value="Syrup">Syrup</option>
				<option value="Tablet">Tablet</option>
				<option value="Injection">Injection</option>
				<option value="Other">Other</option>
			</select>
			<span class="man-txt-underline"></span>
		</div>

		<div class="man-txt-wrapper">
			<input name="edit-price" type="number" class="man-txt" placeholder="Price" required="true">
			<span class="man-txt-underline"></span>
		</div>

		<div class="man-txt-wrapper">
			<input name="edit-stock" type="number" class="man-txt" placeholder="Quantity" required="true">
			<span class="man-txt-underline"></span>
		</div>

		<div class="man-txt-wrapper">
			<input name="edit-exp" type="date" class="man-txt" placeholder="Expiry Date" required="true">
			<span class="man-txt-underline"></span>
		</div>

		<div class="man-txt-wrapper">
			<textarea name="edit-desc" class="man-txt" placeholder="Description" required="false"></textarea>
			<span class="man-txt-underline"></span>
		</div>

		<input type="submit" value="Update Medicine" class="man-btn">

	</div>

</form>