<?php
session_start();
if(!empty($_FILES)){
    
    //database configuration
    include_once('db.php');
    
    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
    } elseif(isset($_COOKIE['id'])){
        $id = $_COOKIE['id'];
    }
    
    $idr = $_GET['id'];    
    
    
    //connect with the database
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    if($mysqli->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
  
    mkdir("../images/articles/$idr", 0700);
    $targetDir = "../images/articles/$idr/";
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDir.$fileName;
    
    if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
        //insert file information into db table
        //$conn->query("UPDATE usuarios SET pics = '$fileName' WHERE id = '$id'");
    }
    
}
?>