<?php
$idal	= (int)$_GET["id"];
$cek	= mysqli_query($conn,"DELETE FROM musteriler WHERE id='".$idal."'");


	if($cek){
	$say=1;
	alert (1);
	git("yonetici.php?sayfa=yoneticimusteriliste",2);
	}else{
	$say=0;
	alert (0);
	git("yonetici.php?sayfa=yoneticimusteriliste",2);
	}
	

?>