<?php
session_start();

$text = $_POST['commenta'];
$asunto = $_POST['asunto'];
$id = $_POST['id'];
$id_a = $_POST['id_a'];
$id_com = $_POST['id_com'];
$type = $_POST['type'];
$user_com = $_POST['id_user_com'];

include_once('db.php');

//Articulos
$query_tp="select * from post where id = ".$id_a."";
$res_tp = mysqli_query($connection,$query_tp);

while($row_tp=mysqli_fetch_array($res_tp)){  
$id_p = $row_tp['id'];
$title_a = $row_tp['title'];
}
//End Articulos

//Usuarios
$query_us="select * from usuarios where id = ".$id."";
$res_us = mysqli_query($connection,$query_us);

while($row_us=mysqli_fetch_array($res_us)){  
$id_u = $row_us['id'];
$name_u = $row_us['nombre'];
$image_u = $row_us['pics'];
}
//End Usuarios


$date = date("d/m/y");

//activity
$notf = array (
'<strong><a href="./perfil.php?id='.$id_u.'">'.$name_u.'</a></strong> ha comentado en <a href="./article.php?id='.$id_p.'">'.$title_a.'</a>',
'<a href="./perfil.php?id='.$id_u.'">'.$name_u.'</a> ha respondido tu Artículo.',
'<a href="./perfil.php?id='.$id_u.'">'.$name_u.'</a> ha respondido un Comentario.',
''
);

//notification
$notif = array (
'./article.php?id='.$id_p.'',
'./article.php?id='.$id_p.'',
'',
''
);

    echo $notf[0];
//$user_com
//$sub_user_com

$hour = date("h:i A");

//si es un comentario
if($type == 0){
    echo "id com está";
$query="insert into comentarios (tema, comment, post_id, com_id, user_id, type, created_at, time) values ('$asunto', '$text', '$id_a', '$id_com', $id, 0, '$date', '$hour')";
echo $query;
    
$query_act="insert into activity (idu, fecha, info) values ('$id_u', '$date', '$notf[0]')";
    
if($id_u != $user_com){
$query_own="insert into activity (idu, fecha, info) values ('$user_com', '$date', '$notf[0]')";
$query_not="insert into notificaciones (idu, title, text, type, link, fecha) values ('$user_com', 'Artículo', '$notf[1]', '1', '$notif[0]', '$date')";
}
    
} 
//Si no, si es un sub comentario
elseif($type=1) {
    $query="insert into comentarios (tema, comment, post_id, com_id, user_id, type, created_at, time) values ('$asunto', '$text', '$id_a', '$id_com', $id, 1, '$date', '$hour')";
    
$query_act="insert into activity (idu, fecha, info) values ('$id_u', '$date', '$notf[0]')";
if($id_u != $user_com && $type == 1){
$query_own="insert into activity (idu, fecha, info) values ('$user_com', '$date', '$notf[0]')";
$query_not="insert into notificaciones (idu, title, text, type, readed, link, fecha) values ('$user_com', 'Comentarios', '$notf[2]', '2', '0', '$notif[1]', '$date')";
}
    
}

echo $query_not;
$res[0] = mysqli_query($connection,$query_act);
$res[1] = mysqli_query($connection,$query_own);
$res[2] = mysqli_query($connection,$query);
$res[3] = mysqli_query($connection,$query_not);
            
header('Location:../article.php?id='.$id_a.'&status=error#settings-2');
?>
























