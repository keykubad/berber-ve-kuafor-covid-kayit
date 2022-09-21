    <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">
<?php 
$yetkikontrol	= mysqli_fetch_array(mysqli_query($conn,"select * from kullanicilar where kullaniciadi='".$_SESSION["user"]."'"));
//yetkiye bakıp menü eklemesi
	if($yetkikontrol["yetki"]==2){
		
		
?>

                    <!--- Berber Kısmı -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Ana Bölüm</li>

                          <li>
                                <a href="yonetici.php" class="waves-effect">
                                    <i class="mdi mdi-cube-outline"></i>
                                    <span> Berber Anasayfa </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                  
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Berber İşlemleri </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="yonetici.php?sayfa=berberbilgiduzenle">Bilgilerini Düzenle</a></li>
                                  
                                </ul>
                            </li>
						   <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                  
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>Müşteri İşlemleri</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="yonetici.php?sayfa=berbermusteriekle">Müşteri Ekleme</a></li>
                                    <li><a href="yonetici.php?sayfa=berbermusteriliste">Müşteri Listesi</a></li>
                                </ul>
                            </li>

							<li>
                                <a href="yonetici.php?sayfa=yoneticicikis" class="waves-effect">
                                    <i class="mdi mdi-buffer"></i>
                                    <span>Çıkış yap</span>
                                </a>
                            </li>



                        </ul>
                    </div>
<?php		
	}else{
		
?>
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Ana Bölüm</li>

                          <li>
                                <a href="yonetici.php" class="waves-effect">
                                    <i class="mdi mdi-cube-outline"></i>
                                    <span> Yönetici Anasayfa </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                  
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Yönetici </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="yonetici.php?sayfa=yoneticiliste">Yönetici Listesi</a></li>
                                    <li><a href="yonetici.php?sayfa=yoneticiveberberekle">Yönetici veya Berber Ekle</a></li>
                                </ul>
                            </li>
						   <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                  
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>Müşteri İşlemleri</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="yonetici.php?sayfa=yoneticimusteriekle">Yönetici Müşteri Ekleme</a></li>
                                    <li><a href="yonetici.php?sayfa=yoneticimusteriliste">Yönetici Müşteri Listesi</a></li>
                                </ul>
                            </li>
						   <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                  
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>SMS İşlemleri</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
								<li><a href="yonetici.php?sayfa=yoneticismsmesaj">Müşteri SMS Yönetimi</a></li>
                                    <li><a href="yonetici.php?sayfa=yoneticismsgonder">Müşteri SMS Gönder</a></li>
                                    
                                </ul>
                            </li>
							<li>
                                <a href="yonetici.php?sayfa=yoneticicikis" class="waves-effect">
                                    <i class="mdi mdi-buffer"></i>
                                    <span>Çıkış yap</span>
                                </a>
                            </li>



                        </ul>
                    </div>
					
	<?php } ?>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
			