<?php
    session_start();

   if(!isset($_SESSION['level'])){
    header("Location: login_setter.php");
   }else if($_SESSION['level'] != 1){
    header("Location: login_setter.php");
   }



?>