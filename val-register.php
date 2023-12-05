











<?php   
session_start();
/*$message = '';
if ( isset($_POST['securityCode']) && ($_POST['securityCode']!="")){
	if(strcasecmp($_SESSION['captcha'], $_POST['securityCode']) != 0){
		$message = "¡Ha introducido un código de seguridad incorrecto! Inténtelo de nuevo.";
	
     
}else{
		//$message = "Su cuenta ha sido creada revise su correo electrónico para confirmarla."; 
		$message = 'Su cuenta ha sido creada, ya puede <a href="/login.php">iniciar sesión</a>.'; 
   }  */   

include_once('php/db.php');
$message = 'Su cuenta ha sido creada, ya puede <a href="/login.php">iniciar sesión</a>.';

//Generador del Código
$hash = md5( rand(0,1000) );



$email = mysql_escape_string($_POST['email']);
$name = mysql_escape_string($_POST['user']);
$contra = mysql_escape_string($_POST['password']);
$pass = mysql_escape_string(md5($contra ));


$query="select * from usuarios where email = '$email'";
$query_two="select * from usuarios where nombre = '$name'";
$res = mysqli_query($connection,$query);
$res_two = mysqli_query($connection,$query_two);
$count = mysqli_num_rows($res);
$count_two = mysqli_num_rows($res_two);

$pics = "unknow.png";
$pics_bg = "bg.jpg";
while($row=mysqli_fetch_array($res)){  
      
    
      $id = $row['id'];
}

if (isset($_POST['email']) && isset($_POST['user']) && isset($_POST['password']) && $count <= 0 && $count_two <= 0){
    
    $form="insert into usuarios (nombre,contrasena,email,hash,pics,active,pics_bg) values ('". mysql_escape_string($name) ."','". mysql_escape_string($pass) ."','". mysql_escape_string($email) ."','$hash','". mysql_escape_string($pics) ."', '1', '". mysql_escape_string($pics_bg) ."')";
    $start = mysqli_query($connection,$form) or die(mysqli_error($connection));
    
    $query_not = "select * from usuarios where nombre = '$name'";
    $res_not = mysqli_query($connection,$query_not);
    
//NOTIFICACION
    while($row=mysqli_fetch_array($res_not)){
        
    $id_user = $row['id'];
    }
    echo $id_user;
    $date = date('d/m/y');
    $notf="insert into notificaciones (idu,type,title,text,fecha) values ('$id_user','0','Bienvenido','Se bienvenido a TeamHouse','$date')";
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
} elseif($count_two > 0) {
    $message = "El Usuario ya está en uso."; 
}
        
        
	
/*} else {
	$message = "Introduzca el código de seguridad."; 
}
echo $message;*/
header('Location:/register.php?info='.$message.'');
?>










