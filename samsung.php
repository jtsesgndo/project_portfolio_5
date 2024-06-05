<?php
    session_start();
    include "security_user.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Samsung</title>
</head>
<body>
    <!-- Navigation Bar -->
    <?php
        include "nav.php";
        include "shop_brand.php"
    ?>






    <div class='container'>
    <div class='row my-3'>
    <?php
        include "backend/db.php";
        $selectProductStmt = "SELECT * FROM `product_tbl` WHERE product_brand = 'Samsung'";
        $productQuery = mysqli_query($conn, $selectProductStmt);

        while($productShow = mysqli_fetch_assoc($productQuery)){
            echo "
                 <div class='col-md-4'>
                    <div class='card shadow my-3'>
                        <div class='card-body'>
                            <form method='POST' action=''>
                                <div class='row'>
                                    <div class='col-md-12 text-center'>
                                        <img src='$productShow[product_img]' width='300' height='300'>
                                    </div>
                                    <div class='col-md-12 mb-1 d-flex flex-column form-control border-0'>
                                        <div class='text-dark fw-bold text-center'>$productShow[product_brand]</div>
                                        <div class='text-dark fw-bold text-center'>$productShow[product_name]</div>
                                        <div class='text-dark fw-bold'>&#8369; $productShow[product_price]</div>    
                                    </div>
                                    <div class='col-md-12'>
                                        <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal-$productShow[product_id]'>
                                            View Details
                                        </button>  
                                    </div>    
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
                
        <div class='modal fade' id='exampleModal-$productShow[product_id]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-xl'>
                <div class='modal-content'>
                        <div class='modal-header' style='background-color: #018A9C;'>
                            <h1 class='modal-title fs-5 text-white' id='exampleModalLabel'>$productShow[product_brand] $productShow[product_name]</h1>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                    <div class='modal-body'>
                        <img class='' width='300' height='350' src='$productShow[product_img]' alt='Card image cap'>
                        <div class='desc'>
                            <p class='card-text fw-bold'><b>Display: </b><i>$productShow[product_display]</i></p>
                            <p class='card-text fw-bold'><b>Display: </b><i>$productShow[product_flatform]</i></p>
                            <p class='card-text fw-bold'><b>Display: </b><i>$productShow[product_memory]</i></p>
                            <p class='card-text fw-bold'><b>Display: </b><i>$productShow[product_cameraFront]</i></p>
                            <p class='card-text fw-bold'><b>Display: </b><i>$productShow[product_cameraMain]</i></p>
                            <p class='card-text fw-bold'><b>Display: </b><i>$productShow[product_features]</i></p>
                            <p class='card-text fw-bold'><b>Display: </b><i>$productShow[product_battery]</i></p>
                            <p class='card-text fw-bold'><b>Display: </b><i>$productShow[product_color]</i></p>
                        </div>    
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                        <form action='order_getter.php' method='POST'>
                        <input type='hidden' name='id' value='$productShow[product_id]'>
                            <button type='submit' class='btn btn-primary'>Add to Cart</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>

            ";
        }
    ?>
        </div>
    </div>


    <!-- Footer -->
    <?php
        include "footer.php"
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>