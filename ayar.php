<?php

/* Bağlantıyı Başlat */
$conn = mysqli_connect("localhost","demo_berber","112233asx**123");

/* Bağlantıyı Kontrol Et */
if (mysqli_connect_errno()){
    /* Bağlantı Başarısız İse */
    echo "Bağlantısı Başarısız. Hata: " . mysqli_connect_error();
}


mysqli_select_db($conn,"demo_berber") or die("Veritabanina Baglanilamadi");
mb_internal_encoding('UTF-8');
 
mysqli_query($conn,'SET NAMES UTF8');
 
//bu kısım sabit linkleri içerir siteye göre değişecektir.
define("TEMAURL", "http://demo.keykubad.com/berber/");
//zamanı türkiye yap
date_default_timezone_set('Etc/GMT-3');
?>