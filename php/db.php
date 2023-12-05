<?php
$bd_host = "localhost";   
$bd_usuario = "xxxxxxx";   
$bd_password = "xxxxxxx";   
$bd_base = "th";  

$connection = mysqli_connect($bd_host,$bd_usuario,$bd_password,$bd_base) or die(mysqli_error($connection));
date_default_timezone_set('UTC');

$res = mysqli_query($connection,"SET NAMES 'utf8'");
?>