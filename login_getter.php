<?php

include 'backend/db.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// $checkUserStmt = "SELECT * FROM user_tbl";
$checkUserStmt = "SELECT * FROM user_tbl WHERE user_username = '$username' AND user_password = '$password' AND user_level = 0";
$checkUserQuery = mysqli_query($conn, $checkUserStmt);
// For User


$checkAdminStmt = "SELECT * FROM user_tbl WHERE user_username = '$username' AND user_password = '$password' AND  user_level = 1";
$checkAdminQuery = mysqli_query($conn, $checkAdminStmt);


    echo "$username <br> $password <br>";

    // echo mysqli_num_rows($checkUserQuery);


    if(mysqli_num_rows($checkUserQuery)){
        $userShow = mysqli_fetch_assoc($checkUserQuery);
        // echo "$userShow[user_id] <br> $userShow[user_username] <br> $userShow[user_level]";

        $_SESSION['id'] = $userShow['user_id'];
        $_SESSION['level'] = $userShow['user_level'];
        $_SESSION['username'] = $userShow['user_username'];
        // Put into values sa loob ng session

        header("Location: index.php");
    }else if(mysqli_num_rows($checkAdminQuery)){
        $userShow = mysqli_fetch_assoc($checkAdminQuery);

        $_SESSION['id'] = $userShow['user_id'];
        $_SESSION['level'] = $userShow['user_level'];
        $_SESSION['username'] = $userShow['user_username'];
        // Put into values sa loob ng session

        header("Location: backend/add_remove_update_products.php");
    }else{
        echo "Wrong password or username";
    }

    // 0 = user
    // 1 = admin

?>