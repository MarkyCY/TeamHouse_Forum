<?php include"php/ext/profile.php"; ?>     

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <meta name="theme-color" content="#7e57c2">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title><?php echo $nombre; ?> - Perfil</title>

        <?php include_once("php/templates/styles.php"); ?>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="js/jquery.min.js"></script>
        <script src="js/modernizr.min.js"></script>
        <script src="js/push.min.js"></script>
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
                            <img src="images/users/<?php echo $pics ?>" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $nombre; ?><span class="caret"></span></a>
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
                    
                
                    
<div id="edit-profile-pic" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="page-header">
                                                        <label for="FullName">Foto de perfil</label>
                                                        <form action="php/upload.php" class="dropzone"></form> 
                                                    </div>
                                            </div>
                                        </div>
                                        
</div>
                    
<div id="edit-profile-bg" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog"> 
                                                <div class="modal-content"> 
                                                    <div class="page-header">
                                                        <label for="FullName">Fondo de Cubierta</label>
                                                        <form action="php/upload-bg.php" class="dropzone"></form> 
                                                    </div>
                                            </div>
                                        </div>
                                        
</div>
                <div class="wraper container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <style>#edit-bg:hover {
                                opacity: 0.9;
                                cursor: pointer;
                                }
                                #edit-bg {
                                opacity: 0.2; 
                                }
                            </style>
                            <div class="bg-picture text-center" style="background-image:url('images/users/background/<?php echo $pics_bg_mp; ?>')">
                                
                                <?php if($id == $idc){ echo '<span data-toggle="modal" data-target="#edit-profile-bg" id="edit-bg" style="background: #fff; z-index: 1; position: absolute; bottom: 0; right: 20px; bottom: 10px;" class="mini-stat-icon"><i data-toggle="tooltip" data-placement="top" title="Foto de Cubierta" class="md md-image text-inverse"></i></span>';} ?>
                                
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                   <?php if($id == $idc){ echo ' 
                                    <style>
                                        .profile-info-name img:hover { 
                                        opacity: 0.9;
                                        border: 1px solid #7e57c2;
                                        box-shadow: 0px 2px 24px #7e57c2;
                                        }


                                        }</style>
                                    <a href="#" data-toggle="modal" data-target="#edit-profile-pic">
                                        <img src="images/users/'.$pics_mp.'" class="thumb-lg img-circle img-thumbnail" alt="profile-image" data-toggle="tooltip" data-placement="right" title="Foto de perfil">
                                   </a>';} else { echo '<img src="images/users/'.$pics_mp.'" class="thumb-lg img-circle img-thumbnail" alt="profile-image">';} ?>
                                    
                                    <h3 class="text-white"><?php echo $nombre_mp; ?></h3>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <div class="row user-tabs">
                        <div class="col-lg-6 col-md-9 col-sm-9">
                            <ul class="nav nav-tabs tabs">
                            <li class="active tab">
                                <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active"> 
                                    <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                    <span class="hidden-xs">Sobre mi</span> 
                                </a> 
                            </li> 
                            <li class="tab"> 
                                <a href="#profile-2" data-toggle="tab" aria-expanded="false"> 
                                    <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                    <span class="hidden-xs">Actividad</span> 
                                </a> 
                            </li> 
<?php 
if($id == $idc){ 
                        echo '<li class="tab" > 
                                <a href="#settings-2" data-toggle="tab" aria-expanded="false"> 
                                    <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                    <span class="hidden-xs">Ajustes</span> 
                                </a> 
                            </li>'; 
 }  
?>
                        <div class="indicator"></div></ul> 
                        </div>
                        <!--div class="col-lg-6 col-md-3 col-sm-3 hidden-xs">
                            <div class="pull-right">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle btn-rounded btn btn-success waves-effect waves-light" href="#"> Following <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Poke</a></li>
                                        <li><a href="#">Private message</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Unfollow</a></li>
                                    </ul>
                                </div>
                              </div>
                        </div-->
                    </div>
                    <div class="row">
                        <div class="col-lg-12"> 
                        
                        <div class="tab-content profile-tab-content"> 
                            <div class="tab-pane active" id="home-2"> 
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Personal Information</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <div class="about-info-p">
                                                    <strong>Full Name</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $fname_mp; ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Mobile</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $tel_mp; ?></p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Email</strong>
                                                    <br/>
                                                    <p class="text-muted"><?php echo $email_mp; ?></p>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>


                                    <div class="col-md-8">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Biografía</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <p><?php echo  $biografia_mp; ?></p>
                                            </div> 
                                        </div>
                                        <!-- Personal-Information -->

                                    </div>

                                </div>
                            </div> 




                            <div class="tab-pane" id="profile-2">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    
                                    <div class="panel-body"> <div class="timeline-2">
<?php
                                        
$query_a="select * from activity where idu = '$id' order by fecha";
$res_a = mysqli_query($connection,$query_a);
$count_a = mysqli_num_rows($res_a);
                                        

                                        
if($count_a >=1 ) {
while($row_a=mysqli_fetch_array($res_a)){  

    $fecha = $row_a['fecha'];
    $info = $row_a['info'];

                                echo '
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">'.$fecha.'</div>
                                                <p>'.$info.'</p>
                                            </div>
                                            </div>
                                        ';
    
}} else {
    $date = date('d/m/Y');
                                echo '<div class="timeline-2">
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">'.$date.'</div>
                                                <p>No hay actividad.</p>
                                            </div>
                                        </div>';
}
                                        

                                            
?>
                                        </div>
                                    </div>

                                    </div>
                                    </div> 
                                </div>
                                <!-- Personal-Information -->
                            </div> 
                            

<?php 
if($id == $idc){ 
                echo            '<div class="tab-pane" id="settings-2">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-body">';
} ?>

<?php 
if($id == $idc){ 
                                    echo '<form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="php/form_user.php" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="FullName">Nombre y Apellidos*</label>
                                                <input type="text" value="'.$fname.'" required id="FullName" name="fname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Email">Email</label>
                                                <input type="email" value="'.$email.'" id="Email" name="email" disabled class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="Email">Tel*</label>
                                                <input type="tel" value="'.$tel.'" id="Email" name="tel" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Username">Usuario</label>
                                                <input type="text" value="'.$nombre.'" disabled id="Username" name="name" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Old Password">Contraseña*</label>
                                                <input class="form-control" placeholder="Escriba su contraseña" id="old_password" name="old_password" type="password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Password">Nueva Contraseña</label>
                                                <input class="form-control" placeholder="5 - 15 Caracteres" id="password" name="password" type="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="RePassword">Confirmar Nueva Contraseña</label>
                                                <input class="form-control" placeholder="5 - 15 Caracteres" id="confirm_password" name="confirm_password" type="password">
                                            </div>
                                            <input type="hidden" value="'.$idc.'" name="id">
                                            <div class="form-group">
                                                <label for="AboutMe">Biografia</label>
                                                <textarea style="height: 125px;" id="AboutMe" name="biografia" class="form-control">'.$biografia.'</textarea>
                                            </div>
                                            <button class="btn btn-purple waves-effect waves-light w-md" type="submit">Save</button>
                                        </form>
                                    </div> 
                                </div>
                                <!-- Personal-Information -->
                            </div>';
}
?>
                        
                        </div> 
                    </div>
                    
                    <?php include_once('php/templates/chat.php'); ?>
                    
                    </div>


                <footer class="footer text-right">
                <?php echo date(Y); ?> © FullGame.
            </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

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
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script>

        
        <?php include_once("php/templates/java-global.php"); ?>

        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>

        <!-- Page Specific JS Libraries -->
        <script src="assets/dropzone/dropzone.js"></script>

        <!-- sweet alerts -->
        <script src="assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/sweet-alert/sweet-alert.init.js"></script>
        
        <!--Barra load-->
        <script src="js/pcoded.min.js"></script>
        
                <!-- Modal-Effect -->
        <script src="assets/modal-effect/js/classie.js"></script>
        <script src="assets/modal-effect/js/modalEffects.js"></script>
	
	</body>
</html>