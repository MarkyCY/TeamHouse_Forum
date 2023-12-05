


















<?php
session_start();

$a_name = $_POST['art-name'];
$a_info = $_POST['art-descr'];
$usr_id = $_POST['usr-id'];
$cat_id = $_POST['cat-id'];

$date = date('d/m/y');

include_once('db.php');

//Articulos
$add_art="insert into post (title, content, created_at, status, rango, category_id, user_id) values ('$a_name', '$a_info', '$date', '0', '1', '$cat_id', '$usr_id')";
echo $add_art;
$res_art = mysqli_query($connection,$add_art);

header('Location:./articles.php?id='.$cat_id.'');

















