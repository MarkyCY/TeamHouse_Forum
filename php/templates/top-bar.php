<div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.php" class="logo"><i class="ion-ios7-home-outline "></i><span>TeamHouse </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <!--form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form-->

<?php                                         
$query_n="select * from notificaciones where idu = '$idc' and readed = 0";
$res_n = mysqli_query($connection,$query_n);
$count_n = mysqli_num_rows($res_n);  
//Contador de notificaciones
    if($count_n <= 9){
    $counter_n = $count_n;
    } else{
        $counter_n = "9+";
    }
//END contador de notifiaciones
$query_n="select * from notificaciones where idu = '$idc' and readed = 0 LIMIT 5";
$res_n = mysqli_query($connection,$query_n);
?>
                            
                            <ul class="nav navbar-nav navbar-right pull-right">
                                <?php include_once('php/templates/notification.php'); ?>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="hidden-xs dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="images/users/<?php echo $pics_mp ?>" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="perfil.php?id=<?php echo $idc; ?>"><i class="md md-face-unlock"></i> Perfil</a></li>
                                        <li><a href="perfil.php?id=<?php echo $idc; ?>#settings-2"><i class="md md-settings"></i> Ajustes</a></li>
                                        <?php if(isset($_SESSION['id'])){ echo '<li><a href="php/lock.php?screen=exit"><i class="md md-lock"></i> Bloquear</a></li>'; } ?>
                                        <li><a href="cerrar.php"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
            </div>