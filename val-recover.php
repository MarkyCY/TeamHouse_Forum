












<?php   
session_start();
    
include_once('php/db.php');


//Generador del Código
$hash = md5( rand(0,1000) );



$email = mysql_escape_string($_POST['email']);

$query="select * from usuarios where email = '$email'";
$res = mysqli_query($connection,$query);
$count = mysqli_num_rows($res);

$pics = "unknow.png";
while($row=mysqli_fetch_array($res)){  
      
    
      $id = $row['id'];
}

if ($count > 0 ){
    
    $form="update into usuarios hash=$hash where email = '$email'";
    $start = mysqli_query($connection,$form) or die(mysqli_error($connection));
    
    $query_not = "select * from usuarios where nombre = '$name'";
    $res_not = mysqli_query($connection,$query_not);
    
//NOTIFICACION
    while($row=mysqli_fetch_array($res_not)){
        
    $id_user = $row['id'];
    }
    echo $id_user;
    $date = date('d/m/y');
    $type = "fa fa-user-plus fa-2x text-purple";
    $notf="insert into notificaciones (idu,type,title,text,fecha) values ('$id_user','$type','Bienvenido','Se bienvenido a TeamHouse','$date')";
    $startnotf = mysqli_query($connection,$notf) or die(mysqli_error($connection));
//Activity
    $activity = '<strong><a href="/perfil.php?id='.$id_user.'">'.$name.'</a></strong> se ha Registrado.</a>';
    
    $act="insert into activity (idu,fecha,info) values ('$id_user','$date','$activity')";
    $startnotf = mysqli_query($connection,$act) or die(mysqli_error($connection));
    
    
$to      = $email; // Send email to our user
$subject = 'TeamHouse Verificación'; // Give the email a subject 
include_once('php/email-template.php');
$mail = $mensaje; // Our message above including the link                
$headers = 'De:administradores@fullgame.cu' . "\r\n"; // Set from headers
mail($to, $subject, $mail, $cabeceras, $headers); // Send our email
    
} elseif($count > 0) {
    $message = "El Correo ya está en uso."; 
}
        
        
	}
} else {
	$message = "Introduzca el código de seguridad."; 
}
echo $message;
header('Location:/register.php?info='.$message.'');
?>




















