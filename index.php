<?php include"php/ext/normal.php"; 

$query_online="select * from usuarios where online = 1";
$res_online = mysqli_query($connection,$query_online);
$online = mysqli_num_rows($res_online);

$query_article="select * from post";
$res_article = mysqli_query($connection,$query_article);
$articles = mysqli_num_rows($res_article);  

?>                            

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="TeamHouse Network Gaming">
        <meta name="author" content="Marky">
        <meta name="theme-color" content="#7e57c2">

        <link rel="shortcut icon" href="images/th/">

        <title>TeamHouse</title>
        

<style>
body {
	background-color: #eeeeee;
	padding:0;
	margin:0 auto;
	font-family:"Lucida Grande",Verdana,Arial,"Bitstream Vera Sans",sans-serif;
	font-size:11px;
}
</style>
        
         <?php include_once("php/templates/styles.php"); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="js/push.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/chat.js"></script>
        
    </head>



    <body class="fixed-left">
    
        <!-- Begin page -->
        <div id="wrapper">
            
            
            <!-- Top Bar Start -->
            <?php include_once('php/templates/top-bar.php'); ?>
            <!-- Top Bar End -->
            
            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="images/users/<?php echo $pics_mp; ?>" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $nombre_mp; ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="perfil.php?id=<?php echo $idc; ?>"><i class="md md-face-unlock"></i> Perfil<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="perfil.php?id=<?php echo $idc; ?>#settings-2"><i class="md md-settings"></i> Ajustes</a></li>
                                    <?php if(isset($_SESSION['id'])){ echo '<li><a href="php/lock.php?screen=exit"><i class="md md-lock"></i> Bloquear</a></li>'; } ?>
                                    <li><a href="cerrar.php"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0"><?php echo $rango; ?></p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <?php include_once('php/templates/navbar.php'); ?>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Bienvenido !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li class="active">Inicio</li>
                                </ol>
                            </div>
                        </div>
                        
                        <!-- Start Widget -->
                        <div class="row">

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-pink"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $count;?></span>
                                        Usuarios
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="fa fa-eye"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $visitas;?></span>
                                        Visitas
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="fa fa-street-view"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $online;?></span>
                                        Online
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="md md-bookmark-outline"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $articles;?></span>
                                        Artículos
                                    </div>
                                </div>
                            </div> 
                            
                        </div> 
                        <!-- End row-->
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h1>TeamHouse 
                                        <small>El Foro de FullGame</small>
                                        </h1>
                                        TeamHouse es un Foro Local creado para compartir con todos los que tengan su acceso. En la red FullGame se juegan diferentes juegos que puede ver a continuación. Pensamos cada ves mas en mejorar, optimizar y hacer que valga la pena recibir sus servicios, todo esto pensando en <abbr title="usted">UD</abbr>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div id="chatt" class="row"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title text-center"></h3>
                                    </div>
                                    
                                    <?php 
                                    
$query_tp="select * from category";
$res_tp = mysqli_query($connection,$query_tp);


while($row_tp=mysqli_fetch_array($res_tp)){  

   $id = $row_tp['id'];
   $content = $row_tp['content'];
   $title = $row_tp['theme'];
   $image = $row_tp['image'];
   $tag = $row_tp['tag'];
    
  
if ($id%2 == 0) {
    
   echo '<div style="margin: 10px;" class="cd-timeline-block page-header">
   
                                       <div class="col-md-8">
                                            <a style="color: #505458;" href="articles.php?id='.$id.'"><h3 style="cursor: pointer;">'.$title.'  <small class="text-muted">(Clickeame) '; 
                                            if ($range >= 2) {
                                                echo '<a href="#'.$id.'"><span data-toggle="tooltip" data-placement="right" title="" data-original-title="Editar" class="text-purple fa fa-pencil"></span></a>';
                                            }
                                            echo '</small></h3></a>
                                            <p>'.$content.'</p>
                                        </div>
    
                                        <div class="col-md-4">
                                            <a class="thumbnail" data-toggle="modal" data-target="#'.$tag.'">
                                                <img src="images/home/'.$image.'" alt="'.$image.'">
                                            </a>
                                        </div>

                                        
                                    </div>';
    
} else {
    
     echo '<div style="margin: 10px;" class="cd-timeline-block page-header">
                                        <div class="visible-lg visible-md col-lg-4 col-md-4">
                                            <a class="thumbnail" data-toggle="modal" data-target="#'.$tag.'">
                                                <img src="images/home/'.$image.'" alt="'.$image.'">
                                            </a>
                                        </div>

                                        <div class="col-md-8">
                                            <a style="color: #505458;" href="articles.php?id='.$id.'"><h3 style="cursor: pointer;">'.$title.'  <small class="text-muted">(Clickeame) '; 
                                            if ($range >= 2) {
                                                echo '<a href="#$'.$id.'"><span data-toggle="tooltip" data-placement="right" title="" data-original-title="Editar" class="text-purple fa fa-pencil"></span></a>';
                                            }
                                            echo '</small></h3></a>
                                            <p>'.$content.'</p>
                                        </div>
                                        
                                        <div class="visible-xs visible-sm col-sm-12 col-xs-12">
                                            <a class="thumbnail" data-toggle="modal" data-target="#'.$tag.'">
                                                <img src="images/home/'.$image.'" alt="'.$image.'">
                                            </a>
                                        </div>
                                    </div>';
}
    

    
}
                                    
                                    
                                    ?>
                                    
                                    
                                    
                                    <?php include"assets/modal-effect/content/content.php"; ?>
                                </div>
                            </div>
                        </div>
                        
                        
                        
            </div>
                
            <?php include_once('php/templates/chat.php'); ?>
                
            </div>
            
            <footer class="footer text-right">
                <?php echo date('Y'); ?> © FullGame.
            </footer>
            
       </div>      
          
        <div class="float-chat visible-xs hidden-md">
        <a href="#" class=""><i class="mini-stat-icon bg-purple right-bar-toggle text-white waves-effect waves-light md md-chat"></i></a>
        </div>
        <script>
            var resizefunc = [];
        </script>
                    
        <!-- jQuery -->
        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="assets/chat/moment-2.2.1.js"></script>
        <script src="assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- sweet alerts -->
        <script src="assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- flot Chart -->
        <script src="assets/flot-chart/jquery.flot.js"></script>
        <script src="assets/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/flot-chart/jquery.flot.crosshair.js"></script>
        
        <!-- Counter-up -->
        <script src="assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>

        <!-- Dashboard -->
        <script src="js/jquery.dashboard.js"></script>
 
        <!-- Todo -->
        <script src="js/jquery.todo.js"></script>
        
        <?php include_once("php/templates/java-global.php"); ?>
            
        <!-- Modal-Effect -->
        <script src="assets/modal-effect/js/classie.js"></script>
        <script src="assets/modal-effect/js/modalEffects.js"></script>
            
        <!--Barra load-->
        <script src="js/pcoded.min.js"></script>
            
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>       
    </body>

</html>
