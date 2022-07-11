<?php
error_reporting(0);
ob_start();
session_start();
include"../include/config.php";
include'../include/lib.php';
include'../include/datetoindo.php';
include ('../ezpdf/Cezpdf.php');
date_default_timezone_set("Asia/Jakarta");
$tgl=date("d-m-Y");
$jam=date("H:i:s");
    $tngl =date('d');
    $bln =date('m');
    $thn =date('Y');
    switch($bln){      
        case 1 : {
                    $bln='Januari';
                }break;
        case 2 : {
                    $bln='Februari';
                }break;
        case 3 : {
                    $bln='Maret';
                }break;
        case 4 : {
                    $bln='April';
                }break;
        case 5 : {
                    $bln='Mei';
                }break;
        case 6 : {
                    $bln="Juni";
                }break;
        case 7 : {
                    $bln='Juli';
                }break;
        case 8 : {
                    $bln='Agustus';
                }break;
        case 9 : {
                    $bln='September';
                }break;
        case 10 : {
                    $bln='Oktober';
                }break;    
        case 11 : {
                    $bln='November';
                }break;
        case 12 : {
                    $bln='Desember';
                }break;
        default: {
                    $bln='UnKnown';
                }break;
    }
	$tanggal=$tngl." ".$bln." ".$thn;


	$act=$_GET['act'];
	$delete=$_GET['delete'];

//=================(jabatan)=================//
if($act=='ijabatan'){
	$jabatan= htmlentities ($_POST['jabatan']);
		
		mysql_query("insert into jabatan(id_jabatan,jabatan)values('$_POST[id_jabatan]',\"$jabatan\")");
	
	echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=jabatan');</script>";
	
	}
if($act=='ejabatan'){
	mysql_query("update jabatan set id_jabatan='$_POST[id_jabatan]',jabatan=\"$_POST[jabatan]\" where id_jabatan='$_POST[id_jabatan]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=jabatan');</script>";
	}
if($delete=='hjabatan'){
	mysql_query("delete from jabatan where id_jabatan='$_GET[id_jabatan]'");
	header('location:view.php?p=jabatan');
	}
//=================(jperwailan)=================//
if($act=='ijperwakilan'){
	$perwakilan= htmlentities ($_POST['perwakilan']);
		
		mysql_query("insert into jenis_perwakilan(id_jenis,perwakilan)values('$_POST[id_jenis]',\"$perwakilan\")");
	
	echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=jperwakilan');</script>";
	
	}
if($act=='ejperwakilan'){
	mysql_query("update jenis_perwakilan set id_jenis='$_POST[id_jenis]',perwakilan=\"$_POST[perwakilan]\" where id_jenis='$_POST[id_jenis]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=jperwakilan');</script>";
	}
if($delete=='hjperwakilan'){
	mysql_query("delete from jenis_perwakilan where id_jenis='$_GET[id_jenis]'");
	header('location:view.php?p=jperwakilan');
	}
//==================(user_damtour)==============//
if($act=='istaf'){
	
		$lokasi_file=$_FILES['foto']['tmp_name'];
$nama_file=$_FILES['foto']['name'];
move_uploaded_file($lokasi_file,"../upload/img_staf/$nama_file");
		mysql_query("insert into user_damtour(id_staf,nama,jenis_kelamin,foto,alamat,no_telp,id_jabatan,username,password,status)values('$_POST[id_staf]','$_POST[nama]','$_POST[jenis_kelamin]','$nama_file',\"$_POST[alamat]\",'$_POST[no_telp]','$_POST[jabatan]','$_POST[username]','$_POST[password]','OFFLINE')");
		
	echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=staf');</script>";
	
	}
if($act=='estaf'){
	
	mysql_query("update user_damtour set id_staf='$_POST[id_staf]',nama='$_POST[nama]',jenis_kelamin=\"$_POST[jenis_kelamin]\",alamat=\"$_POST[alamat]\",no_telp='$_POST[no_telp]',id_jabatan='$_POST[jabatan]',username='$_POST[username]',password='$_POST[password]' where id_staf='$_POST[id_staf]'");
	echo"<script>alert('Data Berhasil Dirubah !');window.location=('view.php?p=staf');</script>";
	}
if($delete=='hstaf'){
	mysql_query("delete from user_damtour where id_staf='$_GET[id_staf]'");
	unlink("../upload/img_staf/$_GET[foto]");
	header('location:view.php?p=staf');
	}
//==================(produk)=================//
if($act=='iproduk'){
		$jenis_produk= htmlentities ($_POST['jenis_produk']);
		$jenis_paket = htmlentities ($_POST['jenis_paket']);
		$lama_perjalanan = htmlentities ($_POST['lama_perjalanan']);
		$biaya = htmlentities ($_POST['biaya']);
		$bln_keberangkatan = htmlentities ($_POST['bln_keberangkatan']);
		$bln_keberangkatan= strtoupper($bln_keberangkatan);
		$pelunasan = htmlentities ($_POST['pelunasan']);
		$pelunasan = strtoupper ($pelunasan);
		
		mysql_query("insert into produk(id_produk,jenis_produk,jenis_paket,lama_perjalanan,biaya,tanggal_keberangkatan,bulan_keberangkatan,pelunasan,id_staf,keterangan)values('$_POST[id_produk]','$jenis_produk','$jenis_paket','$lama_perjalanan','$biaya','$_POST[tanggal_berangkat]','$bln_keberangkatan','$pelunasan','$_POST[pembimbing]',\"$_POST[keterangan]\")");
		
		mysql_query("insert into akomodasi(id_akomodasi,id_produk)values('$_POST[id_akomodasi]','$_POST[id_produk]')");
		
		mysql_query("insert into itinerari(id_itinerari,id_produk)values('$_POST[id_itinerari]','$_POST[id_produk]')");
		
		echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=produk');</script>";
	}
if($act=='eproduk'){
mysql_query("update produk set id_produk='$_POST[id_produk]',jenis_produk='$_POST[jenis_produk]',jenis_paket='$_POST[jenis_paket]',lama_perjalanan='$_POST[lama_perjalanan]',biaya='$_POST[biaya]',tanggal_keberangkatan='$_POST[tanggal_keberangkatan]',bulan_keberangkatan='$_POST[bulan_keberangkatan]',pelunasan='$_POST[pelunasan]',id_staf='$_POST[pembimbing]',keterangan=\"$_POST[keterangan]\" where id_produk='$_POST[id_produk]'");
echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=produk');</script>";	
}
if($delete=='hproduk'){
	mysql_query("delete from produk where id_produk='$_GET[id_produk]'");
	header('location:view.php?p=produk');
}
//==================(itinerari)===================//
if($act=='eitinerari'){
$itinerari = addslashes($_POST['itinerari']);
mysql_query("update itinerari set id_itinerari='$_POST[id_itinerari]',id_produk='$_POST[id_produk]',itinerari='$itinerari' where id_itinerari='$_POST[id_itinerari]'");
echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=itinerari');</script>";	
}
//===================(akomodasi)=================//
if($act=='eakomodasi'){
$akomodasi_hotel = addslashes($_POST['akomodasi_hotel']);
$akomodasi_pesawat = addslashes($_POST['akomodasi_pesawat']);

mysql_query("update akomodasi set id_akomodasi='$_POST[id_akomodasi]',id_produk='$_POST[id_produk]',akomodasi_hotel='$akomodasi_hotel',akomodasi_pesawat='$akomodasi_pesawat' where id_akomodasi='$_POST[id_akomodasi]'");
echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=akomodasi');</script>";	
}
//====================(kurs)==================//
if($act=='ekurs'){
	
	mysql_query("update kurs set id_kurs='$_POST[id_kurs]',kurs='$_POST[kurs]',id_staf='$_POST[id_staf]' where id_kurs='$_POST[id_kurs]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=kurs');</script>";
	}
//====================(foto)=================//
if($act=='ifoto'){
	
		$keterangan = addslashes($_POST['keterangan']);
		$lokasi_file=$_FILES['foto']['tmp_name'];
$nama_file=$_FILES['foto']['name'];
move_uploaded_file($lokasi_file,"../upload/img_foto/$nama_file");
		mysql_query("insert into foto(id_foto,foto,keterangan,id_staf)values('$_POST[id_foto]','$nama_file','$keterangan','$_POST[id_staf]')");
		
	echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=foto');</script>";
	
	}
if($act=='efoto'){
	
	$keterangan = addslashes($_POST['keterangan']);
	mysql_query("update foto set id_foto='$_POST[id_foto]',keterangan='$keterangan',id_staf='$_POST[id_staf]' where id_foto='$_POST[id_foto]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=foto');</script>";
	}
if($delete=='hfoto'){
	mysql_query("delete from foto where id_foto='$_GET[id_foto]'");
	unlink("../upload/img_foto/$_GET[foto]");
	header('location:view.php?p=foto');
	}
//====================(video)==================//
if($act=='ivideo'){
	
		$video = addslashes($_POST['video']);
		$keterangan = addslashes($_POST['keterangan']);
		
		mysql_query("insert into video(id_video,video,keterangan,id_staf)values('$_POST[id_video]','$video','$keterangan','$_POST[id_staf]')");
		
	echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=video');</script>";
	
	}
if($act=='evideo'){
	$video= addslashes($_POST['video']);
	$keterangan= addslashes($_POST['keterangan']);
	mysql_query("update video set id_video='$_POST[id_video]',video='$video',keterangan='$keterangan',id_staf='$_POST[id_staf]' where id_video='$_POST[id_video]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=video');</script>";
	}
if($delete=='hvideo'){
	mysql_query("delete from video where id_video='$_GET[id_video]'");
	header('location:view.php?p=video');
	}
//===================(pemberitahuan)===============//
if($act=='ipemberitahuan'){
	$id_staf=$_POST['id_staf'];
	$pemberitahuan = addslashes($_POST['pemberitahuan']);
		mysql_query("insert into pemberitahuan(id_pemberitahuan,id_staf,judul_pemberitahuan,pemberitahuan,waktu_kirim)values('$_POST[id_pemberitahuan]','$id_staf',\"$_POST[judul_pemberitahuan]\",'$pemberitahuan',now())");
		
	echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=pemberitahuan');</script>";
	
	}
if($act=='epemberitahuan'){
	$pemberitahuan = addslashes($_POST['pemberitahuan']);
	mysql_query("update pemberitahuan set id_pemberitahuan='$_POST[id_pemberitahuan]',id_staf='$_POST[id_staf]',judul_pemberitahuan=\"$_POST[judul_pemberitahuan]\",pemberitahuan='$pemberitahuan' where id_pemberitahuan='$_POST[id_pemberitahuan]'");
	echo"<script>alert('Data Berhasil Dirubah !');window.location=('view.php?p=pemberitahuan');</script>";
	}
if($delete=='hpemberitahuan'){
	mysql_query("delete from pemberitahuan where id_pemberitahuan='$_GET[id_pemberitahuan]'");
	header('location:view.php?p=pemberitahuan');
	}
//=================(perwakilan)=================//
if($act=='iperwakilan'){
		mysql_query("insert into perwakilan(id_perwakilan,id_staf,id_jenis,nama,jenis_kelamin,alamat,provinsi,no_telp,email)values('$_POST[id_perwakilan]','$_POST[id_staf]','$_POST[jenis_perwakilan]','$_POST[nama]','$_POST[jenis_kelamin]',\"$_POST[alamat]\",'$_POST[provinsi]','$_POST[no_telp]','$_POST[email]')");
		mysql_query("insert into pendaftaran_perwakilan(id_pendaftaran,id_perwakilan,id_jenis,tanggal_daftar)values('$_POST[id_pendaftaran]','$_POST[id_perwakilan]','$_POST[jenis_perwakilan]',now())");
		
	echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=perwakilan');</script>";
	
	}
if($act=='eperwakilan'){
mysql_query("update perwakilan set id_perwakilan='$_POST[id_perwakilan]',id_staf='$_POST[id_staf]',nama='$_POST[nama]',jenis_kelamin='$_POST[jenis_kelamin]',alamat=\"$_POST[alamat]\",provinsi='$_POST[provinsi]',no_telp='$_POST[no_telp]',email='$_POST[email]' where id_perwakilan='$_POST[id_perwakilan]'");
echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=perwakilan');</script>";	
}
if($delete=='hperwakilan'){
	mysql_query("delete from perwakilan where id_perwakilan='$_GET[id_perwakilan]'");
	header('location:view.php?p=perwakilan');
	}
//======================(dperwakilan)================//
if($act=='idperwakilan'){
	mysql_query("insert into pendaftaran_perwakilan(id_pendaftaran,id_perwakilan,id_jenis,tanggal_daftar)values('$_POST[id_pendaftaran]','$_POST[id_perwakilan]','$_POST[jenis_perwakilan]',now())");
		
	echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=perwakilan');</script>";
	
	}
if($act=='edperwakilan'){
mysql_query("update pendaftaran_perwakilan set id_pendaftaran='$_POST[id_pendaftaran]',id_jenis='$_POST[jenis_perwakilan]' where id_pendaftaran='$_POST[id_pendaftaran]'");
echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=perwakilan');</script>";	
}
if($delete=='hdperwakilan'){
	mysql_query("delete from pendaftaran_perwakilan where id_pendaftaran='$_GET[id_pendaftaran]'");
	header('location:view.php?p=perwakilan');
	}
//===============(pertanyaan)================//
if($act=='jpertanyaan'){
	
	mysql_query("update pertanyaan set id_pertanyaan='$_POST[id_pertanyaan]',id_staf='$_POST[id_staf]',pertanyaan=\"$_POST[pertanyaan]\",jawaban=\"$_POST[jawaban]\",status='0' where id_pertanyaan='$_POST[id_pertanyaan]'");
	echo"<script>alert('Pertanyaan Berhasil dijawab !');window.location=('view.php?p=pertanyaan');</script>";
	}
//===============(konfirmasi pembayaran)================//
if($act=='vkonfirmasi'){
	$data=mysql_fetch_array(mysql_query("select*from konfirmasi_pembayaran where id_konfirmasi='$_POST[id_konfirmasi]'"));
	
	$pendaftaran=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$data[id_pendaftaran]'"));
	$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$pendaftaran[id_pelanggan]'"));
	$produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$pendaftaran[id_produk]'"));
	if($data['jumlah']>20000){
		$kurs="IDR";
	}
	if($data['jumlah']<20000){
		$kurs="USD";
	}
	if($_POST['valid']==2){
	mysql_query("update konfirmasi_pembayaran set status='2',bukti='cancel.png' where id_konfirmasi='$_POST[id_konfirmasi]'");
	unlink("../upload/img_bukti/$_POST[bukti]");
	echo"<script>alert('Data Berhasil diupdate !');window.location=('view.php?p=konfirmasi');</script>";
	}if($_POST['valid']==1){
		mysql_query("update konfirmasi_pembayaran set status='1' where id_konfirmasi='$_POST[id_konfirmasi]'");
		mysql_query("insert into pembayaran(id_pembayaran,id_pendaftaran,id_staf,penyetor,jumlah,cara_bayar,kurs,keterangan,tanggal_bayar)values('$_POST[id_pembayaran]','$pendaftaran[id_pendaftaran]','$_POST[id_staf]','$data[atas_nama]','$data[jumlah]','Transfer Via $data[nama_bank]','$kurs',\"$data[keterangan]\",now())");
		mysql_query("insert into keuangan_masuk (id_keuangan,id_staf,penyetor,uraian_transaksi,jumlah,kurs,cara_bayar,keterangan,waktu_input)values('$_POST[id_keuangan]','$_POST[id_staf]','$pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]','Untuk Pembayaran $produk[jenis_produk]-$produk[jenis_paket]-$produk[bulan_keberangkatan]','$data[jumlah]','$kurs','Transfer Via $data[nama_bank]','$data[keterangan]',now())");
		echo"<script>alert('Data Berhasil diupdate !');window.location=('view.php?p=konfirmasi');</script>";
		}
	}
//===============(pertanyaan)================//
if($act=='rkeluhan'){
	
	mysql_query("update keluhan set id_staf='$_POST[id_staf]',keluhan=\"$_POST[keluhan]\",respon_keluhan=\"$_POST[respon]\",status='0' where id_keluhan='$_POST[id_keluhan]'");
	echo"<script>alert('Keluhan Berhasil direspon !');window.location=('view.php?p=keluhan');</script>";
	}
//==================(pelanggan)
if($act=='ipelanggan'){
$query="select max(id_pendaftaran) as maxID from pendaftaran_pelanggan where id_pendaftaran like 'PP%'";
$hasil=mysql_query($query);
$data=mysql_fetch_array($hasil);
$idMax=$data['maxID'];

$noUrut=(int) substr($idMax,2,6);
$noUrut++;

$newID = 'PP'.sprintf("%06s",$noUrut);
	mysql_query("insert into pelanggan(id_pelanggan,nama_depan,nama_tengah,nama_belakang,nama_panggilan,tempat_lahir,tanggal_lahir,no_ktp,jenis_kelamin,pendidikan,pekerjaan,ket_umrah,ket_haji,ukuran_pakaian,alamat,kota,telp_rumah,telp_kantor,hp,email,ahli_waris,hubungan,no_rekening,atas_nama,nama_bank,cabang,reg_dai,nama_dai,username,password,status_registrasi,w_input)values('$_POST[id_pelanggan]','$_POST[nama_depan]','$_POST[nama_tengah]','$_POST[nama_belakang]','$_POST[nama_panggilan]','$_POST[tempat_lahir]','$_POST[tanggal_lahir]','$_POST[no_ktp]','$_POST[jenis_kelamin]','$_POST[pendidikan]','$_POST[pekerjaan]','$_POST[ket_umrah]','$_POST[ket_haji]','$_POST[ukuran_pakaian]',\"$_POST[alamat]\",'$_POST[kota]','$_POST[telp_rumah]','$_POST[telp_kantor]','$_POST[hp]','$_POST[email]','$_POST[ahli_waris]','$_POST[hubungan]','$_POST[no_rekening]','$_POST[atas_nama]','$_POST[nama_bank]','$_POST[cabang]','$_POST[reg_dai]','$_POST[nama_dai]','$_POST[username]','$_POST[password]','UNREGISTERED',now())");
	mysql_query("insert into pendaftaran_pelanggan(id_pendaftaran,id_produk,id_pelanggan,tanggal_pendaftaran)values('$newID','$_POST[id_produk]','$_POST[id_pelanggan]',now())");
	
	echo"<script>alert('Data Sudah Disimpan !');window.location=('view.php?p=pelanggan');</script>";
	}
if($act=='epelanggan'){
mysql_query("update pelanggan set id_pelanggan='$_POST[id_pelanggan]',nama_depan='$_POST[nama_depan]',nama_tengah='$_POST[nama_tengah]',nama_belakang='$_POST[nama_belakang]',nama_panggilan='$_POST[nama_panggilan]',tempat_lahir='$_POST[tempat_lahir]',tanggal_lahir='$_POST[tanggal_lahir]',no_ktp='$_POST[no_ktp]',jenis_kelamin='$_POST[jenis_kelamin]',pendidikan='$_POST[pendidikan]',pekerjaan='$_POST[pekerjaan]',ket_umrah='$_POST[ket_umrah]',ket_haji='$_POST[ket_haji]',ukuran_pakaian='$_POST[ukuran_pakaian]',alamat=\"$_POST[alamat]\",kota='$_POST[kota]',telp_rumah='$_POST[telp_rumah]',telp_kantor='$_POST[telp_kantor]',hp='$_POST[hp]',email='$_POST[email]',ahli_waris='$_POST[ahli_waris]',hubungan='$_POST[hubungan]',no_rekening='$_POST[no_rekening]',atas_nama='$_POST[atas_nama]',nama_bank='$_POST[nama_bank]',cabang='$_POST[cabang]',reg_dai='$_POST[reg_dai]',nama_dai='$_POST[nama_dai]',username='$_POST[username]', password='$_POST[password]' where id_pelanggan='$_POST[id_pelanggan]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=pelanggan');</script>";	
	}
if($act=='validasi'){
	$data=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$_POST[id_pelanggan]'"));
	$data1=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pelanggan='$_POST[id_pelanggan]'"));
	
	mysql_query("insert into keadaan_pelanggan(id_keadaan,id_pendaftaran)values('$_POST[id_keadaan]','$data1[id_pendaftaran]')");
	mysql_query("insert into mou(id_mou,id_pendaftaran)values('$_POST[id_mou]','$data1[id_pendaftaran]')");
	mysql_query("insert into perlengkapan_pelanggan(id_perlengkapan_pelanggan,id_pendaftaran)values('$_POST[id_perlengkapan_pelanggan]','$data1[id_pendaftaran]')");
	mysql_query("insert into testimoni(id_testimoni,id_pendaftaran)values('$_POST[id_testimoni]','$data1[id_pendaftaran]')");
	mysql_query("insert into dokumen_pelanggan(id_dokumen,id_pelanggan)values('$_POST[id_dokumen]','$_POST[id_pelanggan]')");
	mysql_query("insert into passport(id_passport,id_pelanggan)values('$_POST[id_passport]','$_POST[id_pelanggan]')");
	mysql_query("insert into penanya(id_penanya,nama,email,password,status_penanya,waktu_daftar)values('$_POST[id_penanya]','$data[nama_depan] $data[nama_tengah] $data[nama_belakang]','$data[email]','$data[password]','Pelanggan',now())");
	mysql_query("update pelanggan set status_registrasi='REGISTERED',w_validasi=now() where id_pelanggan='$_POST[id_pelanggan]'");
	echo"<script>alert('Data Berhasil divalidasi !');window.location=('view.php?p=pelanggan');</script>";	
	}
//=====================(pendaftaran pelanggan)
if($act=='ependaftaran_pelanggan'){
mysql_query("update pendaftaran_pelanggan set id_pendaftaran='$_POST[id_pendaftaran]',id_produk='$_POST[id_produk]',status_keberangkatan='$_POST[status_keberangkatan]' where id_pendaftaran='$_POST[id_pendaftaran]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=pendaftaran');</script>";	
	}
if($delete=='hpendaftaran_pelanggan'){
	mysql_query("delete from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'");
	header('location:view.php?p=pendaftaran');
	}
//==================(pembayaran)
if($act=='ipembayaran'){
	$data=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$_POST[id_pendaftaran]'"));
	$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$data[id_pelanggan]'"));
	$produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$data[id_produk]'"));
	mysql_query("insert into pembayaran(id_pembayaran,id_pendaftaran,id_staf,penyetor,jumlah,cara_bayar,kurs,keterangan,tanggal_bayar)values('$_POST[id_pembayaran]','$data[id_pendaftaran]','$_POST[id_staf]','$_POST[penyetor]','$_POST[jumlah]','$_POST[cara_bayar]','$_POST[kurs]',\"$_POST[keterangan]\",now())");
		
	mysql_query("insert into keuangan_masuk (id_keuangan,id_staf,penyetor,uraian_transaksi,jumlah,kurs,cara_bayar,keterangan,waktu_input)values('$_POST[id_keuangan]','$_POST[id_staf]','$pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]','Untuk Pembayaran $produk[jenis_produk]-$produk[jenis_paket]-$produk[bulan_keberangkatan]','$_POST[jumlah]','$_POST[kurs]','$_POST[cara_bayar]',\"$data[keterangan]\",now())");
		echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=pembayaran');</script>";
	}
if($act=='epembayaran'){
mysql_query("update pembayaran set penyetor='$_POST[penyetor]',jumlah='$_POST[jumlah]',cara_bayar='$_POST[cara_bayar]',kurs='$_POST[kurs]',keterangan=\"$_POST[keterangan]\",id_staf='$_POST[id_staf]' where id_pembayaran='$_POST[id_pembayaran]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=pembayaran');</script>";	
	}
if($delete=='hspembayaran'){
	mysql_query("delete from pembayaran where id_pembayaran='$_GET[id_pembayaran]'");
	echo"<script>alert('Data Berhasil dihapus !');window.location=('view.php?p=pembayaran');</script>";
	}
if($act=='cetak_spembayaran'){
$sql=mysql_query("select * from pembayaran where id_pembayaran='$_GET[id_pembayaran]'");
$data = mysql_fetch_array($sql);
$staf=mysql_fetch_array(mysql_query("select * from user_damtour WHERE id_staf='$data[id_staf]'"));
$pendaftaran=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan WHERE id_pelanggan='$pendaftaran[id_pelanggan]'"));
$produk=mysql_fetch_array(mysql_query("select * from produk WHERE id_produk='$pendaftaran[id_produk]'"));
$total_bayar=mysql_query("SELECT SUM(jumlah) as totbayar FROM pembayaran where id_pendaftaran='$pendaftaran[id_pendaftaran]'");
$jml_bayar=mysql_fetch_array($total_bayar);
$harus_bayar=$produk['biaya'];

 $jmldata = mysql_num_rows($sql);
if($produk['jenis_produk']=="Belum Menentukan Keberangkatan"){
	$sisa_bayar="-";
	}else{
		$sisa_bayar=$harus_bayar-$jml_bayar['totbayar'];
		}

define('FPDF_FONTPATH', '../fpdf/font/');
require('../fpdf/fpdf.php');
$pdf=new FPDF('P', 'cm','A4');
$pdf->AddPage();
$pdf->image('../images/header_faktur.jpg','0','0','0','0');

$pdf->setXY(0.5,2);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'STRUK/BUKTI',0,5,'L',0);
$pdf->setXY(0.5,2.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'PEMBAYARAN UMROH',0,5,'L',0);
$pdf->setXY(8,2.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(12,1,"BYRUMR".$data['id_pembayaran'].$data['kurs'].$data['id_staf'],5,'L',0);
$pdf->setXY(0.5,3);
$pdf->setFont('Courier','B',8);
$pdf->cell(10,1,'---------------------------------------------------------------------------------------------------------------------',0,5,'L',0);
$pdf->setXY(0.5,4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'TANGGAL',0,5,'L',0);
$pdf->setXY(3.8,4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$data['tanggal_bayar'],0,5,'L',0);
$pdf->setXY(10,4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Jumlah',0,5,'L',0);
$pdf->setXY(12.7,4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$data['kurs'].' '.format_angka($data['jumlah']),0,5,'L',0);
$pdf->setXY(10,4.7);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Cara Bayar',0,5,'L',0);
$pdf->setXY(12.7,4.7);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$data['cara_bayar'],0,5,'L',0);
$pdf->setXY(0.5,4.7);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'NAMA PELANGGAN',0,5,'L',0);
$pdf->setXY(3.8,4.7);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$pelanggan['nama_depan'].' '.$pelanggan['nama_tengah'].' '.$pelanggan['nama_belakang'],0,5,'L',0);
$pdf->setXY(0.5,5.4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'KEBERANGKATAN',0,5,'L',0);
$pdf->setXY(3.8,5.4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$produk['bulan_keberangkatan'],0,5,'L',0);
$pdf->setXY(10,5.4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Sisa Bayar',0,5,'L',0);
$pdf->setXY(12.7,5.4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.format_angka($sisa_bayar),0,5,'L',0);
$pdf->setXY(0.5,6.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'SUDAH BAYAR',0,5,'L',0);
$pdf->setXY(3.8,6.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.format_angka($jml_bayar['totbayar']),0,5,'L',0);
$pdf->setXY(10,6.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Penyetor',0,5,'L',0);
$pdf->setXY(12.7,6.1);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$data[penyetor],0,5,'L',0);
$pdf->setXY(0.5,7);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'KET.',0,5,'L',0);
$pdf->setXY(3.8,7);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,':',0,5,'L',0);
$pdf->setXY(4,7.3);
$pdf->setFont('times','B',9);
$pdf->MultiCell(17,0.4,' Harga Paket : '.format_angka($produk['biaya']).'| '.$data['keterangan'],0,'L',0);
$pdf->setXY(3.7,9);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'PENYETOR',0,5,'L',0);
$pdf->setXY(3.2,10.5);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'(   '.$data['penyetor'].'   )',0,5,'L',0);
$pdf->setXY(15,9);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'ADMIN',0,5,'L',0);
$pdf->setXY(15,10.5);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,$staf['nama'],0,5,'L',0);
$pdf->setXY(0.5,12);
$pdf->setFont('times','B',10);
$pdf->MultiCell(19,0.4,'Faktur ini adalah bukti pembayaran yang sah, faktur yang diambil langsung, mohon ditandatangani oleh pengambil faktur disertai kontak.',0,'L',0);

$pdf->Output();

}
if($act=='cetak_allspembayaran'){
	$pdf = new Cezpdf();
$all=$pdf->openObject();
$pdf->line(10,50,578,50);
$pdf->addText(30,34,8,'Dicetak Tanggal : '.date('d-m-Y , H:i:s').' || Developed By: Hendri Mahesya');

$pdf->closeObject();




$sql=mysql_query("select * from pembayaran where id_pendaftaran='$_GET[id_pendaftaran]'");
$total_bayar=mysql_query("SELECT SUM(jumlah) as totbayar FROM pembayaran where id_pendaftaran = '$_GET[id_pendaftaran]'");
							  $jml_bayar=mysql_fetch_array($total_bayar);
$pendaftaran=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan where id_pelanggan='$pendaftaran[id_pelanggan]'"));
$produk=mysql_fetch_array(mysql_query("select * from produk where id_produk='$pendaftaran[id_produk]'"));
$totbayar=$jml_bayar['totbayar'];
$sisahbayar=$produk['biaya']-$totbayar;
							  
$i=1;
while($r=mysql_fetch_array($sql)){
	$data[$i]=array('No'=>$i,
					'ID Pembayaran'=>$r['id_pembayaran'],
					'ID Pelanggan'=>$pelanggan['id_pelanggan'],
					'Tanggal Pembayaran'=>$r['tanggal_bayar'],
					'Cicilan'=>format_angka($r['jumlah']));
					$i++;
					}
	$options=array('shaded'=>0,'width'=>500);
	$pdf->ezImage("../images/header.jpg",0,550,'none','center');
	$pdf->ezText(" Nama Pelanggan :  $pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]\n");
	$pdf->ezText(" Produk :  $produk[bulan_keberangkatan]\n");
	$pdf->ezTable($data,'',"<b>Data Pembayaran Pelanggan</b>\n",$options); 
	$pdf->ezText("\n\n Biaya Paket : ".format_angka($produk['biaya']));
	$pdf->ezText("\n Total Pembayaran Anda :  ".format_angka($jml_bayar['totbayar']));
	$pdf->ezText("\n Sisa Pembayaran Yang Harus Anda Bayar :   ".format_angka($sisahbayar));
	$pdf->addObject($all,'all');
$pdf->ezStartPageNumbers(320,15,8);
$pdf->ezStream();
}

//=================(dokumen&passport)
if($act=='edokumen'){
mysql_query("update dokumen_pelanggan set passport='$_POST[passport]',foto='$_POST[foto]',buku_vaksin='$_POST[buku_vaksin]',buku_nikah='$_POST[buku_nikah]',akta_lahir=\"$_POST[akta_lahir]\",fc_ktp='$_POST[fc_ktp]',kk='$_POST[kk]',spph='$_POST[spph]',bpih='$_POST[bpih]',keterangan=\"$_POST[keterangan]\",waktu_penyerahan=now(),yang_menyerahkan='$_POST[yang_menyerahkan]' where id_dokumen='$_POST[id_dokumen]'");
mysql_query("update passport set no_passport='$_POST[no_passport]',date_issued='$_POST[date_issued]',date_expired='$_POST[date_expired]',issuing_office='$_POST[issuing_office]' where id_passport='$_POST[id_passport]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=dokumen');</script>";	
	}
if($act=='cetakdokumen_pelanggan'){
$dokumen=mysql_fetch_array(mysql_query("select * from dokumen_pelanggan WHERE id_dokumen='$_GET[id_dokumen]'"));
$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan WHERE id_pelanggan='$dokumen[id_pelanggan]'"));
$produk=mysql_fetch_array(mysql_query("select * from produk WHERE id_produk='$_GET[id_produk]'"));
$staf=mysql_fetch_array(mysql_query("select * from user_damtour WHERE id_staf='$_SESSION[id_staf]'"));


$tgl=date("dmY");
$tgl2=date("d-m-Y");


define('FPDF_FONTPATH', '../fpdf/font/');
require('../fpdf/fpdf.php');
$pdf=new FPDF('P', 'cm','A4');
$pdf->AddPage();
$pdf->image('../images/header_faktur.jpg','0','0','0','0');

$pdf->setXY(0.5,2);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'STRUK/BUKTI',0,5,'L',0);
$pdf->setXY(0.5,2.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'PENYERAHAN DOKUMEN',0,5,'L',0);
$pdf->setXY(8,2.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(12,1,"DKMNJM".$dokumen['id_dokumen'].$tgl,5,'L',0);
$pdf->setXY(0.5,3);
$pdf->setFont('Courier','B',8);
$pdf->cell(10,1,'---------------------------------------------------------------------------------------------------------------------',0,5,'L',0);
$pdf->setXY(0.5,4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'TANGGAL',0,5,'L',0);
$pdf->setXY(3.5,4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['waktu_penyerahan'],0,5,'L',0);
$pdf->setXY(0.5,4.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'',0,5,'L',0);
$pdf->setXY(3.5,4.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,' '.$dokumen['grup'],0,5,'L',0);
$pdf->setXY(10,4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'NAMA PELANGGAN',0,5,'L',0);
$pdf->setXY(14,4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$pelanggan['nama_depan'].' '.$pelanggan['nama_tengah'].' '.$pelanggan['nama_belakang'],0,5,'L',0);
$pdf->setXY(10,4.7);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Yang Menyerahkan',0,5,'L',0);
$pdf->setXY(14,4.7);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['yang_menyerahkan'],0,5,'L',0);

$pdf->setXY(0.5,5.4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'-------------------------------------------------------------------------------------',0,5,'L',0);

$pdf->setXY(0.5,6.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Passport',0,5,'L',0);
$pdf->setXY(3.8,6.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['passport'],0,5,'L',0);
$pdf->setXY(0.5,6.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Buku Nikah',0,5,'L',0);
$pdf->setXY(3.8,6.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['buku_nikah'],0,5,'L',0);
$pdf->setXY(0.5,7.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'KK',0,5,'L',0);
$pdf->setXY(3.8,7.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['kk'],0,5,'L',0);
$pdf->setXY(0.5,7.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Akta Lahir',0,5,'L',0);
$pdf->setXY(3.8,7.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['akta_lahir'],0,5,'L',0);
$pdf->setXY(0.5,8.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'KTP',0,5,'L',0);
$pdf->setXY(3.8,8.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['ktp'],0,5,'L',0);
$pdf->setXY(0.5,8.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'KET.',0,5,'L',0);
$pdf->setXY(3.8,8.6);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,':',0,5,'L',0);
$pdf->setXY(4.4,9);
$pdf->setFont('times','',9);
$pdf->MultiCell(15,1.5,' '.$dokumen['keterangan'],1,'L',0);



$pdf->setXY(13,6.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'SPPH',0,5,'L',0);
$pdf->setXY(16.5,6.1);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$dokumen['spph'],0,5,'L',0);
$pdf->setXY(13,6.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Foto',0,5,'L',0);
$pdf->setXY(16.5,6.6);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$dokumen['foto'],0,5,'L',0);
$pdf->setXY(13,7.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Buku Vaksin',0,5,'L',0);
$pdf->setXY(16.5,7.1);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$dokumen['buku_vaksin'],0,5,'L',0);
$pdf->setXY(13,7.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'BPIH',0,5,'L',0);
$pdf->setXY(16.5,7.6);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$dokumen['bpih'],0,5,'L',0);


$pdf->setXY(3.7,10.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Yang Menyerahkan',0,5,'L',0);
$pdf->setXY(3.7,12);
$pdf->setFont('Courier','',10);
$pdf->cell(10,1,$dokumen['yang_menyerahkan'],0,5,'L',0);
$pdf->setXY(15,10.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Yang Menerima',0,5,'L',0);
$pdf->setXY(15,12);
$pdf->setFont('Courier','',10);
$pdf->cell(10,1,$staf['nama'],0,5,'L',0);
$pdf->setXY(0.5,13);
$pdf->setFont('times','B',10);
$pdf->MultiCell(19,0.4,'Note: ',0,'L',0);
$pdf->setXY(0.5,14);
$pdf->setFont('times','B',10);
$pdf->MultiCell(19,0.4,'----------------------------------------------------------------------------------------------------------------------------------------------------------------',0,'L',0);

$pdf->image('../images/header_faktur.jpg','0','14.5','0','0');

$pdf->setXY(0.5,16);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'STRUK/BUKTI',0,5,'L',0);
$pdf->setXY(0.5,16.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'PENYERAHAN DOKUMEN',0,5,'L',0);
$pdf->setXY(8,16.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(12,1,"DKMNJM".$dokumen['id_dokumen'].$tgl,5,'L',0);
$pdf->setXY(0.5,17);
$pdf->setFont('Courier','B',8);
$pdf->cell(10,1,'---------------------------------------------------------------------------------------------------------------------',0,5,'L',0);
$pdf->setXY(0.5,17.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'TANGGAL',0,5,'L',0);
$pdf->setXY(3.5,17.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['waktu_penyerahan'],0,5,'L',0);
$pdf->setXY(10,17.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'NAMA PELANGGAN',0,5,'L',0);
$pdf->setXY(14,17.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$pelanggan['nama_depan'].' '.$pelanggan['nama_tengah'].' '.$pelanggan['nama_belakang'],0,5,'L',0);
$pdf->setXY(10,18);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Yang Menyerahkan',0,5,'L',0);
$pdf->setXY(14,18);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['yang_menyerahkan'],0,5,'L',0);
$pdf->setXY(0.5,18);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'',0,5,'L',0);
$pdf->setXY(3.5,18);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,' '.$dokumen['grup'],0,5,'L',0);
$pdf->setXY(0.5,18.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'-------------------------------------------------------------------------------------',0,5,'L',0);

$pdf->setXY(0.5,19);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Passport',0,5,'L',0);
$pdf->setXY(3.8,19);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['passport'],0,5,'L',0);
$pdf->setXY(0.5,19.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Buku Nikah',0,5,'L',0);
$pdf->setXY(3.8,19.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['buku_nikah'],0,5,'L',0);
$pdf->setXY(0.5,20);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'KK',0,5,'L',0);
$pdf->setXY(3.8,20);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['kk'],0,5,'L',0);
$pdf->setXY(0.5,20.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Akta Lahir',0,5,'L',0);
$pdf->setXY(3.8,20.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['akta_lahir'],0,5,'L',0);
$pdf->setXY(0.5,21);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'KTP',0,5,'L',0);
$pdf->setXY(3.8,21);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$dokumen['ktp'],0,5,'L',0);
$pdf->setXY(0.5,21.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'KET.',0,5,'L',0);
$pdf->setXY(3.8,21.5);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,':',0,5,'L',0);
$pdf->setXY(4.4,22);
$pdf->setFont('times','',9);
$pdf->MultiCell(15,1,' '.$dokumen['keterangan'],1,'L',0);




$pdf->setXY(13,19);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'SPPH',0,5,'L',0);
$pdf->setXY(16.5,19);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$dokumen['spph'],0,5,'L',0);
$pdf->setXY(13,19.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Foto',0,5,'L',0);
$pdf->setXY(16.5,19.5);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$dokumen['foto'],0,5,'L',0);
$pdf->setXY(13,20);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Buku Vaksin',0,5,'L',0);
$pdf->setXY(16.5,20);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$dokumen['buku_vaksin'],0,5,'L',0);
$pdf->setXY(13,20.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'BPIH',0,5,'L',0);
$pdf->setXY(16.5,20.5);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$dokumen['bpih'],0,5,'L',0);


$pdf->setXY(3.7,23);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Yang Menyerahkan',0,5,'L',0);
$pdf->setXY(3.7,24.5);
$pdf->setFont('Courier','',10);
$pdf->cell(10,1,$dokumen['yang_menyerahkan'],0,5,'L',0);
$pdf->setXY(15,23);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Yang Menerima',0,5,'L',0);
$pdf->setXY(15,24.5);
$pdf->setFont('Courier','',10);
$pdf->cell(10,1,$staf['nama'],0,5,'L',0);
$pdf->setXY(0.5,25.5);
$pdf->setFont('times','B',10);
$pdf->MultiCell(19,0.4,'Note: ',0,'L',0);

$pdf->Output();

}

//===============(mou)
if($act=='emou'){
mysql_query("update mou set no_mou='$_POST[no_mou]',tgl_cetak=now(),status_cetak='$_POST[status]' where id_mou='$_POST[id_mou]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=mou');</script>";	
	}
if($act=='cetak_mou'){
	mysql_query("update mou set tgl_cetak='$tanggal' where id_mou='$_POST[id_mou]'");
	define('FPDF_FONTPATH', '../fpdf/font/');
require('../fpdf/fpdf.php');
class PDF extends FPDF
{
//Page header
function Header()
{
//Logo
$this->Image('../images/header.jpg','10','0','190','45');
}
	function Content()
{


$data=mysql_fetch_array(mysql_query("select*from mou where id_mou='$_GET[id_mou]'"));
$pendaftaran=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
$data2=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$pendaftaran[id_pelanggan]'"));
$produk=mysql_fetch_array(mysql_query("select * from produk where id_produk='$pendaftaran[id_produk]'"));
$namalengkap="$data2[nama_depan] $data2[nama_tengah] $data2[nama_belakang]";

$this->setXY(10,45);
$this->setFont('times','B',16);
$this->cell(0,0,'SURAT KESEPAKATAN',0,0,'C',0);
$this->setXY(10,55);
$this->setFont('times','B',14);
$this->cell(0,0,"ANTARA PT. DO'A 'ARAFAH MADINAH DENGAN JAMA'AH UMROH",0,0,'C',0);
$this->setXY(10,60);
$this->setFont('times','B',14);
$this->cell(0,0,'UNTUK PENDAFTARAN UMROH KEBERANGKATAN TAHUN 2016',0,0,'C',0);


$this->setXY(10,68);
$this->setFont('times','B',12);
$this->cell(0,0,$data['no_mou'],0,0,'C',0);



$this->setXY(10,73);
$this->setFont('times','',12);
$this->cell(30,6.3,'Pada hari ini, tanggal',0,0,'L',0);
$this->setXY(48,73);
$this->setFont('times','',12);
$this->cell(30,6.3,$data['tgl_cetak'],0,0,'L',0);
$this->setXY(70,73);
$this->setFont('times','',12);
$this->cell(30,6.3,"bertempat di Gedung GRAHA  DAMTOUR  Jl. KH. Abdullah Syafe'i -",0,0,'L',0);
$this->setXY(10,80);
$this->setFont('times','',12);
$this->cell(30,6.3,"No. 120, Bukit Duri- Tebet, Jakarta Selatan. Kami yang bertandatangan di bawah ini:",0,0,'L',0);


$this->setXY(20,90);
$this->setFont('times','',12);
$this->cell(30,6.3,'Nama Lengkap',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->cell(25,6.3,'Hambali Abbas, S.Pd.I',0,0,'L',0);
$this->MultiCell(0,6,"");

$this->setX(20);
$this->setFont('times','',12);
$this->cell(30,6.3,'No. KTP',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->cell(25,6.3,'3276060710790007',0,0,'L',0);
$this->MultiCell(0,6,"");

$this->setX(20);
$this->setFont('times','',12);
$this->cell(30,6.3,'Tempat, Tanggal Lahir',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->cell(25,6.3,'Indramayu, 07-10-1979',0,0,'L',0);
$this->MultiCell(0,6,"");

$this->setX(20);
$this->cell(30,6.3,'JenisKelamin',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->cell(25,6.3,'Laki-Laki',0,0,'L',0);
$this->MultiCell(0,6,"");

$this->setX(20);
$this->cell(30,6.3,'Alamat',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->Multicell(125,6.3,"GRAHA DAMTOUR, Jl. KH. Abdullah Syafe'i No. 120 Bukit Duri, Tebet, Jakarta Selatan",0,'J');

$this->setX(20);
$this->cell(30,6.3,'Telp./Fax',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->cell(25,6.3,'021-83705940 / 021-83705570',0,0,'L',0);
$this->MultiCell(0,6,"");

$this->setX(20);
$this->cell(30,6.3,'Jabatan',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->cell(25,6.3,"Direktur Utama PT. DO'A 'ARAFAH MADINAH (DAMTOUR)",0,0,'L',0);
$this->MultiCell(0,6,"");

$this->setXY(10,142);
$this->setFont('times','',12);
$this->MultiCell(0,6,"Bertindak dalam jabatanya tersebut di atas oleh karena itu untuk dan atas nama perseroan terbatas PT. DO'A 'ARAFAH MADINAH, suatu badan hukum berkedudukan di Jakarta Timur, yang anggaran dasarnya didirikan berdasarkan Akta Nomor: 15 tanggal 25 September 2011, anggaran dasar yang mana telah mendapat pengesahan dari Kementrian Hukum dan Hak Asasi Manusia Republik Indonesia, sebagaimana tercatat dalam Surat Keputusan Nomor: AHU-58767.AH.01.01, tanggal 30 November 2011. ");


$this->setXY(10,170);
$this->setFont('times','',12);
$this->cell(10,9,'Untuk selanjutnya dalam perjanjian ini disebut sebagai:',0,0,'L',0);
$this->setXY(10,176);
$this->setFont('times','B',12);
$this->cell(30,9,'------------------------------------------------- PIHAK PERTAMA --------------------------------------------------------',0,0,'J',0);
$this->setXY(20,184);
$this->setFont('times','',12);
$this->cell(30,6.3,'Nama Lengkap',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->cell(25,6.3,$namalengkap,0,0,'L',0);
$this->MultiCell(0,6,"");

$this->setX(20);
$this->setFont('times','',12);
$this->cell(30,6.3,'No. KTP',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->cell(25,6.3,$data2['no_ktp'],0,0,'L',0);
$this->MultiCell(0,6,"");

$this->setX(20);
$this->setFont('times','',12);
$this->cell(30,6.3,'Tempat, Tanggal Lahir',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->cell(25,6.3,$data2['tempat_lahir'].", ".$data2['tanggal_lahir'],0,0,'L',0);
$this->MultiCell(0,6,"");

$this->setX(20);
$this->cell(30,6.3,'Jenis Kelamin',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->cell(25,6.3,$data2['jenis_kelamin'],0,0,'L',0);
$this->MultiCell(0,6,"");

$this->setX(20);
$this->cell(30,6.3,'Alamat',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->Multicell(125,6.3,$data2['alamat'],0,'J');

$this->setX(20);
$this->cell(30,6.3,'Telp./Fax',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->cell(25,6.3,$data2['hp'],0,0,'L',0);
$this->MultiCell(0,6,"");

$this->setX(20);
$this->cell(30,6.3,'Jabatan',0,0,'L',0);
$this->cell(25,6.3,':',0,0,'C',0);
$this->cell(25,6.3,"Pelanggan Keberangkatan ".$produk['bulan_keberangkatan'],0,0,'L',0);
$this->MultiCell(0,6,"");



$this->setXY(10,226);
$this->setFont('times','',12);
$this->cell(30,6.3,'Untuk selanjutnya dalam perjanjian ini disebut sebagai:',0,0,'L',0);
$this->setXY(10,242);
$this->setFont('times','B',12);
$this->cell(30,9,'---------------------------------------------------- PIHAK KEDUA ----------------------------------------------------------',0,0,'J',0);


$this->setXY(10,250);
$this->setFont('times','',12);
$this->cell(30,70,'Kedua belah pihak sepakat untuk beberapa hal berikut:',0,0,'J',0);

$this->setXY(20,48);
$this->setFont('times','',12);
$this->cell(4,6.3,"1.",0,0,'J',0);
$this->MultiCell(0,6.3,"Calon Jama'ah Umroh menentukan pilihan program umroh bayar tahun ini berangkat tahun 2016.",0,'J');

$this->setX(20);
$this->setFont('times','',12);
$this->cell(4,6.3,"2.",0,0,'J',0);
$this->MultiCell(0,6.3,"Calon Jama'ah Umroh membayar biaya paket sesuai program yang dipilih dan sesuai ketentuan waktu program.",0,'J');

$this->setX(20);
$this->setFont('times','',12);
$this->cell(4,6.3,"3.",0,0,'J',0);
$this->MultiCell(0,6.3,"Program yang dipilih adalah berdasarkan bulan pembayaran lunas untuk biaya paket umroh tahun 2016.",0,'J');

$this->setX(20);
$this->setFont('times','',12);
$this->cell(4,6.3,"4.",0,0,'J',0);
$this->MultiCell(0,6.3,"Calon Jama'ah umroh menyerahkan dokumen 45 hari setelah pembayaran. Apabila sampai 3 bulan menjelang keberangkatan jama'ah belum menyerahkan dokumen dikenakan denda $350. ",0,'J');

$this->setX(20);
$this->setFont('times','',12);
$this->cell(4,6.3,"5.",0,0,'J',0);
$this->MultiCell(0,6.3,"Apabila DAMTOUR tidak memberangkatkan calon Jama'ah Umroh sesuai program yang sudah dipilih, maka biaya kembali 100%.",0,'J');

$this->setX(20);
$this->setFont('times','',12);
$this->cell(4,6.3,"6.",0,0,'J',0);
$this->MultiCell(0,6.3,"Segala kejadian yang diakibatkan oleh force major maka ada musyawarah antara pihak travel dengan Jama'ah untuk mencari jalan keluar.",0,'J');

$this->setX(20);
$this->setFont('times','',12);
$this->cell(4,6.3,"7.",0,0,'J',0);
$this->MultiCell(0,6.3,"Apabila Jama'ah mengundurkan diri / membatalkan karena meninggal dunia atau karena lainnya maka berlaku ketentuan berikut :",0,'J');

$this->setX(25);
$this->setFont('times','',12);
$this->cell(4,6.3,"a.",0,0,'L',0);
$this->setX(30);
$this->setFont('times','',12);
$this->MultiCell(0,6.3,"Mengundurkan diri 1 minggu setelah pendaftaran dikenakan potongan 5% dari harga paket + potongan Rp. 3.500.000,-",0,'J');

$this->setX(25);
$this->setFont('times','',12);
$this->cell(4,6.3,"b.",0,0,'L',0);
$this->setX(30);
$this->setFont('times','',12);
$this->MultiCell(0,6.3,"Mengundurkan diri 1 s/d 11,5 bulan sebelum keberangkatan dikenakan potongan 5% dari harga paket + potongan Rp. 3.500.000,-",0,'J');

$this->setX(25);
$this->setFont('times','',12);
$this->cell(4,6.3,"c.",0,0,'L',0);
$this->setX(30);
$this->setFont('times','',12);
$this->MultiCell(0,6.3,"Mengundurkan diri 2 minggu setelah proses visa dikenakan potongan 10% dari harga paket + potongan Rp. 3.500.000,-",0,'J');

$this->setX(25);
$this->setFont('times','',12);
$this->cell(4,6.3,"d.",0,0,'L',0);
$this->setX(30);
$this->setFont('times','',12);
$this->MultiCell(0,6.3,"Mengundurkan diri 3 minggu setelah proses visa dikenakan potongan 35% dari harga paket + potongan Rp. 3.500.000,-",0,'J');

$this->setX(25);
$this->setFont('times','',12);
$this->cell(4,6.3,"e.",0,0,'L',0);
$this->setX(30);
$this->setFont('times','',12);
$this->MultiCell(0,6.3,"Mengundurkan diri 1 minggu menjelang keberangkatan dikenakan potongan 50 % dari harga paket + potongan Rp. 3.500.000,-",0,'J');

$this->setX(25);
$this->setFont('times','',12);
$this->cell(4,6.3,"f.",0,0,'L',0);
$this->setX(30);
$this->setFont('times','',12);
$this->MultiCell(0,6.3,"Mengundurkan diri 1 hari menjelang keberangkatan dikenakan potongan 100 % dari harga paket + potongan Rp. 3.500.000,-",0,'J');

$this->setX(20);
$this->setFont('times','',12);
$this->cell(4,6.3,"8.",0,0,'J',0);
$this->MultiCell(0,6.3,"Calon Jama'ah Umroh mendapatkan : ",0,'J');

$this->setX(25);
$this->setFont('times','',12);
$this->cell(4,6.3,"a.",0,0,'L',0);
$this->setX(30);
$this->setFont('times','',12);
$this->MultiCell(0,6.3,"Pelayanan Paket Favorit, Program 2 malam diperjalanan, 3 malam di Madinah, 4 malam di Makkah.",0,'J');

$this->setX(25);
$this->setFont('times','',12);
$this->cell(4,6.3,"b.",0,0,'L',0);
$this->setX(30);
$this->setFont('times','',12);
$this->MultiCell(0,6.3,"Pesawat Lion / Batavia / optional lainnya.",0,'J');

$this->setX(25);
$this->setFont('times','',12);
$this->cell(4,6.3,"c.",0,0,'L',0);
$this->setX(30);
$this->setFont('times','',12);
$this->MultiCell(0,6.3,"Biaya sudah termasuk Booking Seat, Airport tax, Handling dan Perlengkapan.",0,'J');




$this->setXY(10,180);
$this->setFont('times','',12);
$this->cell(30,98,'Demikian surat kesepakatan ini dibuat untuk dapat dipertanggung jawabkan bersama.',0,0,'L',0);
$this->setXY(80,70);
$this->setFont('times','',12);
$this->cell(30,6,'Jakarta, ',0,0,'L',0);
$this->setXY(95,70);
$this->setFont('times','',12);
$this->cell(30,6,$data['tgl_cetak'],0,0,'L',0);

$this->setXY(20,75);
$this->setFont('times','B',12);
$this->cell(30,25,"PT. Do'A 'Arafah Madinah",0,0,'L',0);
$this->setXY(20,80);
$this->setFont('times','B',12);
$this->cell(30,25,"Pihak Pertama",0,0,'L',0);
$this->setXY(150,80);
$this->setFont('times','B',12);
$this->cell(30,25,"Pihak Kedua",0,0,'L',0);

$this->setXY(20,120);
$this->setFont('times','U',12);
$this->cell(30,25,"Hambali Abbas, S.Pd.I",0,0,'L',0);
$this->setXY(20,125);
$this->setFont('times','',12);
$this->cell(30,25,"Direktur Utama",0,0,'L',0);

$this->setXY(150,120);
$this->setFont('times','U',12);
$this->cell(30,25,$namalengkap,0,0,'L',0);
$this->setXY(150,125);
$this->setFont('times','',12);
$this->cell(30,25,"Pelanggan",0,0,'L',0);
}
	function Footer()
{
	$this->image('../images/footer.jpg','10','280','190','5');
	
$this->setXY(10,283);
$this->SetFont('Arial','I',9);
//nomor halaman
$this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
}}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->addPage(P);
$pdf->Content();






$pdf->output();



	}
//================(perlengkapan_pelanggan)
if($act=='eperlengkapan_pelanggan'){
mysql_query("update perlengkapan_pelanggan set penerima='$_POST[penerima]',koper='$_POST[koper]',taskecil='$_POST[tas_kecil]',dvdprofil='$_POST[cd_company_profil]',bukumarketing='$_POST[buku_marketing]',bukuproduk='$_POST[buku_produk]',bukupintar='$_POST[buku_pintar]',bukudoa='$_POST[buku_doa]',voucher='$_POST[voucher]',kainihrom='$_POST[kain_ihrom]',ikatpinggang='$_POST[ikat_pinggang]',mukenabergo='$_POST[mukena_bergo]',bahanbatik='$_POST[bahan_batik]',waktu_pengambilan=now() where id_perlengkapan_pelanggan='$_POST[id_perlengkapan_pelanggan]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=perlengkapan_pelanggan');</script>";	
	}
if($act=='cetakperlengkapan_pelanggan'){
$perlengkapan=mysql_fetch_array(mysql_query("select * from perlengkapan_pelanggan WHERE id_perlengkapan_pelanggan='$_GET[id_perlengkapan_pelanggan]'"));
$pendaftaran=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$perlengkapan[id_pendaftaran]'"));
$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan WHERE id_pelanggan='$pendaftaran[id_pelanggan]'"));
$produk=mysql_fetch_array(mysql_query("select * from produk WHERE id_produk='$pendaftaran[id_produk]'"));
$staf=mysql_fetch_array(mysql_query("select * from user_damtour WHERE id_staf='$_SESSION[id_staf]'"));
$tgl=date("dmY");
$tgl2=date("d-m-Y");
if($pelanggan['jenis_kelamin']=='Laki-Laki'){
	$jk='LK';}
	else if ($pelanggan['jenis_kelamin']=='Perempuan'){
		$jk='PR';}

define('FPDF_FONTPATH', '../fpdf/font/');
require('../fpdf/fpdf.php');
$pdf=new FPDF('P', 'cm','A4');
$pdf->AddPage();
$pdf->image('../images/header_faktur.jpg','0','0','0','0');

$pdf->setXY(0.5,2);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'STRUK/BUKTI',0,5,'L',0);
$pdf->setXY(0.5,2.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'PENGAMBILAN PERLENGKAPAN',0,5,'L',0);
$pdf->setXY(8,2.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(12,1,"PRLGKPNPL".$perlengkapan['id_perlengkapan_pelanggan'].$staf['id_staf'],5,'L',0);
$pdf->setXY(0.5,3);
$pdf->setFont('Courier','B',8);
$pdf->cell(10,1,'---------------------------------------------------------------------------------------------------------------------',0,5,'L',0);
$pdf->setXY(0.5,4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'TANGGAL AMBIL',0,5,'L',0);
$pdf->setXY(3.5,4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['waktu_pengambilan'],0,5,'L',0);
$pdf->setXY(10,4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'NAMA PELANGGAN',0,5,'L',0);
$pdf->setXY(13.5,4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$pelanggan['nama_depan'].' '.$pelanggan['nama_tengah'].' '.$pelanggan['nama_belakang'].'('.$jk.')',0,5,'L',0);
$pdf->setXY(10,4.7);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'YANG MENERIMA',0,5,'L',0);
$pdf->setXY(13,4.7);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['penerima'],0,5,'L',0);
$pdf->setXY(0.5,4.7);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'PRODUK',0,5,'L',0);
$pdf->setXY(3.5,4.7);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$produk['bulan_keberangkatan'],0,5,'L',0);
$pdf->setXY(0.5,5.4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'-------------------------------------------------------------------------------------',0,5,'L',0);

$pdf->setXY(0.5,6.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Koper',0,5,'L',0);
$pdf->setXY(3.8,6.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['koper'],0,5,'L',0);
$pdf->setXY(0.5,6.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Tas Kecil',0,5,'L',0);
$pdf->setXY(3.8,6.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['taskecil'],0,5,'L',0);
$pdf->setXY(0.5,7.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'DVD Profil',0,5,'L',0);
$pdf->setXY(3.8,7.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['dvdprofil'],0,5,'L',0);
$pdf->setXY(0.5,7.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Buku Doa',0,5,'L',0);
$pdf->setXY(3.8,7.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['bukudoa'],0,5,'L',0);
$pdf->setXY(0.5,8.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Voucher',0,5,'L',0);
$pdf->setXY(3.8,8.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['voucher'],0,5,'L',0);



$pdf->setXY(13,6.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Kain Ihrom',0,5,'L',0);
$pdf->setXY(16.5,6.1);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$perlengkapan['kainihrom'],0,5,'L',0);
$pdf->setXY(13,6.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Ikat Pinggang',0,5,'L',0);
$pdf->setXY(16.5,6.6);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$perlengkapan['ikatpinggang'],0,5,'L',0);
$pdf->setXY(13,7.1);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Mukena/Bergo',0,5,'L',0);
$pdf->setXY(16.5,7.1);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$perlengkapan['mukenabergo'],0,5,'L',0);
$pdf->setXY(13,7.6);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Bahan Batik',0,5,'L',0);
$pdf->setXY(16.5,7.6);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$perlengkapan['bahanbatik'],0,5,'L',0);


$pdf->setXY(3.7,10.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Yang Menyerahkan',0,5,'L',0);
$pdf->setXY(3.7,12);
$pdf->setFont('Courier','',10);
$pdf->cell(10,1,$staf['nama'],0,5,'L',0);
$pdf->setXY(15,10.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Yang Menerima',0,5,'L',0);
$pdf->setXY(15,12);
$pdf->setFont('Courier','',10);
$pdf->cell(10,1,$perlengkapan['penerima'],0,5,'L',0);
$pdf->setXY(0.5,13);
$pdf->setFont('times','B',10);
$pdf->MultiCell(19,0.4,'Note: Barang Yang sudah dibawa tidak dapat di komplain dan dikembalikan, harap periksa barang anda sebelum dibawa pulang. Terima Kasih',0,'L',0);
$pdf->setXY(0.5,14);
$pdf->setFont('times','B',10);
$pdf->MultiCell(19,0.4,'----------------------------------------------------------------------------------------------------------------------------------------------------------------',0,'L',0);

$pdf->image('../images/header_faktur.jpg','0','14.5','0','0');

$pdf->setXY(0.5,16.4);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'STRUK/BUKTI',0,5,'L',0);
$pdf->setXY(0.5,16.8);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'PENGAMBILAN PERLENGKAPAN',0,5,'L',0);
$pdf->setXY(8,16.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(12,1,"PRLGKPNPL".$perlengkapan['id_perlengkapan_pelanggan'].$staf['id_staf'],5,'L',0);
$pdf->setXY(0.5,17);
$pdf->setFont('Courier','B',8);
$pdf->cell(10,1,'---------------------------------------------------------------------------------------------------------------------',0,5,'L',0);
$pdf->setXY(0.5,17.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'TANGGAL AMBIL',0,5,'L',0);
$pdf->setXY(3.5,17.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['waktu_pengambilan'],0,5,'L',0);
$pdf->setXY(10,17.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'NAMA PELANGGAN',0,5,'L',0);
$pdf->setXY(13.5,17.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$pelanggan['nama_depan'].' '.$pelanggan['nama_tengah'].' '.$pelanggan['nama_belakang'].'('.$jk.')',0,5,'L',0);
$pdf->setXY(10,18);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'YANG MENERIMA',0,5,'L',0);
$pdf->setXY(13,18);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['penerima'],0,5,'L',0);
$pdf->setXY(0.5,18);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'PRODUK',0,5,'L',0);
$pdf->setXY(3.5,18);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$produk['bulan_keberangkatan'],0,5,'L',0);
$pdf->setXY(0.5,18.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'-------------------------------------------------------------------------------------',0,5,'L',0);

$pdf->setXY(0.5,19);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Koper',0,5,'L',0);
$pdf->setXY(3.8,19);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['koper'],0,5,'L',0);
$pdf->setXY(0.5,19.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Tas Kecil',0,5,'L',0);
$pdf->setXY(3.8,19.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['taskecil'],0,5,'L',0);
$pdf->setXY(0.5,20);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'DVD Profil',0,5,'L',0);
$pdf->setXY(3.8,20);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['dvdprofil'],0,5,'L',0);
$pdf->setXY(0.5,20.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Buku Doa',0,5,'L',0);
$pdf->setXY(3.8,20.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['bukudoa'],0,5,'L',0);
$pdf->setXY(0.5,21);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Voucher',0,5,'L',0);
$pdf->setXY(3.8,21);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,': '.$perlengkapan['voucher'],0,5,'L',0);




$pdf->setXY(13,19);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Kain Ihrom',0,5,'L',0);
$pdf->setXY(16.5,19);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$perlengkapan['kainihrom'],0,5,'L',0);
$pdf->setXY(13,19.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Ikat Pinggang',0,5,'L',0);
$pdf->setXY(16.5,19.5);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$perlengkapan['ikatpinggang'],0,5,'L',0);
$pdf->setXY(13,20);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Mukena/Bergo',0,5,'L',0);
$pdf->setXY(16.5,20);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$perlengkapan['mukenabergo'],0,5,'L',0);
$pdf->setXY(13,20.5);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Bahan Batik',0,5,'L',0);
$pdf->setXY(16.5,20.5);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$perlengkapan['bahanbatik'],0,5,'L',0);


$pdf->setXY(3.7,23);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Yang Menyerahkan',0,5,'L',0);
$pdf->setXY(3.7,24.5);
$pdf->setFont('Courier','',10);
$pdf->cell(10,1,$staf['nama'],0,5,'L',0);
$pdf->setXY(15,23);
$pdf->setFont('Courier','B',11);
$pdf->cell(10,1,'Yang Menerima',0,5,'L',0);
$pdf->setXY(15,24.5);
$pdf->setFont('Courier','',10);
$pdf->cell(10,1,$perlengkapan['penerima'],0,5,'L',0);
$pdf->setXY(0.5,25.5);
$pdf->setFont('times','B',10);
$pdf->MultiCell(19,0.4,'Note: Barang Yang sudah dibawa tidak dapat di komplain, harap periksa barang anda sebelum dibawa pulang. Terima Kasih',0,'L',0);

$pdf->Output();

}

//=================(perlengkapan)
if($act=='iperlengkapan'){
	mysql_query("insert into perlengkapan(id_perlengkapan,id_staf,nama_perlengkapan,sisa,waktu_update)values('$_POST[id_perlengkapan]','$_POST[id_staf]','$_POST[nama_perlengkapan]','$_POST[sisa]',now())");
		
	echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=perlengkapan');</script>";
	}
if($act=='eperlengkapan'){
mysql_query("update perlengkapan set nama_perlengkapan='$_POST[nama_perlengkapan]' where id_perlengkapan='$_POST[id_perlengkapan]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=perlengkapan');</script>";	
	}
if($delete=='hperlengkapan'){
	mysql_query("delete from perlengkapan where id_perlengkapan='$_GET[id_perlengkapan]'");
	echo"<script>alert('Data Berhasil dihapus !');window.location=('view.php?p=perlengkapan');</script>";
	}
//=================(perlengkapan masuk)
if($act=='iperlengkapan_masuk'){
	$perlengkapan=mysql_fetch_array(mysql_query("select*from perlengkapan where id_perlengkapan='$_POST[id_perlengkapan]'"));
	mysql_query("insert into perlengkapan_masuk(id_perlengkapan_masuk,id_perlengkapan,jumlah,id_staf,waktu_input)values('$_POST[id_perlengkapan_masuk]','$_POST[id_perlengkapan]','$_POST[jumlah]','$_POST[id_staf]',now())");
	$perlengkapan_tambah=$perlengkapan['sisa']+$_POST['jumlah'];
	mysql_query("update perlengkapan set sisa='$perlengkapan_tambah',waktu_update=now() where id_perlengkapan='$_POST[id_perlengkapan]'");	
	echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=perlengkapan_masuk');</script>";
	}

if($delete=='hperlengkapan_masuk'){
	$perlengkapan_masuk=mysql_fetch_array(mysql_query("select*from perlengkapan_masuk where id_perlengkapan_masuk='$_GET[id_perlengkapan_masuk]'"));
	$perlengkapan=mysql_fetch_array(mysql_query("select*from perlengkapan where id_perlengkapan='$perlengkapan_masuk[id_perlengkapan]'"));
	$perlengkapan_kurang=$perlengkapan['sisa']-$perlengkapan_masuk['jumlah'];
	mysql_query("delete from perlengkapan_masuk where id_perlengkapan_masuk='$_GET[id_perlengkapan_masuk]'");
	mysql_query("update perlengkapan set sisa='$perlengkapan_kurang',waktu_update=now() where id_perlengkapan='$perlengkapan[id_perlengkapan]'");	
	echo"<script>alert('Data Berhasil dihapus !');window.location=('view.php?p=perlengkapan_masuk');</script>";
	}
//=================(perlengkapan keluar)
if($act=='iperlengkapan_keluar'){
	$perlengkapan=mysql_fetch_array(mysql_query("select*from perlengkapan where id_perlengkapan='$_POST[id_perlengkapan]'"));
	mysql_query("insert into perlengkapan_keluar(id_perlengkapan_keluar,id_perlengkapan,jumlah,id_staf,waktu_keluar)values('$_POST[id_perlengkapan_keluar]','$_POST[id_perlengkapan]','$_POST[jumlah]','$_POST[id_staf]',now())");
	$perlengkapan_kurang=$perlengkapan['sisa']-$_POST['jumlah'];
	mysql_query("update perlengkapan set sisa='$perlengkapan_kurang',waktu_update=now() where id_perlengkapan='$_POST[id_perlengkapan]'");	
	echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=perlengkapan_keluar');</script>";
	}

if($delete=='hperlengkapan_keluar'){
	$perlengkapan_keluar=mysql_fetch_array(mysql_query("select*from perlengkapan_keluar where id_perlengkapan_keluar='$_GET[id_perlengkapan_keluar]'"));
	$perlengkapan=mysql_fetch_array(mysql_query("select*from perlengkapan where id_perlengkapan='$perlengkapan_keluar[id_perlengkapan]'"));
	$perlengkapan_tambah=$perlengkapan['sisa']+$perlengkapan_keluar['jumlah'];
	mysql_query("delete from perlengkapan_keluar where id_perlengkapan_keluar='$_GET[id_perlengkapan_keluar]'");
	mysql_query("update perlengkapan set sisa='$perlengkapan_tambah',waktu_update=now() where id_perlengkapan='$perlengkapan[id_perlengkapan]'");	
	echo"<script>alert('Data Berhasil dihapus !');window.location=('view.php?p=perlengkapan_keluar');</script>";
	}
//==================(keuangan_masuk)
if($act=='ikeuangan_masuk'){
	mysql_query("insert into keuangan_masuk(id_keuangan,id_staf,penyetor,uraian_transaksi,jumlah,kurs,cara_bayar,keterangan,waktu_input)values('$_POST[id_keuangan]','$_POST[id_staf]','$_POST[penyetor]','$_POST[uraian_transaksi]','$_POST[jumlah]','$_POST[kurs]','$_POST[cara_bayar]',\"$_POST[keterangan]\",now())");
		
	echo"<script>alert('Data Berhasil disimpan !');window.location=('view.php?p=keuangan_masuk');</script>";
	}
if($act=='ekeuangan_masuk'){
mysql_query("update keuangan_masuk set penyetor='$_POST[penyetor]',uraian_transaksi=\"$_POST[uraian_transaksi]\",jumlah='$_POST[jumlah]',kurs='$_POST[kurs]',cara_bayar='$_POST[cara_bayar]',keterangan=\"$_POST[keterangan]\" where id_keuangan='$_POST[id_keuangan]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=keuangan_masuk');</script>";	
	}
if($delete=='hkeuangan_masuk'){
	mysql_query("delete from keuangan_masuk where id_keuangan='$_GET[id_keuangan]'");
	echo"<script>alert('Data Berhasil dihapus !');window.location=('view.php?p=keuangan_masuk');</script>";
	}
if($act=='cetak_keuangan_masuk'){
	$sql=mysql_query("select * from keuangan_masuk where id_keuangan='$_GET[id_keuangan]'");
$data = mysql_fetch_array($sql);

	define('FPDF_FONTPATH', '../fpdf/font/');
require('../fpdf/fpdf.php');
$pdf=new FPDF('P', 'cm','A4');
$pdf->AddPage();
$pdf->image('../images/header_faktur.jpg','0','0','0','0');

$pdf->setXY(0.5,2);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'STRUK/BUKTI',0,5,'L',0);
$pdf->setXY(0.5,2.5);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'PEMBAYARAN',0,5,'L',0);
$pdf->setXY(8,2.5);
$pdf->setFont('Courier','B',10);
$pdf->cell(12,1,"TR".$data['id_keuangan'].$data['kurs'].$data['id_staf'],5,'L',0);
$pdf->setXY(0.5,3);
$pdf->setFont('Courier','B',8);
$pdf->cell(10,1,'---------------------------------------------------------------------------------------------------------------------',0,5,'L',0);
$pdf->setXY(0.5,4);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'TANGGAL',0,5,'L',0);
$pdf->setXY(3.5,4);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$data['waktu_input'],0,5,'L',0);
$pdf->setXY(12,4);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'Jumlah',0,5,'L',0);
$pdf->setXY(14.7,4);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$data['kurs'].' '.format_angka($data['jumlah']),0,5,'L',0);
$pdf->setXY(12,4.7);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'Cara Bayar',0,5,'L',0);
$pdf->setXY(14.7,4.7);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$data['cara_bayar'],0,5,'L',0);
$pdf->setXY(0.5,4.7);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'NAMA',0,5,'L',0);
$pdf->setXY(3.5,4.7);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$data['penyetor'],0,5,'L',0);
$pdf->setXY(0.5,5.4);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'PEMBAYARAN',0,5,'L',0);
$pdf->setXY(3.5,5.4);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$data['uraian_transaksi'],0,5,'L',0);
$pdf->setXY(0.5,6.1);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'PENYETOR',0,5,'L',0);
$pdf->setXY(3.5,6.1);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,': '.$data['penyetor'],0,5,'L',0);
$pdf->setXY(0.5,7);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'KET.',0,5,'L',0);
$pdf->setXY(3.5,7);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,':',0,5,'L',0);
$pdf->setXY(3.7,7.3);
$pdf->setFont('Courier','B',8);
$pdf->MultiCell(17,0.4,' '.$data['keterangan'],0,'L',0);
$pdf->setXY(3.7,9);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'PENYETOR',0,5,'L',0);
$pdf->setXY(3.2,10.5);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'(..........)',0,5,'L',0);
$pdf->setXY(18,9);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'ADMIN',0,5,'L',0);
$pdf->setXY(17,10.5);
$pdf->setFont('Courier','B',10);
$pdf->cell(10,1,'(..........)',0,5,'L',0);
$pdf->setXY(0.5,10.99);
$pdf->setFont('Courier','B',7);
$pdf->cell(10,1,'Faktur ini adalah bukti pembayaran yang sah, faktur yang diambil langsung, mohon ditandatangani oleh pengambil faktur disertai kontak.',0,5,'L',0);

$pdf->Output();

}

if($act=='cetak_keuangan_harian'){

$pdf = new Cezpdf();
$all=$pdf->openObject();
$pdf->line(10,50,578,50);
$pdf->addText(30,34,8,'Dicetak Tanggal : '.date('d-m-Y , H:i:s').' || Developed By Hendri Mahesya');

$pdf->closeObject();



$tanggal2=$_POST['tanggal'];
	$date = date('Y-m-d', strtotime($tanggal2));
	$tgl=date('d-m-Y');
	
$sql=mysql_query("select * from keuangan_masuk where waktu_input='$date'");

$total_cashIDR=mysql_query("SELECT SUM(jumlah) as totidr FROM keuangan_masuk where waktu_input='$date' and kurs='IDR' and cara_bayar='Tunai'");
							  $jml_cashidr=mysql_fetch_array($total_cashIDR);
$total_cashUSD=mysql_query("SELECT SUM(jumlah) as totusd FROM keuangan_masuk where waktu_input='$date' and kurs='USD' and cara_bayar='Tunai'");
							  $jml_cashusd=mysql_fetch_array($total_cashUSD);
$total_noncashidr=mysql_query("SELECT SUM(jumlah) as totnoncashidr FROM keuangan_masuk where waktu_input='$date' and kurs='IDR' and cara_bayar like 'Transfer%'");
							  $jml_noncashidr=mysql_fetch_array($total_noncashidr);
$total_noncashusd=mysql_query("SELECT SUM(jumlah) as totnoncashusd FROM keuangan_masuk where waktu_input='$date' and kurs='USD' and cara_bayar like 'Transfer%'");
							  $jml_noncashusd=mysql_fetch_array($total_noncashusd);
$jml_rupiah=$jml_cashidr['totidr']+$jml_noncashidr['totnoncashidr'];
$jml_dollar=$jml_cashusd['totusd']+$jml_noncashusd['totnoncashusd'];
							  
							 
$i=1;
while($r=mysql_fetch_array($sql)){
	$data[$i]=array('No'=>$i,
					'Cara Bayar'=>$r[cara_bayar],
					'Tanggal Pemasukan'=>$r[waktu_input],
					'Jumlah Uang'=>format_angka($r['jumlah']),
					'Keterangan'=>$r[uraian_transaksi]);
					$i++;
					}
	$options=array('shaded'=>0,'width'=>550);
	$pdf->ezImage("../images/header.jpg",0,550,'none','center');
	$pdf->ezTable($data,'',"<b>Data Keuangan Tanggal $tanggal\n",$options); 
	$pdf->ezText("\n Total Keuangan Masuk IDR :   Rp ".format_angka($jml_rupiah).",-");
	$pdf->ezText("\n Total Keuangan Masuk USD :   $ ".format_angka($jml_dollar));
	$pdf->ezText("\n Total Cash IDR :   Rp ".format_angka($jml_cashidr['totidr']).",-");
	$pdf->ezText("\n Total Cash USD :   $ ".format_angka($jml_cashusd['totusd']));
	$pdf->ezText("\n Total Non Cash IDR:   Rp ".format_angka($jml_noncashidr['totnoncashidr']).",-");
	$pdf->ezText("\n Total Non Cash USD:   $ ".format_angka($jml_noncashusd['totnoncashusd']));
	$pdf->ezText("\n                                                     Depok, $tanggal");
	$pdf->ezText("\n Yang Menyerahkan                                                    Yang Menerima");
	$pdf->ezText("\n");
	$pdf->ezText("\n       Kholifah                                                                Yuyun Virgonita");
	$pdf->addObject($all,'all');
$pdf->ezStartPageNumbers(320,15,8);
$pdf->ezStream();
	}
if($act=='cetak_keuangan_bulanan'){
	$tgl=date('d-m-Y');
	

$pdf = new Cezpdf();
$all=$pdf->openObject();
$pdf->line(10,50,578,50);
$pdf->addText(30,34,8,'Dicetak Tanggal : '.date('d-m-Y , H:i:s').' || Developed By Hendri Mahesya');

$pdf->closeObject();



$tgl1=$_POST['tgl1'];
	$date1 = date('Y-m-d', strtotime($tgl1));
	$tgl2=$_POST['tgl2'];
	$date2 = date('Y-m-d', strtotime($tgl2));
$sql=mysql_query("select * from keuangan_masuk where waktu_input between '$date1' and '$date2'");

$total_cashIDRb=mysql_query("SELECT SUM(jumlah) as totidrb FROM keuangan_masuk where waktu_input between '$date1' and '$date2' and kurs='IDR' and cara_bayar='Tunai'");
							  $jml_cashidrb=mysql_fetch_array($total_cashIDRb);
$total_cashUSDb=mysql_query("SELECT SUM(jumlah) as totusdb FROM keuangan_masuk where waktu_input between '$date1' and '$date2' and kurs='USD' and cara_bayar='Tunai'");
							  $jml_cashusdb=mysql_fetch_array($total_cashUSDb);
$total_transBSM=mysql_query("SELECT SUM(jumlah) as transbsm FROM keuangan_masuk where waktu_input between '$date1' and '$date2' and kurs='IDR' and cara_bayar='Transfer Mandiri Syariah'");
							  $jml_transbsm=mysql_fetch_array($total_transBSM);
$total_transBSMusd=mysql_query("SELECT SUM(jumlah) as transbsmusd FROM keuangan_masuk where waktu_input between '$date1' and '$date2' and kurs='USD' and cara_bayar='Transfer Mandiri Syariah'");
							  $jml_transbsmusd=mysql_fetch_array($total_transBSMusd);
$total_transMandiri=mysql_query("SELECT SUM(jumlah) as transmandiri FROM keuangan_masuk where waktu_input between '$date1' and '$date2' and kurs='IDR' and cara_bayar='Transfer Mandiri'");
							  $jml_transmandiri=mysql_fetch_array($total_transMandiri);
$total_transMandiriusd=mysql_query("SELECT SUM(jumlah) as transmandiriusd FROM keuangan_masuk where waktu_input between '$date1' and '$date2' and kurs='USD' and cara_bayar='Transfer Mandiri'");
							  $jml_transmandiriusd=mysql_fetch_array($total_transMandiriusd);
$total_transBNI=mysql_query("SELECT SUM(jumlah) as transbni FROM keuangan_masuk where waktu_input between '$date1' and '$date2' and kurs='IDR' and cara_bayar='Transfer BNI'");
							  $jml_transbni=mysql_fetch_array($total_transBNI);
$total_transBNIusd=mysql_query("SELECT SUM(jumlah) as transbniusd FROM keuangan_masuk where waktu_input between '$date1' and '$date2' and kurs='USD' and cara_bayar='Transfer BNI'");
							  $jml_transbniusd=mysql_fetch_array($total_transBNIusd);
$total_transBRI=mysql_query("SELECT SUM(jumlah) as transbri FROM keuangan_masuk where waktu_input between '$date1' and '$date2' and kurs='IDR' and cara_bayar='Transfer BRI'");
							  $jml_transbri=mysql_fetch_array($total_transBRI);
$total_transBCA=mysql_query("SELECT SUM(jumlah) as transbca FROM keuangan_masuk where waktu_input between '$date1' and '$date2' and kurs='IDR' and cara_bayar='Transfer BCA'");
							  $jml_transbca=mysql_fetch_array($total_transBCA);
$total_transPermata=mysql_query("SELECT SUM(jumlah) as transpermata FROM keuangan_masuk where waktu_input between '$date1' and '$date2' and kurs='IDR' and cara_bayar='Transfer Permata Syariah'");
							  $jml_transpermata=mysql_fetch_array($total_transPermata);
$total_transPermatausd=mysql_query("SELECT SUM(jumlah) as transpermatausd FROM keuangan_masuk where waktu_input between '$date1' and '$date2' and kurs='USD' and cara_bayar='Transfer Permata Syariah'");
							  $jml_transpermatausd=mysql_fetch_array($total_transPermatausd);
$total_pemasukanidr=$jml_cashidrb['totidrb']+$jml_transbsm['transbsm']+$jml_transmandiri['transmandiri']+$jml_transbni['transbni']+$jml_transbri['transbri']+$jml_transbca['transbca']+$jml_transpermata['transpermata'];
$total_pemasukanusd=$jml_cashusdb['totusdb']+$jml_transbsmusd['transbsmusd']+$jml_transmandiriusd['transmandiriusd']+$jml_transbniusd['transbniusd']+$jml_transpermatausd['transpermatausd'];
							 
$i=1;
while($r=mysql_fetch_array($sql)){
	$data[$i]=array('No'=>$i,
					'Cara Bayar'=>$r[cara_bayar],
					'Tanggal Pemasukan'=>$r[waktu_input],
					'Jumlah Uang'=>format_angka($r['jumlah']),
					'Keterangan'=>$r[uraian_transaksi]);
					$i++;
					}
	$options=array('shaded'=>0,'width'=>500);
	$pdf->ezImage("../images/header.png",0,550,'none','center');
	$pdf->ezTable($data,'',"<b>Data Keuangan Dari Tanggal $date1 Sampai Tanggal $date2</b>\n",$options); 
	$pdf->ezText("\n Total Keuangan Masuk IDR :   Rp ".format_angka($total_pemasukanidr).",-");
	$pdf->ezText(" Total Keuangan Masuk USD :   $ ".format_angka($total_pemasukanusd));
	$pdf->ezText("\n Total Cash IDR :   Rp ".format_angka($jml_cashidrb['totidrb']).",-");
	$pdf->ezText(" Total Cash USD :   $ ".format_angka($jml_cashusdb['totusdb']));
	$pdf->ezText("\n Total Transfer BSM IDR:   Rp ".format_angka($jml_transbsm['transbsm']).",-");
	$pdf->ezText(" Total Transfer BSM USD:   $ ".format_angka($jml_transbsmusd['transbsmusd']));
	$pdf->ezText("\n Total Transfer Mandiri IDR:   Rp ".format_angka($jml_transmandiri['transmandiri']).",-");
	$pdf->ezText(" Total Transfer Mandiri USD:   $ ".format_angka($jml_transmandiriusd['transmandiriusd']));
	$pdf->ezText("\n Total Transfer BNI IDR:   Rp ".format_angka($jml_transbni['transbni']).",-");
	$pdf->ezText(" Total Transfer BNI USD:   $ ".format_angka($jml_transbniusd['transbniusd']));
	$pdf->ezText("\n Total Transfer Permata Syariah IDR:   Rp ".format_angka($jml_transpermata['transpermata']).",-");
	$pdf->ezText(" Total Transfer Permata Syariah USD:   $ ".format_angka($jml_transpermatausd['transpermatausd']));
	$pdf->ezText("\n Total Transfer BRI IDR:   Rp ".format_angka($jml_transbri['transbri']).",-");
	$pdf->ezText(" Total Transfer BCA IDR:   Rp ".format_angka($jml_transbca['transbca']));
	
	$pdf->ezText("\n                                                   Depok, $tgl");
	$pdf->ezText("\n Yang Menyerahkan                                                          Yang Menerima");
	$pdf->ezText("\n");
	$pdf->ezText("\n       Kholifah                                                                     Yuyun Virgonita");
	$pdf->addObject($all,'all');
$pdf->ezStartPageNumbers(320,15,8);
$pdf->ezStream();
	}
if($act=='cetak_keuangan_bulanan_excel'){
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition:attachment; filename=KeuanganMasukDamtour".date("-Ymd-his").".xls");
header("Pragma: no-cache");
header("Expires: 0");
header ("Cache-Control: private" );
$tgl1=$_POST['tgl1'];
	$date1 = date('Y-m-d', strtotime($tgl1));
	$tgl2=$_POST['tgl2'];
	$date2 = date('Y-m-d', strtotime($tgl2));
$sql=mysql_query("select * from keuangan_masuk where waktu_input between '$date1' and '$date2'");

echo"
	<h5 align=\"center\">Keuangan Masuk PT.Do'a 'Arafah Madinah<br>
	Dari Tanggal $date1 Sampai Tanggal $date2</h5>
	<table border=1 cellpadding=1 cellspacing=0 style='font-size:10px;'>
  <tr align=center>
	<td bgcolor='#CCCCCC'><font color='#000066'>No</font></td>
    <td bgcolor='#CCCCCC'><font color='#000066'>Cara Bayar</font></td>
    <td bgcolor='#CCCCCC'><font color='#000066'>Tanggal Pemasukan</font></td>
    <td bgcolor='#CCCCCC'><font color='#000066'>Jumlah Uang</font></td>
    <td bgcolor='#CCCCCC'><font color='#000066'>Keterangan</font></td>
	</tr>";
  $i = 1;
		while($data=mysql_fetch_array($sql)){
echo"
  <tr>
	<td align=center>$i</td>
    <td align='left'>$data[cara_bayar]</td>
    <td align=center>$data[waktu_input]</td>
    <td align=left>$data[jumlah]</td>
    <td align=center>$data[uraian_transaksi]</td>
	</tr>";$i++;}
echo"</table>";
	
}

//=====================(keadaan pelanggan)
if($act=='ekeadaan'){
mysql_query("update keadaan_pelanggan set keadaan='$_POST[keadaan]',tanggal_update=now() where id_keadaan='$_POST[id_keadaan]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=keadaan');</script>";	
	}
//=====================(testimoni pelanggan)
if($act=='etestimoni'){
mysql_query("update testimoni set publish='$_POST[publish]' where id_testimoni='$_POST[id_testimoni]'");
	echo"<script>alert('Data Berhasil dirubah !');window.location=('view.php?p=testimoni');</script>";	
	}
//=========================================================
if($act=='lihat_pendaftaran'){
$keberangkatan="$_POST[bulan] $_POST[tahun]";

$manifest=mysql_query("select * from produk,pendaftaran_pelanggan where produk.id_produk=pendaftaran_pelanggan.id_produk and produk.bulan_keberangkatan LIKE '$keberangkatan'");

echo"
	<img src='../images/logo_nama.png' height=60px width=160px><br><br>
	<font size=1pt color=blue>PT.DO'A 'ARAFAH MADINAH - GRAHA DAMTOUR (Jl. KH. Abdullah Syafei No. 120, Bukit Duri, Tebet, Jakarta Selatan.)<br>
	Telepon: 021-837 05940, Fax: 021-837 05570<br>
	Laman: www.damtour.co.id</font><hr>
	
	<h5 align=\"center\">Data Pendaftaran PT.Do'a 'Arafah Madinah<br>Program : $keberangkatan</h5>
	<table border=1 cellpadding=1 cellspacing=0 style='font-size:10px;'>
  <tr align=center>
	<td width='30' bgcolor='#CCCCCC'><font color='#000066'>No</font></td>
    <td width='200' bgcolor='#CCCCCC'><font color='#000066'>Nama Pelanggan</font></td>
    <td width='50' bgcolor='#CCCCCC'><font color='#000066'>Jenis Kelamin</font></td>
    <td width='200' bgcolor='#CCCCCC'><font color='#000066'>Tempat Tanggal Lahir</font></td>
    <td width='100' bgcolor='#CCCCCC'><font color='#000066'>No.Passpor</font></td>
    <td width='100' bgcolor='#CCCCCC'><font color='#000066'>Date Issued</font></td>
    <td width='100' bgcolor='#CCCCCC'><font color='#000066'>Date Expired</font></td>
    <td width='100' bgcolor='#CCCCCC'><font color='#000066'>Issuing Office</font></td>
	</tr>";
  $i = 1;
		while($data=mysql_fetch_array($manifest)){
			$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan  where id_pelanggan='$data[id_pelanggan]'"));
			$passport=mysql_fetch_array(mysql_query("select * from passport  where id_pelanggan='$pelanggan[id_pelanggan]'"));
echo"
  <tr>
	<td width='67' align=center>$i</td>
    <td width='150' align='left'>$pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]</td>
    <td width='147' align=center>$pelanggan[jenis_kelamin]</td>
    <td width='178' align=left>$pelanggan[tempat_lahir],$pelanggan[tanggal_lahir]</td>
    <td width='200' align=center>$passport[no_passport]</td>
    <td width='176' align=center>$passport[date_issued]</td>
    <td width='153' align=center>$passport[date_expired]</td>
    <td width='124' align=center>$pasport[issuing_office]</td>
	</tr>";$i++;}
echo"</table>";
	
}
if($act=='excel_pendaftaran'){
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition:attachment; filename=PendaftaranPelanggan".date("-Ymd-his").".xls");
header("Pragma: no-cache");
header("Expires: 0");
header ("Cache-Control: private" );
$keberangkatan="$_POST[bulan] $_POST[tahun]";

$manifest=mysql_query("select * from produk,pendaftaran_pelanggan where produk.id_produk=pendaftaran_pelanggan.id_produk and produk.bulan_keberangkatan LIKE '$keberangkatan'");

echo"
	<h5 align=\"center\">Data Pendaftaran PT.Do'a 'Arafah Madinah<br>Program : $keberangkatan</h5>
	<table border=1 cellpadding=1 cellspacing=0 style='font-size:10px;'>
  <tr align=center>
	<td bgcolor='#CCCCCC'><font color='#000066'>No</font></td>
    <td bgcolor='#CCCCCC'><font color='#000066'>Nama Jamaah</font></td>
    <td bgcolor='#CCCCCC'><font color='#000066'>Jenis Kelamin</font></td>
    <td bgcolor='#CCCCCC'><font color='#000066'>Tempat Tanggal Lahir</font></td>
    <td bgcolor='#CCCCCC'><font color='#000066'>No. Telp</font></td>
    <td bgcolor='#CCCCCC'><font color='#000066'>No.Passpor</font></td>
    <td bgcolor='#CCCCCC'><font color='#000066'>Date Issued</font></td>
    <td bgcolor='#CCCCCC'><font color='#000066'>Date Expired</font></td>
    <td bgcolor='#CCCCCC'><font color='#000066'>Issuing Office</font></td>
	</tr>";
  $i = 1;
		while($data=mysql_fetch_array($manifest)){
			$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan  where id_pelanggan='$data[id_pelanggan]'"));
			$passport=mysql_fetch_array(mysql_query("select * from passport  where id_pelanggan='$pelanggan[id_pelanggan]'"));
echo"
  <tr>
	<td align=center>$i</td>
    <td align='left'>$pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]</td>
    <td align=center>$pelanggan[jenis_kelamin]</td>
    <td align=left>$pelanggan[tempat_lahir],$pelanggan[tanggal_lahir]</td>
    <td align=left>$pelanggan[hp]</td>
    <td align=center>$passport[no_passport]</td>
    <td align=center>$passport[date_issued]</td>
    <td align=center>$passport[date_expired]</td>
    <td align=center>$pasport[issuing_office]</td>
	</tr>";$i++;}
echo"</table>";
	
}


?>