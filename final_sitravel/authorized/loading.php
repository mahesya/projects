<?php
error_reporting(0);
ob_start();
session_start();
include"../include/config.php";
$username=ucwords($_SESSION['username']);
$nama=ucwords($_SESSION['nama']);
$id_staf=ucwords($_SESSION['id_staf']);
$id_jabatan=ucwords($_SESSION['id_jabatan']);
$no_tlp=ucwords($_SESSION['no_tlp']);
if(empty($_SESSION['id_staf']) OR empty($_SESSION['username'])){
echo"<p align='center'>Harap LogIn Terlebih Dahulu! <br> <a href='index.php'>Mau LogIn?</a></p>";}
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
			<img src='../images/damtourlogin.gif' width=275 height=275 /><br /><br /></td>
			</tr>
			</table>
			<script>
			function delayer()
			{
				document.location='view.php'
				}
				</script> 
 
 ";}
 ?> 