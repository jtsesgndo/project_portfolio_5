<?php

    $username = "root";
    $password = "";
    $servername = "localhost";
    $db = "mobilesouq_db";
    
    $conn = mysqli_connect($servername, $username, $password, $db);

    if($conn){
    }else{
        die(mysqli_connect_error());
    }


?>
