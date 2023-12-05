<?php   
session_start();
include("php/db.php");

$nombre=$_POST['nombre'];
$pass=$_POST['pass'];















$query="select * from usuarios where nombre = '$nombre' and contrasena = '".md5($pass)."'";
$res = mysqli_query($connection,$query);
$count = mysqli_num_rows($res);
echo $recuerdame;

if($count>=1){
    
while($row=mysqli_fetch_array($res)){  
      
    
      $id = $row['id'];  
      $name = $row['nombre'];  
      $active = $row['active'];  
}
    
if($active == 0 ){
    header('Location:login.php?status=inactive');
} else {
    
if(isset($_POST['remember'])){
    
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 30);
session_regenerate_id(TRUE);
    
$recuerdame=$_POST['remember'];

$_SESSION['id'] = $id;
$_SESSION['login'] = 'True';
$_SESSION['username'] = $name;
    
    
    header("location:index.php");
    
} else {
    
    setcookie("id","$id",0);
    header("location:index.php");
    
}
    
    } 

        } else {
    
header('Location:login.php?status=error');

}

?>