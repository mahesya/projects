<?php
error_reporting(0);
ob_start();
session_start();
include"include/config.php";

$email=$_POST['email'];
$password=$_POST['password'];


$sql=mysql_query("select * from penanya where email='$email' and password='$password'");
$data=mysql_fetch_array($sql);
$cek=mysql_num_rows($sql);

if($cek > 0){

session_register('id_penanya');
session_register('email');
session_register('password');
session_register('nama');



$_SESSION['id_penanya']=true;
$_SESSION['email']=true;
$_SESSION['password']=true;
$_SESSION['nama']=true;

$_SESSION['id_penanya']=$data['id_penanya'];
$_SESSION['email']=$data['email'];
$_SESSION['password']=$data['password'];
$_SESSION['nama']=$data['nama'];

if($email==$data['email'] and $password==$data['password']){
header('location:loading.php');
}else{echo"Login Gagal <br> <a href='javascript:history.go(-1)'>ulangi</a>";}

}else{echo"Login Gagal <br> <a href='javascript:history.go(-1)'>ulangi</a>";}


?>