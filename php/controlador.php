<?php   
 
include_once('db.php'); 
$con = $connection;


//se requiere el archivo para validar los datos de usuario de bdd para conectar   
$ip = $_SERVER["REMOTE_ADDR"];    
$fecha = date("Y/m/d");   
$hora = date("h:i:s");   
$horau = date("h");   
$diau = date("d");   
$aniou = date("Y");   
//se asignan la variables   
$sql = "SELECT aniou, diau, horau, ip ";   
$sql.= "FROM contador WHERE aniou LIKE '$aniou' AND diau LIKE '$diau' AND horau LIKE '$horau' AND ip LIKE '$ip' ";

$es = mysqli_query($con, $sql);   
//se buscan los registros que coincidan con la hora,dia,año e ip    
if(mysqli_num_rows($es)>0)   
{//no se cuenta la visita   
}   
else   
{   
$sql = "INSERT INTO contador (id, ip, fecha, hora, horau, diau, aniou) ";   
$sql.= "VALUES ('','$ip','$fecha','$hora','$horau','$diau','$aniou')";   
mysqli_query($con, $sql) or die("Error al grabar un mensaje: ");   
}   
//creamos el condicionamiendo para logearlo o no.   
$sql = "SELECT * ";   
$sql.= "FROM contador WHERE id ";   
mysqli_query($con, $sql);   
$visitas = mysqli_num_rows($es);   
$men = "<table width='9%' border='1' height='25' bgcolor='#333333'>" . chr(10);   
$men .= "<tr>" . chr(10);   
$men .= "<td><font color=#FFFFFF>Visitas:$visitas</font></td>" . chr(10);   
$men .= "</tr>" . chr(10);   
$men .= "</table>" . chr(10);   
?> 