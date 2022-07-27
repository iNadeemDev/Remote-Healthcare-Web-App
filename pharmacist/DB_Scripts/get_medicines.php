<?php

include 'connection.php';

$sql = "select ID,Name,Type,Price,Stock,ExpiryDate from medicines";

$result = mysqli_query($con, $sql);

$medicines = mysqli_fetch_all($result);

?>