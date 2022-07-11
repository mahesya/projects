<?php
error_reporting(0);
ob_start();
session_start();
include"../include/config.php";
$username=$_POST['username'];
$password=$_POST['password'];


$sql=mysql_query("select * from user_damtour where username='$username' and password='$password'");
$data=mysql_fetch_array($sql);
if($username==$data['username'] and $password==$data['password']){
$_SESSION['id_staf']=$data['id_staf'];
$_SESSION['id_jabatan']=$data['id_jabatan'];
$_SESSION['username']=$data['username'];
$_SESSION['password']=$data['password'];
$_SESSION['nama']=$data['nama'];
$_SESSION['no_tlp']=$data['no_tlp'];
mysql_query("update user_damtour set status='ONLINE' where id_staf='$_SESSION[id_staf]'");
header('location:loading.php');
}else{echo"Login Gagal <br> <a href='javascript:history.go(-1)'>ulangi</a>";}


?>