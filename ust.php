<?php
include("yollar.php");
$sayfam	=$_GET["sayfa"];
?>
<!doctype html>
<html lang="en">

    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php if($yetkikontrol["yetki"]=="2"){ echo "Berber Yönetim Paneli";}else { echo "Yönetici Paneli"; } ?> | Berber ve Kuaförler İçin Covid</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Berber ve Kuaförler İçin Covid" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
		
        <link rel="shortcut icon" href="<?php echo TEMAURL; ?>assets/images/favicon.ico">
     <!-- Responsive Table css -->
	 <?php 
		if($sayfam=="yoneticiliste"){
	 ?>
        <link href="<?php echo TEMAURL; ?>assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
   <?php }else if(($sayfam=="yoneticiveberberekle") or ($sayfam=="yoneticiveberberduzenle") or ($sayfam=="yoneticiveberbersil") 
	   or ($sayfam=="yoneticimusteriekle") or ($sayfam=="yoneticimusteriduzenle") or ($sayfam=="berberbilgiduzenle")  or ($sayfam=="berbermusteriekle")
    or ($sayfam=="berbermusteriduzenle") or ($sayfam=="yoneticismsmesaj") or ($sayfam=="smsbasarili") or ($sayfam=="smshata")) { ?>
		
		 <link href="<?php echo TEMAURL; ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
		<?php }?>
        <!-- Bootstrap Css -->
        <link href="<?php echo TEMAURL; ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo TEMAURL; ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo TEMAURL; ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="36">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="d-none d-sm-block ml-2">
                            <h4 class="page-title"><?php if($yetkikontrol["yetki"]=="2"){ echo "Berber Yönetim Paneli";}else { echo "Yönetici Paneli"; } ?></h4>
                        </div>
                    </div>

 

                    <div class="d-flex">

              

                        <div class="dropdown d-none d-lg-inline-block mr-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>



                        <div class="dropdown d-inline-block mr-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ion ion-md-notifications"></i>
                               
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-16"> Bilgiler </h5>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="mdi mdi-message-text-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 font-size-15 mb-1">Bugün</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1"><?php echo date("d.m.Y"); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
<?php 
//yetkiye bakıp menü eklemesi
	if($yetkikontrol["yetki"]==2){
?>

                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                    <i class="mdi mdi-message-text-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 font-size-15 mb-1">Toplam müşteri sayınız</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Toplam sayı <?php echo $toplam_berber_musteri; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
	<?php } else{?>
	                        <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                    <i class="mdi mdi-message-text-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 font-size-15 mb-1">Toplam Yönetici sayısı</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Toplam sayı <?php echo $toplam_yonetici; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                    <i class="mdi mdi-message-text-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 font-size-15 mb-1">Toplam Berber sayısı</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Toplam sayı <?php echo $toplam_berber; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
	
	<?php } ?>
                                </div>

                            </div>
                        </div>



                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-spin mdi-settings"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>

 