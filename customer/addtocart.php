<?php
include "../connection.php";
$uid =  $_POST['user_id'];
$price = $_POST["price"];
$datetime = date("Y-m-d H:i:s");
$paid = 0;

$result = mysqli_query($con, "SELECT * FROM cart WHERE `CustomerID` = '$uid'");
$rows = mysqli_num_rows($result);

if($rows == 0){
    //cart not already existed for this user
    $addtocart = $con->prepare("INSERT INTO cart (`CustomerID` , `Date` , `Paid`, `Price`) VALUES (?,?,?,?)");
    $addtocart->bind_param("ssis", $uid, $datetime, $paid, $price);
    $addtocart->execute();
    $cartid = $con->insert_id; //getting last id inserted

    /***** CART TABLE IS HANDLED NOW */

    /**** Now insering to cart items  ******/
    $med_id = $_POST['med_id'];
    $quantity = 1;

    $cart_item = $con->prepare("INSERT INTO cart_item (`CartID` , `MedicineID` , `Quantity`) VALUES (?,?,?)");
    $cart_item->bind_param("isi", $cartid , $med_id , $quantity);
    $cart_item->execute();

    //*** Now decremeneting the item stock */
    $updateStock = "UPDATE medicines SET `Stock` = `Stock` -1 WHERE ID = '$med_id'";
    $con->query($updateStock);
}
else{
    //cart for this user already existed

    $med_id = $_POST['med_id'];
    $result_cart_item = mysqli_query($con, "SELECT * FROM cart_item WHERE `MedicineID` = '$med_id'");
    $rows_items = mysqli_num_rows($result_cart_item);

    if($rows_items == 0){   //med item not existed before
        $row_cart = mysqli_fetch_array($result);
        $existed_cart_id = $row_cart['ID'];
        $quantity = 1;

        $cart_item = $con->prepare("INSERT INTO cart_item (`CartID` , `MedicineID` , `Quantity`) VALUES (?,?,?)");
        $cart_item->bind_param("isi", $existed_cart_id , $med_id , $quantity);
        $cart_item->execute();


        //getting item price
        $itemPriceQuery = mysqli_query($con, "SELECT Price FROM medicines WHERE ID='$med_id'");
        $itemPriceResult = mysqli_fetch_assoc($itemPriceQuery);
        $itemPrice = $itemPriceResult['Price'];
        
        //Now updating the price in the cart
        $updatePrice = "UPDATE cart SET `Price` = `Price` + $itemPrice WHERE ID = '$existed_cart_id'";
        $con->query($updatePrice);

        //*** Now decremeneting the item stock */
        $updateStock = "UPDATE medicines SET `Stock` = `Stock` -1 WHERE ID = '$med_id'";
        $con->query($updateStock);
    }
    else{   //med item existed before so increment only the quantity
        $row_item = mysqli_fetch_array($result_cart_item);
        $existed_item_id = $row_item["ID"];

        //Now updating/incrementing the quantity of da cart item
        $updateQuantity = "UPDATE cart_item SET `Quantity` = `Quantity` + 1 WHERE ID = '$existed_item_id'";
        $con->query($updateQuantity);

        //getting item price
        $itemPriceQuery = mysqli_query($con, "SELECT Price FROM cart_item
        INNER JOIN medicines ON cart_item.MedicineID = medicines.ID
        WHERE cart_item.ID = $existed_item_id");
        $itemPriceResult = mysqli_fetch_assoc($itemPriceQuery);
        $itemPrice = $itemPriceResult['Price'];

        //Also updating the price in the cart
        $row_cart = mysqli_fetch_array($result);
        $existed_cart_id = $row_cart['ID'];

        $updatePrice = "UPDATE cart SET `Price` = `Price` + $itemPrice WHERE ID = '$existed_cart_id'";
        $con->query($updatePrice);


        //*** Now decremeneting the item stock */
        $updateStock = "UPDATE medicines SET `Stock` = `Stock` -1 WHERE ID = '$med_id'";
        $con->query($updateStock);

    }
}

header("location: e-shop.php");
?>