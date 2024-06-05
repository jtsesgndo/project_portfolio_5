<?php

   if(!isset($_SESSION['level'])){
    header("Location: login_setter.php");
   }else if($_SESSION['level'] != 0){
    header("Location: login_setter.php");
   }



?>