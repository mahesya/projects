<?php
error_reporting(0);
ob_start();
session_start();
include"include/config.php";
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
 echo"
		<body onload=\"setTimeout('delayer()',4000)\">
 	<table align='center' width='200' height='200'>
	<tr>
		<td height='210'></td>
		</tr>
		<tr valign='middle'>
			<td align='center'>Login Success<br /><br />
			<img src='images/damtourlogin.gif' width=275 height=275 /><br /><br /></td>
			</tr>
			</table>
			<script>
			function delayer()
			{
				document.location='pelanggan.php?p=daftar'
				}
				</script> 
 
 ";}
 ?> 