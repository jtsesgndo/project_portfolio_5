<?php

session_start();

include "db.php";
$directory = "images/";
$product_image = $directory . basename($_FILES['product_image']['name']);
$product_brand = $_POST["product_brand"];
$product_name = $_POST["product_name"];
$product_display = $_POST["product_display"];
$product_flatform = $_POST["product_flatform"];
$product_memory = $_POST["product_memory"];
$product_cameraFront = $_POST["product_cameraFront"];
$product_cameraMain = $_POST["product_cameraMain"];
$product_features = $_POST["product_features"];
$product_battery = $_POST["product_battery"];
$product_color = $_POST["product_color"];
$product_price = $_POST["product_price"];
$product_inventory = $_POST["product_inventory"];

move_uploaded_file($_FILES['product_image']['tmp_name'], $product_image);

$uploadProductStmt = "INSERT INTO product_tbl (product_img, product_brand, product_name, product_display, product_flatform, product_memory, product_cameraFront, product_cameraMain, product_features, product_battery, product_color, product_price, product_inventory) VALUES ('$product_image', '$product_brand', '$product_name', '$product_display', '$product_flatform', '$product_memory', '$product_cameraFront', '$product_cameraMain', '$product_features', '$product_battery', '$product_color', '$product_price', '$product_inventory')";

mysqli_query($conn, $uploadProductStmt);
echo "$product_image <br> $product_brand <br> $product_name <br> $product_display <br> $product_flatform <br> $product_memory <br> $product_cameraFront <br> $product_cameraMain <br> $product_features <br> $product_battery <br> $product_color <br> $product_price <br> $product_inventory";
header("Location: add_remove_update_products.php");

?>