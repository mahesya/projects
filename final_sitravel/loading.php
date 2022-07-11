<?php
error_reporting(0);
ob_start();
session_start();
include"include/config.php";
$email=ucwords($_SESSION['email']);
$nama=ucwords($_SESSION['nama']);
$id_penanya=ucwords($_SESSION['id_penanya']);


if(empty($_SESSION['id_penanya']) OR empty($_SESSION['email'])){
echo"<p align='center'>Harap LogIn Terlebih Dahulu! <br> <a href='index.php?p=login_chatting'>Mau LogIn?</a></p>";}
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
				document.location='chattingroom.php'
				}
				</script> 
 
 ";}
 ?> 