<?php
session_start();

if(!isset($_SESSION["login"]) || $_SESSION['login'] == 'True') {
    header('Location:no.php');
}

$idc = $_SESSION['id'];

include_once('php/db.php');

$query="select * from usuarios where id = '$idc'";
$res = mysqli_query($connection,$query);
$count = mysqli_num_rows($res);

while($row=mysqli_fetch_array($res)){  

    $nombre = $row['nombre'];
    $fname = $row['fname'];
    $tel = $row['tel'];
    $pics = $row['pics'];
    $email = $row['email'];
    $cumple = $row['cumple'];
    $biografia = $row['biografia'];
    
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title><?php echo $nombre; ?></title>

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

        <script src="js/modernizr.min.js"></script>
        
    </head>
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">

                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white">&nbsp;</h3>
                </div> 

                <div class="panel-body" style="padding-top:0px;">
                 <form method="post" action="php/unlock.php" role="form" class="text-center"> 
                    <div class="user-thumb"> 
                        <img src="images/users/<?php echo $pics; ?>" class="img-responsive img-circle img-thumbnail" alt="thumbnail">
                    </div> 
                    <div class="form-group"> 
                        <h3><?php echo $nombre; ?></h3> 
                        <p class="text-muted">Escribe tu contraseña para acceder.</p> 
                        <div class="input-group m-t-30"> 
                            <input type="password" name="contrasena" class="form-control input-lg" placeholder="Contraseña"> 
                            <input type="hidden" value="<?php echo $nombre; ?>" name="usuario"> 
                            <span class="input-group-btn"> <button type="submit" class="btn btn-purple btn-lg waves-effect waves-light">Entrar</button> </span> 
                        </div> 
                    </div> 
                </form>         
<?php
                    if($_GET['status'] == 'error'){
                    
                    echo '<div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <p id="sa-ls-incorrect" class="text-danger">Usuario o contraseña incorrecta.</p>
                        </div>
                    </div>';
                    
                    } elseif($_GET['status'] == 'unregister') {
                    echo '<div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <p id="sa-incorrect" class="text-danger">Inicie sesión antes por favor.</p>
                        </div>
                    </div>';
                    }
?>
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


        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>
        
        
        <script src="assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/sweet-alert/sweet-alert.init.js"></script>
	
	</body>
</html>