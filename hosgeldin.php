<?php
$yetkikontrol	= mysqli_fetch_array(mysqli_query($conn,"select * from kullanicilar where kullaniciadi='".$_SESSION["user"]."'"));
?> 
   
   <div class="main-content">

                <div class="page-content">
				<center>
                    <div class="container-fluid">

                        <div class="row">
						
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Hoşgeldin <?php echo $yetkikontrol["adsoyad"]; ?></h4>
                                        <div class="mt-12">
                                            <div id="accordion">
                                                <div class="card mb-12">
                                                    <div class="card-header border-bottom-0 p-3" id="headingOne">
                                                        <h5 class="m-0 font-size-14">
                                                            <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                               aria-controls="collapseOne" class="text-dark">
                                                               Berberler için Covid kayıt platformu yönetici paneline hoş geldiniz. Sistemin tüm yönetimini solda yer alan menülerimizden sağlayabilirsiniz.
                                                            </a>
                                                        </h5>
                                                    </div>
<br> <div class="row">
<?php 
//yetkiye bakıp menü eklemesi
	if($yetkikontrol["yetki"]==2){
?>

								 <div class="col-md-4 col-xl-4">
                               <div class="card">
                                   <div class="card-body">
                                    <div class="mini-stat clearfix">
                                        <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-brown"><?php echo $toplam_berber_musteri; ?></span>
                                           Toplam Müşteri Sayınız
                                        </div>
                                        <div class="clearfix"></div>
                                        
                                    </div>
                                   </div>
                               </div>
                            </div>
<?php		
	}else{
		
?>
                            <div class="col-md-4 col-xl-4">
                               <div class="card">
                                   <div class="card-body">
                                    <div class="mini-stat clearfix">
                                        <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-brown"><?php echo $toplam_yonetici; ?></span>
                                           Toplam Yönetici Sayısı
                                        </div>
                                        <div class="clearfix"></div>
                                        
                                    </div>
                                   </div>
                               </div>
                            </div>
					
						  <div class="col-md-4 col-xl-4">
                               <div class="card">
                                   <div class="card-body">
                                    <div class="mini-stat clearfix">
                                        <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-brown"><?php echo $toplam_berber; ?></span>
                                           Toplam Berber Sayısı
                                        </div>
                                        <div class="clearfix"></div>
                                        
                                    </div>
                                   </div>
                               </div>
                            </div>

													  <div class="col-md-4 col-xl-4">
                               <div class="card">
                                   <div class="card-body">
                                    <div class="mini-stat clearfix">
                                        <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                                        <div class="mini-stat-info">
                                            <span class="counter text-brown"><?php echo $toplam_musteri; ?></span>
                                           Toplam Müşteri Sayısı
                                        </div>
                                        <div class="clearfix"></div>
                                        
                                    </div>
                                   </div>
                               </div>
                            </div>
	<?php } ?>						
							</div>
                                                </div>
                        
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
								
 
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
					</center>
                </div>
                <!-- End Page-content -->