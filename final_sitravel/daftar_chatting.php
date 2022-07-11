<?php
error_reporting(0);
ob_start();
session_start();
include"include/config.php";
		
		mysql_query("insert into penanya(id_penanya,nama,email,password,status_penanya,waktu_daftar)values('$_POST[id_penanya]','$_POST[nama]','$_POST[email]','$_POST[password]','Umum',now())");
	
	echo"<script>alert('Data Berhasil disimpan!, Silahkan Masukkan Email dan Password yang Anda Daftarkan Tadi!');window.location=('index.php?p=login_chatting');</script>";