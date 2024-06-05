<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/x-icon" href="images/Mobile-removebg-preview.png">

<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>  
<?php
        include "backend/db.php";
        session_start();
        $id = $_SESSION['id'];
        $orderQuery = "SELECT * FROM user_tbl INNER JOIN order_tbl ON user_tbl.user_id = order_tbl.order_user_id WHERE order_tbl.order_user_id = $id";
        $orderResult = mysqli_query($conn, $orderQuery);

        $totalPrice = 0;
        while ($orderShow = mysqli_fetch_assoc($orderResult)) {
            $totalPrice += $orderShow['product_price'];
            echo "


            <table>
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                </thead>
        
                <tr>
                    <td>
                        <img class='' src='backend/{$orderShow['product_image']}'width='150' height='150' alt='Product image'>
                    </td>
                </tr>
                <tr>
                    <td>
                      <h5>{$orderShow['product_name']}</h5>
                    </td>
                </tr>
                <tr>
                      <td>
                        <p class='mb-1'>&#36;{$orderShow['product_price']}</p> 
                      </td>
                </tr>
                
              </table> 

            ";
        }
        



        ?>
     

       