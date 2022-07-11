<?php
error_reporting(0);
ob_start();
session_start();
include"include/config.php";
include"include/lib.php";
$email=ucwords($_SESSION['email']);
$nama=ucwords($_SESSION['nama']);
$id_penanya=ucwords($_SESSION['id_penanya']);


if(empty($_SESSION['id_penanya']) OR empty($_SESSION['email'])){
echo"<p align='center'>Harap LogIn Terlebih Dahulu! <br> <a href='index.php'>Mau LogIn?</a></p>";}
else
{
	$query = mysql_query("SELECT * FROM pertanyaan where id_penanya='$id_penanya' ORDER BY id_pertanyaan DESC");
				while ($row=mysql_fetch_array($query)){
					$penanya=mysql_fetch_array(mysql_query("select * from penanya where id_penanya='$row[id_penanya]'"));
					$psn = $row['pertanyaan'];
					
	echo"<table width='100%'>
	<tr><td><b><font color=#000066>$penanya[nama] &nbsp; :  </font></b> $psn</td></tr>
	<tr><td><b><font color=#ff00>Admin &nbsp; : </font></b> $row[jawaban]</td></tr>
	<tr><td align=right><font size='-2'>$row[waktu_kirim]</font></td></tr>
	</table><hr>";
	}
}
?>