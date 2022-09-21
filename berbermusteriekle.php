<?php
$berbersec	= mysqli_fetch_array(mysqli_query($conn,"select * from kullanicilar where kullaniciadi='".$_SESSION["user"]."'"));
?>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Berber Müşteri Ekleme</h4>
                                        <p class="card-title-desc">Müşteri eklemesini bu alandan yapabilirsiniz.</p>

                                            <form method="post" class="custom-validation">

                                            <div class="form-group">
                                                <label>Adı Soyadı </label>
                                                <input type="text" name="isimsoyisim" class="form-control" required />
                                            </div>
											<div class="form-group">
                                                <label>Telefon Numarası <small>(lütfen 11 haneli telefon yazınız (örn:05315002222))</small></label>
                                                <input type="text" name="telefon" class="form-control" required />
                                            </div>
											<div class="form-group">
                                                <label>TC Kimlik No <small>(lütfen 11 haneli tckimlik yazınız (örn:12312121211))</small> </label>
                                                <input type="text" name="tckimlik" class="form-control" required />
                                            </div>
												<div class="form-group">
                                                <label>Doğum Yılı <small>(lütfen sadece yıl olarak yazınız (örn:1970))</small></label>
                                                <input type="text" name="dogumyil" class="form-control"/>
                                            </div>
											
                                            <div class="form-group mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-pink waves-effect waves-light mr-1" id="sa-success">
                                                        Ekle
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
$isimsoyisim	= $_POST ["isimsoyisim"];
$telefon		= substr($_POST ["telefon"],0,11);
$tckimlik 		= substr($_POST ["tckimlik"],0,11);
$dogumyil			= substr($_POST ["dogumyil"],0,4);
$berberkim		=$berbersec["id"];

		$kayitet	= mysqli_query($conn,"INSERT INTO musteriler (isimsoyisim,berber, telefon, tckimlik, dogumyil) 
VALUES ('$isimsoyisim','$berberkim','$telefon','$tckimlik','$dogumyil')");

	if($kayitet){
	$say=1;
	alert (1);
	}else{
	$say=0;
	alert (0);
	}
	
}
?>