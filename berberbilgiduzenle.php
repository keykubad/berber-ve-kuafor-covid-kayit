<?php
$cek	= mysqli_fetch_assoc(mysqli_query($conn,"select * from kullanicilar WHERE kullaniciadi='".$_SESSION["user"]."'"));
?>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Berber Bilgi Güncelleme</h4>
                                        <p class="card-title-desc">Kurumunuza ait bilgileri bu alandan güncelleme yapabilirsiniz.</p>

                                            <form method="post" class="custom-validation">

                                            <div class="form-group">
                                                <label>Şifre </label>
                                                <div>
                                                    <input type="password" name="sifre" id="pass2" class="form-control" />
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label>Adı Soyadı </label>
                                                <input type="text" name="adsoyad" value="<?php echo $cek["adsoyad"]; ?>" class="form-control" required />
                                            </div>
											<div class="form-group">
                                                <label>Kurum adı </label>
                                                <input type="text" name="kurumadi" value="<?php echo $cek["kurumadi"]; ?>" class="form-control" required />
                                            </div>
												<div class="form-group">
                                                <label>Vergi No <small>(Şahıs Şirketi ise TC kimlik no yazmanız gereklidir.)</small></label>
                                                <input type="text" name="vergino" value="<?php echo $cek["vergino"]; ?>" class="form-control"/>
                                            </div>

											
                                            <div class="form-group mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-pink waves-effect waves-light mr-1" id="sa-success">
                                                        Güncelle
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div> <!-- end col -->

               
                        </div> <!-- end row -->

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
				
<?php
if($_POST){
//bu sayfalar ve degerler laravel ile yapılsa uğraştırmaz semih :)
$sifre			= md5($_POST ["sifre"]);
$adsoyad		= $_POST ["adsoyad"];
$kurumadi		= $_POST ["kurumadi"];
$vergino 		= substr($_POST ["vergino"],0,11);
$timestamp 		= date("Y-m-d H:i:s");


		$kayitet	= mysqli_query($conn,"update kullanicilar set sifre='$sifre', adsoyad='$adsoyad', 
		kurumadi='$kurumadi', vergino='$vergino' WHERE id='".$cek["id"]."'");

	if($kayitet){
	$say=1;
	alert (1);
	}else{
	$say=0;
	alert (0);
	}
	
}
?>