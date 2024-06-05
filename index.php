<?php
    session_start();
    include "security_user.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Souq</title>
    <link rel="icon" type="image/x-icon" href="images/Mobile-removebg-preview.png">

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<?php include "nav.php"?>
<div class="container-fluid">
        <div class="carousel slide" id="mobileCarousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Banner1.webp" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/Banner2.webp" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/Banner3.webp" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/Banner4.webp" alt="" class="d-block w-100">
                </div>
            </div>

            <div class="carousel-indicators">
                <button type="button" class="active" data-bs-target="#mobileCarousel" data-bs-slide-to="0"></button>
                <button type="button" data-bs-target="#mobileCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mobileCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#mobileCarousel" data-bs-slide-to="3"></button>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mobileCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#mobileCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
</div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 m-4">
                        <div class="card-body">
                        <h2 class="text-center">12 Months Warranty <i class="fa-regular fa-newspaper"></i></h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 m-4">
                        <div class="ex-reviews card-body">
                        <h2 class="text-center">Exellent Reviews <i class="fa-solid fa-star"></i></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 m-4">
                        <div class="card-body">
                        <h2 class="text-center">FREE SHIPPING! <i class="fa-solid fa-truck"></i></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    include "shop_brand.php"
?>




    <div class="container-fluid">
    <div class="all-products">  
    <h3 class="m-0 ms-3">All Products</h3>
    </div>
    <div class='row gy-3' id='item-container'>
    <?php
                                 include "backend/db.php";

                                 $productStmt = "SELECT * FROM product_tbl";
                                  $productResult = mysqli_query($conn, $productStmt);
                                  while ($productShow = mysqli_fetch_assoc($productResult)){
                                    echo "
        
            <div class='col-md-6 col-lg-4 col-xl-3'>
                <div class='card'>
                    <div class='container-box text-center mt-5'>
                    <a href='#productModal-$productShow[product_id]' class='btn m-1' data-bs-toggle='modal' data-bs-target='#productModal-$productShow[product_id]'><img src='$productShow[product_img]' alt='' height='320' width='300'></a>               
                    </div>
                    <div class='card-body'>
                        <h6 class='text-dark'>$productShow[product_brand]</h6>
                        <h6 class='text-success'>$productShow[product_name]</h6>
                        <h6>$productShow[product_price]</h6>
                        <div class='card-footer text-center'>
                            <button class='btn btn-light'>Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class='modal fade' id='productModal-$productShow[product_id]' tabindex='-1' aria-labelledby='productModalLabel' aria-hidden='true'>
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
  <a href='#'><p class='m-3 align-end'>Click for More</p></a>
    </div>





<?php include "footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<script src="items.js"></script>
<script src="main.js"></script>
</html>