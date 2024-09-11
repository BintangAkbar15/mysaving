<?php 
require('koneksi.php');
$GLOBALS['konek'] = $koneksi;


function register($user,$pass,$email){
    $user = mysqli_real_escape_string($GLOBALS['konek'],$user);
    $email = mysqli_real_escape_string($GLOBALS['konek'],$email);
    $pass = mysqli_real_escape_string($GLOBALS['konek'],password_hash($pass, PASSWORD_DEFAULT));
    if($user === " " || $pass === " " || $email === " "){
        echo "<script>alert('isi semua datanya')</script>";
    }else{
        mysqli_query($GLOBALS['konek'],"INSERT INTO user(username,password,email) VALUES('$user','$pass','$email')");
    }
}
?>


