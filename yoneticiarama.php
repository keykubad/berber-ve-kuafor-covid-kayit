<?php
$sayfa = $_GET['s'] ? $_GET['s'] : 1; //urlden gelen sayfa değeri var ise o değeri, yok ise 1 değeri veriyoruz.

$ara_post	=mysqli_real_escape_string($conn,$_POST ["arama"]);
$toplam_icerik_sayisi = mysqli_num_rows(mysqli_query($conn,"select * from kullanicilar WHERE adsoyad like '%".$ara_post."%' or kullaniciadi like '%".$ara_post."%'"));
$limit = 10;
$sonSayfa = ceil($toplam_icerik_sayisi/$limit);

$baslangic = ($sayfa-1)*$limit;


$cek	= mysqli_query($conn,"select * from kullanicilar WHERE adsoyad like '%".$ara_post."%' or kullaniciadi like '%".$ara_post."%' LIMIT ".$baslangic.",".$limit."");
?>  

  <div class="main-content">
<div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
											<h4 class="card-title">Yönetici ve Berber Arama Sonuçları</h4>


                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table  table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>Kullanıcı adı</th>
                                                        <th data-priority="1">Adı Soyadı</th>
                                                        <th data-priority="3">Yetki</th>
                                                        <th data-priority="1">Kayıt Tarihi</th>
                                                        <th data-priority="3">Vergi NO</th>
														<th data-priority="3">İşlemler</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
													<?php
														while($al=mysqli_fetch_assoc($cek)){
															$kullaniciadi= $al["kullaniciadi"];
															$adisoyad	 = $al["adsoyad"];
															//$kurumadi	 = $al["kurumadi"];
															$kayittarih	 = $al["kayittarih"];
															$vergino	 = $al["vergino"];
															$yetki		 = $al["yetki"];
													?>
                                                    <tr>
                                                        <th><?php echo $kullaniciadi; ?></th>
														 <th><?php echo $adisoyad; ?></th>
                                                        <td><?php if($yetki==1){ echo "Yönetici"; } else { echo "Berber"; } ?></td>
                                                        <td><?php echo tarih_duzelt($kayittarih); ?></td>
                                                        <td><?php echo $vergino; ?></td>
                                                        <td><button type="button" class="btn btn-success waves-effect waves-light" onclick="location.href='yonetici.php?sayfa=yoneticiveberberduzenle&id=<?php echo $idi; ?>'">Düzenle</button>
														<button type="button" class="btn btn-warning waves-effect waves-light" onclick="location.href='yonetici.php?sayfa=yoneticiveberbersil&id=<?php echo $idi; ?>'">SİL</button>
														</td>
														
													
                                                    </tr>
													<?php } ?>
                                                    </tbody>
                                                </table>
												<a type="button" class="btn btn-warning waves-effect waves-light" href='yonetici.php?sayfa=yoneticiliste'>GERİ GİT</a>
                                            </div>

                                        </div>
										<br>
												<div style="float:right">
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-sm mb-0">
<?php 
/*sayfalama buton kodları*/
if($toplam_icerik_sayisi > $limit){ 
	echo '<br><br>';

	$x = 2;  
	if($sayfa > 1){	
		$onceki = $sayfa-1;	
			echo '  <li class="page-item">
                                                    <a class="page-link" href="yonetici.php?sayfa=yoneticiliste&s='.$onceki.'" tabindex="-1">« Önceki</a></li>';
		  
	}		 
	if($sayfa==1){ 
		echo '<li class="page-item"><a class="page-link">1</a></li>';
	}
	else{ // bulunmuyorsak
		echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticiliste&s=1">1</a></li>'; 	
	}

	if($sayfa-$x > 2){ 
		echo '...'; 
		$i = $sayfa-$x;  
	}else { 			
		$i = 2; 		  
	}

	
	for($i; $i<=$sayfa+$x; $i++) { 
		if($i==$sayfa){ 
			echo '&nbsp;<li class="page-item"><a class="page-link">'.$i.'</a></li>&nbsp;'; 	
		}
		else{//değil ise
			echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticiliste&?s='.$i.'">'.$i.'</a></li>'; 
		}
		if($i==$sonSayfa) break;  
	}
	
	
	if($sayfa+$x < $sonSayfa-1) { 
		echo '...'; 			
		echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticiliste&s='.$sonSayfa.'">'.$sonSayfa.'</a></li>'; 
	}elseif($sayfa+$x == $sonSayfa-1) { 			
		echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticiliste&s='.$sonSayfa.'">'.$sonSayfa.'</a></li>'; 		 
	}

	
	if($sayfa < $sonSayfa){  
		$sonraki = $sayfa+1; 	  
		echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticiliste&s='.$sonraki.'"> Sonraki » </a></li>'; 
	}	
}

/*sayfalama buton kodları*/
?>
									

                                            </ul>
                                        </nav>
										</div>
                                    </div>
									
                                </div>
								
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
				</div>