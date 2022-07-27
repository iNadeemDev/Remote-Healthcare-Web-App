<?php
include '../connection.php';
$med_id = $_GET['med_id'];
$cart_ID = $_GET['cart'];
$cart_item_id = $_GET['cart_item_id'];

$fetch = mysqli_query($con, "SELECT cart_item.Quantity, cart_item.cartID, cart_item.MedicineID, medicines.Price, medicines.Stock FROM medicines
INNER JOIN cart_item ON medicines.ID = cart_item.MedicineID
WHERE cart_item.cartID = $cart_ID AND cart_item.ID = '$cart_item_id'");

$ResFetch = mysqli_fetch_assoc($fetch);

$quantity = $ResFetch['Quantity'];
$stock = $ResFetch['Stock'];
$price = $ResFetch['Price'];
$cart_ID = $ResFetch['cartID'];
$med_id = $ResFetch['MedicineID'];

echo $med_id.' med-id<br>';
echo $quantity . ' quantity<br>';
echo $stock .' stock<br>';
echo $price .' price<br>';
echo $cart_ID .' cartid<br>';
echo $item_ID .' itemid<br>';

if($quantity == 1){

    $deleteItem = "DELETE FROM cart_item WHERE ID = '$cart_item_id'";

    if ($con->query($deleteItem) === TRUE) {
        echo "Record deleted successfully";

        //*** Now incrememnting the item stock */
        $updateStock = "UPDATE medicines SET `Stock` = `Stock` + 1 WHERE ID = '$med_id'";
        $con->query($updateStock);

        //Now updating the price in the cart
        $updatePrice = "UPDATE cart SET `Price` = `Price` - $price WHERE ID = '$cart_ID'";
        $con->query($updatePrice);

        header("location: cart.php");

    } else {
        echo "Error deleting record: " . $con->error;
    }

}
else{
    //no need to delete the item record, just dec the item quantity and cart price

    //*** Now incrementing the item stock */
    $updateStock = "UPDATE medicines SET `Stock` = `Stock` + 1 WHERE ID = '$med_id'";
    $con->query($updateStock);

    //Now updating/decrementing the quantity of da cart item
    $updateQuantity = "UPDATE cart_item SET `Quantity` = `Quantity` - 1 WHERE ID = '$cart_item_id'";
    $con->query($updateQuantity);

    //Now updating the price in the cart
    $updatePrice = "UPDATE cart SET `Price` = `Price` - $price WHERE ID = '$cart_ID'";
    $con->query($updatePrice);

    header("location: cart.php");

}
?>