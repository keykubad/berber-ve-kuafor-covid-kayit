
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Yönetici veya Berber Ekleme</h4>
                                        <p class="card-title-desc">Yönetici veya Berber EKlemesini bu alandan yapabilirsiniz.</p>

                                            <form method="post" class="custom-validation">
                                            <div class="form-group">
                                                <label>Kullanıcı adı </label>
                                                <input type="text" name="kullaniciadi" class="form-control" required />
                                            </div>

                                            <div class="form-group">
                                                <label>Şifre </label>
                                                <div>
                                                    <input type="password" name="sifre" id="pass2" class="form-control" required />
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label>Adı Soyadı </label>
                                                <input type="text" name="adsoyad" class="form-control" required />
                                            </div>
											<div class="form-group">
                                                <label>Kurum adı </label>
                                                <input type="text" name="kurumadi" class="form-control" required />
                                            </div>
												<div class="form-group">
                                                <label>Vergi No </label>
                                                <input type="text" name="vergino" class="form-control"/>
                                            </div>
										      <div class="form-group">
                                            <label>Yetki</label>
                                       
                                                <select name="yetki" class="form-control" required />
                                                    <option>Yetki Seç</option>
                                                    <option value="1">Yönetici</option>
                                                    <option value="2">Berber</option>
                                                </select>
                                          
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
$kullaniciadi	= $_POST ["kullaniciadi"];
$sifre			= md5($_POST ["sifre"]);
$adsoyad		= $_POST ["adsoyad"];
$kurumadi		= $_POST ["kurumadi"];
$vergino 		= $_POST ["vergino"];
$yetki			= $_POST ["yetki"];
$timestamp 		= date("Y-m-d H:i:s");


		$kayitet	= mysqli_query($conn,"INSERT INTO kullanicilar (kullaniciadi,sifre, adsoyad, kurumadi, vergino, yetki) 
VALUES ('$kullaniciadi','$sifre','$adsoyad','$kurumadi','$vergino','$yetki')");

	if($kayitet){
	$say=1;
	alert (1);

	}else{
	$say=0;
	alert (0);
	}
	
}
?>