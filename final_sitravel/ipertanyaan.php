<?php
error_reporting(0);
ob_start();
session_start();
include'include/config.php';
$nama=ucwords($_SESSION['nama']);
$email=ucwords($_SESSION['email']);
$id_penanya=ucwords($_SESSION['id_penanya']);

if(empty($_SESSION['id_penanya']) OR empty($_SESSION['email'])){
echo"<p align='center'>Harap LogIn Terlebih Dahulu! <br> <a href='index.php'>Mau LogIn?</a></p>";}
else
{
mysql_query("insert into pertanyaan(id_pertanyaan,id_penanya,pertanyaan,waktu_kirim,jawaban,status)values('$_POST[id_pertanyaan]','$id_penanya',\"$_POST[pertanyaan]\",now(),'Belum Menjawab','1')");
					echo"<script>alert('Pertanyaan Telah Dikirim!');window.location=('chattingroom.php');</script>";
}
?>