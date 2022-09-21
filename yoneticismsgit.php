<?php
include("ayar.php");
include ("fonksiyonlar.php");
//bu kısım sms gönderici firmanın giriş bilgileri yazılacaktır.
$smskullaniciadi	="5074602193";
$smssifre			="6FE55C";

$idal	= $_POST["berberid"];
$cekkim	= mysqli_fetch_assoc(mysqli_query($conn,"select * from kullanicilar WHERE id='".$idal."'"));
$cek	= mysqli_fetch_array(mysqli_query($conn,"select * from smsbilgi where id='1'"));

function XMLPOST($PostAddress,$xmlData)
{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$PostAddress);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,2);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlData);
		$result = curl_exec($ch);
		return $result;
}

$smsgit	=$_POST["smsgit"];
//$adisoyadi	=$_POST["adisoyadi"];
$telefonno	=$_POST["telefonno"];
$tarihi	=$_POST["tarihi"];
if (isset($smsgit)) { 

	foreach ($smsgit as $value => $key){


$xml='<?xml version="1.0" encoding="UTF-8"?>
 <mainbody>
 <header>
 <company dil="TR">Netgsm</company>        
 <usercode>'.$smskullaniciadi.'</usercode>
 <password>'.$smssifre.'</password>
 <type>1:n</type>
 <msgheader>VIZYONVERI</msgheader>
 </header>
 <body>
 <msg>
 <![CDATA['.$tarihi[$value].' tarihinde '.$cekkim["kurumadi"].' '.$cek["smsmesaj"].']]>
 </msg>
 <no>'.$telefonno[$value].'</no>
 </body>
 </mainbody>';
 
 $gelen=XMLPOST('https://api.netgsm.com.tr/sms/send/xml',$xml);
		}
   

} 
 


if($gelen==00){
	git("yonetici.php?sayfa=smsbasarili",0);
	}else{

	git("yonetici.php?sayfa=smshata",0);
	}

?>