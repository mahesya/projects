<?php
error_reporting(0);
ob_start();
session_start();
include"include/config.php";

$email=$_POST['email'];
$password=$_POST['password'];


$sql=mysql_query("select * from pelanggan where email='$email' and password='$password'");
$data=mysql_fetch_array($sql);
$cek=mysql_num_rows($sql);

if($cek > 0){

session_register('id_pelanggan');
session_register('email');
session_register('password');
session_register('nama_depan');
session_register('status_registrasi');
session_register('username');


$_SESSION['id_pelanggan']=true;
$_SESSION['email']=true;
$_SESSION['password']=true;
$_SESSION['nama_depan']=true;
$_SESSION['status_registrasi']=true;
$_SESSION['username']=true;

$_SESSION['id_pelanggan']=$data['id_pelanggan'];
$_SESSION['email']=$data['email'];
$_SESSION['password']=$data['password'];
$_SESSION['nama_depan']=$data['nama_depan'];
$_SESSION['status_registrasi']=$data['status_registrasi'];
$_SESSION['username']=$data['username'];

if($email==$data['email'] and $password==$data['password']){
header('location:loading_pelanggan.php');
}else{echo"Login Gagal <br> <a href='javascript:history.go(-1)'>ulangi</a>";}

}else{echo"Login Gagal <br> <a href='javascript:history.go(-1)'>ulangi</a>";}


?>