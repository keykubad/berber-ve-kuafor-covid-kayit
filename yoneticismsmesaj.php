<?php
$cek	= mysqli_fetch_assoc(mysqli_query($conn,"select * from smsbilgi WHERE id='1'"));
?>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Yönetici SMS Mesaj Yönetimi</h4>
                                        <p class="card-title-desc">Yöneticiler için sms mesaj yönetimini bu alandan yapabilirsiniz.</p>

                                            <form method="post" class="custom-validation">
                                            <div class="form-group">
                                                <label>Mesaj Başlığı </label>
                                                <input type="text" name="baslik" class="form-control" value="<?php echo $cek["smsbaslik"]; ?>" required />
                                            </div>
	                                            <div class="form-group">
                                                <label>Mesaj İçeriği <small>En fazla 917 karakter olmalıdır.</small> </label>
                                                <textarea name="mesaj" class="form-control" required /><?php echo $cek["smsmesaj"]; ?></textarea>
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
$baslik	= $_POST ["baslik"];
$mesaj		= $_POST ["mesaj"];



		$kayitet	= mysqli_query($conn,"update smsbilgi set smsbaslik='$baslik',smsmesaj='$mesaj' WHERE id='1'");

	if($kayitet){
	$say=1;
	alert (1);
	}else{
	$say=0;
	alert (0);
	}
	
}
?>