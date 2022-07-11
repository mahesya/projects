<?php
error_reporting(0);
ob_start();
session_start();
include"../include/config.php";
include"../include/auto_delete.php";
$nama=ucwords($_SESSION['nama']);
$id_staf=ucwords($_SESSION['id_staf']);
$id_jabatan=ucwords($_SESSION['id_jabatan']);
$username=ucwords($_SESSION['username']);



if(empty($_SESSION['id_staf']) OR empty($_SESSION['username'])){
echo"<p align='center'>Harap LogIn Terlebih Dahulu! <br> <a href='index.php'>Mau LogIn?</a></p>";}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SITRAVEL</title>
	<link rel="stylesheet" type="text/css" href="../css/css_easy/easyui.css">
	<link rel="stylesheet" type="text/css" href="../css/css_easy/icon.css">
	<link rel="stylesheet" type="text/css" href="../css/css_easy/demo.css">
	<script type="text/javascript" src="../js/js_easy/jquery.min.js"></script>
	<script type="text/javascript" src="../js/js_easy/jquery.easyui.min.js"></script>
	<link href="../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
    <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
	<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />

 <script src="../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
    <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
	<script language="JavaScript">
 var txt="DAMTOUR||SITRAVEL||";
 var kecepatan=500; var segarkan=null; function bergerak(){document.title=txt;
 txt=txt.substring(1,txt.length)+txt.charAt(0);
 segarkan=setTimeout("bergerak()",kecepatan);}bergerak();</script>
</head>
<body class="easyui-layout">
	<div data-options="region:'north',border:false" style="height:110px; padding:5px;background-color:#076fd0;">
	  <table width="100%" border="0">
	    <tr>
	      <td width="18%" rowspan="2"><img src="../images/logo_nama.png"height="90" width="100%"></td>
	      <td width="49%" rowspan="2">&nbsp;</td>
	      <td width="33%" height="71"><img src="../images/pt3.png" height="60" width="400"></td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
        </tr>
      </table></div>
	<div data-options="region:'west',split:true,title:'MENU',collapsible:false" style="width:250px;padding:5px;">
<?php
	$data=mysql_fetch_array(mysql_query("select*from jabatan where id_jabatan='$_SESSION[id_jabatan]'"));
	if ($data['jabatan']=='IT Manager'){
		$pertanyaan=mysql_query("SELECT * FROM pertanyaan WHERE status='1'");
		$jml_pertanyaan=mysql_num_rows($pertanyaan);
		$keluhan=mysql_query("SELECT * FROM keluhan WHERE status='1'");
		$jml_keluhan=mysql_num_rows($keluhan);
	echo"
    <ul class=\"easyui-tree\"data-options=\"animate:true,lines:true\">
		<li>
			<span>SITRAVEL</span>
			
			<ul>						
				<li data-options=\"state:'closed'\">
					<span>Data Master</span>
					<ul>
						<li>
							<span><a href='?p=jabatan' style='text-decoration:none;'>Jabatan</a></span>
						</li>
						<li>
							<span><a href='?p=jperwakilan' style='text-decoration:none;'>Jenis Perwakilan</a></span>
						</li>
					</ul>
				</li>
				<li data-options=\"state:'closed'\">
					<span>Marketing</span>
					<ul>
						<li><a href='?p=produk' style='text-decoration:none;'>Produk</a></li>
						<li><a href='?p=itinerari' style='text-decoration:none;'>Itinerari</a></li>
						<li><a href='?p=akomodasi' style='text-decoration:none;'>Akomodasi</a></li>
						<li><a href='?p=kurs' style='text-decoration:none;'>Kurs</a></li>
						<li><a href='?p=testimoni' style='text-decoration:none;'>Testimoni</a></li>
						<li><a href='?p=foto' style='text-decoration:none;'>Foto</a></li>
						<li><a href='?p=video' style='text-decoration:none;'>Video</a></li>
						<li><a href='?p=perwakilan' style='text-decoration:none;'>Perwakilan</a></li>
					</ul>
				</li>
				<li data-options=\"state:'closed'\">
					<span>Sales</span>
					<ul>
						<li><a href='?p=pendaftaran' style='text-decoration:none;'>Pendaftaran</a></li>
						<li><a href='?p=konfirmasi' style='text-decoration:none;'>Konfirmasi Pembayaran</a></li>
					</ul>
				</li>
				<li data-options=\"state:'closed'\">
					<span>Services</span>
					<ul>
						<li><a href='?p=pelanggan' style='text-decoration:none;'>Pelanggan</a></li>
						<li><a href='?p=pembayaran' style='text-decoration:none;'>Pembayaran</a></li>
						<li><a href='?p=dokumen' style='text-decoration:none;'>Dokumen Pelanggan</a></li>
						<li><a href='?p=pemberitahuan' style='text-decoration:none;'>Pemberitahuan</a></li>
						<li><a href='?p=mou' style='text-decoration:none;'>MOU</a></li>
						<li><a href='?p=penanya' style='text-decoration:none;'>Penanya</a></li>
						<li><a href='?p=pertanyaan' style='text-decoration:none;'>Pertanyaan<font size=2 color='#FFFF00'><b style='background-color: #ff0000'> &nbsp;&nbsp;$jml_pertanyaan&nbsp;&nbsp; </b></font></a></li>
						<li><a href='?p=perlengkapan' style='text-decoration:none;'>Perlengkapan</a></li>
						<li><a href='?p=perlengkapan_masuk' style='text-decoration:none;'>Perlengkapan Masuk</a></li>
						<li><a href='?p=perlengkapan_keluar' style='text-decoration:none;'>Perlengkapan Keluar</a></li>
						<li><a href='?p=perlengkapan_pelanggan' style='text-decoration:none;'>Perlengkapan Pelanggan</a></li>
						<li><a href='?p=keadaan' style='text-decoration:none;'>Keadaan Pelanggan</a></li>
						<li><a href='?p=keluhan' style='text-decoration:none;'>Keluhan<font size=2 color='#FFFF00'><b style='background-color: #ff0000'> &nbsp;&nbsp;$jml_keluhan&nbsp;&nbsp; </b></font></a></li>
						<li><a href='?p=keuangan_masuk' style='text-decoration:none;'>Keuangan Masuk</a></li>
					</ul>
				</li>
				<li data-options=\"state:'closed'\">
					<span>NFR</span>
					<ul>
						<li><a href='?p=grafik_pelanggan' style='text-decoration:none;'>Grafik Pelanggan</a></li>
						<li><a href='?p=grafik_pendaftaran' style='text-decoration:none;'>Grafik Pendaftaran</a></li>
						<li><a href='?p=staf' style='text-decoration:none;'>Staf</a></li>
					</ul>
				</li>				
			</ul>
		</li>
	</ul><p align=\"left\"><a href=\"javascript:void(0)\" onclick=\"keluar()\" title='Log Out'class=\"easyui-tooltip\" data-options=\"position:'right'\"><img src=../images/exit.png></a></p>
    </div>";
}if ($data['jabatan']=='Staf Administrasi'){
		$pertanyaan=mysql_query("SELECT * FROM pertanyaan WHERE status='1'");
		$jml_pertanyaan=mysql_num_rows($pertanyaan);
		$keluhan=mysql_query("SELECT * FROM keluhan WHERE status='1'");
		$jml_keluhan=mysql_num_rows($keluhan);
	echo"
    <ul class=\"easyui-tree\"data-options=\"animate:true,lines:true\">
		<li>
			<span>SITRAVEL</span>
			
			<ul>						
						<li><a href='?p=pendaftaran' style='text-decoration:none;'>Pendaftaran</a></li>
						<li><a href='?p=konfirmasi' style='text-decoration:none;'>Konfirmasi Pembayaran</a></li>
						<li><a href='?p=pelanggan' style='text-decoration:none;'>Pelanggan</a></li>
						<li><a href='?p=pembayaran' style='text-decoration:none;'>Pembayaran</a></li>
						<li><a href='?p=dokumen' style='text-decoration:none;'>Dokumen Pelanggan</a></li>
						<li><a href='?p=pemberitahuan' style='text-decoration:none;'>Pemberitahuan</a></li>
						<li><a href='?p=mou' style='text-decoration:none;'>MOU</a></li>
						<li><a href='?p=penanya' style='text-decoration:none;'>Penanya</a></li>
						<li><a href='?p=pertanyaan' style='text-decoration:none;'>Pertanyaan<font size=2 color='#FFFF00'><b style='background-color: #ff0000'> &nbsp;&nbsp;$jml_pertanyaan&nbsp;&nbsp; </b></font></a></li>
						<li><a href='?p=keuangan_masuk' style='text-decoration:none;'>Keuangan Masuk</a></li>
						<li><a href='?p=grafik_pelanggan' style='text-decoration:none;'>Grafik Pelanggan</a></li>
						<li><a href='?p=grafik_pendaftaran' style='text-decoration:none;'>Grafik Pendaftaran</a></li>				
			</ul>
		</li>
	</ul><p align=\"left\"><a href=\"javascript:void(0)\" onclick=\"keluar()\" title='Log Out'class=\"easyui-tooltip\" data-options=\"position:'right'\"><img src=../images/exit.png></a></p>
    </div>";
}
if ($data['jabatan']=='Direktur Utama'){
		$keluhan=mysql_query("SELECT * FROM keluhan WHERE status='1'");
		$jml_keluhan=mysql_num_rows($keluhan);
	echo"
    <ul class=\"easyui-tree\"data-options=\"animate:true,lines:true\">
		<li>
			<span>SITRAVEL</span>
			
			<ul>						
						<li><a href='?p=keluhan' style='text-decoration:none;'>Keluhan<font size=2 color='#FFFF00'><b style='background-color: #ff0000'> &nbsp;&nbsp;$jml_keluhan&nbsp;&nbsp; </b></font></a></li>
						<li><a href='?p=grafik_pelanggan' style='text-decoration:none;'>Grafik Pelanggan</a></li>
						<li><a href='?p=grafik_pendaftaran' style='text-decoration:none;'>Grafik Pendaftaran</a></li>
						<li><a href='?p=staf' style='text-decoration:none;'>Staf</a></li>
								
			</ul>
		</li>
	</ul><p align=\"left\"><a href=\"javascript:void(0)\" onclick=\"keluar()\" title='Log Out'class=\"easyui-tooltip\" data-options=\"position:'right'\"><img src=../images/exit.png></a></p>
    </div>";
}
if ($data['jabatan']=='Direktur Operasional'){
		$keluhan=mysql_query("SELECT * FROM keluhan WHERE status='1'");
		$jml_keluhan=mysql_num_rows($keluhan);
	echo"
    <ul class=\"easyui-tree\"data-options=\"animate:true,lines:true\">
		<li>
			<span>SITRAVEL</span>
			
			<ul>						
						<li><a href='?p=keluhan' style='text-decoration:none;'>Keluhan<font size=2 color='#FFFF00'><b style='background-color: #ff0000'> &nbsp;&nbsp;$jml_keluhan&nbsp;&nbsp; </b></font></a></li>
						<li><a href='?p=grafik_pelanggan' style='text-decoration:none;'>Grafik Pelanggan</a></li>
						<li><a href='?p=grafik_pendaftaran' style='text-decoration:none;'>Grafik Pendaftaran</a></li>
						<li><a href='?p=staf' style='text-decoration:none;'>Staf</a></li>
								
			</ul>
		</li>
	</ul><p align=\"left\"><a href=\"javascript:void(0)\" onclick=\"keluar()\" title='Log Out'class=\"easyui-tooltip\" data-options=\"position:'right'\"><img src=../images/exit.png></a></p>
    </div>";
}
if ($data['jabatan']=='Staf EDP'){
		
	echo"
    <ul class=\"easyui-tree\"data-options=\"animate:true,lines:true\">
		<li>
			<span>SITRAVEL</span>
			
			<ul>						
						<li><a href='?p=produk' style='text-decoration:none;'>Produk</a></li>
						<li><a href='?p=itinerari' style='text-decoration:none;'>Itinerari</a></li>
						<li><a href='?p=akomodasi' style='text-decoration:none;'>Akomodasi</a></li>
						<li><a href='?p=kurs' style='text-decoration:none;'>Kurs</a></li>
						<li><a href='?p=testimoni' style='text-decoration:none;'>Testimoni</a></li>
						<li><a href='?p=foto' style='text-decoration:none;'>Foto</a></li>
						<li><a href='?p=video' style='text-decoration:none;'>Video</a></li>
						<li><a href='?p=perwakilan' style='text-decoration:none;'>Perwakilan</a></li>				
			</ul>
		</li>
	</ul><p align=\"left\"><a href=\"javascript:void(0)\" onclick=\"keluar()\" title='Log Out'class=\"easyui-tooltip\" data-options=\"position:'right'\"><img src=../images/exit.png></a></p>
    </div>";
}
if ($data['jabatan']=='Staf Logistik'){
		
	echo"
    <ul class=\"easyui-tree\"data-options=\"animate:true,lines:true\">
		<li>
			<span>SITRAVEL</span>
			
			<ul>						
						<li><a href='?p=perlengkapan' style='text-decoration:none;'>Perlengkapan</a></li>
						<li><a href='?p=perlengkapan_masuk' style='text-decoration:none;'>Perlengkapan Masuk</a></li>
						<li><a href='?p=perlengkapan_keluar' style='text-decoration:none;'>Perlengkapan Keluar</a></li>
						<li><a href='?p=perlengkapan_pelanggan' style='text-decoration:none;'>Perlengkapan Pelanggan</a></li>				
			</ul>
		</li>
	</ul><p align=\"left\"><a href=\"javascript:void(0)\" onclick=\"keluar()\" title='Log Out'class=\"easyui-tooltip\" data-options=\"position:'right'\"><img src=../images/exit.png></a></p>
    </div>";
}
if ($data['jabatan']=='Pembimbing'){
		
	echo"
    <ul class=\"easyui-tree\"data-options=\"animate:true,lines:true\">
		<li>
			<span>SITRAVEL</span>
			
			<ul>						
						<li><a href='?p=keadaan' style='text-decoration:none;'>Keadaan Pelanggan</a></li>			
			</ul>
		</li>
	</ul><p align=\"left\"><a href=\"javascript:void(0)\" onclick=\"keluar()\" title='Log Out'class=\"easyui-tooltip\" data-options=\"position:'right'\"><img src=../images/exit.png></a></p>
    </div>";
}

		?>
	<div data-options="region:'east',split:true,collapsed:true,title:'Calendar'" style="width:200px;padding:10px;"><div class="easyui-calendar" style="width:180px;height:180px;"></div></div>
	<div data-options="region:'south',border:false" align="center" style="background-color:#076fd0;height:25px;vertical-align:middle; padding-top:5px; color:#FF0;"><strong>&copy; <?=date('Y')?> Hendri Mahesya - All Right Reserved</strong></div>
	<div data-options="region:'center',title:''"><?php include'content_update.php';?></div>
</body>
<script>
function keluar(){
	$.messager.confirm('Konfirmasi','Anda Mau Keluar Aplikasi?',function(y){
    if (y){
    window.location=('logout.php');
    }
    });
}</script>
<?php
}
?>
