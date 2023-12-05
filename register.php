<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>TeamHouse - Registro</title>

        <!-- Base Css Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="css/waves-effect.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="css/helper.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        
        <!-- sweet alerts -->
        <link href="assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="js/1jquery.min.js"></script>

        <script src="js/modernizr.min.js"></script>
        <!--script src="js/load_captcha.js"></script-->
    </head>
    <body>
        <?php include_once('php/background.php'); ?>
        <div class="wrapper-page">
            <div style=" position: relative; " class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                   <h3 class="text-center m-t-10 text-white"> Create una Cuenta </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" method="post" action="val-register.php">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="email" type="email" required="" placeholder="Correo">
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="text" name="user" required="" placeholder="Usuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="password" name="password" required="" placeholder="Contraseña">
                        </div>
                    </div>
                    
                    <!--div class="form-group">
                       <div class="col-xs-12">
						<input class="form-control input-lg" type="text" name="securityCode" id="securityCode" placeholder="Código de seguridad">
                        </div>
					</div>
					<div class="form-group col-md-8">	
                    <div>
					<img style="border: 1px solid #D3D0D0" src="get_captcha.php?rand=<?php echo rand(); ?>" id='captcha'>
                    </div>
                    </div>
					<div style="margin-top: 5%;" class="form-group col-md-4">
                        <div></div>
                        <a href="javascript:void(0)" id="reloadCaptcha"><span class="fa fa-spin fa-refresh text-purple" aria-hidden="true"></span></a> Recargar
                    </div-->
                    <div class="col-xs-12">
						<p class="text-danger text-center"><?php echo $_GET['info'];?></p>
                        </div>
                    
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-default">
                                <input id="checkbox-signup" type="checkbox" checked="">
                                <label for="checkbox-signup">
                                    Acepto los <a target="_blank" href="https://www.fullgame.cu/terms.php">Términos y Condiciones</a>
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-purple waves-effect waves-light btn-lg w-lg" type="submit">Registrar</button>
                        </div>
                    </div>

                    
                    
                </form> </div>
                </div>                                 
                
            </div>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script>

        <script src="assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>
	
	</body>
</html>