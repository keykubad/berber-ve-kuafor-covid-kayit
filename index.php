<?php
include ('ayar.php');

?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Berber ve Kuaförler İçin Covid Kayıt Formu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Berber ve Kuaförler İçin Covid Kayıt Formu" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $cwd; ?>assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

         <!-- Begin page -->
         <div class="accountbg" style="background: url('assets/images/bg.jpg');background-size: cover;background-position: center;"></div>

        <div class="account-pages mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">

                                <div class="p-3">
                                    <h4 class="font-size-18 mt-2 text-center">Berber ve Kuaförler İçin Covid Kayıt Formu !</h4>
                                    <p class="text-muted text-center mb-4">Giriş bilgilerinizi aşağıdaki alanlara yazınız.</p>
    
                                    <form class="form-horizontal" method="post" action="giris.php">
    
                                        <div class="form-group">
                                            <label for="username">Kullanıcı adı </label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Kullanıcı adınız">
                                        </div>
    
                                        <div class="form-group">
                                            <label for="userpassword">Şifre </label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Şifreniz">
                                        </div>
    
                                        <div class="form-group row mt-12">
                                
                                            <div class="col-sm-12 text-right">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Giriş Yap</button>
                                            </div>
                                        </div>
    

                                    </form>
    
                                </div>
    
                            </div>
                        </div>

    
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
