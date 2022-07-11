<?php
error_reporting(0);
ob_start();
session_start();
include"include/config.php";
include"include/lib.php";
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
	$query = mysql_query("SELECT * FROM keluhan where id_pelanggan='$id_pelanggan' ORDER BY id_keluhan DESC");
				while ($row=mysql_fetch_array($query)){
					$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan where id_pelanggan='$row[id_pelanggan]'"));
					$psn = $row['keluhan'];
					
	echo"<table width='100%'>
	<tr><td><b><font color=#000066>$pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang] :  </font></b> $psn</td></tr>
	<tr><td><b><font color=#ff00>DAMTOUR &nbsp; : </font></b> $row[respon_keluhan]</td></tr>
	<tr><td align=right><font size='-2'>$row[waktu_kirim]</font></td></tr>
	</table><hr>";
	}
}
?>