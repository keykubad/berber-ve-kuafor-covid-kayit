<?php

$idal	= (int)$_GET["id"];
$cek	= mysqli_fetch_assoc(mysqli_query($conn,"select * from musteriler WHERE id='".$idal."'"));
?>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Müşteri Düzenleme</h4>
                                        <p class="card-title-desc">Müşteri Düzenlemesini bu alandan yapabilirsiniz.</p>

                                            <form method="post" class="custom-validation">
                                            <div class="form-group">
                                                <label>Adı Soyadı </label>
                                                <input type="text" name="isimsoyisim" class="form-control" value="<?php echo $cek["isimsoyisim"]; ?>" required />
                                            </div>

											<div class="form-group">
                                                <label>Telefon <small>(lütfen 11 haneli telefon yazınız (örn:05315002222))</small></label>
                                                <input type="text" name="tel" value="<?php echo substr($cek["telefon"],0,11); ?>" class="form-control" required />
                                            </div>
											<div class="form-group">
                                                <label>TC Kimlik No <small>(lütfen 11 haneli tckimlik yazınız (örn:12312121211))</small></label>
                                                <input type="text" name="tckimlik" value="<?php echo substr($cek["tckimlik"],0,11); ?>" class="form-control" required />
                                            </div>
												<div class="form-group">
                                                <label>Doğum Yılı <small>(lütfen sadece yıl olarak yazınız (örn:1970))</small></label>
                                                <input type="text" name="dogumyil" value="<?php echo substr($cek["dogumyil"],0,4); ?>" class="form-control"/>
                                            </div>
	
                                            <div class="form-group mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-pink waves-effect waves-light mr-1" id="sa-success">
                                                        Düzenle
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
$telefon		= $_POST ["tel"];
$tckimlik		= $_POST ["tckimlik"];
$dogumyil 		= $_POST ["dogumyil"];
$timestamp 		= date("Y-m-d H:i:s");



		$kayitet	= mysqli_query($conn,"update musteriler set isimsoyisim='$isimsoyisim',telefon='$telefon', tckimlik='$tckimlik', 
		dogumyil='$dogumyil',tarih='".$cek["tarih"]."' WHERE id='".$idal."'");

	if($kayitet){
	$say=1;
	alert (1);
	}else{
	$say=0;
	alert (0);
	}
	
}
?>