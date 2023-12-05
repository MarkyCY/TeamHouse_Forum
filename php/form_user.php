<?php   












if( isset($_POST['id']) ){

$id=$_POST['id'];
$fname=$_POST['fname'];
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$opass=md5($_POST['old_password']);
$pass=md5($_POST['password']);
$pass2=md5($_POST['confirm_password']);
$bio=$_POST['biografia'];


include_once('db.php');
echo $_POST[nombre];
$query="select * from usuarios where id = '$id'";
$res = mysqli_query($connection,$query);
$count = mysqli_num_rows($res);

while($row=mysqli_fetch_array($res)){  

    $contrasena = $row['contrasena'];
    
}

$query_f="UPDATE usuarios SET biografia = '$bio', tel = '$tel', fname = '$fname' WHERE id = '$id'";
$query_ff="UPDATE usuarios SET biografia = '$bio', tel = '$tel', fname = '$fname', contrasena = '$pass' WHERE id = '$id'";

if( $count>=1 && $opass == $contrasena ){
    
    if( !$_POST['password'] == "" && !$_POST['confirm_password'] == ""){
        
        if($pass == $pass2){
            
            $res = mysqli_query($connection,$query_ff);
            header('Location:../perfil.php?id='.$id.'&status=cambio');
        } else {
            header('Location:../perfil.php?id='.$id.'&status=not_same');
        }
    } elseif( $_POST['password'] == "" || $_POST['confirm_password'] == ""){
        $res = mysqli_query($connection,$query_f);
        header('Location:../perfil.php?id='.$id.'&status=ok');
    } else {
        echo 'error2';
    }
    
} else{
    header('Location:../perfil.php?id='.$id.'&status=error#settings-2');
}
} else {
    echo 'error';
}
?>