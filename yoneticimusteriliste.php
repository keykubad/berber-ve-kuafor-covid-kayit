<?php
$sayfa = $_GET['s'] ? $_GET['s'] : 1; //urlden gelen sayfa değeri var ise o değeri, yok ise 1 değeri veriyoruz.
$toplam_icerik_sayisi = mysqli_num_rows(mysqli_query($conn,"select * from musteriler"));
$limit = 20;
$sonSayfa = ceil($toplam_icerik_sayisi/$limit);

$baslangic = ($sayfa-1)*$limit;


$cek	= mysqli_query($conn,"select * from musteriler  LIMIT ".$baslangic.",".$limit."");
?>  

  <div class="main-content">
<div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
									<form method="post" action="yonetici.php?sayfa=yoneticimusteriarama" class="custom-validation">
										<div class="form-group">
                                                <label>Arama Yap </label>
                                                <input type="text" name="arama" class="form-control" required />
                                            </div>
											     <div class="form-group mb-0" style="float:right">
                                                <div>
                                                    <button type="submit" class="btn btn-pink waves-effect waves-light mr-1" id="sa-success">
                                                        ARA
                                                    </button>
                                                </div>
                                            </div>
											</form>
											<br><br>
											<h4 class="card-title">Yönetici Müşteri Listesi</h4>
                                        <p class="card-title-desc">Bu kısımdan müşterileri listeleyip arama ve düzenleme yapabilirsiniz.</p>

                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table  table-striped">
                                                    <thead>
                                                    <tr>
                                                        
                                                        <th data-priority="1">Adı Soyadı</th>
                                                        <th data-priority="3">Tarih</th>
                                                        <th data-priority="1">Telefon</th>
                                                        <th data-priority="3">Berber</th>
														<th data-priority="3">İşlemler</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
													<?php
														while($al=mysqli_fetch_assoc($cek)){
															$isimsoyisim= $al["isimsoyisim"];
															$berber		= $al["berber"];
															$telefon	 = $al["telefon"];
															$idi	 = $al["id"];
															$tarih		 = $al["tarih"];
															
													
													?>
                                                    <tr>
                                                     
														 <th><?php echo $isimsoyisim; ?></th>
                                                         <td><?php echo tarih_duzelt($tarih); ?></td>
														 <td><?php echo $telefon; ?></td>
                                                   
                                                        <td><?php 
																//berberin idsine göre buluyoruz
																$berberbul	=mysqli_fetch_assoc(mysqli_query($conn,"select * from kullanicilar where id='".$berber."'"));
																echo $berberbul["kurumadi"];
														
														?></td>
                                                        <td><button type="button" class="btn btn-success waves-effect waves-light" onclick="location.href='yonetici.php?sayfa=yoneticimusteriduzenle&id=<?php echo $idi; ?>'">Düzenle</button>
														<button type="button" class="btn btn-warning waves-effect waves-light" onclick="location.href='yonetici.php?sayfa=yoneticimusterisil&id=<?php echo $idi; ?>'">SİL</button>
														</td>
														
													
                                                    </tr>
													<?php } ?>
                                                    </tbody>
                                                </table>
												
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
                                                    <a class="page-link" href="yonetici.php?sayfa=yoneticimusteriliste&s='.$onceki.'" tabindex="-1">« Önceki</a></li>';
		  
	}		 
	if($sayfa==1){ 
		echo '<li class="page-item"><a class="page-link">1</a></li>';
	}
	else{ // bulunmuyorsak
		echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticimusteriliste&s=1">1</a></li>'; 	
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
			echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticimusteriliste&?s='.$i.'">'.$i.'</a></li>'; 
		}
		if($i==$sonSayfa) break;  
	}
	
	
	if($sayfa+$x < $sonSayfa-1) { 
		echo '...'; 			
		echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticimusteriliste&s='.$sonSayfa.'">'.$sonSayfa.'</a></li>'; 
	}elseif($sayfa+$x == $sonSayfa-1) { 			
		echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticimusteriliste&s='.$sonSayfa.'">'.$sonSayfa.'</a></li>'; 		 
	}

	
	if($sayfa < $sonSayfa){  
		$sonraki = $sayfa+1; 	  
		echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticimusteriliste&s='.$sonraki.'"> Sonraki » </a></li>'; 
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