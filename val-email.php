<?php

include_once('php/db.php');

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = mysql_escape_string($_GET['email']); // Set email variable
    $hash = mysql_escape_string($_GET['hash']); // Set hash variable

$query = "SELECT email, hash, active FROM usuarios WHERE email='$email' AND hash='$hash' AND active=0";
$search = mysqli_query($connection, $query); 
$match  = mysqli_num_rows($search);
 
echo $match; // Display how many matches have been found -> remove this when done with testing ;)

if($match > 0){
    // We have a match, activate the account
    mysqli_query($connection, "UPDATE usuarios SET active=1 WHERE email='$email' AND hash='$hash' AND active=0") or die(mysql_error());
echo '<div class="statusmsg">Your account has been activated, you can now login</div>';
    header('Location:login.php?status=can_login');
}else{
    // No match -> invalid url or account has already been activated.
   header('Location:login.php?status=incorrect');
}
    
}
?>