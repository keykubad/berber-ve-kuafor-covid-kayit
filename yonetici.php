<?php
include ("ayar.php");
include ("fonksiyonlar.php");
ob_start();
session_start();


 
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}else{



include ("case.php");


}




?>