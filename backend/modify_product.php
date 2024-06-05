<?php
include "db.php";

$id = $_POST['id'];
if (isset($_POST['DELETE'])) {
  echo "$id";
  $productDelete = "DELETE FROM  product_tbl WHERE product_id=$id";
  mysqli_query($conn, $productDelete);
  header("Location: add_remove_update_products.php");

}if (isset($_POST['UPDATE'])) {
        $brand = $_POST['brand'];
        $name = $_POST['name'];
        $display = $_POST['display'];
        $flatform = $_POST['flatform'];
        $memory = $_POST['memory'];
        $cameraF = $_POST['cameraF'];
        $cameraM = $_POST['cameraM'];
        $features = $_POST['features'];
        $battery = $_POST['battery'];
        $color = $_POST['color'];
        $price = $_POST['price'];
        $inventory = $_POST['stock'];


        


    $productUpdate = "UPDATE  product_tbl SET product_brand = '$brand',product_name = '$name', product_display = '$display', product_flatform = '$flatform', product_memory = '$memory', product_cameraFront = '$cameraF', product_cameraMain = '$cameraM', product_features = '$features', product_battery = '$battery', product_color = '$color', product_price = '$price',  product_inventory = '$inventory'";
    mysqli_query($conn, $productUpdate);
    echo "$brand $name $desc $price $inventory";
    header("Location: add_remove_update_products.php");
  }

?>