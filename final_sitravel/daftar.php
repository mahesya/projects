<?php
error_reporting(0);
ob_start();
session_start();
include'include/config.php';
if(empty($_POST['nama_depan'])or empty($_POST['tempat_lahir'])or empty($_POST['tanggal_lahir'])or empty($_POST['no_ktp'])or empty($_POST['jenis_kelamin'])or empty($_POST['alamat'])or empty($_POST['hp'])or empty($_POST['email'])or empty($_POST['username'])or empty($_POST['password'])){
	echo"Data Wajib Belum Disisi!, Silahkan Isi <a href='javascript:history.go(-1)'>Kembali</a>";
}else if (!$_SESSION['submit']){
	echo"ERROR: Form Sudah Disubmit Sebelumnya!, Silahkan <a href='index.php?p=login_pelanggan'>Kembali</a>";
}
else{
$_SESSION['submit'] = false;

$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$_POST[reg_dai]'"));
$namalengkap="$pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]";
$query="select max(id_pendaftaran) as maxID from pendaftaran_pelanggan where id_pendaftaran like 'PP%'";
$hasil=mysql_query($query);
$data=mysql_fetch_array($hasil);
$idMax=$data['maxID'];

$noUrut=(int) substr($idMax,2,6);
$noUrut++;

$newID = 'PP'.sprintf("%06s",$noUrut);

	mysql_query("insert into pelanggan(id_pelanggan,nama_depan,nama_tengah,nama_belakang,nama_panggilan,tempat_lahir,tanggal_lahir,no_ktp,jenis_kelamin,pendidikan,pekerjaan,ket_umrah,ket_haji,ukuran_pakaian,alamat,kota,telp_rumah,telp_kantor,hp,email,ahli_waris,hubungan,no_rekening,atas_nama,nama_bank,cabang,reg_dai,nama_dai,username,password)values('$_POST[id_pelanggan]','$_POST[nama_depan]','$_POST[nama_tengah]','$_POST[nama_belakang]','$_POST[nama_panggilan]','$_POST[tempat_lahir]','$_POST[tanggal_lahir]','$_POST[no_ktp]','$_POST[jenis_kelamin]','$_POST[pendidikan]','$_POST[pekerjaan]','$_POST[ket_umrah]','$_POST[ket_haji]','$_POST[ukuran_pakaian]',\"$_POST[alamat]\",'$_POST[kota]','$_POST[telp_rumah]','$_POST[telp_kantor]','$_POST[hp]','$_POST[email]','$_POST[ahli_waris]','$_POST[hubungan]','$_POST[no_rekening]','$_POST[atas_nama]','$_POST[nama_bank]','$_POST[cabang]','$_POST[reg_dai]','$namalengkap','$_POST[username]','$_POST[password]')");
	mysql_query("insert into pendaftaran_pelanggan(id_pendaftaran,id_produk,id_pelanggan,tanggal_pendaftaran)values('$newID','$_POST[id_produk]','$_POST[id_pelanggan]',now())");
					echo"<script>alert('Data Sudah Disimpan, Silahkan Transfer Uang Ke Rekening PT.Doa Arafah Madinah, lalu Kirim Konfirmasi pembayaran setelah login terlebih dahulu!');window.location=('index.php?p=login_pelanggan');</script>";
				}

?>