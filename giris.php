<?php
include("ayar.php");
ob_start();
session_start();
 
$kadi = $_POST['username'];
$sifre = md5($_POST['password']);

$sql_check = mysqli_query($conn,"select * from kullanicilar where kullaniciadi='".$kadi."' and sifre='".$sifre."' ");

if(mysqli_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = md5($sifre);
    header("Location:yonetici.php");

}
else {
    if($kadi=="" or $sifre=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
 
ob_end_flush();
?>