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
mysql_query("insert into keluhan(id_keluhan,id_pelanggan,keluhan,waktu_kirim,respon_keluhan)values('$_POST[id_keluhan]','$id_pelanggan',\"$_POST[keluhan]\",now(),'Belum Merespon')");
					echo"<script>alert('Keluhan Telah Dikirim!');window.location=('pelanggan.php?p=keluhan');</script>";
}
?>