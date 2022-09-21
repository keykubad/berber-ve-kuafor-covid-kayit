<?php

$sayfam	=$_GET["sayfa"];
?>
               <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                Berber ve Kuaförler İçin Covid Kayıt Yönetim Paneli
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Powered<i class="mdi mdi-heart text-danger"></i> by Dijital Arı
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Ayarlar</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Tema Seçimi Yap</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="<?php echo TEMAURL; ?>assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Açık Mod</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="<?php echo TEMAURL; ?>assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="<?php echo TEMAURL; ?>assets/css/bootstrap-dark.min.css" 
                            data-appStyle="<?php echo TEMAURL; ?>assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Karanlık Mod</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="<?php echo TEMAURL; ?>assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="<?php echo TEMAURL; ?>assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Modu</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?php echo TEMAURL; ?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo TEMAURL; ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo TEMAURL; ?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo TEMAURL; ?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo TEMAURL; ?>assets/libs/node-waves/waves.min.js"></script>

        
          <!-- Peity chart-->
          <script src="<?php echo TEMAURL; ?>assets/libs/peity/jquery.peity.min.js"></script>
		  
		  
      
	 <?php 
		if($sayfam=="yoneticiliste"){
	 ?>
	   <script src="<?php echo TEMAURL; ?>assets/libs/admin-resources/rwd-table/rwd-table.min.js"></script>
        <!-- Init js -->
        <script src="<?php echo TEMAURL; ?>assets/js/pages/table-responsive.init.js"></script>
		
   <?php }else if(($sayfam=="yoneticiveberberekle") or ($sayfam=="yoneticiveberberduzenle") or ($sayfam=="yoneticiveberbersil") 
	   or ($sayfam=="yoneticimusteriekle") or ($sayfam=="yoneticimusteriduzenle") or ($sayfam=="berberbilgiduzenle")  or ($sayfam=="berbermusteriekle")
    or ($sayfam=="berbermusteriduzenle") or ($sayfam=="yoneticismsmesaj") or ($sayfam=="smsbasarili") or ($sayfam=="smshata")) { ?>
    <!-- Sweet Alerts js -->
        <script src="<?php echo TEMAURL; ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>


		
   <?php } ?>
   			<?php
			
			// Bu kodu index.php veya hangi sayfaya istiyorsan o sayfanın en altına ekle.
			if(isset($_SESSION["alert"])) {
			  echo '<script type="text/javascript">
				Swal.fire({
				title: "'.(($_SESSION["alert"]["title"]) ? $_SESSION["alert"]["title"] : null).'",
				text: "'.(($_SESSION["alert"]["text"]) ? $_SESSION["alert"]["text"] : null).'",
				type: "'.(($_SESSION["alert"]["type"]) ? $_SESSION["alert"]["type"] : null).'",
				showConfirmButton: true
			  });</script>';
			 unset($_SESSION['alert']);
			}
			?>
   <!--C3 Chart-->
        <script src="<?php echo TEMAURL; ?>assets/libs/d3/d3.min.js"></script>
        <script src="<?php echo TEMAURL; ?>assets/libs/c3/c3.min.js"></script>

        <script src="<?php echo TEMAURL; ?>assets/libs/jquery-knob/jquery.knob.min.js"></script> 

        <script src="<?php echo TEMAURL; ?>assets/js/pages/dashboard.init.js"></script>

        <script src="<?php echo TEMAURL; ?>assets/js/app.js"></script>
		



    </body>
</html>