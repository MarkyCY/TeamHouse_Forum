<?php include"php/ext/normal.php"; ?>     

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <meta name="theme-color" content="#7e57c2">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>TeamHouse</title>

        <?php include_once("php/templates/styles.php"); ?>
        <link rel="stylesheet" href="assets/codemirror/codemirror.css" />
        <link rel="stylesheet" href="assets/codemirror/ambiance.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="js/modernizr.min.js"></script>
        <script src="js/push.min.js"></script>
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
                            <img src="images/users/<?php echo $pics_mp ?>" alt="" class="thumb-md img-circle">
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
                                <ol class="breadcrumb pull-right">
                                    <li class="active"><a href="/">Inicio</a> / Acerca de</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <section id="cd-timeline" class="cd-container">
                                    
                                    
<?php                                         
$query_tl="select * from historia";
$res_tl = mysqli_query($connection,$query_tl);    
                                
while($row=mysqli_fetch_array($res_tl)){  

    
                                    /*        MOSTRAR TIMELINE      */
    
                                echo  '<div class="cd-timeline-block">
                                        <div class="cd-timeline-img '.$row['tipo'].'">
                                            <i class="'.$row['tag'].'"></i>
                                        </div>

                                        <div class="cd-timeline-content">
                                            <h3>'.$row['title'].'</h3>
                                            <p>'.$row['text'].' ';
                                  if ($range >= 2) {
                                                echo '<i><a href="#$'.$row['id'].'"><span data-toggle="tooltip" data-placement="right" title="" data-original-title="Editar" class="text-purple fa fa-pencil"></span></a></i>';
                                            }
                                            echo'</p>
                                            <span class="cd-date">'.$row['fecha'].'</span>
                                        </div>
                                     </div>';
    
}

                                            
?>

                                    
                                </section> <!-- cd-timeline -->
                            </div>
                        </div><!-- Row -->


            </div> <!-- container -->
                    
                    <?php include_once('php/templates/chat.php'); ?>
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                <?php echo date(Y); ?> © FullGame.
            </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
</div>


        <div class="float-chat visible-xs hidden-md">
        <a href="#" class=""><i class="mini-stat-icon bg-purple right-bar-toggle text-white waves-effect waves-light md md-chat"></i></a>
        </div>

        <script>
            var resizefunc = [];
        </script>
                    
        <!-- jQuery  -->
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
        
                <!--codemirror-->
        <script src="assets/codemirror/codemirror.js"></script>
        <script src="assets/codemirror/formatting.js"></script>
        <script src="assets/codemirror/xml.js"></script>
        <script src="assets/codemirror/javascript.js"></script>
        <script src="assets/codemirror/custom.codemirror.js"></script>
        
        
        <!-- Modal-Effect -->
        <script src="assets/modal-effect/js/classie.js"></script>
        <script src="assets/modal-effect/js/modalEffects.js"></script>


        <?php include_once("php/templates/java-global.php"); ?>
        
        <!-- Todo -->
        <script src="js/jquery.todo.js"></script>

        <!--Barra load-->
        <script src="js/pcoded.min.js"></script>
        
        
        <script type="text/javascript">
            jQuery(document).ready(function($){
            var $timeline_block = $('.cd-timeline-block');

                //hide timeline blocks which are outside the viewport
                $timeline_block.each(function(){
                    if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
                        $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
                    }
                });

                //on scolling, show/animate timeline blocks when enter the viewport
                $(window).on('scroll', function(){
                    $timeline_block.each(function(){
                        if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
                            $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
                        }
                    });
                });
            });
        </script>


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