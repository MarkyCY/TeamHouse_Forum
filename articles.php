<?php include"php/ext/normal.php"; 

$idp = $_GET['id'];

$query_a="select * from post where category_id = '$idp'";
$res_a = mysqli_query($connection,$query_a);
$count_a = mysqli_num_rows($res_a);  

$query_tp="select * from category where id = ".$idp."";
$res_tp = mysqli_query($connection,$query_tp);


while($row_tp=mysqli_fetch_array($res_tp)){  

   $theme = $row_tp['theme'];
   $backimg = $row_tp['image'];
}
?>     

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
<div class="backdropContainer backdropContainer-item">
    <div class="backdropImage displayingBackdropImage backdropImageFadeIn" style="background-image: url(http://192.168.30.62/images/home/<?php echo $backimg; ?>);"></div>
</div>
        
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
                                <h4 class="pull-left page-title">Artículos</h4>
                                <ol class="breadcrumb pull-right">
                                    <li class=""><a href="/">Inicio</a> / <?php echo $theme; ?></li>
                                </ol>
                            </div>
                        </div>
                        
                        
                        
                <!--Tableee-->
                        
                        
                        
                        
                        <!--TABLEEEEEE-->
      <div class="row">
                        
                            <!-- Left sidebar -->
                            
                            <!-- End Left sidebar -->
                        
                            <!-- Right Sidebar -->
          
          
<div class="col-lg-3 col-md-4">
                                <div class="panel panel-default p-0  m-t-20">
                                    <div class="">
                                        <div class="list-group mail-list">
                                          <a href="#" class="list-group-item no-border active"><i class="fa fa-empire m-r-5"></i>Categorías</a>
                                            
<?php

                                    $query_tp="select * from category";
                                    $res_tp = mysqli_query($connection,$query_tp);
                                    
                                    
                                    while($row_tp=mysqli_fetch_array($res_tp)){  
                                        
                                        $id = $row_tp['id'];
                                        $content = $row_tp['content'];
                                        $title = $row_tp['theme'];
                                        $image = $row_tp['image'];
                                        $tag = $row_tp['tag'];
                                        
                                        
                                        echo '<a href="articles.php?id='.$id.'" class="list-group-item no-border';
                                            
                                        if($id == $_GET['id']){
                                            
                                            echo ' active';                                            
                                        }
                                            
                                        echo '"><i class="fa fa-star-o m-r-5"></i>'.$title.'</a>';
                                    };
                                            
?>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <h3 class="panel-title m-t-40">Leyenda</h3>
                                <div class="panel panel-default p-0 p-t-20 m-t-20">
                                    <div class="">
                                        <div class="list-group no-border">
                                          <a href="#" class="list-group-item no-border"><span class="fa fa-star text-warning pull-right"></span>Anclado</a>
                                          <a href="#" class="list-group-item no-border"><span class="fa fa-star pull-right"></span>Sin Anclar</a>
                                          <a href="#" class="list-group-item no-border"><span class="fa fa-circle text-success pull-right"></span>Activo</a>
                                          <a href="#" class="list-group-item no-border"><span class="fa fa-circle text-warning pull-right"></span>En espera</a>
                                          <a href="#" class="list-group-item no-border"><span class="fa fa-circle text-pink pull-right"></span>Cerrado</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
          
 <?php 

    if ($count_a == 0){
        echo '<div class="container">

                        <div class="wrapper-page">
                            <div class="ex-page-content text-center">
                                <h2>No hay Datos...</h2><br>
                                <p>Contacta a un Administrador para más detalles.</p>
                                <div class="row">
                                </div>
                                <br>
                            </div>
                        </div> <!-- end wrapper page -->

                    </div>';
    } else {
                        
?>
                            <div class="col-lg-9 col-md-8">
                                
                                 <!-- End row -->
      
     
                                
                                
<div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 well">
                                <div class="">
                                    <div class="col-lg-12">
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group">
                                                <button class="btn btn-purple waves-effect m-b-5" data-toggle="modal" data-target="#add-reg"><span>Add</span> <i class="fa  fa-plus"></i></button><?php include"assets/modal-effect/content/add-art.php"; ?>
                                            </div>
                                </div>
                                    </div>
                                    <div class="">
                                        <div class="">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 1px;"></th>
                                                            <th>Título</th>
                                                            <th>Descripción</th>
                                                            <th>Fecha</th>
                                                            <!--th class="sorting_disabled">Action</th-->
                                                        </tr>
                                                    </thead>

                                             
                                                    <tbody>
                                
                                
                                
                                
<!--div class="panel panel-default m-t-20">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover mails">
                                                <tbody-->
                                
                                
<?php 
                                    
$query_tp="select * from post where category_id = ".$idp."";
$res_tp = mysqli_query($connection,$query_tp);


while($row_tp=mysqli_fetch_array($res_tp)){  

   $id = $row_tp['id'];
   $title = $row_tp['title'];
   $content = $row_tp['content'];
   $image = $row_tp['image'];
   $created = $row_tp['created_at'];
   $status = $row_tp['status'];
   $rango = $row_tp['rango'];
   $uid = $row_tp['user_id'];
    
    if ($adjunto == 1){
       $adj = '<td><i class="fa fa-paperclip"></i></td>';
    }
    
    if ($rango == 1){ $range = 'fa fa-star'; $rangea = '*';} else { $range = 'fa fa-star text-warning'; $rangea = '';}
    
    if ($status == 0){ $stat = "fa fa-circle text-success m-r-15"; } else if ($status == 1){ $stat = "fa fa-circle text-warning m-r-15"; } else if ($status == 2){ $stat = "fa fa-circle text-pink m-r-15"; }
    
   echo '
                                                    <tr>
                                                        <td class="mail-rateing">
                                                             <i class="'.$range.'">'.$rangea.'</i>
                                                        </td>
                                                        <td>
                                                            <a href="article.php?id='.$id.'">'.$title.'</a>
                                                        </td>
                                                        <td>
                                                            <a href="article.php?id='.$id.'"><i class="'.$stat.'"></i>'.$content.'</a>
                                                        </td>
                                                        '.$adj.'
                                                        <td class="text-right">'.$created.'</td>
                                                        <!--td class="actions">
                                                        <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                        <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                        <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                        <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                        </td-->
                                                    </tr>';
    
}
                                ?>
                                                        
                                                        
                                                        
</tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>      
                                                        
                                                        
                                                        
                        
<!--/tbody>
                                            </table>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="row">
                                            <div class="col-xs-7">
                                                Viendo 1 - 20 de 3
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="btn-group pull-right">
                                                  <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                                  <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div--> <!-- panel body -->
                                </div> <!-- panel -->
                            </div> <!-- end Col-9 -->
                         <?php } ?>
                        </div>
                        
                        
                        
<!-- Row -->

                       

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


        <!-- Todo -->
        <script src="js/jquery.todo.js"></script>

        <?php include_once("php/templates/java-global.php"); ?>
    
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

        <!--Datatables-->
        <script src="assets/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/datatables/dataTables.bootstrap.js"></script>
    
        <!-- Modal-Effect -->
        <script src="assets/modal-effect/js/classie.js"></script>
        <script src="assets/modal-effect/js/modalEffects.js"></script>

        <!--Barra load-->
        <script src="js/pcoded.min.js"></script>
    
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
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








