<?php

include 'DB_Scripts/connection.php';

if (isset($_GET['id'])) {
	$medID = $_GET['id'];

	global $con;
	$sql = "select Description from Medicines WHERE ID=$medID";
	$result = mysqli_query($con, $sql);

	$desc = ["No Description"];

	if ($result)
		$desc = mysqli_fetch_row($result);
	if (!$desc[0])
		$desc = ["No Description"]; ?>

	<img src="Images/Panadol.png" alt="...">

	<span class="med-desc">
		<?php echo $desc[0] ?>
	</span>

<?php } else { ?>

	<span class="med-note">
		Please select an item to see preview!
	</span>

<?php } ?>