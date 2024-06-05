



<?php

session_start();

include "backend/db.php";
$id = $_POST['id'];

$itemProduct = "SELECT * FROM product_tbl WHERE product_id = $id";
$itemResult = mysqli_query($conn, $itemProduct);
$itemResultShow = mysqli_fetch_assoc($itemResult);

// Getting data to Add to Cart

$orderID = $itemResultShow['product_id'];
$orderUserID = $_SESSION['id'];
$orderName = $itemResultShow['product_name'];
$orderPrice = $itemResultShow['product_price'];
$orderImage = $itemResultShow['product_img'];

// echo "$orderID $orderUserID $orderName $orderPrice $orderImage";

// Transferring Data to Add to Cart

$importProductOrder = "INSERT INTO order_tbl (order_user_id, product_name, product_price, product_image) VALUES ('$orderUserID', '$orderName', '$orderPrice', '$orderImage' )";
mysqli_query($conn, $importProductOrder);
header("Location: index.php");
?>