<?php 

include"php/ext/normal.php"; 

$idp = $_GET['id'];

$query_a="select * from post where id = '$idp'";
$res_a = mysqli_query($connection,$query_a);
$count_a = mysqli_num_rows($res_a);  

//Cojemos los datos de la Categoria
$query_tt="select * from post where id = ".$idp."";
$res_tt = mysqli_query($connection,$query_tt);
//primero recojemos los del post para identificar
while($row_tp=mysqli_fetch_array($res_tt)){  

$idpost = $row_tp['category_id'];
$title = $row_tp['title'];
    
    $query_cat="select * from category where id = ".$idpost."";
    $res_cat = mysqli_query($connection,$query_cat);
//luego ya tenemos identificado en el Category
    while($row_cat=mysqli_fetch_array($res_cat)){  

        $name = $row_cat['theme'];
        $backimg = $row_cat['image'];
}
}
?>     

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Marky">
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

        <!--Slide-->
        <script src="assets/slide/jquery_006.js"></script>
        <script src="assets/slide/network3.js"></script>
        
        
        <script src="js/modernizr.min.js"></script>
        <script src="js/push.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/chat.js"></script>
    </head>



    <body class="fixed-left">
<div class="backdropContainer backdropContainer-item">
    <div class="backdropImage displayingBackdropImage backdropImageFadeIn" style="background-image: url(/images/home/<?php echo $backimg; ?>);"></div>
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
                                <h4 class="pull-left page-title"><?php echo $title; ?></h4>
                                <ol class="breadcrumb pull-right">
                                    <li class=""><a href="/">Inicio</a> / <?php echo '<a href="articles.php?id='.$idpost.'">'.$name.'</a>'; echo " / "; echo $title; ?></li>
                                </ol>
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
                        
                        
                        
                        
                        
                        
                        
                                
<?php                
                        
$query_tp="select * from post where id = ".$idp."";
$res_tp = mysqli_query($connection,$query_tp);


while($row_tp=mysqli_fetch_array($res_tp)){  

   $id = $row_tp['id'];
   $id_a = $row_tp['id'];
   $title = $row_tp['title'];
   $content = $row_tp['content'];
   $image = $row_tp['image'];
   $created = $row_tp['created_at'];
   $status = $row_tp['status'];
   $rango = $row_tp['rango'];
   $uid = $row_tp['user_id'];
    
    $query_up="select * from usuarios where id = '$uid'";
    $res_up = mysqli_query($connection,$query_up);
    while($row_up=mysqli_fetch_array($res_up)){  
       $name = $row_up['nombre'];
       $img = $row_up['pics'];
       $range = $row_up['range'];
   
       if ($range >= 2) { $rango = "Administrador"; } else if ($range == 1) { $rango = "Moderador"; } else if ($range == 0) { $rango = "Usuario"; }
    }
    
    
   echo '<div class="col-md-12 col-lg-12">

                                            


                                <!-- Message -->
                                <div class="panel panel-default m-t-20">
                                    <div class="panel-heading">';
    if ($range_global >= 2) {
                                                echo '
                                                <h3 class="col-sm-9 col-xs-12 col-md-10 col-lg-10 panel-title">'.$title.'</h3>
                                                <a href="#$'.$row['id'].'" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar" class="pull-center btn btn-icon waves-effect btn-default m-b-5"> <i class="fa fa-pencil"></i> </a>
                                                
                                                <a href="#$'.$row['id'].'" data-toggle="tooltip" data-placement="top" title="" data-original-title="En espera" class="pull-center btn btn-icon waves-effect btn-default m-b-5"> <i class="ion-ios7-clock-outline"></i> </a>
                                                
                                                <a href="#$'.$row['id'].'" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eliminar" class="pull-center btn btn-icon waves-effect btn-default m-b-5"> <i class="fa fa-trash"></i> </a>';
                                            } else { 
                                                        echo '<h3 panel-title">'.$title.'</h3>'; 
                                            }
                                    echo '                                    <div class="panel-body">
                                        <div class="media m-b-10">
                                            <a href="./perfil.php?id='.$uid.'" class="pull-left">
                                                <img alt="" src="images/users/'.$img.'" class="media-object thumb-sm">
                                            </a>
                                            <div class="media-body">
                                            
                                            
                                            <span class="media-meta pull-right">'.$created.'</span>
                                                <a href="./perfil.php?id='.$uid.'"><h4 class="text-primary m-0">'.$name.'</h4></a>
                                                <small class="text-muted">'.$rango.'</small>
                                            </div>
                                        </div> <!-- media -->

                                        <p>'.$content.'</p>

                                        <hr>


                                        <div class="">               

                                        <h2 id="headerIfaces" class="trigger initial_hide active" style="display: block;"><a><h4> <i class="fa fa-paperclip m-r-10 m-b-10"></i> Ajuntado(s) <small class="text-muted">(Click para ocultar / Mostrar)</small></h4></a></h2>
                                        
                                        ';
    ?>
                        <div class="container">
                    
                    <?php include_once 'php/gallery/Galeria.php'; ?>
                    
                    <?php
                            $galeria = new Galeria();
                            $vid = new Galeria();
                            $arrayImagenes = $galeria->cargarImagenes("images/articles/".$_GET['id']."");
                            $arrayVideos = $vid->cargarImagenes("images/articles/".$_GET['id']."/video");
                            if( isset($arrayImagenes[0])){
                               
                            foreach($arrayImagenes as $path){
                                
                                echo '
                                <div class="col-sm-6 col-lg-3 col-md-4">
                                    <div class="gal-detail thumb">
                                    <style>div .gal-detail #unique{position: absolute; right: 20px; opacity: 0.5;}div .gal-detail #unique:hover{position: absolute; right: 20px; opacity: 1;}</style>
                                        <a href="images/articles/'.$_GET['id'].'/' . $path . '" class="image-popup" title="Screenshot-1">
                                            <img src="images/articles/'.$_GET['id'].'/' . $path . '" class="thumb-img" alt="work-thumbnail">
                                        </a>';
                                        if($idc == $uid || $range_global >= 2 ) {
                                             echo '<a id="unique" href="php/del-file.php?ruta='.$path.'&post_id='.$id.'" class="btn waves-effect waves-light btn-purple pull-right"> <i class="fa fa-remove"></i></a>';
                                        }
                          echo '</div>
                                </div>';
                             }
                                
                          } else if($idc == $uid) {
                                echo '
                                <a data-toggle="modal" data-target="#add-photo-article" href="#"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="alert alert-info col-lg-6 col-md-9 col-sm-12 col-xs-12 ">
                                <div class="image" data-notify-html="image"><i class="fa fa-plus-circle"></i> Agregar Imagenes...</div></div></div></a>';
                                include('assets/modal-effect/content/art-images.php');
                          }  else {
                                echo '<p class="text-muted text-center">No hay imágenes.</p>';
                            } 
    
                            /*if (isset($arrayVideos[0])){
                                foreach($arrayVideos as $path){
                                
                                echo '
                                
                                <div class="col-sm-6 col-lg-12 col-md-4">
                                    <div class="gal-detail thumb">
                                    <style>div .gal-detail #unique{position: absolute; right: 20px; opacity: 0.5;}div .gal-detail #unique:hover{position: absolute; right: 20px; opacity: 1;}</style>
                                    <video id="video" width="100%" poster="" loop controls tabindex="0">
                                    <source src="images/articles/'.$_GET['id'].'/video/' . $path . '" type="video/webm; codecs="vp8, vorbis"" />
                                    </video>';
                                        if($idc == $uid || $range_global >= 2 ) {
                                             echo '<a id="unique" href="php/del-file.php?ruta=video/'.$path.'&post_id='.$id.'" class="btn waves-effect waves-light btn-purple pull-right"> <i class="fa fa-remove"></i></a>';
                                        }
                          echo '</div>
                                </div>';
                             }
                                
                            } else if($idc == $uid && $range_global >= 2) {
                                echo '
                                <a data-toggle="modal" data-target="#add-video-article" href="#"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="alert alert-warning col-lg-6 col-md-9 col-sm-12 col-xs-12 ">
                                <div class="image" data-notify-html="image"><i class="fa fa-plus-circle"></i> Agregar Video...</div></div></div></a>';
                                include('assets/modal-effect/content/art-video.php');
                          };*/
                        ?>
  </div>                  
                                            
<?php echo '
                                    
                                    </div>
                                    </div>
                                    </div>
                                </div>


                            </div>';
    
}
                                ?>
                        
                        

                        <div class="container">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Comentarios</h3> 
                                    </div>
                                    
                                    
                                    
       
<?php    
                                    
function limittext($texto, $limite) {
return (strlen($texto)>$limite) ? substr($texto, 0, $limite) . '<a> Leer más...</a>' : $texto;
 }       
                        
$query_tp="select * from comentarios where post_id = ".$_GET[id]." and type = 0";
$res_tp = mysqli_query($connection,$query_tp);


$query_tb="select * from comentarios where post_id = ".$_GET[id]." and type = 1";
$res_tb = mysqli_query($connection,$query_tb);
$count_tb = mysqli_num_rows($res_tb);                                   
                            
while($row_tp=mysqli_fetch_array($res_tp)){  
$id = $row_tp['id'];
$text = $row_tp['comment'];
$type = $row_tp['type'];
$tema = $row_tp['tema'];
$c_id = $row_tp['com_id'];
$p_id = $row_tp['post_id'];
$u_id = $row_tp['user_id'];
$created = $row_tp['created_at'];
$time = $row_tp['time'];
$status = $row_tp['status'];
    
    
    $query_tcr="select * from usuarios where id = ".$u_id."";
    $res_tcr = mysqli_query($connection,$query_tcr);
    
    while($row_tc=mysqli_fetch_array($res_tcr)){ 
    $usr_id_a = $row_tc['id'];
    $name = $row_tc['nombre'];
    $range = $row_tc['range'];
    $image = $row_tc['pics'];
        
        
    if ($range >= 2) { $rango = "Administrador"; } else if ($range == 1) { $rango = "Moderador"; } else if ($range == 0) { $rango = "Usuario";}
    }


   echo '<div class="panel-body">
                     <div class="media m-b-10 ">
                         <a href="#" class="pull-left">
                             <img alt="" src="images/users/'.$image.'" class="media-object thumb-sm ">
                         </a>
                         <div class="media-body">
                             <span class="media-meta pull-right">'.$time.'</span>
                             <a href="./perfil.php?id='.$usr_id_a.'"><h4 class="text-primary m-0">'.$name.'</h4></a>
                             <small class="text-muted">'.$rango.'</small>
                         </div>
                     </div> <!-- media -->
                     
                
                     <p><b>'.$tema.'</b></p>
                               '.$text.'
                           </div>
                           
                            <small><h5 class="text-center"><a data-toggle="collapse" href="#multiCollapseExample'.$id.'" controls="multiCollapseExample'.$id.'"><span class="label label-purple"><i class="fa fa-comment text-light"></i> Responder</span></a></h5> </small> 

                           <form id="multiCollapseExample'.$id.'" method="post" class="form-horizontal collapse" action="php/subir-comentarios.php">
                                    <div class="form-group">
                                                <div class="col-md-11">
                                                    
                                                    <input name="type" type="hidden" class="form-control" value="1">
                                                    <input name="id" type="hidden" class="form-control" value="'.$idc.'">
                                                    <input name="id_a" type="hidden" class="form-control" value="'.$id_a.'">
                                                    <input name="id_user_com" type="hidden" class="form-control" value="'.$usr_id_a.'">
                                                    <input name="id_com" type="hidden" class="form-control" value="'.$id.'">
                                                    
                                                </div>
                                    </div>
                                    <div class="panel-body ">
                                        <div class="col-md-12">
                                            <label>Asunto:</label>
                                            <input name="asunto" type="text" class="form-control" placeholder="Asunto..." required>
                                            <br>
                                            <a class="pull-left">
                                                <img alt="" src="images/users/'.$pics_mp.'" class="media-object thumb-sm">
                                            </a>
                                            <div class="media-body">
                                                <textarea name="commenta" class="summernoter form-control"></textarea>
                                            </div>
                                            
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-purple waves-effect waves-light m-t-30 w-md">Enviar</button>
                                        </div>
                                    </div>
                                    </form>
                                        ';
    
    
                                    
                                            
                                        

$query_tpr="select * from comentarios where com_id = ".$id." and type = 1";
$res_tpr = mysqli_query($connection,$query_tpr);

if($count_tb >= 1){

while($row_tpr=mysqli_fetch_array($res_tpr)){  
$com_id = $row_tpr['id'];
$text = $row_tpr['comment'];
$type = $row_tpr['type'];
$tema = $row_tpr['tema'];
$timea = $row_tpr['time'];
$c_id = $row_tpr['com_id'];
$p_id = $row_tpr['post_id'];
$u_id = $row_tpr['user_id'];
$created = $row_tpr['created_at'];
$status = $row_tpr['status'];


$query_tcf="select * from usuarios where id = ".$u_id."";
    $res_tcf = mysqli_query($connection,$query_tcf);
    
    while($row_tcf=mysqli_fetch_array($res_tcf)){ 
    $usr_id = $row_tcf['id'];
    $name = $row_tcf['nombre'];
    $range = $row_tcf['range'];
    $image = $row_tcf['pics'];
        
        
    if ($range >= 2) { $rango = "Administrador"; } else if ($range == 1) { $rango = "Moderador"; } else if ($range == 0) { $rango = "Usuario";}
    }
    
    echo '<div class="panel-body">
    <blockquote>
                     <div class="media m-b-10 ">
                         <a href="#" class="pull-left">
                             <img alt="" src="images/users/'.$image.'" class="media-object thumb-sm ">
                         </a>
                         <div class="media-body">
                             <h6 class="media-meta pull-right">'.$timea.'</h6>
                             <a href="./perfil.php?id='.$usr_id.'"><h4 class="text-primary m-0">'.$name.'</h4></a>
                             <h6 class="text-muted">'.$rango.'</h6>
                         </div>
                     </div> <!-- media -->
                     
                
                     <h5><b>'.$tema.'</b></h5>
                               <h5>'.$text.'</h5>
                           
                           
                           </div></blockquote>';

}
    }
      echo "<div class='page-header'></div>"; } 
                                                        
                           
?>                               
                                    <!-- Comentario Start -->
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Comenta</h3> 
                                    </div>
                                    <form method="post" class="form-horizontal" action="php/subir-comentarios.php">
                                    <div class="form-group">
                                                
                                                <div class="col-md-11">
                                                    <input name="type" type="hidden" class="form-control" value="0" required>
                                                    <input name="id" type="hidden" class="form-control" value="<?php echo $idc; ?>" required>
                                                    <input name="id_a" type="hidden" class="form-control" value="<?php echo $id_a; ?>" required>
                                                    <input name="id_user_com" type="hidden" class="form-control" value="<?php echo $uid; ?>" required>
                                                    <input name="id_com" type="hidden" class="form-control" value="<?php echo $com_id; ?>" required>
                                                    
                                                </div>
                                    </div>
                                    <div class="panel-body ">
                                        <div class="media col-md-12">
                                            <label>Asunto:</label>
                                            <input name="asunto" type="text" class="form-control" placeholder="Asunto..." required>
                                            <br>
                                            <a class="pull-left">
                                                <img alt="" src="images/users/<?php echo $pics_mp ?>" class="media-object thumb-sm">
                                            </a>
                                            <div class="media-body">
                                                <textarea name="commenta" class="summernote form-control"></textarea>
                                                <!--div class="summernote">Hello Summernote</div-->
                                            </div>
                                            
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-purple waves-effect waves-light m-t-30 w-md">Enviar</button>
                                        </div>
                                    </div>
                                    </form>
                                    
                                </div>
                                </div>
                                <!-- Replay -->
                        
<?php } ?>    
                        
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
        
        <!--Editor-->
        <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
        
        <!--form validation init-->
        <script src="assets/summernote/summernote.min.js"></script>
        
        <script>

            jQuery(document).ready(function(){
                $('.wysihtml5').wysihtml5();

                $('.summernote').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });

            });
            
            jQuery(document).ready(function(){
                
                $('.summernoter').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor

                    focus: true                 // set focus to editable area after initializing summernote
                });

            });
        </script>
        
        <!-- Modal-Effect -->
        <script src="assets/modal-effect/js/classie.js"></script>
        <script src="assets/modal-effect/js/modalEffects.js"></script>
        
        
        <?php include_once("php/templates/java-global.php"); ?>
        
        
        
        
        <script>
            jQuery(document).ready(function(){
                $('.wysihtml5').wysihtml5();
            });
        </script>
        
        <!-- Todo -->
        <script src="js/jquery.todo.js"></script>
        
        <!-- Page Specific JS Libraries -->
        <script src="assets/dropzone/dropzone-reg.js"></script>
        <script src="assets/dropzone/dropzone-vid.js"></script>

        <!--Barra load-->
        <script src="js/pcoded.min.js"></script>
        
<script type="text/javascript" src="assets/magnific-popup/magnific-popup.js"></script> 
          
        <script type="text/javascript">
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                }); 
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>
        

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
    <!--date("d/m/y");-->
            
    </body>
</html>