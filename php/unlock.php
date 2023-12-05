<?php
session_start();

$user=$_POST['usuario'];
$pass=md5($_POST['contrasena']);
$id=$_SESSION['id'];


include_once('db.php');

$query="select * from usuarios where id = '$id' and nombre = '$user' and contrasena = '$pass'";
$res = mysqli_query($connection,$query);
$count = mysqli_num_rows($res);

if($count>=1){
    echo "si";
    $_SESSION['login'] = 'True';
    header("location:../index.php");
    
} else {
    header("location:../lock-screen.php?status=error");

}

?>