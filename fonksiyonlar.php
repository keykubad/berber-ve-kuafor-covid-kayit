<?php
//sweet alert fonksiyonum
Function alert ($say){


if ($say==1) {
    $_SESSION['alert'] = array("type" => "success", "title" => "Tebrikler", "text" => "Başarılı"); 

} else if($say==0) {
  $_SESSION['alert'] = array("type" => "error", "title" => "Hata", "text" => "İşlem Başarısız"); 
 
}
}
//tarih düzeltme işlemim
function tarih_duzelt($tarih){
	return date('d-m-Y H:i:s', strtotime($tarih));
		
}
//tarih arama işlemi
function tarih_ara($tarih){
	return date('Y-m-d', strtotime($tarih));
	
}
//yönlendirme işlemim
function git($git,$sure){
	echo '<meta http-equiv="refresh" content="'.$sure.';URL='.$git.'">';
	
}
?>