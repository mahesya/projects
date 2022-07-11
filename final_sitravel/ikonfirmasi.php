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
$lokasi_file=$_FILES['bukti']['tmp_name'];
$nama_file=$_FILES['bukti']['name'];
move_uploaded_file($lokasi_file,"upload/img_bukti/$nama_file");
		mysql_query("insert into konfirmasi_pembayaran(id_konfirmasi,id_pendaftaran,no_rekening,nama_bank,atas_nama,no_resi,jumlah,keterangan,bukti,waktu_kirim)values('$_POST[id_konfirmasi]','$_POST[id_pendaftaran]',\"$_POST[no_rekening]\",\"$_POST[nama_bank]\",\"$_POST[atas_nama]\",\"$_POST[no_resi]\",\"$_POST[jumlah]\",\"$_POST[keterangan]\",'$nama_file',now())");
		
	echo"<script>alert('Data Berhasil disimpan !');window.location=('pelanggan.php?p=konfirmasi_pembayaran');</script>";
}
?>