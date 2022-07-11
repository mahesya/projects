<?php
error_reporting(0);
ob_start();
session_start();
include"include/config.php";


		mysql_query("insert into pendaftaran_pelanggan(id_pendaftaran,id_produk,id_pelanggan,tanggal_pendaftaran)values('$_POST[id_pendaftaran]','$_POST[id_produk]','$_POST[id_pelanggan]',now())");
		mysql_query("insert into keadaan_pelanggan(id_keadaan,id_pendaftaran)values('$_POST[id_keadaan]','$_POST[id_pendaftaran]')");
		mysql_query("insert into mou(id_mou,id_pendaftaran)values('$_POST[id_mou]','$_POST[id_pendaftaran]')");
		mysql_query("insert into perlengkapan_pelanggan(id_perlengkapan_pelanggan,id_pendaftaran)values('$_POST[id_perlengkapan_pelanggan]','$_POST[id_pendaftaran]')");
		mysql_query("insert into testimoni(id_testimoni,id_pendaftaran)values('$_POST[id_testimoni]','$_POST[id_pendaftaran]')");
					echo"<script>alert('Data Sudah Disimpan, Silahkan Transfer Uang Ke Rekening PT.Doa Arafah Madinah, lalu Kirimkan Konfirmasi pembayaran!');window.location=('pelanggan.php?p=produk');</script>";
?>