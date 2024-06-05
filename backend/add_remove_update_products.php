<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>add_remove</title>
    
</head>
<body>

<!-- upload Products -->
<?php
include "db.php";

?>
    <div class="container_fluid">
        <div class="m-5">
        <img src="../images/Mobile-.png" alt="">
        </div>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center mt-3">Upload Products</h1>
                    <hr>

                    <div class="card-body">
                        <div class="row">

                            <form action="product_getter.php" method="POST" enctype="multipart/form-data">
                                <div class="row">

                                   
                                    <div class="col-md-3">
                                        <label for="name">Brand:</label><br>
                                        <input type="text"  name="product_brand" required><br>
                                    </div> 

                                    <div class="col-md-3">
                                        <label for="name">Product Name:</label><br>
                                        <input type="text"  name="product_name" required><br>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <label for="price">Price:</label><br>
                                        <input type="number" step="0.01"  name="product_price" required><br>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="stock">Stock:</label><br>
                                        <input type="number"  name="product_inventory" required><br><br>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="formFileMultiple" class="form-label">Image</label>
                                        <input class="form-control" type="file"  name="product_image">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Display</label>
                                        <input type="text" name="product_display" class="form-control" >
                                    </div>

                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Operating System</label>
                                        <input type="text" name="product_flatform" class="form-control" >   
                                    </div>

                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Memory</label>
                                        <input type="text" name="product_memory" class="form-control" >
                                    </div>

                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Front Camera</label>
                                        <input type="text" name="product_cameraFront" class="form-control" >
                                    </div>

                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Main Camera</label>
                                        <input type="text" name="product_cameraMain" class="form-control" >
                                    </div>

                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Features</label>
                                        <input type="text" name="product_features" class="form-control" >
                                    </div>

                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Battery</label>
                                        <input type="text" name="product_battery" class="form-control" >
                                    </div>

                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Color</label>
                                        <input type="text" name="product_color" class="form-control" >
                                    </div>

                                    <div class="col-md-12">
                                        <input type="submit" value="Add Product">
                                        <a href="logout.php">Logout</a> 
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>

<!-- List of all items with update and delete -->
    <div class="container listItems">
        <div class="listItems">
            <h2>List of Items</h2>
        <div class="row">
            <?php
            $uploadProductStmt = "SELECT * FROM product_tbl";   
            $productQuery = mysqli_query($conn, $uploadProductStmt);
            while ($productShow = mysqli_fetch_assoc($productQuery)) {
                    echo "
                    
                        <div class='col-12'>
                            <form action='modify_product.php' method='POST'>
                                <img src='$productShow[product_img]' width='50'>
                                <input type='hidden' name='id' value='$productShow[product_id]'>
                                <input type='text' name='brand' value='$productShow[product_brand]'>
                                <input type='text' name='name' value='$productShow[product_name]'>
                                <input type='number' name='price' value='$productShow[product_price]'>

                                <input type='number' name='stock' value='$productShow[product_inventory]'>                               
                                <input type='submit' value='Update' name ='UPDATE' class='btn m-3'> 
                                <input type='submit' value='Delete' name ='DELETE' class='btn'>

                            </form>
                        </div>
                    ";
            }
            ?>
        </div>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>