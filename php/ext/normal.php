<?php
session_start();

if(isset($_SESSION['id'])){
    $idc = $_SESSION['id'];
    //$id = $_GET['id'];
    
    if($_SESSION['login'] == 'False'){

        header('Location:lock-screen.php');
    }
    
} elseif(isset($_COOKIE['id'])){
    $idc = $_COOKIE['id'];
    $id = $_GET['id'];
    
} else {
header('Location:login.php?status=unregister');
}


include_once('php/db.php');

//Contador de usuarios
$query="select * from usuarios";
$res = mysqli_query($connection,$query);
$count = mysqli_num_rows($res);

//Contador de comentarios
$query_comm="select * from comentarios";
$count_comm = mysqli_query($connection,$query_comm);
$count_c = mysqli_num_rows($count_comm);

while($row=mysqli_fetch_array($res)){  

    $nombre = $row['nombre'];
    
}

$query_mp="select * from usuarios where id = '$idc'";
$res_mp = mysqli_query($connection,$query_mp);
$count_mp = mysqli_num_rows($res_mp);


while($row_mp=mysqli_fetch_array($res_mp)){  

    $nombre_mp = $row_mp['nombre'];
    $pics_mp = $row_mp['pics'];
    
}

include"php/controlador.php";

$query_up="select * from usuarios where id = '$idc'";
    $res_up = mysqli_query($connection,$query_up);
    while($row_up=mysqli_fetch_array($res_up)){  
       $name = $row_up['nombre'];
       $img = $row_up['pics'];
       $range = $row_up['range'];
       $range_global = $row_up['range'];
   
       if ($range >= 2) { $rango = "Administrador"; } else if ($range == 1) { $rango = "Moderador"; } else if ($range == 0) { $rango = "Usuario"; }
    }

?>