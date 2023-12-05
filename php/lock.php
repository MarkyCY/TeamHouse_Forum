<?php
session_start();

if(isset($_GET['screen'])) {
    
    if( $_GET['screen'] == 'exit' ) {
        
        $_SESSION["login"] = "False";
        header('Location:../lock-screen.php');
    }

} else {
    header('Location:../index.php');
}

?>