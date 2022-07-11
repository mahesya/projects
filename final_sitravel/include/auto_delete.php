<?php
	include'../include/conf.php';
	$lama =3;
	$query = "DELETE FROM penanya WHERE status_penanya='Umum' AND DATEDIFF(CURDATE(),waktu_daftar)>$lama";
	$hasil = mysql_query($query);
	
?>