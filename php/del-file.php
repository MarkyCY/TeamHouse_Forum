









<?php 
session_start();

if(isset($_SESSION['id'])){
    $idc = $_SESSION['id'];
    $idr = $_GET['id'];
    
    if($_SESSION['login'] == 'False'){

        header('Location:../lock-screen.php');
    }
    
} elseif(isset($_COOKIE['id'])){
    $idc = $_COOKIE['id'];
    $idr = $_GET['id'];
    
} else {
header('Location:../login.php?status=unregister');
}

$query_up="select * from usuarios where id = '$idc'";
    $res_up = mysqli_query($connection,$query_up);
    while($row_up=mysqli_fetch_array($res_up)){  
       $name = $row_up['nombre'];
       $img = $row_up['pics'];
       $range = $row_up['range'];
       $range_global = $row_up['range'];
   
       if ($range >= 2) { $rango = "Administrador"; } else if ($range == 1) { $rango = "Moderador"; } else if ($range == 0) { $rango = "Usuario"; }
    }



$post_id=$_GET['post_id'];
$a_id=$_GET['art_id'];
$image=$_GET['ruta'];

include_once('db.php');

$query="select * from post where id = ".$post_id."";
$res = mysqli_query($connection,$query);


while($row=mysqli_fetch_array($res)){  

   $p_id = $row['id'];
   $u_id = $row['user_id'];
}


//Borrado
if($idc == $u_id || $range_global >= 2 ){
unlink("../images/articles/".$post_id."/".$image."");
header('Location:../article.php?id='.$p_id.'&info=Eliminado');
} else {
    header('Location:../articles.php?info=Error');
}






?>



























