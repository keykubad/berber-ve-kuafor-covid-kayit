<div class="main-content">
<div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

<?php
$idal	=(int)$_GET["id"];	
$ara_post	=mysqli_real_escape_string($conn,$_POST ["arama"]);	
$sayfa = $_GET['s'] ? $_GET['s'] : 1; //urlden gelen sayfa değeri var ise o değeri, yok ise 1 değeri veriyoruz.
$toplam_icerik_sayisi = mysqli_num_rows(mysqli_query($conn,"select * from musteriler where tarih like '%".tarih_ara($ara_post)."%' and berber='".$idal."'"));
$limit = 20;
$sonSayfa = ceil($toplam_icerik_sayisi/$limit);

$baslangic = ($sayfa-1)*$limit;


$cek	= mysqli_query($conn,"select * from musteriler where tarih like '%".tarih_ara($ara_post)."%' and berber='".$idal."' LIMIT ".$baslangic.",".$limit." ");

?>
											<h4 class="card-title">Yönetici Müşteri SMS Listesi</h4>
                                        <p class="card-title-desc">Bu kısımdan müşteriler listelendikten sonra sms gönderilmesini istemediklerinizin onayını kaldırıp liste dışı yapabilirsiniz.</p>
<form method="post" action="yoneticismsgit.php" class="custom-validation">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table  table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th data-priority="3">SMS Durumu</th>
                                                        <th data-priority="1">Adı Soyadı</th>
                                                        <th data-priority="3">Tarih</th>
                                                        <th data-priority="1">Telefon</th>
                                               
											
                                                    </tr>
                                                    </thead>
                                                    <tbody>
													<?php
														while($al=mysqli_fetch_assoc($cek)){
															$isimsoyisim= $al["isimsoyisim"];
															$telefon		= $al["telefon"];
															$idi	 = $al["id"];
															$tarih		 = tarih_duzelt($al["tarih"]);
															
													
													?>
                                                    <tr>
													
                                                     								<th>
										
								<input type="checkbox" name="smsgit[]"  value="<?php echo $idi; ?>" checked />
                                         <input type="hidden" name="adisoyadi[]"  value="<?php echo $isimsoyisim; ?>" />
										 <input type="hidden" name="telefonno[]"  value="<?php echo $telefon; ?>" />
										 <input type="hidden" name="tarihi[]"  value="<?php echo $tarih; ?>" />
										 <input type="hidden" name="berberid"  value="<?php echo $idal; ?>" />
											</th>
														 <th><?php echo $isimsoyisim; ?></th>
                                                     
														 <td><?php echo $tarih; ?></td>
															<td><?php echo $telefon; ?></td>
                                                    
                                                        
														
														</td>
														
													
                                                    </tr>
													<?php } ?>
                                                    </tbody>
                                                </table>
												                  <div class="form-group mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-pink waves-effect waves-light mr-1" id="sa-success">
                                                        SMS Gönder
                                                    </button>
                                                </div>
                                            </div>
										</form>		
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
                                                    <a class="page-link" href="yonetici.php?sayfa=yoneticismsgonderson&id='.$idal.'&s='.$onceki.'" tabindex="-1">« Önceki</a></li>';
		  
	}		 
	if($sayfa==1){ 
		echo '<li class="page-item"><a class="page-link">1</a></li>';
	}
	else{ // bulunmuyorsak
		echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticismsgonderson&id='.$idal.'&s=1">1</a></li>'; 	
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
			echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticismsgonderson&id='.$idal.'&s='.$i.'">'.$i.'</a></li>'; 
		}
		if($i==$sonSayfa) break;  
	}
	
	
	if($sayfa+$x < $sonSayfa-1) { 
		echo '...'; 			
		echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticismsgonderson&id='.$idal.'&s='.$sonSayfa.'">'.$sonSayfa.'</a></li>'; 
	}elseif($sayfa+$x == $sonSayfa-1) { 			
		echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticismsgonderson&id='.$idal.'&s='.$sonSayfa.'">'.$sonSayfa.'</a></li>'; 		 
	}

	
	if($sayfa < $sonSayfa){  
		$sonraki = $sayfa+1; 	  
		echo '<li class="page-item"><a class="page-link" href="yonetici.php?sayfa=yoneticismsgonderson&id='.$idal.'&s='.$sonraki.'"> Sonraki » </a></li>'; 
	}	
}

/*sayfalama buton kodları*/

/*SMS için gönderim kısmı başlıyor*/
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