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
    
    //Borrar foto vieja
    $query="select * from usuarios where id = ".$id."";
    $res = mysqli_query($connection,$query);


    while($row=mysqli_fetch_array($res)){  
        
        $old_photo = $row['pics'];
    } 
    if ($old_photo == "unknow.png"){
        
    } else if ($old_photo == "400040200139_237548.png"){
        
    } else {
        unlink("../images/users/".$old_photo."");
    }
    
    
    //connect with the database
    $conn = new mysqli($bd_host, $bd_usuario, $bd_password, $bd_base);
    if($mysqli->connect_errno){
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    $targetDir = "../images/users/";
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDir.$fileName;
    
    if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
        //insert file information into db table
        $conn->query("UPDATE usuarios SET pics = '$fileName' WHERE id = '$id'");
    }
    
}
?>