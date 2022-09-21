<?php
//bu sayfa tum sayfaları ortak aldığım case
//burada yoneticimi berbermi bakacağız
$yetkikontrol	= mysqli_fetch_array(mysqli_query($conn,"select * from kullanicilar where kullaniciadi='".$_SESSION["user"]."'"));
//toplamları alıyoruz
$toplam_yonetici	=mysqli_num_rows(mysqli_query($conn,"select * from kullanicilar where yetki='1'"));
$toplam_berber		=mysqli_num_rows(mysqli_query($conn,"select * from kullanicilar where yetki='2'"));
$toplam_musteri		=mysqli_num_rows(mysqli_query($conn,"select * from musteriler"));
$toplam_berber_musteri		=mysqli_num_rows(mysqli_query($conn,"select * from musteriler where berber='".$yetkikontrol["id"]."'"));
	if($yetkikontrol["yetki"]=="1"){
	include("ust.php");
	include ("menuler.php");
 switch ($_GET['sayfa']) {

           case 'hosgeldin': include ('hosgeldin.php'); break;
           case 'yoneticiveberberekle': include ('yoneticiveberberekle.php'); break;
           case 'yoneticiliste':include ('yoneticiliste.php'); break;
		   case 'yoneticiarama':include ('yoneticiarama.php'); break;
		   case 'yoneticiveberberduzenle':include ('yoneticiveberberduzenle.php'); break;
		   case 'yoneticiveberbersil':include ('yoneticiveberbersil.php'); break;
		   case 'yoneticicikis':include ('yoneticicikis.php'); break;
		   case 'yoneticimusteriekle':include ('yoneticimusteriekle.php'); break;
		   case 'yoneticimusteriliste':include ('yoneticimusteriliste.php'); break;
		   case 'yoneticimusteriduzenle':include ('yoneticimusteriduzenle.php'); break;
		   case 'yoneticimusteriarama':include ('yoneticimusteriarama.php'); break;
		   case 'yoneticimusterisil':include ('yoneticimusterisil.php'); break;
		    case 'yoneticismsgonder':include ('yoneticismsgonder.php'); break;
			case 'yoneticismsgondertoplu':include ('yoneticismsgondertoplu.php'); break;
			case 'yoneticismsgonderson':include ('yoneticismsgonderson.php'); break;
			case 'yoneticismsmesaj':include ('yoneticismsmesaj.php'); break;
			case 'yoneticismsgit':include ('yoneticismsgit.php'); break;
			case 'smshata':include ('smshata.php'); break;
			case 'smsbasarili':include ('smsbasarili.php'); break;
           default: include ('hosgeldin.php'); break;
       }
	include ("alt.php");
	}else{
		
		//burası berber sayfaları
	include("ust.php");
	include ("menuler.php");
 switch ($_GET['sayfa']) {
           case 'hosgeldin': include ('hosgeldin.php'); break;
		   case 'berberbilgiduzenle': include ('berberbilgiduzenle.php'); break;
		   case 'berbermusteriekle': include ('berbermusteriekle.php'); break;
		   case 'berbermusteriliste':include ('berbermusteriliste.php'); break;
		   case 'berbermusteriduzenle':include ('berbermusteriduzenle.php'); break;
	
		   case 'berbermusteriarama':include ('berbermusteriarama.php'); break;
		   case 'yoneticicikis':include ('yoneticicikis.php'); break;
		  
           default: include ('hosgeldin.php'); break;
       }
	include ("alt.php");
		
	}
	

?>