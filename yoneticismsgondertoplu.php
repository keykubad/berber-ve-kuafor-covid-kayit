<?php
$idcek	=$_GET["id"];
?>
<div class="main-content">
<div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
									<center>Bu kısımdan toplu sms gönderilecek berber müşterilerine ait tarih araması yaparak ilgili tarihte berbere gelen tüm müşterilere sms atabilirsiniz.</center><br>
									<form method="post" action="yonetici.php?sayfa=yoneticismsgonderson&id=<?php echo $idcek; ?>" class="custom-validation">
										<div class="form-group">
                                                <label>Hangi tarih <small>(örn: 29-05-2020) veya (örn: 29-05) </small></label>
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
