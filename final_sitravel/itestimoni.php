<?php
error_reporting(0);
ob_start();
session_start();
include'include/config.php';
$email=ucwords($_SESSION['email']);
$nama_depan=ucwords($_SESSION['nama_depan']);
$id_pelanggan=ucwords($_SESSION['id_pelanggan']);
$status_registrasi=ucwords($_SESSION['status_registrasi']);
$username=ucwords($_SESSION['username']);
$id_produk=$_SESSION['id_produk'];


if(empty($_SESSION['id_pelanggan']) OR empty($_SESSION['email'])){
echo"<p align='center'>Harap LogIn Terlebih Dahulu! <br> <a href='index.php?p=login_pelanggan'>Mau LogIn?</a></p>";}
else
{
mysql_query("update testimoni set testimoni=\"$_POST[testimoni]\",status='1' where id_testimoni='$_POST[id_testimoni]'");
					echo"<script>alert('Testimoni Telah Dikirim!');window.location=('pelanggan.php?p=testimoni');</script>";
}
?>