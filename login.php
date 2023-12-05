<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>TeamHouse - Iniciar Sesion</title>

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
        
        <!-- sweet alerts -->
        <link href="assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="css/helper.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="js/modernizr.min.js"></script>
        
        
    </head>
    <body>
        <?php include_once('php/background.php'); ?>
        <div class="wrapper-page">
            <div style=" position: relative; " class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"> Accede al foro <strong>TeamHouse</strong> </h3>
                </div> 

                <div class="panel-body">
                <form method="post" id="fo3" class="form-horizontal m-t-20" action="validar.php">
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="nombre" type="text" required="" placeholder="Usuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="pass" type="password" required="" placeholder="Contraseña">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-default">
                                <input id="checkbox-signup" name="remember" type="checkbox" checked>
                                <label for="checkbox-signup">
                                    Recuerdame
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-purple btn-lg w-lg waves-effect waves-light" type="submit">Entrar</button>
                        </div>
                    </div>
<?php
                    if($_GET['status'] == 'error'){
                    
                    echo '<div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <p id="sa-incorrect" class="text-danger">Usuario o contraseña incorrecta.</p>
                        </div>
                    </div>';
                    
                    } elseif($_GET['status'] == 'unregister') {
                    echo '<div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <p id="sa-unregister" class="text-danger">Inicie sesión antes por favor.</p>
                        </div>
                    </div>';
                    }
                    
                    elseif($_GET['status'] == 'incorrect') {
                    echo '<div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <p id="sa-incorrect-u" class="text-danger">El usuario no existe o ha expirado.</p>
                        </div>
                    </div>';
                    }
                    
                    elseif($_GET['status'] == 'inactive') {
                    echo '<div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <p style=" cursor:pointer; " id="sa-incorrect-u" class="text-danger">El usuario no se ha activado, por favor revise su correo. De no existir contacte a su administrador.</p>
                        </div>
                    </div>';
                    }
                    
                    elseif($_GET['status'] == 'can_login') {
                    echo '<div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <p style=" cursor:pointer; " id="sa-correct" class="text-success">Su cuenta ha sido activada!</p>
                        </div>
                    </div>';
                    }
                    
                    
?>
                    <div class="form-group m-t-30">
                        <!--div class="col-sm-6 text-left">
                            <a href="#"><i class="fa fa-lock m-r-5"></i> Olvidaste tu contraseña?</a>
                        </div-->
                        <!--div class="col-sm-6 text-right"-->
                        <div class="text-center">
                            <a href="register.php">Crear una Cuenta</a>
                        </div>
                    </div>
                    <!--div class="form-group m-t-30">
                        <div class="col-sm-7">
                            <a href="recoverpw.html"><i class="fa fa-lock m-r-5"></i> Olvidastes tu contraseña?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="register.html">Create an account</a>
                        </div>
                    </div-->
                </form> 
                </div>                                 
            </div>
        </div>
</div> </div>
        
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