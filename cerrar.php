<?php
session_start();
setcookie("id","",-1000);

unset($_SESSION['id']);
unset($_SESSION['login']);
unset($_SESSION['username']);
//CHAT
unset($_SESSION['openChatBoxes']);
unset($_SESSION['tsChatBoxes']);
unset($_SESSION['chatHistory']);

header("location:login.php");
?>