<?php

include 'connection.php';

$sql = "select ID,Date,Paid,Price from cart";

$result = mysqli_query($con, $sql);

$carts = mysqli_fetch_all($result);

function getCartItems($cartID)
{
	global $con;
	$sql = "SELECT medicines.Name, cart_item.Quantity
			FROM cart_item	INNER JOIN medicines
			ON cart_item.MedicineID=medicines.ID WHERE cart_item.CartID=$cartID;";
	$result = mysqli_query($con, $sql);
	$cart_items = mysqli_fetch_all($result);
	return $cart_items;
}

if (isset($_POST['idtocancel'])) {
	$cartID = $_POST['idtocancel'];
	global $con;
	$sql = "UPDATE `cart` SET `Paid` = '0' WHERE `cart`.`ID` = $cartID;";
	if (mysqli_query($con, $sql)) {	
		echo "Payment cancelled for order number " . $cartID . ".";
	} else{
		echo "Payment cancellation failed for order number " . $cartID . ".";
	}
}

if (isset($_POST['idtoconfirm'])) {
	$cartID = $_POST['idtoconfirm'];
	global $con;
	$sql = "UPDATE `cart` SET `Paid` = '1' WHERE `cart`.`ID` = $cartID;";
	if (mysqli_query($con, $sql)) {	
		echo "Payment confirmed for order number " . $cartID . ".";
	} else{
		echo "Payment confirmation failed for order number " . $cartID . ".";
	}
}

?>