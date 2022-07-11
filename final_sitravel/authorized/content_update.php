<?php

error_reporting(0);
include"../include/config.php";
include"../include/lib.php";
$p=$_GET['p'];
$tgl=date("d-m-Y");
$jabatan=mysql_fetch_array(mysql_query("select*from jabatan where id_jabatan='$_SESSION[id_jabatan]'"));

//=======================================
if($p==''){
	echo"<table height=\"100%\" width=\"100%\"><tr><td valign=midle align=center>Selamat Datang Di Sistem Informasi Travel, <b>$_SESSION[nama]</b><br>Anda Masuk Sebagai : <b>$jabatan[jabatan]</b><br><br><img src=../images/logo_nama.png width=250 height=150></td></tr></table>";
}
//==================(jabatan)====================
if($p=='jabatan'){
	echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
	$('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
	$('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Jabatan\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_jabatan.php\" toolbar=\"#jabatan\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_jabatan',\" sortable=\"true\">&nbsp;&nbsp;&nbsp; ID Jabatan &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'jabatan',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Jabatan &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'edit',align:'center'\">&nbsp;&nbsp;&nbsp; Edit &nbsp;&nbsp;&nbsp;</th>
			<th data-options=\"field:'hapus',align:'center'\">&nbsp;&nbsp;&nbsp; Hapus &nbsp;&nbsp;&nbsp;</th>
        </tr>
    </thead>
	</table>
    <div id=\"jabatan\" style=\"padding:2px;height:30px;\">
		<div style=\"float:left;\">
			<a href='?p=tjabatan'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
			<a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
		</div>
		<div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
		</div>
	</div>";
}
if($p=='tjabatan'){
	echo"<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=ijabatan' name='jabatan' id='form_jabatan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Jabatan</h1></legend>
<table width='100%' border='0'>
    <tr>
        <td><label for=\"jabatan\">Jabatan</label></td>
        <td>:</td>
        <td>
    <span id=\"jabatan\">
<label for=\"jabatan\"></label>
<input type=\"text\" name=\"jabatan\" id=\"jabatan\" />
<span class=\"textfieldRequiredMsg\">Jabatan Harus Diisi !!!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var jabatan = new Spry.Widget.ValidationTextField(\"jabatan\");
</script>";
}
if($p=='ejabatan'){
	 $data=mysql_fetch_array(mysql_query("select * from jabatan where id_jabatan='$_GET[id_jabatan]'"));
  echo"<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=ejabatan' name='jabatan' id='form_jabatan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Jabatan</h1></legend>
<input type=hidden name=id_jabatan value='$data[id_jabatan]'>
<table width='100%' border='0'>
    <tr>
        <td><label for=\"jabatan\">Jabatan</label></td>
        <td>:</td>
        <td>
    <span id=\"jabatan\">
<label for=\"jabatan\"></label>
<input type=\"text\" name=\"jabatan\" id=\"jabatan\" value='$data[jabatan]'/>
<span class=\"textfieldRequiredMsg\">Jabatan Harus Diisi !!!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var jabatan = new Spry.Widget.ValidationTextField(\"jabatan\");
</script>";
}
//==================(jenis perwakilan)====================
if($p=='jperwakilan'){
	echo"
  <script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Jenis Perwakilan\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_jperwakilan.php\" toolbar=\"#jperwakilan\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_jenis',\" sortable=\"true\">&nbsp;&nbsp;&nbsp; ID Jenis Perwakilan &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'perwakilan',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Jenis Perwakilan &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'edit',align:'center'\">&nbsp;&nbsp;&nbsp; Edit &nbsp;&nbsp;&nbsp;</th>
      <th data-options=\"field:'hapus',align:'center'\">&nbsp;&nbsp;&nbsp; Hapus &nbsp;&nbsp;&nbsp;</th>
        </tr>
    </thead>
  </table>
    <div id=\"jperwakilan\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href='?p=tjperwakilan'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='tjperwakilan'){
	echo"<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=ijperwakilan' name='jperwakilan' id='form_jperwakilan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Jenis Perwakilan</h1></legend>
<table width='100%' border='0'>
    <tr>
        <td><label for=\"perwakilan\">Perwakilan</label></td>
        <td>:</td>
        <td>
    <span id=\"perwakilan\">
<label for=\"perwakilan\"></label>
<input type=\"text\" name=\"perwakilan\" id=\"perwakilan\" />
<span class=\"textfieldRequiredMsg\">Jenis Perwakilan Harus Diisi !!!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var perwakilan = new Spry.Widget.ValidationTextField(\"perwakilan\");
</script>";
}
if($p=='ejperwakilan'){
	  $data=mysql_fetch_array(mysql_query("select*from Jenis_perwakilan where id_jenis='$_GET[id_jenis]'"));
  echo"<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=ejperwakilan' name='jperwakilan' id='form_jperwakilan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Jenis Perwakilan</h1></legend>
<input type=hidden name=id_jenis value='$data[id_jenis]'>
<table width='100%' border='0'>
    <tr>
        <td><label for=\"perwakilan\">Perwakilan</label></td>
        <td>:</td>
        <td>
    <span id=\"perwakilan\">
<label for=\"perwakilan\"></label>
<input type=\"text\" name=\"perwakilan\" id=\"perwakilan\" value='$data[perwakilan]'/>
<span class=\"textfieldRequiredMsg\">Jenis Perwakilan Harus Diisi !!!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var perwakilan = new Spry.Widget.ValidationTextField(\"perwakilan\");
</script>";

}
//==================(produk)====================
if($p=='produk'){
	  echo"
  <script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Produk\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_produk.php\" toolbar=\"#produk\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_produk',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; ID Produk &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'jenis_produk',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Jenis Produk &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'jenis_paket',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Jenis Paket &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'lama_perjalanan',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Lama Perjalanan &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'biaya',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Biaya &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'tanggal_keberangkatan',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Tanggal Keberangkatan &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'bulan_keberangkatan',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Bulan Keberangkatan &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'pelunasan',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Pelunasan &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'id_staf',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Pembimbing &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'keterangan',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Keterangan &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'edit',align:'center'\">&nbsp;&nbsp;&nbsp; Edit &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'hapus',align:'center'\">&nbsp;&nbsp;&nbsp; Hapus &nbsp;&nbsp;&nbsp;</th>
        </tr>
    </thead>
  </table>
    <div id=\"produk\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href='?p=tproduk'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='tproduk'){
	$result = mysql_query("select * from produk");
$jsArray = "var prdName = new Array();\n";
$result2 = mysql_query("select * from produk");
$jsArray2 = "var prdName2 = new Array();\n";
$query="select max(id_produk) as maxID from produk where id_produk like 'PR%'";
$hasil=mysql_query($query);
$data=mysql_fetch_array($hasil);
$idMax=$data['maxID'];

$noUrut=(int) substr($idMax,2,5);
$noUrut++;

$newID = 'PR'.sprintf("%04s",$noUrut);
  echo"
  <a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=iproduk' name='produk' id='form_produk' enctype='multipart/form-data'>
<input type=hidden name=id_produk value='$newID'>
<fieldset><legend><h1>Form Produk</h1></legend>
<table width='100%' border='0'>
  <tr>
        <td>ID Produk</td>
        <td>:</td>
        <td><input type=text name=id_produk value='$newID' disabled></td>
      </tr>
      <tr>
        <td>Pembimbing</td>
        <td>:</td>
        <td><span id=\"pembimbing\">
  <label for=\"pembimbing\"></label>
  <select name=\"pembimbing\" id=\"pembimbing\">
      <option value=''>----</option>";
      $jabatan=mysql_fetch_array(mysql_query("select*from jabatan where jabatan='Pembimbing'"));
  $sql=mysql_query("select*from user_damtour where id_jabatan='$jabatan[id_jabatan]'");
          while($data1=mysql_fetch_array($sql)){
            echo"<option value=$data1[id_staf]>$data1[nama]</option>";}
    echo"</select><span class=\"selectRequiredMsg\">Pembimbing Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td >Jenis Produk</td>
        <td >:</td>
        <td ><span id=\"jenis_produk\">
  <label for=\"jenis_produk\"></label>
  <select name=\"jenis_produk\" id=\"jenis_produk\">
      <option value=''>---</option>
      <option value='Umrah Reguler'>Umrah Reguler</option>
      <option value='Umrah+Wisata'>Umrah+Wisata</option>
      <option value='Umroh Promo'>Umroh Promo</option>
      <option value='Haji Khusus'>Haji Khusus</option>
      <option value='Belum Menentukan Keberangkatan'>Belum Menentukan Keberangkatan</option>
  </select>
  <span class=\"selectRequiredMsg\">Jenis Produk Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td >Jenis Paket</td>
        <td >:</td>
        <td ><span id=\"jenis_paket\">
  <label for=\"jenis_paket\"></label>
  <select name=\"jenis_paket\" id=\"jenis_paket\">
        <option value=''>---</option>
          <option value='Executive'>Executive</option>
      <option value='Premium'>Premium</option>
      <option value='Favorit'>Favorit</option>
            <option value='Promo'>Promo</option>
            <option value='Haji Khusus'>Haji Khusus</option>
      <option value='Belum Menentukan Keberangkatan'>Belum Menentukan Keberangkatan</option>
  </select>
  <span class=\"selectRequiredMsg\">Jenis Paket Harus Dipilih!</span></span></td>
      </tr>
    <tr>
        <td >Lama Perjalanan</td>
        <td >:</td>
        <td > <span id=\"lama_perjalanan\">
  <label for=\"lama_perjalanan\"></label>
  <select name=\"lama_perjalanan\" id=\"lama_perjalanan\">
            <option value=''>---</option>
              <option value='9 hari'>9 Hari</option>
          <option value='12 hari'>12 Hari</option>
          <option value='15 hari'>15 Hari</option>
                    <option value='30 hari'>30 Hari</option>
                    <option value='Haji Khusus'>Haji Khusus</option>
                    <option value='Belum Menentukan Keberangkatan'>Belum Menentukan Keberangkatan</option>
  </select>
  <span class=\"selectRequiredMsg\">Lama Perjalanan Harus Dipilih!</span></span>
  </td>
      </tr>
    <tr>
        <td><label for=\"biaya\">Biaya</label></td>
        <td>:</td>
        <td>
    <span id=\"biaya\">
<label for=\"biaya\"></label>
<input type=\"number\" name=\"biaya\" id=\"biaya\" />
<span class=\"textfieldRequiredMsg\">Harus Memasukkan Angka!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"tanggal_berangkat\">Tanggal Berangkat</label></td>
        <td>:</td>
        <td>
<input type=\"text\" name=\"tanggal_berangkat\" id=\"tanggal_berangkat\" class='easyui-datebox' />

</td>
      </tr>
      <tr>
        <td><label for=\"bln_berangkat\">Bulan Keberangkatan</label></td>
        <td>:</td>
        <td><span id=\"bln_keberangkatan\">
<label for=\"bln_keberangkatan\"></label>
<input type=\"text\" name=\"bln_keberangkatan\" id=\"bln_keberangkatan\" />
<span class=\"textfieldRequiredMsg\">Bulan dan Tahun Keberangkatan Harus Diisi!</span></span>
</td>
      </tr>
     <tr>
        <td><label for=\"pelunasan\">Bulan Pelunasan</td>
        <td>:</td>
        <td><span id=\"pelunasan\">
<label for=\"pelunasan\"></label>
<input type=\"text\" name=\"pelunasan\" id=\"pelunasan\" />
<span class=\"textfieldRequiredMsg\">Bulan dan Tahun Pelunasan Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td >Keterangan</td>
        <td >:</td>
        <td ><span id=\"keterangan\">
<label for=\"keterangan\"></label>
<textarea name=\"keterangan\" id=\"keterangan\" cols=\"30\" rows=\"5\"></textarea>
<span class=\"textareaRequiredMsg\">Keterangan Harus Diisi!</span></span>
  </td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var pembimbing = new Spry.Widget.ValidationSelect(\"pembimbing\");
var jenis_produk = new Spry.Widget.ValidationSelect(\"jenis_produk\");
var jenis_paket = new Spry.Widget.ValidationSelect(\"jenis_paket\");
var lama_perjalanan = new Spry.Widget.ValidationSelect(\"lama_perjalanan\");
var biaya = new Spry.Widget.ValidationTextField(\"biaya\");
var bln_keberangkatan = new Spry.Widget.ValidationTextField(\"bln_keberangkatan\");
var pelunasan = new Spry.Widget.ValidationTextField(\"pelunasan\");
var keterangan = new Spry.Widget.ValidationTextarea(\"keterangan\");
</script>
";
}
if($p=='eproduk'){
  $data=mysql_fetch_array(mysql_query("Select * from produk where id_produk='$_GET[id_produk]'"));
$staf=mysql_fetch_array(mysql_query("select * from user_damtour where id_staf='$data[id_staf]'"));  
echo"<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=eproduk' name='produk' id='form_produk' enctype='multipart/form-data'>
<input type=hidden name=id_produk value='$data[id_produk]'>
<fieldset><legend><h1>Form Produk</h1></legend>
<table width='100%' border='0'>
  <tr>
        <td>ID Produk</label></td>
        <td>:</td>
        <td><input type=text name=id_produk value='$data[id_produk]' disabled></td>
      </tr>
      <tr>
        <td>Pembimbing</td>
        <td>:</td>
        <td><span id=\"pembimbing\">
  <label for=\"pembimbing\"></label>
  <select name=\"pembimbing\" id=\"pembimbing\">
      <option value='$data[id_staf]'>$staf[nama]</option>
      <option value=''>----</option>";
  $jabatan=mysql_fetch_array(mysql_query("select*from jabatan where jabatan='Pembimbing'"));
  $sql=mysql_query("select*from user_damtour where id_jabatan='$jabatan[id_jabatan]'");
          while($data1=mysql_fetch_array($sql)){
            echo"<option value=$data1[id_staf]>$data1[nama]</option>";}
    echo"</select><span class=\"selectRequiredMsg\">Mutowif Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td >Jenis Produk</td>
        <td >:</td>
        <td ><span id=\"jenis_produk\">
  <label for=\"jenis_produk\"></label>
  <select name=\"jenis_produk\" id=\"jenis_produk\">
      <option value='$data[jenis_produk]'>$data[jenis_produk]</option>
      <option value=''>---</option>
      <option value='Umrah Reguler'>Umrah Reguler</option>
      <option value='Umrah+Wisata'>Umrah+Wisata</option>
      <option value='Umroh Promo'>Umroh Promo</option>
      <option value='Haji Khusus'>Haji Khusus</option>
      <option value='Belum Menentukan Keberangkatan'>Belum Menentukan Keberangkatan</option>
  </select>
  <span class=\"selectRequiredMsg\">Jenis Produk Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td >Jenis Paket</td>
        <td >:</td>
        <td ><span id=\"jenis_paket\">
  <label for=\"jenis_paket\"></label>
  <select name=\"jenis_paket\" id=\"jenis_paket\">
        <option value='$data[jenis_paket]'>$data[jenis_paket]</option>
      <option value=''>---</option>
          <option value='Executive'>Executive</option>
      <option value='Premium'>Premium</option>
      <option value='Favorit'>Favorit</option>
            <option value='Promo'>Promo</option>
            <option value='Haji Khusus'>Haji Khusus</option>
      <option value='Belum Menentukan Keberangkatan'>Belum Menentukan Keberangkatan</option>
  </select>
  <span class=\"selectRequiredMsg\">Jenis Paket Harus Dipilih!</span></span></td>
      </tr>
    <tr>
        <td >Lama Perjalanan</td>
        <td >:</td>
        <td > <span id=\"lama_perjalanan\">
  <label for=\"lama_perjalanan\"></label>
  <select name=\"lama_perjalanan\" id=\"lama_perjalanan\">
            <option value='$data[lama_perjalanan]'>$data[lama_perjalanan]</option>
          <option value=''>---</option>
              <option value='9 hari'>9 Hari</option>
          <option value='12 hari'>12 Hari</option>
          <option value='15 hari'>15 Hari</option>
                    <option value='30 hari'>30 Hari</option>
                    <option value='Haji Khusus'>Haji Khusus</option>
                    <option value='Belum Menentukan Keberangkatan'>Belum Menentukan Keberangkatan</option>
  </select>
  <span class=\"selectRequiredMsg\">Lama Perjalanan Harus Dipilih!</span></span>
  </td>
      </tr>
    <tr>
        <td><label for=\"biaya\">Biaya</label></td>
        <td>:</td>
        <td>
    <span id=\"biaya\">
<label for=\"biaya\"></label>
<input type=\"number\" name=\"biaya\" id=\"biaya\" value='$data[biaya]'/>
<span class=\"textfieldRequiredMsg\">Harus Memasukkan Angka!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"tanggal_keberangkatan\">Tanggal Berangkat</label></td>
        <td>:</td>
        <td>
<input type=\"text\" name=\"tanggal_keberangkatan\" id=\"tanggal_keberangkatan\" class='easyui-datebox' value='$data[tanggal_keberangkatan]' /> (bln/tgl/thn)

</td>
      </tr>
      <tr>
        <td><label for=\"bulan_keberangkatan\">Bulan Keberangkatan</label></td>
        <td>:</td>
        <td><span id=\"bulan_keberangkatan\">
<label for=\"bulan_keberangkatan\"></label>
<input type=\"text\" name=\"bulan_keberangkatan\" id=\"bulan_keberangkatan\" value='$data[bulan_keberangkatan]'/>
<span class=\"textfieldRequiredMsg\">Bulan dan Tahun Keberangkatan Harus Diisi!</span></span>
</td>
      </tr>
     <tr>
        <td><label for=\"pelunasan\">Bulan Pelunasan</td>
        <td>:</td>
        <td><span id=\"pelunasan\">
<label for=\"pelunasan\"></label>
<input type=\"text\" name=\"pelunasan\" id=\"pelunasan\" value='$data[pelunasan]'/>
<span class=\"textfieldRequiredMsg\">Bulan dan Tahun Pelunasan Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td >Keterangan</td>
        <td >:</td>
        <td ><span id=\"keterangan\">
<label for=\"keterangan\"></label>
<textarea name=\"keterangan\" id=\"keterangan\" cols=\"30\" rows=\"5\">$data[keterangan]</textarea>
<span class=\"textareaRequiredMsg\">Keterangan Harus Diisi!</span></span>
  </td>
      </tr>
      
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var jenis_produk = new Spry.Widget.ValidationSelect(\"jenis_produk\");
var jenis_paket = new Spry.Widget.ValidationSelect(\"jenis_paket\");
var lama_perjalanan = new Spry.Widget.ValidationSelect(\"lama_perjalanan\");
var biaya = new Spry.Widget.ValidationTextField(\"biaya\");
var bln_keberangkatan = new Spry.Widget.ValidationTextField(\"bln_keberangkatan\");
var pelunasan = new Spry.Widget.ValidationTextField(\"pelunasan\");
var pembimbing = new Spry.Widget.ValidationSelect(\"pembimbing\");
var keterangan = new Spry.Widget.ValidationTextarea(\"keterangan\");
</script>";
}
//==================(itinerari)====================
if($p=='itinerari'){
	  echo"
  <script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Itinerari\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_itinerari.php\" toolbar=\"#itinerari\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_itinerari',\" sortable=\"true\">&nbsp;&nbsp;&nbsp; ID Itinerari &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'id_produk',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; ID Produk &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'itinerari',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Itinerari &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'edit',align:'center'\">&nbsp;&nbsp;&nbsp; Edit &nbsp;&nbsp;&nbsp;</th>
        </tr>
    </thead>
  </table>
    <div id=\"itinerari\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";

}
if($p=='eitinerari'){
  $data=mysql_fetch_array(mysql_query("Select * from itinerari where id_itinerari='$_GET[id_itinerari]'"));
  $produk=mysql_fetch_array(mysql_query("Select * from produk where id_produk='$_GET[id_produk]'"));
  echo"<script type=\"text/javascript\" src=\"../js/js_easy/tiny_mce.js\"></script>
<script type=\"text/javascript\">
  tinyMCE.init({
    // General options
    mode : \"textareas\",
    theme : \"advanced\",
    
  });
</script><a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=eitinerari' name='itinerari'enctype='multipart/form-data'><fieldset><legend><strong>Form Itinerari&nbsp;( Program $produk[jenis_produk]&nbsp;Paket $produk[jenis_paket]&nbsp;$produk[lama_perjalanan]-&nbsp;$produk[biaya] )</strong></legend>
<input type='hidden' name='id_produk' value=$data[id_produk]>
<input type='hidden' name='id_itinerari' value=$data[id_itinerari]>
    <table width='100%' border='0'>
      <tr>
        <td >ID Itinerari</td>
        <td >:</td>
        <td ><input type='text' name='id_itinerari' size='35' value='$data[id_itinerari]' disabled/></td>
      </tr>
    <tr>
        <td >ID Produk</td>
        <td >:</td>
        <td ><input type='text' name='id_produk' size='35' value='$data[id_produk]' disabled/></td>
      </tr>
      <tr>
        <td >Itinerari</td>
        <td >:</td>
        <td ><textarea name='itinerari'   rows='5' cols='30'style='width: 100%; height: 100%;' >$data[itinerari]</textarea></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>";
}
//==================(akomodasi)====================
if($p=='akomodasi'){
	  echo"
  <script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Akomodasi\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_akomodasi.php\" toolbar=\"#akomodasi\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_akomodasi',\" sortable=\"true\">&nbsp;&nbsp;&nbsp; ID Akomodasi &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'id_produk',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; ID Produk &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'akomodasi_hotel',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Akomodasi Hotel &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'akomodasi_pesawat',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Akomodasi Pesawat &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'edit',align:'center'\">&nbsp;&nbsp;&nbsp; Edit &nbsp;&nbsp;&nbsp;</th>
        </tr>
    </thead>
  </table>
    <div id=\"akomodasi\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='eakomodasi'){
	  $data=mysql_fetch_array(mysql_query("Select * from akomodasi where id_akomodasi='$_GET[id_akomodasi]'"));
  $produk=mysql_fetch_array(mysql_query("Select * from produk where id_produk='$_GET[id_produk]'"));
  echo"<script type=\"text/javascript\" src=\"../js/js_easy/tiny_mce.js\"></script>
<script type=\"text/javascript\">
  tinyMCE.init({
    // General options
    mode : \"textareas\",
    theme : \"advanced\",
    
  });
</script><a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>
<fieldset><legend><h1>Form Akomodasi &nbsp;( Program $produk[jenis_produk]&nbsp;Paket $produk[jenis_paket]&nbsp;$produk[lama_perjalanan]-&nbsp;$produk[biaya] )</h1></legend>
<form method=POST action='controller.php?act=eakomodasi' name='akomodasi'>
<input type=hidden name='id_akomodasi' value='$data[id_akomodasi]'>
<input type=hidden name='id_produk' value='$data[id_produk]'>
    <table width='100%' border='0'>
      <tr>
        <td width='76' >ID Akomodasi</td>
        <td width='3'>:</td>
        <td width='244'><input size='25' type='text'     name='id_akomodasi' value='$data[id_akomodasi]' disabled></td>
      </tr>
      <tr>
        <td >ID Produk</td>
        <td >:</td>
        <td ><input size='25' type='text'   name='id_produk' value='$data[id_produk]' disabled></td>
      </tr>
    <tr>
        <td >Akomodasi Hotel</td>
        <td >:</td>
        <td ><textarea name='akomodasi_hotel'   rows='1' cols='100' >$data[akomodasi_hotel]</textarea></td>
      </tr>
      <tr>
        <td >Akomodasi Pesawat</td>
        <td >:</td>
        <td ><textarea name='akomodasi_pesawat'   rows='1' cols='100' >$data[akomodasi_pesawat]</textarea></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><br><br><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></form></fieldset>";
}
//==================(kurs)====================
if($p=='kurs'){
	 echo"<table class=\"easyui-datagrid\" title=\"Data Kurs\" style=\"width:auto;height:auto;\">
    <thead align=\"center\">
<tr>
              <th data-options=\"field:'no',align:'center'\">No</th>
        <th data-options=\"field:'id_kurs',width:300,align:'left'\">ID </th>
                <th data-options=\"field:'kurs',width:450,align:'right'\">Kurs</th>
        <th data-options=\"field:'id_staf',align:'center'\">ID Staf</th>
        <th data-options=\"field:'waktu_update',align:'center'\">Waktu Update</th>
        <th data-options=\"field:'aksi',align:'center'\">Edit</th>
               </tr>
            </thead>
            <tbody>";
            
                    $sql = mysql_query("SELECT * FROM kurs");
                    $no = 1;
                
                    while ($data = mysql_fetch_array($sql)) {
                      echo "<tr>
                            <td>$no</td>
                            <td>$data[id_kurs]</td>
              <td> Rp "; echo format_angka($data['kurs']);echo",-</td>
              <td>$data[id_staf]</td>
              <td>$data[waktu_update]</td>
                            <td><a href='?p=ekurs&id_kurs=$data[id_kurs]'><img src='../images/pencil.png'></a></td>
                            </tr>";
                      $no++;
                    }                    
                   echo"</tbody>
            </table><br>";
}
if($p=='ekurs'){
	  $data=mysql_fetch_array(mysql_query("select * from kurs WHERE id_kurs='$_GET[id_kurs]'"));
  echo"
  <a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=ekurs' name='kurs' id='form_kurs' enctype='multipart/form-data'>
<input type=hidden name=id_kurs value='$data[id_kurs]'>
<input type=hidden name=id_staf value='$_SESSION[id_staf]'>
<fieldset><legend><h1>Form Kurs</h1></legend>
<table width='100%' border='0'>
  <tr>
        <td>ID Kurs</label></td>
        <td>:</td>
        <td><input type=text name=id_kurs value='$data[id_kurs]' disabled></td>
      </tr>
      <tr>
        <td><label for=\"kurs\">Kurs</label></td>
        <td>:</td>
        <td><input size='20'  type='text' name='kurs' required id='kurs' class=\"required number\" placeholder='Kurs' value='$data[kurs]'></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>";
}
//==================(testimoni)====================
if($p=='testimoni'){
echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Testimoni\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_testimoni.php\" toolbar=\"#testimoni\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_pelanggan',align:'center'\" sortable=\"true\">ID Pelanggan</th>
            <th data-options=\"field:'nama_pelanggan',align:'left'\">Nama Lengkap</th>
            <th data-options=\"field:'jenis_kelamin',align:'center'\">Jenis Kelamin</th>
            <th data-options=\"field:'detail_pelanggan',align:'center'\">Detail Pelanggan</th>
            <th data-options=\"field:'detail_testimoni',align:'center'\">Detail Testimoni</th>
        </tr>
    </thead>
  </table>
    <div id=\"testimoni\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='dtestimoni'){
$pendaftaran=mysql_fetch_array(mysql_query("select * from pendaftaran_pelanggan WHERE id_pelanggan='$_GET[id_pelanggan]'"));
$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan where id_pelanggan='$pendaftaran[id_pelanggan]'"));
$data=mysql_fetch_array(mysql_query("select*from testimoni where id_pendaftaran='$pendaftaran[id_pendaftaran]'"));

echo "

<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Testimoni $pelanggan[nama_depan]&nbsp;$pelanggan[nama_tengah]&nbsp;$pelanggan[nama_belakang]\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\"toolbar=\"#dpembayaran\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
      
            <th data-options=\"field:'id_testimoni',align:'center'\" sortable=\"true\">ID Testimoni</th>
            <th data-options=\"field:'id_pendaftaran',align:'center'\" sortable=\"true\">Pendaftaran</th>
            <th data-options=\"field:'testimoni',align:'center'\" sortable=\"true\">Testimoni</th>
            <th data-options=\"field:'publish',align:'center'\" sortable=\"true\">Publish</th>
            <th data-options=\"field:'edit',align:'center'\" sortable=\"true\">Edit</th>
      </tr>
    </thead>
  <tbody>";
            
                    $sql = mysql_query("SELECT * FROM pendaftaran_pelanggan where id_pelanggan = '$pelanggan[id_pelanggan]'");
                    while ($r = mysql_fetch_array($sql)) {
                      $data=mysql_fetch_array(mysql_query("select*from testimoni where id_pendaftaran='$r[id_pendaftaran]'"));
                      echo "<tr>
                            
                            <td>$data[id_testimoni]</td>
                            <td>$data[id_pendaftaran]</td>
                            <td>$data[testimoni]</td>
                            <td>$data[publish]</td>
                            <td><a href='?p=etestimoni&id_testimoni=$data[id_testimoni]'><img src='../images/pencil.png'></a></td>
                            </tr>";
                      
                    }                    
                   echo"</tbody>
  </table>
    <div id=\"dpembayaran\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
    <a href='javascript:history.go(-1)' title='Kembali'class=\"easyui-tooltip\"data-options=\"position:'right'\"><img src='../images/back.png'></a>
    </div>
  </div><br>
";
  
}

if($p=='etestimoni'){
  $data=mysql_fetch_array(mysql_query("Select*from testimoni where id_testimoni='$_GET[id_testimoni]'"));
	echo"
<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=etestimoni' name='perwakilan' id='form_testimoni' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Publish Testimoni </h1></legend>
<input type=\"hidden\" name=\"id_testimoni\" value=$data[id_testimoni]>
<table width='100%' border='0'>
      <tr>
        <td >Publish</td>
        <td >:</td>
        <td ><span id=\"publish\">
  <label for=\"publish\"></label>
  <select name=\"publish\" id=\"publish\">
        <option value='$data[publish]'>$data[publish]</option>
        <option value=''>----</option>
        <option value='Tampil'>Tampil</option>
        <option value='Tidak Tampil'>Tidak Tampil</option>
        </select>
  <span class=\"selectRequiredMsg\">Status Publish Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var publish = new Spry.Widget.ValidationSelect(\"publish\");
</script>
";
}

//==================(foto)====================
if($p=='foto'){
  echo"
  <script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Foto\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_foto.php\" toolbar=\"#foto\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_foto',\" sortable=\"true\">&nbsp;&nbsp;&nbsp; ID Foto &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'id_staf',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; ID Staf &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'foto',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Foto &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'keterangan',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Keterangan &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'edit',align:'center'\">&nbsp;&nbsp;&nbsp; Edit &nbsp;&nbsp;&nbsp;</th>
      <th data-options=\"field:'hapus',align:'center'\">&nbsp;&nbsp;&nbsp; Hapus &nbsp;&nbsp;&nbsp;</th>
        </tr>
    </thead>
  </table>
    <div id=\"foto\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href='?p=tfoto'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='tfoto'){
  echo"
  <script>$(document).ready(function() {
        $(\"#form_foto\").validate();
      });
</script><script type=\"text/javascript\" src=\"../js/js_easy/tiny_mce.js\"></script>
<script type=\"text/javascript\">
  tinyMCE.init({
    // General options
    mode : \"textareas\",
    theme : \"advanced\",
    
  });
</script><a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=ifoto' id='form_foto' name='foto'enctype='multipart/form-data'><fieldset><legend><h1>Form Foto</h1></legend>
<input type=hidden name=id_staf value=$_SESSION[id_staf]>
   <table width='80%' border='0'>
      <tr>
        <td >Foto</td>
        <td >:</td>
        <td ><input size='25' type='file'   name='foto' id='foto' required></td>
      </tr>
    <tr>
        <td >Keterangan</td>
        <td >:</td>
        <td ><span id=\"keterangan\">
<label for=\"keterangan\"></label>
<textarea name=\"keterangan\" cols=\"100\" rows=\"5\"></textarea>
<span class=\"textareaRequiredMsg\">Keterangan Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><br><br><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
  <script type=\"text/javascript\">
var keterangan = new Spry.Widget.ValidationTextarea(\"keterangan\");
</script>
";
}
if($p=='efoto'){
  $data=mysql_fetch_array(mysql_query("select * from foto WHERE id_foto='$_GET[id_foto]'"));
  echo"<script>$(document).ready(function() {
        $(\"#form_foto\").validate();
      });
</script><script type=\"text/javascript\" src=\"../js/js_easy/tiny_mce.js\"></script>
<script type=\"text/javascript\">
  tinyMCE.init({
    // General options
    mode : \"textareas\",
    theme : \"advanced\",
    
  });
</script><a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=efoto' id='form_foto' name='foto'enctype='multipart/form-data'><fieldset><legend><h1>Form Foto</h1></legend>
<input type=hidden name=id_staf value=$_SESSION[id_staf]>
<input type=hidden name=id_foto value=$data[id_foto]>
   <table width='80%' border='0'>
      <tr>
        <td >ID Foto</td>
        <td >:</td>
        <td ><input size='25' type='text'   name='id_foto' value='$data[id_foto]' disabled></td>
      </tr>
    <tr>
        <td >Foto</td>
        <td >:</td>
        <td ><img src='../upload/img_foto/$data[foto]' height=\"60\" width=\"60\"></td>
      </tr>
    <tr>
        <td >Keterangan</td>
        <td >:</td>
        <td ><span id=\"keterangan\">
<label for=\"keterangan\"></label>
<textarea name=\"keterangan\" cols=\"100\" rows=\"5\">$data[keterangan]</textarea>
<span class=\"textareaRequiredMsg\">Keterangan Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><br><br><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
    <script type=\"text/javascript\">
var keterangan = new Spry.Widget.ValidationTextarea(\"keterangan\");
</script>";
}
//==================(video)====================
if($p=='video'){
  echo"
  <script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Video\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_video.php\" toolbar=\"#video\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_video',\" sortable=\"true\">&nbsp;&nbsp;&nbsp; ID Video &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'id_staf',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; ID Staf &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'video',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Video &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'keterangan',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Keterangan &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'edit',align:'center'\">&nbsp;&nbsp;&nbsp; Edit &nbsp;&nbsp;&nbsp;</th>
      <th data-options=\"field:'hapus',align:'center'\">&nbsp;&nbsp;&nbsp; Hapus &nbsp;&nbsp;&nbsp;</th>
        </tr>
    </thead>
  </table>
    <div id=\"video\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href='?p=tvideo'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='tvideo'){
  echo"<script>$(document).ready(function() {
        $(\"#form_video\").validate();
      });
</script><script type=\"text/javascript\" src=\"../js/js_easy/tiny_mce.js\"></script>
<script type=\"text/javascript\">
  tinyMCE.init({
    // General options
    mode : \"textareas\",
    theme : \"advanced\",
    
  });
</script><a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=ivideo' id='form_video' name='video'enctype='multipart/form-data'><fieldset><legend><h1>Form video</h1></legend>
<input type=hidden name=id_staf value=$_SESSION[id_staf]>
   <table width='80%' border='0'>
      <tr>
        <td ><label for=\"video\">Link Video</label></td>
        <td >:</td>
        <td ><span id=\"video\">
<label for=\"video\"></label>
<input type=\"text\" name=\"video\" id=\"video\" size='50'/>
<span class=\"textfieldRequiredMsg\">Harus Memasukkan link Video!</span></span></td>
      </tr>
    <tr>
        <td >Keterangan</td>
        <td >:</td>
        <td ><span id=\"keterangan\">
<label for=\"keterangan\"></label>
<textarea name=\"keterangan\" cols=\"100\" rows=\"5\"></textarea>
<span class=\"textareaRequiredMsg\">Keterangan Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><br><br><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
  <script type=\"text/javascript\">
var video = new Spry.Widget.ValidationTextField(\"video\");
var keterangan = new Spry.Widget.ValidationTextarea(\"keterangan\");
</script>";
}
if($p=='evideo'){
    $data=mysql_fetch_array(mysql_query("select * from video WHERE id_video='$_GET[id_video]'"));
  echo"<script>$(document).ready(function() {
        $(\"#form_video\").validate();
      });
</script><script type=\"text/javascript\" src=\"../js/js_easy/tiny_mce.js\"></script>
<script type=\"text/javascript\">
  tinyMCE.init({
    // General options
    mode : \"textareas\",
    theme : \"advanced\",
    
  });
</script><a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=evideo' id='form_video' name='video'enctype='multipart/form-data'><fieldset><legend><h1>Form video</h1></legend>
<input type=hidden name=id_staf value=$_SESSION[id_staf]>
<input type=hidden name=id_video value=$data[id_video]>
   <table width='80%' border='0'>
      <tr>
        <td >ID video</td>
        <td >:</td>
        <td ><input size='25' type='text'   name='id_video' value='$data[id_video]' disabled></td>
      </tr>
    <tr>
        <td ><label for=\"video\">Link Video</label></td>
        <td >:</td>
        <td ><span id=\"video\">
<label for=\"video\"></label>
<input type=\"text\" name=\"video\" id=\"video\" value='$data[video]' size='50'/>
<span class=\"textfieldRequiredMsg\">Harus Memasukkan link Video!</span></span></td>
      </tr>
    <tr>
        <td >Keterangan</td>
        <td >:</td>
        <td ><span id=\"keterangan\">
<label for=\"keterangan\"></label>
<textarea name=\"keterangan\" cols=\"100\" rows=\"5\">$data[keterangan]</textarea>
<span class=\"textareaRequiredMsg\">Keterangan Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><br><br><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
  <script type=\"text/javascript\">
var video = new Spry.Widget.ValidationTextField(\"video\");
var keterangan = new Spry.Widget.ValidationTextarea(\"keterangan\");
</script>";
}
//==================(perwakilan)====================
if($p=='perwakilan'){
  echo"
  <script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Perwakilan\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_perwakilan.php\" toolbar=\"#perwakilan\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_perwakilan',\" sortable=\"true\">ID Perwakilan</th>
            <th data-options=\"field:'id_staf',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; ID Staf &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'nama',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Nama &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'jenis_kelamin',align:'left'\" sortable=\"true\">Jenis Kelamin</th>
            <th data-options=\"field:'alamat',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Alamat &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'provinsi',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Provinsi &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'no_telp',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; No. Telp &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'email',align:'left'\" sortable=\"true\">&nbsp;&nbsp;&nbsp; Email &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'edit',align:'center'\">&nbsp;&nbsp;&nbsp; Edit &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'detail',align:'center'\">&nbsp;&nbsp;&nbsp; Detail &nbsp;&nbsp;&nbsp;</th>
            <th data-options=\"field:'hapus',align:'center'\">&nbsp;&nbsp;&nbsp; Hapus &nbsp;&nbsp;&nbsp;</th>
        </tr>
    </thead>
  </table>
    <div id=\"perwakilan\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href='?p=tperwakilan'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";

}
if($p=='tperwakilan'){
$result = mysql_query("select * from perwakilan");
$jsArray = "var prdName = new Array();\n";

$query="select max(id_perwakilan) as maxID from perwakilan where id_perwakilan like 'WK%'";
$hasil=mysql_query($query);
$data=mysql_fetch_array($hasil);
$idMax=$data['maxID'];
$noUrut=(int) substr($idMax,2,5);
$noUrut++;

$newID = 'WK'.sprintf("%04s",$noUrut);
echo"
<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=iperwakilan' name='perwakilan' id='form_perwakilan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Perwakilan</h1></legend>
<input type=\"hidden\" name=\"id_staf\" value=$_SESSION[id_staf]>
<input type=\"hidden\" name=\"id_perwakilan\" value=$newID >
<table width='100%' border='0'>
  <tr>
        <td><label for=\"nama\">Nama Lengkap</label></td>
        <td>:</td>
        <td>
    <span id=\"nama\">
<label for=\"nama\"></label>
<input type=\"text\" name=\"nama\" id=\"nama\" />
<span class=\"textfieldRequiredMsg\">Nama Lengkap Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td >Jenis Kelamin</td>
        <td >:</td>
        <td ><span id=\"jenis_kelamin\">
  <label for=\"jenis_kelamin\"></label>
  <select name=\"jenis_kelamin\" id=\"jenis_kelamin\">
      <option value=''>---</option>
        <option value='Laki-Laki'>Laki-Laki</option>
    <option value='Perempuan'>Perempuan</option>
  </select>
  <span class=\"selectRequiredMsg\">Jenis Kelamin Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td >Jenis Perwakilan</td>
        <td >:</td>
        <td ><span id=\"jenis_perwakilan\">
  <label for=\"jenis_perwakilan\"></label>
  <select name=\"jenis_perwakilan\" id=\"jenis_perwakilan\">
        <option value=''>----</option>";
  $sql=mysql_query('select*from jenis_perwakilan');
          while($data1=mysql_fetch_array($sql)){
            echo"<option value=$data1[id_jenis]>$data1[perwakilan]</option>";}
    echo"</select>
  <span class=\"selectRequiredMsg\">Jenis Perwakilan Harus Dipilih!</span></span></td>
      </tr>
    <tr>
        <td >Alamat</td>
        <td >:</td>
        <td ><span id=\"alamat\">
<label for=\"alamat\"></label>
<textarea name=\"alamat\" id=\"alamat\" cols=\"30\" rows=\"5\"></textarea>
<span class=\"textareaRequiredMsg\">Alamat Harus Diisi!</span></span>
  </td>
      </tr>
    <tr>
        <td><label for=\"provinsi\">Provinsi</label></td>
        <td>:</td>
        <td>
    <span id=\"provinsi\">
<label for=\"provinsi\"></label>
<input type=\"text\" name=\"provinsi\" id=\"provinsi\" />
<span class=\"textfieldRequiredMsg\">Provinsi Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"no_telp\">No. Telp</label></td>
        <td>:</td>
        <td><span id=\"no_telp\">
<label for=\"no_telp\"></label>
<input type=\"number\" name=\"no_telp\" id=\"no_telp\" />
<span class=\"textfieldRequiredMsg\">No. Telepon Harus Diisi Dengan Angka!</span></span>
</td>
      </tr>
   <tr>
        <td><label for=\"email\">E-Mail</label></td>
        <td>:</td>
        <td><span id=\"email\">
<label for=\"email\"></label>
<input type=\"email\" name=\"email\" id=\"email\" />
<span class=\"textfieldRequiredMsg\">Alamat Email Harus Valid!</span></span>
</td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var jenis_kelamin = new Spry.Widget.ValidationSelect(\"jenis_kelamin\");
var jenis_perwakilan = new Spry.Widget.ValidationSelect(\"jenis_perwakilan\");
var alamat = new Spry.Widget.ValidationTextarea(\"alamat\");
var nama = new Spry.Widget.ValidationTextField(\"nama\");
var provinsi = new Spry.Widget.ValidationTextField(\"provinsi\");
var email = new Spry.Widget.ValidationTextField(\"email\");
var no_telp = new Spry.Widget.ValidationTextField(\"no_telp\");
</script>
";
}
if($p=='eperwakilan'){
  $data=mysql_fetch_array(mysql_query("select * from perwakilan WHERE id_perwakilan='$_GET[id_perwakilan]'"));
  echo"
  <a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=eperwakilan' name='perwakilan' id='form_perwakilan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Perwakilan</h1></legend>
<input type=\"hidden\" name=id_staf value=$_SESSION[id_staf]>
<input type=\"hidden\" name=id_perwakilan value=$data[id_perwakilan]>
<table width='100%' border='0'>
  <tr>
        <td >ID Perwakilan</td>
        <td >:</td>
        <td ><input size='25' type='text'   name='id_perwakilan' value='$data[id_perwakilan]' disabled></td>
      </tr>
  <tr>
        <td><label for=\"nama\">Nama Lengkap</label></td>
        <td>:</td>
        <td>
    <span id=\"nama\">
<label for=\"nama\"></label>
<input type=\"text\" name=\"nama\" id=\"nama\" value='$data[nama]' />
<span class=\"textfieldRequiredMsg\">Nama Lengkap Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td >Jenis Kelamin</td>
        <td >:</td>
        <td ><span id=\"jenis_kelamin\">
  <label for=\"jenis_kelamin\"></label>
  <select name=\"jenis_kelamin\" id=\"jenis_kelamin\">
      <option value='$data[jenis_kelamin]'>$data[jenis_kelamin]</option>
    <option value=''>---</option>
        <option value='Laki-Laki'>Laki-Laki</option>
    <option value='Perempuan'>Perempuan</option>
  </select>
  <span class=\"selectRequiredMsg\">Jenis Kelamin Harus Dipilih!</span></span></td>
      </tr>
      
    <tr>
        <td >Alamat</td>
        <td >:</td>
        <td ><span id=\"alamat\">
<label for=\"alamat\"></label>
<textarea name=\"alamat\" id=\"alamat\" cols=\"30\" rows=\"5\">$data[alamat]</textarea>
<span class=\"textareaRequiredMsg\">Alamat Harus Diisi!</span></span>
  </td>
      </tr>
    <tr>
        <td><label for=\"provinsi\">Provinsi</label></td>
        <td>:</td>
        <td>
    <span id=\"provinsi\">
<label for=\"provinsi\"></label>
<input type=\"text\" name=\"provinsi\" id=\"provinsi\" value='$data[provinsi]'/>
<span class=\"textfieldRequiredMsg\">Provinsi Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"no_telp\">No. Telp</label></td>
        <td>:</td>
        <td><span id=\"no_telp\">
<label for=\"no_telp\"></label>
<input type=\"number\" name=\"no_telp\" id=\"no_telp\" value='$data[no_telp]'/>
<span class=\"textfieldRequiredMsg\">No. Telepon Harus Diisi Dengan Angka!</span></span>
</td>
      </tr>
   <tr>
        <td><label for=\"email\">E-Mail</label></td>
        <td>:</td>
        <td><span id=\"email\">
<label for=\"email\"></label>
<input type=\"email\" name=\"email\" id=\"email\" value='$data[email]'/>
<span class=\"textfieldRequiredMsg\">Alamat Email Harus Valid!</span></span>
</td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var jenis_kelamin = new Spry.Widget.ValidationSelect(\"jenis_kelamin\");
var alamat = new Spry.Widget.ValidationTextarea(\"alamat\");
var nama = new Spry.Widget.ValidationTextField(\"nama\");
var provinsi = new Spry.Widget.ValidationTextField(\"provinsi\");
var email = new Spry.Widget.ValidationTextField(\"email\");
var no_telp = new Spry.Widget.ValidationTextField(\"no_telp\");
</script>
";
}
if($p=='dperwakilan'){
  $data=mysql_fetch_array(mysql_query("select*from pendaftaran_perwakilan where id_perwakilan='$_GET[id_perwakilan]'"));
  $data2=mysql_fetch_array(mysql_query("select*from perwakilan where id_perwakilan='$data[id_perwakilan]'"));
  echo "

<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Detail Perwakilan [$data2[nama]]\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\"toolbar=\"#dpembayaran\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_pendaftaran',align:'center'\" sortable=\"true\">ID Pendaftaran</th>
            <th data-options=\"field:'id_perwakilan',align:'center'\" sortable=\"true\">ID Perwakilan</th>
            <th data-options=\"field:'id_jenis',align:'left'\" sortable=\"true\">ID Jenis Perwakilan</th>
            <th data-options=\"field:'tanggal_daftar',align:'center'\">Tanggal Daftar</th>
            <th data-options=\"field:'edit',align:'center'\">Edit</th>
            <th data-options=\"field:'hapus',align:'center'\">Hapus</th>
        </tr>
    </thead>
  <tbody>";
             $sql = mysql_query("SELECT * FROM pendaftaran_perwakilan where id_perwakilan = '$data2[id_perwakilan]'");
                  while ($r = mysql_fetch_array($sql)) {
                  $r2=mysql_fetch_array(mysql_query("select*from jenis_perwakilan where id_jenis='$r[id_jenis]'"));
                  echo "<tr>
                            <td>$r[id_pendaftaran]</td>
                            <td>$r[id_perwakilan]</td>
                            <td>$r[id_jenis] - $r2[perwakilan]</td>
                            <td>$r[tanggal_daftar]</td>
                            <td><a href='?p=edperwakilan&id_pendaftaran=$r[id_pendaftaran]'><img src='../images/pencil.png'></a></td>
                            <td><a href=\"controller.php?delete=hdperwakilan&id_pendaftaran=$r[id_pendaftaran]\" onclick=\" return confirm('Yakin Mau Menghapus $r[id_pendaftaran] ?');\"><img src='../images/cancel.png'></a></td>
                        </tr>";
                      
                    }                    
                   echo"</tbody>
  </table>
    <div id=\"dpembayaran\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
    <a href='?p=tdperwakilan&id_perwakilan=$data2[id_perwakilan]'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
  </div>  <br>
  <a href='javascript:history.go(-1)' title='Kembali'class=\"easyui-tooltip\"data-options=\"position:'right'\"><img src='../images/back.png'></a><br>
";
}
if($p=='tdperwakilan'){
echo"
<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=idperwakilan' name='perwakilan' id='form_perwakilan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Daftar Perwakilan </h1></legend>
<input type=\"hidden\" name=\"id_staf\" value=$_SESSION[id_staf]>
<input type=\"hidden\" name=\"id_perwakilan\" value='$_GET[id_perwakilan]' >
<table width='100%' border='0'>
      <tr>
        <td >Jenis Perwakilan</td>
        <td >:</td>
        <td ><span id=\"jenis_perwakilan\">
  <label for=\"jenis_perwakilan\"></label>
  <select name=\"jenis_perwakilan\" id=\"jenis_perwakilan\">
        <option value=''>----</option>";
  $sql=mysql_query('select*from jenis_perwakilan');
          while($data1=mysql_fetch_array($sql)){
            echo"<option value=$data1[id_jenis]>$data1[perwakilan]</option>";}
    echo"</select>
  <span class=\"selectRequiredMsg\">Jenis Perwakilan Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var jenis_perwakilan = new Spry.Widget.ValidationSelect(\"jenis_perwakilan\");
</script>
";
}
if($p=='edperwakilan'){
  $data=mysql_fetch_array(mysql_query("select*from pendaftaran_perwakilan where id_pendaftaran='$_GET[id_pendaftaran]'"));
$data2=mysql_fetch_array(mysql_query("select*from jenis_perwakilan where id_jenis='$data[id_jenis]'"));
echo"
<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=edperwakilan' name='perwakilan' id='form_perwakilan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Daftar Perwakilan </h1></legend>
<input type=\"hidden\" name=\"id_pendaftaran\" value='$_GET[id_pendaftaran]' >
<table width='100%' border='0'>
      <tr>
        <td >Jenis Perwakilan</td>
        <td >:</td>
        <td ><span id=\"jenis_perwakilan\">
  <label for=\"jenis_perwakilan\"></label>
  <select name=\"jenis_perwakilan\" id=\"jenis_perwakilan\">
        <option value='$data[id_jenis]'>$data2[perwakilan]</option>
        <option value=''>----</option>";
  $sql=mysql_query('select*from jenis_perwakilan');
          while($data1=mysql_fetch_array($sql)){
            echo"<option value=$data1[id_jenis]>$data1[perwakilan]</option>";}
    echo"</select>
  <span class=\"selectRequiredMsg\">Jenis Perwakilan Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var jenis_perwakilan = new Spry.Widget.ValidationSelect(\"jenis_perwakilan\");
</script>
";
}
//==================(pendaftaran)====================
if($p=='pendaftaran'){
	echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Pendaftaran\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_pendaftaran.php\" toolbar=\"#pendaftaran\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_pendaftaran',align:'center'\" sortable=\"true\">ID Pendaftaran</th>
            <th data-options=\"field:'nama_pelanggan',align:'left'\">Nama Lengkap</th>
            <th data-options=\"field:'produk',align:'center'\">Produk</th>
            <th data-options=\"field:'detail_pelanggan',align:'center'\">Detail Pelanggan</th>
            <th data-options=\"field:'waktu_daftar',align:'center'\">Waktu Daftar</th>
            <th data-options=\"field:'status',align:'center'\">Status Keberangkatan</th>
            <th data-options=\"field:'edit',align:'center'\">Edit</th>
            <th data-options=\"field:'hapus',align:'center'\">Hapus</th>
        </tr>
    </thead>
  </table>
    <div id=\"pendaftaran\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div><br><br>
  <div class=\"easyui-tabs\" style='width:auto;height:auto;'>
    <div title='Data Pendaftaran Pelanggan 'data-options=\"iconCls:'icon-help'\" style='padding:10px'>
    <form action='controller.php?act=lihat_pendaftaran' target=\"_blank\" method=POST><h3><font size=3pt align=center>Data Pendaftaran Pelanggan</font></h3><hr>
  Bulan : <select name='bulan'><option value=''></option>
                  <option value='JANUARI'>JANUARI</option>
                  <option value='FEBRUARI'>FEBRUARI</option>
                  <option value='MARET'>MARET</option>
                  <option value='APRIL'>APRIL</option>
                  <option value='MEI'>MEI</option>
                  <option value='JUNI'>JUNI</option>
                  <option value='AWAL RAMADHAN'>AWAL RAMADHAN</option>
                  <option value='TENGAH RAMADHAN'>TENGAH RAMADHAN</option>
                  <option value='AKHIR RAMADHAN'>AKHIR RAMADHAN</option>
                  <option value='FULL RAMADHAN'>FULL RAMADHAN</option>
                  <option value='DESEMBER'>DESEMBER</option>
                  </select>&nbsp;
  Tahun : <select name='tahun'><option value=''></option>
                  <option value='2015'>2015</option>
                  <option value='2016'>2016</option>
                  <option value='2017'>2017</option>
                  <option value='2018'>2018</option>
                  <option value='2019'>2019</option>
                  <option value='2020'>2020</option>
                  
                  </select>&nbsp;
  <input type=submit value=Lihat></form><br></hr>
      <form action='controller.php?act=excel_pendaftaran' method=POST><hr>
  Bulan : <select name='bulan'><option value=''></option>
                  <option value='JANUARI'>JANUARI</option>
                  <option value='FEBRUARI'>FEBRUARI</option>
                  <option value='MARET'>MARET</option>
                  <option value='APRIL'>APRIL</option>
                  <option value='MEI'>MEI</option>
                  <option value='JUNI'>JUNI</option>
                  <option value='AWAL RAMADHAN'>AWAL RAMADHAN</option>
                  <option value='TENGAH RAMADHAN'>TENGAH RAMADHAN</option>
                  <option value='AKHIR RAMADHAN'>AKHIR RAMADHAN</option>
                  <option value='FULL RAMADHAN'>FULL RAMADHAN</option>
                  <option value='DESEMBER'>DESEMBER</option>
                  </select>&nbsp;
  Tahun : <select name='tahun'><option value=''></option>
                  <option value='2015'>2015</option>
                  <option value='2016'>2016</option>
                  <option value='2017'>2017</option>
                  <option value='2018'>2018</option>
                  <option value='2019'>2019</option>
                  <option value='2020'>2020</option>
                  
                  </select>&nbsp;
  <input type=submit value=ExportToExcel></form>
    </div>";
}
if($p=='ependaftaran_pelanggan'){
	$data=mysql_fetch_array(mysql_query("select * from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
  $data1=mysql_fetch_array(mysql_query("select * from pelanggan where id_pelanggan='$data[id_pelanggan]'"));
  $data2=mysql_fetch_array(mysql_query("select * from produk where id_produk='$data[id_produk]'"));
  echo"<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=ependaftaran_pelanggan' name='pelanggan'enctype='multipart/form-data'>
<input type=hidden name=id_pendaftaran value='$data[id_pendaftaran]'>
<table width='100%' border='0' cellpadding='2'>
  <tr>
    <td><fieldset><legend>Data Pelanggan</legend><table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='21%'><label for=\"nama_depan\">Nama Depan</label></td>
    <td width='1%'>:</td>
    <td width='20%'><span id=\"nama_depan\">
<label for=\"nama_depan\"></label>
<input type=\"text\" name=\"nama_depan\" id=\"nama_depan\" value='$data1[nama_depan]'disabled/>
<span class=\"textfieldRequiredMsg\">Nama Depan Harus Diisi!</span></span></td>
    <td width='11%'>&nbsp;</td>
    <td width='16%'>Ukuran Pakaian</td>
    <td width='1%'>:</td>
    <td width='30%'><select name='ukuran_pakaian' disabled>
              <option value='$data1[ukuran_pakaian]'>$data1[ukuran_pakaian]</option>
              <option value=''></option>
              <option value='S'>S</option>
              <option value='M'>M</option>
              <option value='L'>L</option>
              <option value='XL'>XL</option>
              <option value='XL'>XXL</option>
    </select>
    <b>Status Keberangkatan: </b><select name='status_keberangkatan' >
              <option value='$data[status_keberangkatan]'>$data[status_keberangkatan]</option>
              <option value=''>------</option>
              <option value='Belum Diberangkatkan'>Belum Diberangkatkan</option>
              <option value='Sedang Diberangkatkan'>Sedang Diberangkatkan</option>
              <option value='Sudah Diberangkatkan'>Sudah Diberangkatkan</option>
              
    </select></td>
  </tr>
  <tr>
    <td>Nama Tengah</td>
    <td>:</td>
    <td><input type='text' name='nama_tengah'value='$data1[nama_tengah]' disabled></td>
    <td>&nbsp;</td>
    <td width='16%'>ID Registrasi</td>
    <td>:</td>
    <td><input type=text name=id_pelanggan value='$data1[id_pelanggan]' disabled></td>
  </tr>
  <tr>
    <td>Nama Belakang</td>
    <td>:</td>
    <td><input type='text' name='nama_belakang'value='$data1[nama_belakang]' disabled></td>
    <td>&nbsp;</td>
    <td>Produk</td>
    <td>:</td>
    <td><span id=\"produk\">
  <label for=\"produk\"></label>
  <select name=\"id_produk\" id=\"produk\">
      <option value='$data2[id_produk]'>$data2[jenis_produk]&nbsp;<b>-</b> $data2[jenis_paket]&nbsp;<b>-</b> $data2[tanggal_keberangkatan]&nbsp;<b>-</b> $data2[pelunasan]&nbsp;<b>-</b> $data2[biaya]</option>
      <option value=''>----</option>";
  $sql=mysql_query('select*from produk');
          while($data3=mysql_fetch_array($sql)){
            echo"<option value=$data3[id_produk]>$data3[jenis_produk]&nbsp;<b>-</b> $data3[jenis_paket]&nbsp;<b>-</b> $data3[tanggal_keberangkatan]&nbsp;<b>-</b> $data3[pelunasan]&nbsp;<b>-</b> $data3[biaya]</option>";}
    echo"</select><span class=\"selectRequiredMsg\">Produk Harus Dipilih!</span></span></td>
  </tr>
<tr>
    <td>Nama Panggilan</td>
    <td>:</td>
    <td><input type='text' name='nama_panggilan'value='$data1[nama_panggilan]' disabled></td>
    <td>&nbsp;</td>
    <td width='16%'>Alamat Rumah</td>
    <td>:</td>
    <td rowspan='3'><span id=\"alamat\">
<label for=\"alamat\"></label>
<textarea name=\"alamat\" id=\"alamat\" cols=\"30\" rows=\"5\" disabled>$data1[alamat]</textarea>
<span class=\"textareaRequiredMsg\">Alamat Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td><label for=\"tempat_lahir\">Tempat Lahir</label>/<label for=\"tanggal_lahir\">Tanggal Lahir</label></td>
    <td>:</td>
    <td><span id=\"tempat_lahir\">
<label for=\"tempat_lahir\"></label>
<input type=\"text\" name=\"tempat_lahir\" id=\"tempat_lahir\" value='$data1[tempat_lahir]' disabled/>
<span class=\"textfieldRequiredMsg\">Tempat Lahir Harus Diisi!</span></span><span id=\"tanggal_lahir\">
<label for=\"tanggal_lahir\"></label>
<input type=\"text\" name=\"tanggal_lahir\" id=\"tanggal_lahir\" placeholder='yyyy-mm-dd' value='$data1[tanggal_lahir]' disabled/>
<span class=\"textfieldRequiredMsg\">Tanggal Lahir Harus Diisi!</span></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label for=\"no_ktp\">No.KTP/SIM/Passport</label></td>
    <td>:</td>
    <td><span id=\"no_ktp\">
<label for=\"no_ktp\"></label>
<input type=\"text\" name=\"no_ktp\" id=\"no_ktp\" value='$data1[no_ktp]' disabled/>
<span class=\"textfieldRequiredMsg\">No. KTP/SIM/Passport Harus Diisi!</span></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><span id=\"jenis_kelamin\">
  <label for=\"jenis_kelamin\"></label>
  <select name=\"jenis_kelamin\" id=\"jenis_kelamin\" disabled>
      <option value='$data1[jenis_kelamin]'>$data1[jenis_kelamin]</option>
      <option value=''>---</option>
        <option value='Laki-Laki'>Laki-Laki</option>
    <option value='Perempuan'>Perempuan</option>
  </select><span class=\"selectRequiredMsg\">Jenis Kelamin Harus Dipilih!</span></span></td>
    <td>&nbsp;</td>
    <td><label for=\"kota\">Kota</label></td>
    <td>:</td>
    <td><span id=\"kota\">
<label for=\"kota\"></label>
<input type=\"text\" name=\"kota\" id=\"kota\" value='$data1[kota]' disabled/>
<span class=\"textfieldRequiredMsg\">Kota Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td><select name='pendidikan' disabled>
              <option value='$data1[pendidikan]'>$data1[pendidikan]</option>
              <option value=''></option>
              <option value='SD'>SD</option>
              <option value='SMP'>SMP</option>
              <option value='SMA'>SMA</option>
                            <option value='D1'>D1</option>
                            <option value='D2'>D2</option>
                            <option value='D3'>D3</option>
              <option value='S1'>S1</option>
              <option value='S2'>S2</option>
              <option value='lainnya'>-LAIN-LAIN-</option>
    </select></td>
    <td>&nbsp;</td>
    <td>Telp.Rumah</td>
    <td>:</td>
    <td><input type='number' name='telp_rumah'value='$data1[telp_rumah]' disabled></td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><input type='text' name='pekerjaan'value='$data1[pekerjaan]' disabled></td>
    <td>&nbsp;</td>
    <td>Telp.Kantor</td>
    <td>:</td>
    <td><input type='number' name='telp_kantor'value='$data1[telp_kantor]' disabled></td>
  </tr>
  <tr>
    <td>Ket.Umrah</td>
    <td>:</td>
    <td><select name='ket_umrah' disabled>
              <option value='$data[ket_umrah]'>$data1[ket_umrah]</option>
              <option value=''></option>
              <option value='Pernah'>Pernah</option>
              <option value='Belum Pernah'>Belum Pernah</option>
    </select></td>
    <td>&nbsp;</td>
    <td><label for=\"hp\">Handphone</label></td>
    <td>:</td>
    <td><span id=\"hp\">
<label for=\"hp\"></label>
<input type=\"number\" name=\"hp\" id=\"hp\" value='$data1[hp]' disabled/>
<span class=\"textfieldRequiredMsg\">No. Hp Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td>Ket.Haji</td>
    <td>:</td>
    <td><select name='ket_haji' disabled>
              <option value='$data1[ket_haji]'>$data1[ket_haji]</option>
              <option value=''></option>
              <option value='Pernah'>Pernah</option>
              <option value='Belum Pernah'>Belum Pernah</option>
    </select></td>
    <td>&nbsp;</td>
    <td><label for=\"email\">Email</label></td>
    <td>:</td>
    <td><span id=\"email\">
<label for=\"email\"></label>
<input type=\"email\" name=\"email\" id=\"email\" value='$data1[email]' disabled/>
<span class=\"textfieldRequiredMsg\">Email Harus Valid!</span></span></td>
<td></td>
    <td></td>
    <td></td>
  </tr>
</table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Ahli Waris</legend><table width='80%' border='0' cellpadding='2'>
      <tr>
        <td width='21%'><label for=\"ahli_waris\">Nama Ahli Waris</label></td>
        <td width='1%'>:</td>
        <td width='78%'><span id=\"ahli_waris\">
<label for=\"ahli_waris\"></label>
<input type=\"text\" name=\"ahli_waris\" id=\"ahli_waris\" value='$data1[ahli_waris]' disabled/>
<span class=\"textfieldRequiredMsg\">Nama Ahli Waris Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"hubungan\">Hubungan Pendaftar</label></td>
        <td>:</td>
        <td><span id=\"hubungan\">
<label for=\"hubungan\"></label>
<input type=\"text\" name=\"hubungan\" id=\"hubungan\" value='$data1[hubungan]' disabled/>
<span class=\"textfieldRequiredMsg\">Hubungan dengan Ahli Waris Harus Diisi!</span></span></td>
      </tr>
  </table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Bank</legend><table width='80%' border='0' cellpadding='2'>
      <tr>
        <td width='21%'>No.Rekening</td>
        <td width='1%'>:</td>
        <td width='78%'><input type='number' name='no_rekening'value='$data1[no_rekening]' disabled></td>
      </tr>
      <tr>
        <td>Atas Nama</td>
        <td>:</td>
        <td><input type='text' name='atas_nama'value='$data1[atas_nama]' disabled></td>
      </tr>
      <tr>
        <td>Nama Bank</td>
        <td>:</td>
        <td><input type='text' name='nama_bank'value='$data1[nama_bank]' disabled></td>
      </tr>
      <tr>
        <td>Cabang</td>
        <td>:</td>
        <td><input type='text' name='cabang'value='$data1[cabang]' disabled></td>
      </tr>
    </table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Dai Umrah-Haji</legend><table width='80%' border='0' cellpadding='2'>
  <tr>
    <td>ID Registrasi</td>
    <td>:</td>
    <td><input type='text' name='reg_dai'value='$data1[reg_dai]' disabled></td>
  </tr>
   <tr>
    <td width='21%'>Nama Da'i</td>
    <td width='1%'>:</td>
    <td width='78%'><input type='text' name='nama_dai'value='$data1[nama_dai]' disabled></td>
  </tr>
</table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Login Pelanggan</legend><table width='80%' border='0' cellpadding='2'>
      <tr>
        <td width='21%'><label for=\"username\">Username</label></td>
        <td width='1%'>:</td>
        <td width='78%'><span id=\"username\">
<label for=\"username\"></label>
<input type=\"text\" name=\"username\" id=\"username\" value='$data1[username]' disabled/>
<span class=\"textfieldRequiredMsg\">Username Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"password\">Password</label></td>
        <td>:</td>
        <td><span id=\"password\">
<label for=\"password\"></label>
<input type=\"text\" name=\"password\" id=\"password\" value='$data1[password]' disabled/>
<span class=\"textfieldRequiredMsg\">Password Harus Diisi!</span></span></td>
      </tr>
  </table></fieldset></td>
  </tr>
</table><p align='center'><input type='submit' value='Simpan' /></p></form>
<script type=\"text/javascript\">
var nama_depan = new Spry.Widget.ValidationTextField(\"nama_depan\");
var ahli_waris = new Spry.Widget.ValidationTextField(\"ahli_waris\");
var hubungan = new Spry.Widget.ValidationTextField(\"hubungan\");
var hp = new Spry.Widget.ValidationTextField(\"hp\");
var kota = new Spry.Widget.ValidationTextField(\"kota\");
var no_ktp = new Spry.Widget.ValidationTextField(\"no_ktp\");
var tempat_lahir = new Spry.Widget.ValidationTextField(\"tempat_lahir\");
var email = new Spry.Widget.ValidationTextField(\"email\");
var tanggal_lahir = new Spry.Widget.ValidationTextField(\"tanggal_lahir\");
var jenis_kelamin = new Spry.Widget.ValidationSelect(\"jenis_kelamin\");
var produk = new Spry.Widget.ValidationSelect(\"produk\");
var alamat = new Spry.Widget.ValidationTextarea(\"alamat\");
var username = new Spry.Widget.ValidationTextField(\"username\");
var password = new Spry.Widget.ValidationTextField(\"password\");

</script>";
}
//==================(konfirmasi)====================
if($p=='konfirmasi'){
echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Konfirmasi Pembayaran\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_konfirmasi.php\" toolbar=\"#konfirmasi\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_pendaftaran',align:'center'\" sortable=\"true\">ID Pendaftaran</th>
            <th data-options=\"field:'nama_pelanggan',align:'left'\">Nama Lengkap</th>
            <th data-options=\"field:'produk',align:'center'\">Produk</th>
            <th data-options=\"field:'detail_pelanggan',align:'center'\">Detail Pelanggan</th>
            <th data-options=\"field:'jumlah',align:'center'\">Jumlah</th>
            <th data-options=\"field:'bukti',align:'center'\">Bukti</th>
            <th data-options=\"field:'waktu_kirim',align:'center'\">Waktu Kirim</th>
            <th data-options=\"field:'status',align:'center'\">Status</th>
            <th data-options=\"field:'valid',align:'center'\">Validasi</th>
        </tr>
    </thead>
  </table>
    <div id=\"konfirmasi\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='vkonfirmasi'){

$data=mysql_fetch_array(mysql_query("Select * from konfirmasi_pembayaran where id_konfirmasi='$_GET[id_konfirmasi]'"));

  
echo"<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=vkonfirmasi' name='produk' id='form_produk' enctype='multipart/form-data'>
<input type=hidden name=id_konfirmasi value='$data[id_konfirmasi]'>
<input type=hidden name=bukti value='$data[bukti]'>
<input type=hidden name=id_staf value='$_SESSION[id_staf]'>
<fieldset><legend><h1>Form Konfirmasi</h1></legend>
<table width='100%' border='0'>
  <tr>
        <td>ID Konfirmasi</label></td>
        <td>:</td>
        <td><input type=text name=id_konfirmasi value='$data[id_konfirmasi]' disabled></td>
      </tr>
      <tr>
        <td>bukti</td>
        <td>:</td>
        <td><img src='../upload/img_bukti/$data[bukti]' height=100 width=100></td>
      </tr>
      <tr>
        <td >Jumlah</td>
        <td >:</td>
        <td ><b>$data[jumlah]</b></td>
      </tr>
      <tr>
        <td >Validasi</td>
        <td >:</td>
        <td ><span id=\"valid\">
  <label for=\"valid\"></label>
  <select name=\"valid\" id=\"valid\">
        <option value='$data[status]'>"; if($data['status']==0){
  echo"Belum Dicek Oleh Staf Administrasi";
}else if($data['status']==1){
  echo"Data Valid";
}else if($data['status']==2){
  echo"Data Tidak Valid";
}
echo"</option>
      <option value=''>---</option>
          <option value='1'>Data Valid</option>
      <option value='2'>Data Tidak Valid</option>
      </select>
  <span class=\"selectRequiredMsg\">Validasi Data Harus Dipilih!</span></span></td>
      </tr>
      
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var valid = new Spry.Widget.ValidationSelect(\"valid\");
</script>";
}

//==================(pelanggan)====================
if($p=='pelanggan'){
  echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Pelanggan\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_pelanggan.php\" toolbar=\"#pelanggan\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_pelanggan',align:'center'\" sortable=\"true\">ID Pelanggan</th>
            <th data-options=\"field:'nama_pelanggan',align:'left'\">Nama Lengkap</th>
            <th data-options=\"field:'jenis_kelamin',align:'center'\">Jenis Kelamin</th>
            <th data-options=\"field:'status',align:'center'\">Status</th>
            <th data-options=\"field:'detail',align:'center'\">Detail</th>
            <th data-options=\"field:'validasi',align:'center'\">Validasi</th>
            <th data-options=\"field:'edit',align:'center'\">Edit</th>
            <th data-options=\"field:'hapus',align:'center'\">Hapus</th>
        </tr>
    </thead>
  </table>
    <div id=\"pelanggan\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href='?p=tpelanggan'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>
  <h3><font size=3pt align=center>Data Email</font></h3><hr> <b>List Email Pelanggan: </b>";
  $sql=mysql_query("select*from pelanggan");
  while($data=mysql_fetch_array($sql)){
    echo"$data[email];";}
  echo"<hr>";
}
if($p=='tpelanggan'){
	$result = mysql_query("select * from pelanggan");
$jsArray = "var prdName = new Array();\n";
$result2 = mysql_query("select * from pelanggan");
$jsArray2 = "var prdName2 = new Array();\n";
$query="select max(id_pelanggan) as maxID from pelanggan where id_pelanggan like 'DAM%'";
$hasil=mysql_query($query);
$data=mysql_fetch_array($hasil);
$idMax=$data['maxID'];

$noUrut=(int) substr($idMax,3,6);
$noUrut++;

$newID = 'DAM'.sprintf("%05s",$noUrut);

echo "<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=ipelanggan' name='pelanggan'enctype='multipart/form-data'>
<input type=hidden name=id_pelanggan value='$newID'>
<table width='100%' border='0' cellpadding='2'>
  <tr>
    <td><fieldset><legend>Data Pelanggan</legend><table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='21%'><label for=\"nama_depan\">Nama Depan</label></td>
    <td width='1%'>:</td>
    <td width='20%'><span id=\"nama_depan\">
<label for=\"nama_depan\"></label>
<input type=\"text\" name=\"nama_depan\" id=\"nama_depan\" />
<span class=\"textfieldRequiredMsg\">Nama Depan Harus Diisi!</span></span></td>
    <td width='11%'>&nbsp;</td>
    <td width='16%'>Ukuran Pakaian</td>
    <td width='1%'>:</td>
    <td width='30%'><select name='ukuran_pakaian'>
              <option value=''></option>
              <option value='S'>S</option>
              <option value='M'>M</option>
              <option value='L'>L</option>
              <option value='XL'>XL</option>
              <option value='XL'>XXL</option>
    </select></td>
  </tr>
  <tr>
    <td>Nama Tengah</td>
    <td>:</td>
    <td><input type='text' name='nama_tengah'></td>
    <td>&nbsp;</td>
    <td width='16%'>ID Registrasi</td>
    <td>:</td>
    <td><input type=text name=id_pelanggan value='$newID' disabled></td>
  </tr>
  <tr>
    <td>Nama Belakang</td>
    <td>:</td>
    <td><input type='text' name='nama_belakang'></td>
    <td>&nbsp;</td>
    <td>Produk</td>
    <td>:</td>
    <td><span id=\"produk\">
  <label for=\"produk\"></label>
  <select name=\"id_produk\" id=\"produk\">
      <option value=''>----</option>";
  $sql=mysql_query('select*from produk');
          while($data1=mysql_fetch_array($sql)){
            echo"<option value=$data1[id_produk]>$data1[jenis_produk]&nbsp;<b>-</b> $data1[jenis_paket]&nbsp;<b>-</b> $data1[tanggal_keberangkatan]&nbsp;<b>-</b> $data1[pelunasan]&nbsp;<b>-</b> $data1[biaya]</option>";}
    echo"</select><span class=\"selectRequiredMsg\">Produk Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td>Nama Panggilan</td>
    <td>:</td>
    <td><input type='text' name='nama_panggilan'></td>
    <td>&nbsp;</td>
    <td width='16%'>Alamat Rumah</td>
    <td>:</td>
    <td rowspan='3'><span id=\"alamat\">
<label for=\"alamat\"></label>
<textarea name=\"alamat\" id=\"alamat\" cols=\"30\" rows=\"5\"></textarea>
<span class=\"textareaRequiredMsg\">Alamat Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td><label for=\"tempat_lahir\">Tempat Lahir</label>/<label for=\"tanggal_lahir\">Tanggal Lahir</label></td>
    <td>:</td>
    <td><span id=\"tempat_lahir\">
<label for=\"tempat_lahir\"></label>
<input type=\"text\" name=\"tempat_lahir\" id=\"tempat_lahir\" />
<span class=\"textfieldRequiredMsg\">Tempat Lahir Harus Diisi!</span></span><span id=\"tanggal_lahir\">
<label for=\"tanggal_lahir\"></label>
<input type=\"text\" name=\"tanggal_lahir\" id=\"tanggal_lahir\" placeholder='dd/mm/YYYY'/>
<span class=\"textfieldRequiredMsg\">Tanggal Lahir Harus Diisi!</span></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label for=\"no_ktp\">No.KTP/SIM/Passport</label></td>
    <td>:</td>
    <td><span id=\"no_ktp\">
<label for=\"no_ktp\"></label>
<input type=\"text\" name=\"no_ktp\" id=\"no_ktp\" />
<span class=\"textfieldRequiredMsg\">No. KTP/SIM/Passport Harus Diisi!</span></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><span id=\"jenis_kelamin\">
  <label for=\"jenis_kelamin\"></label>
  <select name=\"jenis_kelamin\" id=\"jenis_kelamin\">
      <option value=''>---</option>
        <option value='Laki-Laki'>Laki-Laki</option>
    <option value='Perempuan'>Perempuan</option>
  </select><span class=\"selectRequiredMsg\">Jenis Kelamin Harus Dipilih!</span></span></td>
    <td>&nbsp;</td>
    <td><label for=\"kota\">Kota</label></td>
    <td>:</td>
    <td><span id=\"kota\">
<label for=\"kota\"></label>
<input type=\"text\" name=\"kota\" id=\"kota\" />
<span class=\"textfieldRequiredMsg\">Kota Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td><select name='pendidikan'>
              <option value=''></option>
              <option value='SD'>SD</option>
              <option value='SMP'>SMP</option>
              <option value='SMA'>SMA</option>
                            <option value='D1'>D1</option>
                            <option value='D2'>D2</option>
                            <option value='D3'>D3</option>
              <option value='S1'>S1</option>
              <option value='S2'>S2</option>
              <option value='lainnya'>-LAIN-LAIN-</option>
    </select></td>
    <td>&nbsp;</td>
    <td>Telp.Rumah</td>
    <td>:</td>
    <td><input type='number' name='telp_rumah'></td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><input type='text' name='pekerjaan'></td>
    <td>&nbsp;</td>
    <td>Telp.Kantor</td>
    <td>:</td>
    <td><input type='number' name='telp_kantor'></td>
  </tr>
  <tr>
    <td>Ket.Umrah</td>
    <td>:</td>
    <td><select name='ket_umrah'>
              <option value=''></option>
              <option value='Pernah'>Pernah</option>
              <option value='Belum Pernah'>Belum Pernah</option>
    </select></td>
    <td>&nbsp;</td>
    <td><label for=\"hp\">Handphone</label></td>
    <td>:</td>
    <td><span id=\"hp\">
<label for=\"hp\"></label>
<input type=\"number\" name=\"hp\" id=\"hp\" />
<span class=\"textfieldRequiredMsg\">No. Hp Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td>Ket.Haji</td>
    <td>:</td>
    <td><select name='ket_haji'>
              <option value=''></option>
              <option value='Pernah'>Pernah</option>
              <option value='Belum Pernah'>Belum Pernah</option>
    </select></td>
    <td>&nbsp;</td>
    <td><label for=\"email\">Email</label></td>
    <td>:</td>
    <td><span id=\"email\">
<label for=\"email\"></label>
<input type=\"email\" name=\"email\" id=\"email\" />
<span class=\"textfieldRequiredMsg\">Email Harus Valid!</span></span></td>
  </tr>
</table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Ahli Waris</legend><table width='80%' border='0' cellpadding='2'>
      <tr>
        <td width='21%'><label for=\"ahli_waris\">Nama Ahli Waris</label></td>
        <td width='1%'>:</td>
        <td width='78%'><span id=\"ahli_waris\">
<label for=\"ahli_waris\"></label>
<input type=\"text\" name=\"ahli_waris\" id=\"ahli_waris\" />
<span class=\"textfieldRequiredMsg\">Nama Ahli Waris Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"hubungan\">Hubungan Pendaftar</label></td>
        <td>:</td>
        <td><span id=\"hubungan\">
<label for=\"hubungan\"></label>
<input type=\"text\" name=\"hubungan\" id=\"hubungan\" />
<span class=\"textfieldRequiredMsg\">Hubungan dengan Ahli Waris Harus Diisi!</span></span></td>
      </tr>
  </table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Bank</legend><table width='80%' border='0' cellpadding='2'>
      <tr>
        <td width='21%'>No.Rekening</td>
        <td width='1%'>:</td>
        <td width='78%'><input type='number' name='no_rekening'></td>
      </tr>
      <tr>
        <td>Atas Nama</td>
        <td>:</td>
        <td><input type='text' name='atas_nama'></td>
      </tr>
      <tr>
        <td>Nama Bank</td>
        <td>:</td>
        <td><input type='text' name='nama_bank'></td>
      </tr>
      <tr>
        <td>Cabang</td>
        <td>:</td>
        <td><input type='text' name='cabang'></td>
      </tr>
    </table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Dai Umrah-Haji</legend><table width='80%' border='0' cellpadding='2'>
  <tr>
    <td>ID Registrasi</td>
    <td>:</td>
    <td>";echo '<select name="reg_dai" onchange="document.getElementById(\'prd_name\').value = prdName[this.value]">';
echo '<option></option>';
while ($row = mysql_fetch_array($result)) {
    echo '<option value="' . $row['id_pelanggan'] . '">' . $row['id_pelanggan'] . '</option>';
    $jsArray .= "prdName['" . $row['id_pelanggan'] . "'] = '" . addslashes($row['nama_depan'].' '.$row['nama_tengah'].' '.$row['nama_belakang']) . "';\n";
}
echo "</select></td>
  </tr>
   <tr>
    <td width='21%'>Nama Da'i</td>
    <td width='1%'>:</td>
    <td width='78%'><input type=\"text\" name=\"nama_dai\" id=\"prd_name\"/><script type=\"text/javascript\">";
echo $jsArray; ?><?
echo"
</script></td>
      </tr>
    </table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Login Pelanggan</legend><table width='80%' border='0' cellpadding='2'>
      <tr>
        <td width='21%'><label for=\"username\">Username</label></td>
        <td width='1%'>:</td>
        <td width='78%'><span id=\"username\">
<label for=\"username\"></label>
<input type=\"text\" name=\"username\" id=\"username\" />
<span class=\"textfieldRequiredMsg\">Username Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"password\">Password</label></td>
        <td>:</td>
        <td><span id=\"password\">
<label for=\"password\"></label>
<input type=\"text\" name=\"password\" id=\"password\" />
<span class=\"textfieldRequiredMsg\">Password Harus Diisi!</span></span></td>
      </tr>
  </table></fieldset></td>
  </tr>
  </table><p align='center'><input type='submit' value='Simpan' /><input type='reset' value='Reset' /></p></form>
<script type=\"text/javascript\">
var nama_depan = new Spry.Widget.ValidationTextField(\"nama_depan\");
var ahli_waris = new Spry.Widget.ValidationTextField(\"ahli_waris\");
var hubungan = new Spry.Widget.ValidationTextField(\"hubungan\");
var hp = new Spry.Widget.ValidationTextField(\"hp\");
var kota = new Spry.Widget.ValidationTextField(\"kota\");
var no_ktp = new Spry.Widget.ValidationTextField(\"no_ktp\");
var tempat_lahir = new Spry.Widget.ValidationTextField(\"tempat_lahir\");
var email = new Spry.Widget.ValidationTextField(\"email\");
var tanggal_lahir = new Spry.Widget.ValidationTextField(\"tanggal_lahir\");
var jenis_kelamin = new Spry.Widget.ValidationSelect(\"jenis_kelamin\");
var produk = new Spry.Widget.ValidationSelect(\"produk\");
var alamat = new Spry.Widget.ValidationTextarea(\"alamat\");
var username = new Spry.Widget.ValidationTextField(\"username\");
var password = new Spry.Widget.ValidationTextField(\"password\");

</script>";
}
if($p=='epelanggan'){
	$data=mysql_fetch_array(mysql_query("select * from pelanggan where id_pelanggan='$_GET[id_pelanggan]'"));
  echo"<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=epelanggan' name='pelanggan'enctype='multipart/form-data'>
<input type=hidden name=id_pelanggan value='$data[id_pelanggan]'>
<table width='100%' border='0' cellpadding='2'>
  <tr>
    <td><fieldset><legend>Data Pelanggan</legend><table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='21%'><label for=\"nama_depan\">Nama Depan</label></td>
    <td width='1%'>:</td>
    <td width='20%'><span id=\"nama_depan\">
<label for=\"nama_depan\"></label>
<input type=\"text\" name=\"nama_depan\" id=\"nama_depan\" value='$data[nama_depan]'/>
<span class=\"textfieldRequiredMsg\">Nama Depan Harus Diisi!</span></span></td>
    <td width='11%'>&nbsp;</td>
    <td width='16%'>Ukuran Pakaian</td>
    <td width='1%'>:</td>
    <td width='30%'><select name='ukuran_pakaian'>
              <option value='$data[ukuran_pakaian]'>$data[ukuran_pakaian]</option>
              <option value=''></option>
              <option value='S'>S</option>
              <option value='M'>M</option>
              <option value='L'>L</option>
              <option value='XL'>XL</option>
              <option value='XL'>XXL</option>
    </select></td>
  </tr>
  <tr>
    <td>Nama Tengah</td>
    <td>:</td>
    <td><input type='text' name='nama_tengah'value='$data[nama_tengah]'></td>
    <td>&nbsp;</td>
    <td width='16%'>ID Registrasi</td>
    <td>:</td>
    <td><input type=text name=id_pelanggan value='$data[id_pelanggan]' disabled></td>
  </tr>
  <tr>
    <td>Nama Belakang</td>
    <td>:</td>
    <td><input type='text' name='nama_belakang'value='$data[nama_belakang]'></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nama Panggilan</td>
    <td>:</td>
    <td><input type='text' name='nama_panggilan'value='$data[nama_panggilan]'></td>
    <td>&nbsp;</td>
    <td width='16%'>Alamat Rumah</td>
    <td>:</td>
    <td rowspan='3'><span id=\"alamat\">
<label for=\"alamat\"></label>
<textarea name=\"alamat\" id=\"alamat\" cols=\"30\" rows=\"5\">$data[alamat]</textarea>
<span class=\"textareaRequiredMsg\">Alamat Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td><label for=\"tempat_lahir\">Tempat Lahir</label>/<label for=\"tanggal_lahir\">Tanggal Lahir</label></td>
    <td>:</td>
    <td><span id=\"tempat_lahir\">
<label for=\"tempat_lahir\"></label>
<input type=\"text\" name=\"tempat_lahir\" id=\"tempat_lahir\" value='$data[tempat_lahir]'/>
<span class=\"textfieldRequiredMsg\">Tempat Lahir Harus Diisi!</span></span><span id=\"tanggal_lahir\">
<label for=\"tanggal_lahir\"></label>
<input type=\"text\" name=\"tanggal_lahir\" id=\"tanggal_lahir\" placeholder='yyyy-mm-dd' value='$data[tanggal_lahir]'/>
<span class=\"textfieldRequiredMsg\">Tanggal Lahir Harus Diisi!</span></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label for=\"no_ktp\">No.KTP/SIM/Passport</label></td>
    <td>:</td>
    <td><span id=\"no_ktp\">
<label for=\"no_ktp\"></label>
<input type=\"text\" name=\"no_ktp\" id=\"no_ktp\" value='$data[no_ktp]'/>
<span class=\"textfieldRequiredMsg\">No. KTP/SIM/Passport Harus Diisi!</span></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><span id=\"jenis_kelamin\">
  <label for=\"jenis_kelamin\"></label>
  <select name=\"jenis_kelamin\" id=\"jenis_kelamin\">
      <option value='$data[jenis_kelamin]'>$data[jenis_kelamin]</option>
      <option value=''>---</option>
        <option value='Laki-Laki'>Laki-Laki</option>
    <option value='Perempuan'>Perempuan</option>
  </select><span class=\"selectRequiredMsg\">Jenis Kelamin Harus Dipilih!</span></span></td>
    <td>&nbsp;</td>
    <td><label for=\"kota\">Kota</label></td>
    <td>:</td>
    <td><span id=\"kota\">
<label for=\"kota\"></label>
<input type=\"text\" name=\"kota\" id=\"kota\" value='$data[kota]'/>
<span class=\"textfieldRequiredMsg\">Kota Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td><select name='pendidikan'>
              <option value='$data[pendidikan]'>$data[pendidikan]</option>
              <option value=''></option>
              <option value='SD'>SD</option>
              <option value='SMP'>SMP</option>
              <option value='SMA'>SMA</option>
                            <option value='D1'>D1</option>
                            <option value='D2'>D2</option>
                            <option value='D3'>D3</option>
              <option value='S1'>S1</option>
              <option value='S2'>S2</option>
              <option value='lainnya'>-LAIN-LAIN-</option>
    </select></td>
    <td>&nbsp;</td>
    <td>Telp.Rumah</td>
    <td>:</td>
    <td><input type='number' name='telp_rumah'value='$data[telp_rumah]'></td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><input type='text' name='pekerjaan'value='$data[pekerjaan]'></td>
    <td>&nbsp;</td>
    <td>Telp.Kantor</td>
    <td>:</td>
    <td><input type='number' name='telp_kantor'value='$data[telp_kantor]'></td>
  </tr>
  <tr>
    <td>Ket.Umrah</td>
    <td>:</td>
    <td><select name='ket_umrah'>
              <option value='$data[ket_umrah]'>$data[ket_umrah]</option>
              <option value=''></option>
              <option value='Pernah'>Pernah</option>
              <option value='Belum Pernah'>Belum Pernah</option>
    </select></td>
    <td>&nbsp;</td>
    <td><label for=\"hp\">Handphone</label></td>
    <td>:</td>
    <td><span id=\"hp\">
<label for=\"hp\"></label>
<input type=\"number\" name=\"hp\" id=\"hp\" value='$data[hp]'/>
<span class=\"textfieldRequiredMsg\">No. Hp Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td>Ket.Haji</td>
    <td>:</td>
    <td><select name='ket_haji'>
              <option value='$data[ket_haji]'>$data[ket_haji]</option>
              <option value=''></option>
              <option value='Pernah'>Pernah</option>
              <option value='Belum Pernah'>Belum Pernah</option>
    </select></td>
    <td>&nbsp;</td>
    <td><label for=\"email\">Email</label></td>
    <td>:</td>
    <td><span id=\"email\">
<label for=\"email\"></label>
<input type=\"email\" name=\"email\" id=\"email\" value='$data[email]'/>
<span class=\"textfieldRequiredMsg\">Email Harus Valid!</span></span></td>
<td></td>
    <td></td>
    <td></td>
  </tr>
</table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Ahli Waris</legend><table width='80%' border='0' cellpadding='2'>
      <tr>
        <td width='21%'><label for=\"ahli_waris\">Nama Ahli Waris</label></td>
        <td width='1%'>:</td>
        <td width='78%'><span id=\"ahli_waris\">
<label for=\"ahli_waris\"></label>
<input type=\"text\" name=\"ahli_waris\" id=\"ahli_waris\" value='$data[ahli_waris]'/>
<span class=\"textfieldRequiredMsg\">Nama Ahli Waris Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"hubungan\">Hubungan Pendaftar</label></td>
        <td>:</td>
        <td><span id=\"hubungan\">
<label for=\"hubungan\"></label>
<input type=\"text\" name=\"hubungan\" id=\"hubungan\" value='$data[hubungan]'/>
<span class=\"textfieldRequiredMsg\">Hubungan dengan Ahli Waris Harus Diisi!</span></span></td>
      </tr>
  </table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Bank</legend><table width='80%' border='0' cellpadding='2'>
      <tr>
        <td width='21%'>No.Rekening</td>
        <td width='1%'>:</td>
        <td width='78%'><input type='number' name='no_rekening'value='$data[no_rekening]'></td>
      </tr>
      <tr>
        <td>Atas Nama</td>
        <td>:</td>
        <td><input type='text' name='atas_nama'value='$data[atas_nama]'></td>
      </tr>
      <tr>
        <td>Nama Bank</td>
        <td>:</td>
        <td><input type='text' name='nama_bank'value='$data[nama_bank]'></td>
      </tr>
      <tr>
        <td>Cabang</td>
        <td>:</td>
        <td><input type='text' name='cabang'value='$data[cabang]'></td>
      </tr>
    </table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Dai Umrah-Haji</legend><table width='80%' border='0' cellpadding='2'>
  <tr>
    <td>ID Registrasi</td>
    <td>:</td>
    <td><input type='text' name='reg_dai'value='$data[reg_dai]'></td>
  </tr>
   <tr>
    <td width='21%'>Nama Da'i</td>
    <td width='1%'>:</td>
    <td width='78%'><input type='text' name='nama_dai'value='$data[nama_dai]'></td>
  </tr>
</table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Login Pelanggan</legend><table width='80%' border='0' cellpadding='2'>
      <tr>
        <td width='21%'><label for=\"username\">Username</label></td>
        <td width='1%'>:</td>
        <td width='78%'><span id=\"username\">
<label for=\"username\"></label>
<input type=\"text\" name=\"username\" id=\"username\" value='$data[username]'/>
<span class=\"textfieldRequiredMsg\">Username Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"password\">Password</label></td>
        <td>:</td>
        <td><span id=\"password\">
<label for=\"password\"></label>
<input type=\"text\" name=\"password\" id=\"password\" value='$data[password]'/>
<span class=\"textfieldRequiredMsg\">Password Harus Diisi!</span></span></td>
      </tr>
  </table></fieldset></td>
  </tr>
</table><p align='center'><input type='submit' value='Simpan' /><input type='reset' value='Reset' /></p></form>
<script type=\"text/javascript\">
var nama_depan = new Spry.Widget.ValidationTextField(\"nama_depan\");
var ahli_waris = new Spry.Widget.ValidationTextField(\"ahli_waris\");
var hubungan = new Spry.Widget.ValidationTextField(\"hubungan\");
var hp = new Spry.Widget.ValidationTextField(\"hp\");
var kota = new Spry.Widget.ValidationTextField(\"kota\");
var no_ktp = new Spry.Widget.ValidationTextField(\"no_ktp\");
var tempat_lahir = new Spry.Widget.ValidationTextField(\"tempat_lahir\");
var email = new Spry.Widget.ValidationTextField(\"email\");
var tanggal_lahir = new Spry.Widget.ValidationTextField(\"tanggal_lahir\");
var jenis_kelamin = new Spry.Widget.ValidationSelect(\"jenis_kelamin\");
var produk = new Spry.Widget.ValidationSelect(\"produk\");
var alamat = new Spry.Widget.ValidationTextarea(\"alamat\");
var username = new Spry.Widget.ValidationTextField(\"username\");
var password = new Spry.Widget.ValidationTextField(\"password\");

</script>";
}
if($p=='dpelanggan'){
$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan WHERE id_pelanggan='$_GET[id_pelanggan]'"));
echo"
<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>
<br><fieldset><legend>Data Calon Jamaah</legend><table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='18%'><strong>ID Pelanggan</strong></td>
    <td width='1%'><strong>:</strong></td>
    <td width='21%'>$pelanggan[id_pelanggan]</td>
    <td width='17%'>&nbsp;</td>
    <td><strong>Keterangan Haji</strong></td>
    <td width='1%'><strong>:</strong></td>
    <td width='26%'>$pelanggan[ket_haji]</td>
  </tr>
  <tr>
    <td><strong>Nama Depan</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[nama_depan]</td>
    <td>&nbsp;</td>
    <td width='16%'><strong>Ukuran Pakaian</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[ukuran_pakaian]</td>
  </tr>
  <tr>
    <td><strong>Nama Tengah</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[nama_tengah]</td>
    <td>&nbsp;</td>
    <td><strong>&nbsp;</strong></td>
    <td><strong>&nbsp;</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Nama Belakang</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[nama_belakang]</td>
    <td>&nbsp;</td>
    <td><strong>&nbsp;</strong></td>
    <td><strong>&nbsp;</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Nama Panggilan</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[nama_panggilan]</td>
    <td>&nbsp;</td>
    <td><strong>Alamat</strong></td>
    <td><strong>:</strong></td>
    <td rowspan='2'>$pelanggan[alamat]</td>
  </tr>
  <tr>
    <td><strong>Tempat Tanggal Lahir</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[tempat_lahir], $pelanggan[tanggal_lahir]</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>No. KTP</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[no_ktp]</td>
    <td>&nbsp;</td>
    <td><strong>Kota</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[kota]</td>
  </tr>
  <tr>
    <td><strong>Jenis Kelamin</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[jenis_kelamin]</td>
    <td>&nbsp;</td>
    <td><strong>Telp.Rumah</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[telp_rumah]</td>
  </tr>
  <tr>
    <td><strong>Pendidikan</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[pendidikan]</td>
    <td>&nbsp;</td>
    <td><strong>Telp.Kantor</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[telp_kantor]</td>
  </tr>
  <tr>
    <td><strong>Pekerjaan</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[pekerjaan]</td>
    <td>&nbsp;</td>
    <td><strong>Handphone</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[hp]</td>
  </tr>
  <tr>
    <td><strong>Keterangan Umrah</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[ket_umrah]</td>
    <td>&nbsp;</td>
    <td><strong>Email</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[email]</td>
  </tr>
</table></fieldset>
<fieldset><legend>Data Ahli Waris</legend>
<table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='18%'><strong>Nama Ahli Waris</strong></td>
    <td width='1%'><strong>:</strong></td>
    <td width='81%'>$pelanggan[ahli_waris]</td>
  </tr>
  <tr>
    <td><strong>Hubungan</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[hubungan]</td>
  </tr>
</table></fieldset>
<fieldset><legend>Data Bank</legend>
<table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='18%'><strong>No.Rekening</strong></td>
    <td width='1%'><strong>:</strong></td>
    <td width='81%'>$pelanggan[no_rekening]</td>
  </tr>
  <tr>
    <td><strong>Atas Nama</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[atas_nama]</td>
  </tr>
  <tr>
    <td><strong>Nama Bank</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[nama_bank]</td>
  </tr>
  <tr>
    <td><strong>Cabang</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[cabang]</td>
  </tr>
</table></fieldset>
<fieldset><legend>Data Da'i</legend>
<table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='18%'><strong>ID Registrasi Da'i</strong></td>
    <td width='1%'><strong>:</strong></td>
    <td width='81%'>$pelanggan[reg_dai]</td>
  </tr>
  <tr>
    <td><strong>Nama Da'i</strong></td>
    <td><strong>:</strong></td>
    <td>$pelanggan[nama_dai]</td>
  </tr>
</table></fieldset>
<fieldset><legend>Status Registrasi Pelanggan</legend>
<table width='100%' border='0' cellpadding='2'>
  <tr>
    
    <td>";if ($pelanggan['status_registrasi']=='UNREGISTERED'){
    echo "<b><font color=\"#FF0000\">$pelanggan[status_registrasi]</font></b>";
    }else if ($pelanggan['status_registrasi']=='REGISTERED'){
    echo "<b><font color=\"#20fc53\">$pelanggan[status_registrasi]</font></b>";
    }
    echo"</td>
  </tr>
</table></fieldset>
";
}
if($p=='validasi'){
  $data=mysql_fetch_array(mysql_query("select * from pelanggan where id_pelanggan='$_GET[id_pelanggan]'"));
  echo"<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=validasi' name='pelanggan'enctype='multipart/form-data'>
<input type=hidden name=id_pelanggan value='$data[id_pelanggan]'>
<table width='100%' border='0' cellpadding='2'>
  <tr>
    <td><fieldset><legend>Data Pelanggan</legend><table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='21%'><label for=\"nama_depan\">Nama Depan</label></td>
    <td width='1%'>:</td>
    <td width='20%'><span id=\"nama_depan\">
<label for=\"nama_depan\"></label>
<input type=\"text\" name=\"nama_depan\" id=\"nama_depan\" value='$data[nama_depan]'disabled/>
<span class=\"textfieldRequiredMsg\">Nama Depan Harus Diisi!</span></span></td>
    <td width='11%'>&nbsp;</td>
    <td width='16%'>Ukuran Pakaian</td>
    <td width='1%'>:</td>
    <td width='30%'><select name='ukuran_pakaian' disabled>
              <option value='$data[ukuran_pakaian]'>$data[ukuran_pakaian]</option>
              <option value=''></option>
              <option value='S'>S</option>
              <option value='M'>M</option>
              <option value='L'>L</option>
              <option value='XL'>XL</option>
              <option value='XL'>XXL</option>
    </select></td>
  </tr>
  <tr>
    <td>Nama Tengah</td>
    <td>:</td>
    <td><input type='text' name='nama_tengah'value='$data[nama_tengah]' disabled></td>
    <td>&nbsp;</td>
    <td width='16%'>ID Registrasi</td>
    <td>:</td>
    <td><input type=text name=id_pelanggan value='$data[id_pelanggan]' disabled></td>
  </tr>
  <tr>
    <td>Nama Belakang</td>
    <td>:</td>
    <td><input type='text' name='nama_belakang'value='$data[nama_belakang]' disabled></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nama Panggilan</td>
    <td>:</td>
    <td><input type='text' name='nama_panggilan'value='$data[nama_panggilan]' disabled></td>
    <td>&nbsp;</td>
    <td width='16%'>Alamat Rumah</td>
    <td>:</td>
    <td rowspan='3'><span id=\"alamat\">
<label for=\"alamat\"></label>
<textarea name=\"alamat\" id=\"alamat\" cols=\"30\" rows=\"5\" disabled>$data[alamat]</textarea>
<span class=\"textareaRequiredMsg\">Alamat Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td><label for=\"tempat_lahir\">Tempat Lahir</label>/<label for=\"tanggal_lahir\">Tanggal Lahir</label></td>
    <td>:</td>
    <td><span id=\"tempat_lahir\">
<label for=\"tempat_lahir\"></label>
<input type=\"text\" name=\"tempat_lahir\" id=\"tempat_lahir\" value='$data[tempat_lahir]' disabled/>
<span class=\"textfieldRequiredMsg\">Tempat Lahir Harus Diisi!</span></span><span id=\"tanggal_lahir\">
<label for=\"tanggal_lahir\"></label>
<input type=\"text\" name=\"tanggal_lahir\" id=\"tanggal_lahir\" placeholder='yyyy-mm-dd' value='$data[tanggal_lahir]' disabled/>
<span class=\"textfieldRequiredMsg\">Tanggal Lahir Harus Diisi!</span></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label for=\"no_ktp\">No.KTP/SIM/Passport</label></td>
    <td>:</td>
    <td><span id=\"no_ktp\">
<label for=\"no_ktp\"></label>
<input type=\"text\" name=\"no_ktp\" id=\"no_ktp\" value='$data[no_ktp]' disabled/>
<span class=\"textfieldRequiredMsg\">No. KTP/SIM/Passport Harus Diisi!</span></span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><span id=\"jenis_kelamin\">
  <label for=\"jenis_kelamin\"></label>
  <select name=\"jenis_kelamin\" id=\"jenis_kelamin\" disabled>
      <option value='$data[jenis_kelamin]'>$data[jenis_kelamin]</option>
      <option value=''>---</option>
        <option value='Laki-Laki'>Laki-Laki</option>
    <option value='Perempuan'>Perempuan</option>
  </select><span class=\"selectRequiredMsg\">Jenis Kelamin Harus Dipilih!</span></span></td>
    <td>&nbsp;</td>
    <td><label for=\"kota\">Kota</label></td>
    <td>:</td>
    <td><span id=\"kota\">
<label for=\"kota\"></label>
<input type=\"text\" name=\"kota\" id=\"kota\" value='$data[kota]' disabled/>
<span class=\"textfieldRequiredMsg\">Kota Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td>:</td>
    <td><select name='pendidikan' disabled>
              <option value='$data[pendidikan]'>$data[pendidikan]</option>
              <option value=''></option>
              <option value='SD'>SD</option>
              <option value='SMP'>SMP</option>
              <option value='SMA'>SMA</option>
                            <option value='D1'>D1</option>
                            <option value='D2'>D2</option>
                            <option value='D3'>D3</option>
              <option value='S1'>S1</option>
              <option value='S2'>S2</option>
              <option value='lainnya'>-LAIN-LAIN-</option>
    </select></td>
    <td>&nbsp;</td>
    <td>Telp.Rumah</td>
    <td>:</td>
    <td><input type='number' name='telp_rumah'value='$data[telp_rumah]' disabled></td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><input type='text' name='pekerjaan'value='$data[pekerjaan]' disabled></td>
    <td>&nbsp;</td>
    <td>Telp.Kantor</td>
    <td>:</td>
    <td><input type='number' name='telp_kantor'value='$data[telp_kantor]' disabled></td>
  </tr>
  <tr>
    <td>Ket.Umrah</td>
    <td>:</td>
    <td><select name='ket_umrah' disabled>
              <option value='$data[ket_umrah]'>$data[ket_umrah]</option>
              <option value=''></option>
              <option value='Pernah'>Pernah</option>
              <option value='Belum Pernah'>Belum Pernah</option>
    </select></td>
    <td>&nbsp;</td>
    <td><label for=\"hp\">Handphone</label></td>
    <td>:</td>
    <td><span id=\"hp\">
<label for=\"hp\"></label>
<input type=\"number\" name=\"hp\" id=\"hp\" value='$data[hp]' disabled/>
<span class=\"textfieldRequiredMsg\">No. Hp Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td>Ket.Haji</td>
    <td>:</td>
    <td><select name='ket_haji' disabled>
              <option value='$data[ket_haji]'>$data[ket_haji]</option>
              <option value=''></option>
              <option value='Pernah'>Pernah</option>
              <option value='Belum Pernah'>Belum Pernah</option>
    </select></td>
    <td>&nbsp;</td>
    <td><label for=\"email\">Email</label></td>
    <td>:</td>
    <td><span id=\"email\">
<label for=\"email\"></label>
<input type=\"email\" name=\"email\" id=\"email\" value='$data[email]' disabled/>
<span class=\"textfieldRequiredMsg\">Email Harus Valid!</span></span></td>
<td></td>
    <td></td>
    <td></td>
  </tr>
</table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Ahli Waris</legend><table width='80%' border='0' cellpadding='2'>
      <tr>
        <td width='21%'><label for=\"ahli_waris\">Nama Ahli Waris</label></td>
        <td width='1%'>:</td>
        <td width='78%'><span id=\"ahli_waris\">
<label for=\"ahli_waris\"></label>
<input type=\"text\" name=\"ahli_waris\" id=\"ahli_waris\" value='$data[ahli_waris]' disabled/>
<span class=\"textfieldRequiredMsg\">Nama Ahli Waris Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"hubungan\">Hubungan Pendaftar</label></td>
        <td>:</td>
        <td><span id=\"hubungan\">
<label for=\"hubungan\"></label>
<input type=\"text\" name=\"hubungan\" id=\"hubungan\" value='$data[hubungan]' disabled/>
<span class=\"textfieldRequiredMsg\">Hubungan dengan Ahli Waris Harus Diisi!</span></span></td>
      </tr>
  </table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Bank</legend><table width='80%' border='0' cellpadding='2'>
      <tr>
        <td width='21%'>No.Rekening</td>
        <td width='1%'>:</td>
        <td width='78%'><input type='number' name='no_rekening'value='$data[no_rekening]' disabled></td>
      </tr>
      <tr>
        <td>Atas Nama</td>
        <td>:</td>
        <td><input type='text' name='atas_nama'value='$data[atas_nama]' disabled></td>
      </tr>
      <tr>
        <td>Nama Bank</td>
        <td>:</td>
        <td><input type='text' name='nama_bank'value='$data[nama_bank]' disabled></td>
      </tr>
      <tr>
        <td>Cabang</td>
        <td>:</td>
        <td><input type='text' name='cabang'value='$data[cabang]' disabled></td>
      </tr>
    </table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Dai Umrah-Haji</legend><table width='80%' border='0' cellpadding='2'>
  <tr>
    <td>ID Registrasi</td>
    <td>:</td>
    <td><input type='text' name='reg_dai'value='$data[reg_dai]' disabled></td>
  </tr>
   <tr>
    <td width='21%'>Nama Da'i</td>
    <td width='1%'>:</td>
    <td width='78%'><input type='text' name='nama_dai'value='$data[nama_dai]' disabled></td>
  </tr>
</table></fieldset></td>
  </tr>
  <tr>
    <td><fieldset><legend>Data Login Pelanggan</legend><table width='80%' border='0' cellpadding='2'>
      <tr>
        <td width='21%'><label for=\"username\">Username</label></td>
        <td width='1%'>:</td>
        <td width='78%'><span id=\"username\">
<label for=\"username\"></label>
<input type=\"text\" name=\"username\" id=\"username\" value='$data[username]' disabled/>
<span class=\"textfieldRequiredMsg\">Username Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"password\">Password</label></td>
        <td>:</td>
        <td><span id=\"password\">
<label for=\"password\"></label>
<input type=\"text\" name=\"password\" id=\"password\" value='$data[password]' disabled/>
<span class=\"textfieldRequiredMsg\">Password Harus Diisi!</span></span></td>
      </tr>
  </table></fieldset></td>
  </tr>
</table><p align='center'><input type='submit' value='Validasi' /></p></form>
<script type=\"text/javascript\">
var nama_depan = new Spry.Widget.ValidationTextField(\"nama_depan\");
var ahli_waris = new Spry.Widget.ValidationTextField(\"ahli_waris\");
var hubungan = new Spry.Widget.ValidationTextField(\"hubungan\");
var hp = new Spry.Widget.ValidationTextField(\"hp\");
var kota = new Spry.Widget.ValidationTextField(\"kota\");
var no_ktp = new Spry.Widget.ValidationTextField(\"no_ktp\");
var tempat_lahir = new Spry.Widget.ValidationTextField(\"tempat_lahir\");
var email = new Spry.Widget.ValidationTextField(\"email\");
var tanggal_lahir = new Spry.Widget.ValidationTextField(\"tanggal_lahir\");
var jenis_kelamin = new Spry.Widget.ValidationSelect(\"jenis_kelamin\");
var produk = new Spry.Widget.ValidationSelect(\"produk\");
var alamat = new Spry.Widget.ValidationTextarea(\"alamat\");
var username = new Spry.Widget.ValidationTextField(\"username\");
var password = new Spry.Widget.ValidationTextField(\"password\");

</script>";
}
//==================(pembayaran)====================
if($p=='pembayaran'){
echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Pembayaran \" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_pembayaran.php\" toolbar=\"#pembayaran\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_pelanggan',align:'center'\" sortable=\"true\">ID Pelanggan</th>
            <th data-options=\"field:'nama_pelanggan',align:'left'\">Nama Lengkap</th>
            <th data-options=\"field:'jenis_kelamin',align:'center'\">Jenis Kelamin</th>
            <th data-options=\"field:'detail_pelanggan',align:'center'\">Detail Pelanggan</th>
            <th data-options=\"field:'detail_pembayaran',align:'center'\">Detail Pembayaran</th>
        </tr>
    </thead>
  </table>
    <div id=\"pembayaran\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='dpembayaran'){
$pendaftaran=mysql_fetch_array(mysql_query("select * from pendaftaran_pelanggan WHERE id_pelanggan='$_GET[id_pelanggan]'"));
$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan where id_pelanggan='$pendaftaran[id_pelanggan]'"));

echo "

<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Pembayaran $pelanggan[nama_depan]&nbsp;$pelanggan[nama_tengah]&nbsp;$pelanggan[nama_belakang]\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\"toolbar=\"#dpembayaran\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
      
            <th data-options=\"field:'id_pendaftaran',align:'center'\" sortable=\"true\">ID Pendaftaran</th>
            <th data-options=\"field:'produk',align:'center'\" sortable=\"true\">Produk</th>
            <th data-options=\"field:'total_pembayaran',align:'center'\" sortable=\"true\">Total Pembayaran</th>
            <th data-options=\"field:'keterangan',align:'center'\" sortable=\"true\">Keterangan</th>
            <th data-options=\"field:'detail_pembayaran',align:'center'\" sortable=\"true\">Detail</th>
      </tr>
    </thead>
  <tbody>";
            
                    $sql = mysql_query("SELECT * FROM pendaftaran_pelanggan where id_pelanggan = '$pendaftaran[id_pelanggan]'");
                $jmldata = mysql_num_rows($sql);
              $jml_des="0";
              $pem_des=",";
              $pem_rb=".";
                    while ($r = mysql_fetch_array($sql)) {
                      $produk=mysql_fetch_array(mysql_query("select * from produk WHERE id_produk='$r[id_produk]'"));
                      $total_bayar=mysql_query("SELECT SUM(jumlah) as totbayar FROM pembayaran where id_pendaftaran = '$r[id_pendaftaran]'");
                      $jml_bayar=mysql_fetch_array($total_bayar);

                      $sisa_bayar=$produk['biaya']-$jml_bayar['totbayar'];

                      echo "<tr>
                            
                            <td>$r[id_pendaftaran]</td>
                            <td><b>Jenis Produk </b>$produk[jenis_produk] <b>Jenis Paket </b>$produk[jenis_paket] <b>Tanggal Keberangatan :</b>$produk[tanggal_keberangkatan] ";echo"<b>Biaya : </b>".number_format($produk['biaya'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>";echo"".number_format($jml_bayar['totbayar'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>";

  if ($jml_bayar['totbayar'] < $produk['biaya']){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Lunas&nbsp;&nbsp; </b></font>";
  }
  else if ($jml_bayar['totbayar'] == $produk['biaya']){
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Lunas&nbsp;&nbsp; </b></font>";
  }
  else {
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Pembayaran Melebihi Biaya Yang Harus Dibayar&nbsp;&nbsp; </b></font>";
    }
  echo"</td><td><a href='?p=spembayaran&id_pendaftaran=$r[id_pendaftaran]'><img src='../images/search.png'></a></td>
                            </tr>";
                      
                    }                    
                   echo"</tbody>
  </table>
    <div id=\"dpembayaran\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
    <a href='javascript:history.go(-1)' title='Kembali'class=\"easyui-tooltip\"data-options=\"position:'right'\"><img src='../images/back.png'></a>
    </div>
  </div><br>
";
  
}
if($p=='spembayaran'){
$data=mysql_fetch_array(mysql_query("select * from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan WHERE id_pelanggan='$data[id_pelanggan]'"));
$produk=mysql_fetch_array(mysql_query("select * from produk WHERE id_produk='$data[id_produk]'"));
$total_bayar=mysql_query("SELECT SUM(jumlah) as totbayar FROM pembayaran where id_pendaftaran = '$data[id_pendaftaran]'");
$jml_bayar=mysql_fetch_array($total_bayar);

$sisa_bayar=$produk['biaya']-$jml_bayar['totbayar'];

echo "

<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Detail Pembayaran $pelanggan[nama_depan]&nbsp;$pelanggan[nama_tengah]&nbsp;$pelanggan[nama_belakang]\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\"toolbar=\"#dpembayaran\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
      
            <th data-options=\"field:'id_pembayaran',align:'center'\" sortable=\"true\">ID Pembayaran</th>
            <th data-options=\"field:'id_pendaftaran',align:'center'\" sortable=\"true\">ID Pendaftaran</th>
            <th data-options=\"field:'id_staf',align:'center'\" sortable=\"true\">ID Staf</th>
            <th data-options=\"field:'penyetor',align:'center'\" sortable=\"true\">ID Produk</th>
            <th data-options=\"field:'jumlah',align:'center'\">ID Staf</th>
            <th data-options=\"field:'cara_bayar',align:'center'\">Cara Bayar</th>
            <th data-options=\"field:'kurs',align:'center'\">Kurs</th>
            <th data-options=\"field:'keterangan',align:'center'\">Keterangan</th>
            <th data-options=\"field:'tanggal_bayar',align:'center'\">Tanggal Bayar</th>
            <th data-options=\"field:'edit',align:'center'\">Edit</th>
            <th data-options=\"field:'cetak',align:'center'\">Cetak</th>
            <th data-options=\"field:'hapus',align:'center'\">Hapus</th>
      </tr>
    </thead>
  <tbody>";
            
                    $sql = mysql_query("SELECT * FROM pembayaran where id_pendaftaran = '$_GET[id_pendaftaran]'");
                $jmldata = mysql_num_rows($sql);
              $jml_des="0";
              $pem_des=",";
              $pem_rb=".";
                    while ($r = mysql_fetch_array($sql)) {
                      echo "<tr>
                            
                            <td>$r[id_pembayaran]</td>
              <td>$r[id_pendaftaran]</td>
              <td>$r[id_staf]</td>
              <td>$r[penyetor]</td>
              <td>";echo"".number_format($r['jumlah'],$jml_des,$pem_des,$pem_rb);echo"</td>
              <td>$r[cara_bayar]</td>
              <td>$r[kurs]</td>
              <td>$r[keterangan]</td>
              <td>$r[tanggal_bayar]</td>
              <td><a href='?p=espembayaran&id_pembayaran=$r[id_pembayaran]'><img src='../images/pencil.png'></a></td>
              <td><a href='controller.php?act=cetak_spembayaran&id_pembayaran=$r[id_pembayaran]&id_pendaftaran=$data[id_pendaftaran]' target='_blank'><img src='../images/print.png'></a></td>
              <td><a href=\"controller.php?delete=hspembayaran&id_pembayaran=$r[id_pembayaran]\" onclick=\" return confirm('Yakin Mau Menghapus $r[id_pembayaran] ?');\"><img src='../images/cancel.png'></a></td>
                            </tr>";
                      
                    }                    
                   echo"</tbody>
  </table>
    <div id=\"dpembayaran\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
    <a href='?p=tspembayaran&id_pendaftaran=$data[id_pendaftaran]'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      
    </div>
  </div>  <br>
  <a href='javascript:history.go(-1)' title='Kembali'class=\"easyui-tooltip\"data-options=\"position:'right'\"><img src='../images/back.png'></a><br>
";

  
  echo"<table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='43%'><strong>Sudah Membayar : </strong>$jmldata Kali</td>
    <td width='12%'>&nbsp;</td>
    <td width='45%'><strong>Biaya Paket : </strong>";echo"".number_format($produk['biaya'],$jml_des,$pem_des,$pem_rb);echo"</td>
  </tr>
  <tr>
    <td><strong>Total Pembayaran : </strong>";echo"".number_format($jml_bayar['totbayar'],$jml_des,$pem_des,$pem_rb);echo"</td>
    <td>&nbsp;</td>
    <td><strong>Bulan Keberangkaan : </strong>$produk[bulan_keberangkatan]</td>
  </tr>
  <tr>
    <td><strong>Sisa Pembayaran : </strong>";if ($produk['jenis_produk']=='Belum Menentukan Keberangkatan'){echo"0";}else{echo"".number_format($sisa_bayar,$jml_des,$pem_des,$pem_rb);}echo"</td>
    <td>&nbsp;</td>
    <td><strong>Batas Pelunasan : </strong>$produk[pelunasan]</td>
  </tr>
  <tr>
    <td><strong>Keterangan : </strong>";

  if ($jml_bayar['totbayar'] < $produk['biaya']){
    echo"<font color='#FF0000'> Belum Lunas </font>";
  }
  else if ($jml_bayar['totbayar'] == $produk['biaya']){
    echo"<font color='#046a10'> Lunas </font>";
  }
  else {
    echo"<font color='#0000FF'> Pembayaran Melebihi Biaya Yang Harus Dibayar </font>";
    }
  echo"</td>
  </tr>
  <tr>
    <td><strong>Cetak Semua : </strong><a href='controller.php?act=cetak_allspembayaran&id_pendaftaran=$data[id_pendaftaran]' target='_blank'><img src='../images/print.png'></a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Jenis Produk : </strong> $produk[jenis_produk]</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
";
}
if($p=='tspembayaran'){
	$pendaftaran=mysql_fetch_array(mysql_query("select * from pendaftaran_pelanggan WHERE id_pendaftaran='$_GET[id_pendaftaran]'"));
  $pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan WHERE id_pelanggan='$data[id_pelanggan]'"));
  $produk=mysql_fetch_array(mysql_query("select * from produk WHERE id_produk='$pendaftaran[id_produk]'"));
echo"
<a href='javascript:history.go(-1)' title='Kembali'class=\"easyui-tooltip\"data-options=\"position:'right'\"><img src='../images/back.png'></a><br>
<form method=POST action='controller.php?act=ipembayaran' name='pembayaran'enctype='multipart/form-data'>
<input type='hidden' name='id_pendaftaran' value='$pendaftaran[id_pendaftaran]'>
<input type='hidden' name='id_produk' value='$produk[id_produk]'>
<input type=\"hidden\" name=id_staf value=$_SESSION[id_staf]>
<fieldset><legend>Form Pembayaran $pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]</legend>
<table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='13%'>ID Pendaftaran</td>
    <td><input type='text' name='id_pendaftaran' value='$pendaftaran[id_pendaftaran]' disabled></td>
  </tr>
  <tr>
    <td>ID Produk</td>
    <td><input type='text' name='id_produk' value='$produk[id_produk]' disabled></td>
  </tr>
  <tr>
        <td><label for=\"penyetor\">Penyetor</label></td>
        
        <td>
    <span id=\"penyetor\">
<label for=\"penyetor\"></label>
<input type=\"text\" name=\"penyetor\" id=\"penyetor\" />
<span class=\"textfieldRequiredMsg\">Nama Penyetor Harus Diisi!</span></span></td>
      </tr>
  <tr>
        <td><label for=\"jumlah\">Jumlah</label></td>
        
        <td>
    <span id=\"jumlah\">
<label for=\"jumlah\"></label>
<input type=\"number\" name=\"jumlah\" id=\"jumlah\" />
<span class=\"textfieldRequiredMsg\">Jumlah Yang Disetorkan Harus Diisi dengan Angka!</span></span></td>
      </tr>
  <tr>
    <td>Cara Bayar</td>
    <td>
  <span id=\"cara_bayar\">
  <label for=\"cara_bayar\"></label>
  <select name=\"cara_bayar\" id=\"cara_bayar\">
      <option value=''></option>
      <option value='Tunai'>Tunai</option>
      <option value='Memakai Voucher'>Memakai Voucher</option>
          <option value='Transfer Via BCA'>Transfer Via BCA</option>
      <option value='Transfer Via Mandiri'>Transfer Via Mandiri</option>
      <option value='Transfer Via Mandiri Syariah'>Transfer Via Mandiri Syariah</option>
      <option value='Transfer Via BRI'>Transfer Via BRI</option>
      <option value='Transfer Via BNI'>Transfer Via BNI</option>
      <option value='Transfer Via Permata Syariah'>Transfer Via Permata Syariah</option>
  </select>
  <span class=\"selectRequiredMsg\">Cara Bayar Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td>Kurs</td>
    <td><span id=\"kurs\">
  <label for=\"kurs\"></label>
  <select name=\"kurs\" id=\"kurs\">
      <option value=''>---</option>
      <option value='IDR'>IDR</option>
      <option value='USD'>USD</option>
  </select>
  <span class=\"selectRequiredMsg\">Mata Uang Harus Dipilih!</span></span>
    </td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td><textarea name='keterangan' cols=45></textarea>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type='submit' value='Simpan'>&nbsp;<input type='reset' value='Batal'></td>
  </tr>
</table></fieldset></form>
<script type=\"text/javascript\">
var cara_bayar = new Spry.Widget.ValidationSelect(\"cara_bayar\");
var kurs = new Spry.Widget.ValidationSelect(\"kurs\");
var penyetor = new Spry.Widget.ValidationTextField(\"penyetor\");
var jumlah = new Spry.Widget.ValidationTextField(\"jumlah\");
</script>
";
}
if($p=='espembayaran'){
$data=mysql_fetch_array(mysql_query("select * from pembayaran where id_pembayaran='$_GET[id_pembayaran]'"));

  echo"
<a href='javascript:history.go(-1)'  class=\"easyui-linkbutton\"><img src='../images/back.png'></a><br>
<form method=POST action='controller.php?act=epembayaran' name='pembayaran'enctype='multipart/form-data'>
<input type='hidden' name='id_pembayaran' value='$data[id_pembayaran]'>
<input type=\"hidden\" name=id_staf value=$_SESSION[id_staf]>
<fieldset><legend>Form Pembayaran</legend>
<table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='13%'>ID Pembayaran</td>
    <td><input type='text' name='id_pembayaran' value='$data[id_pembayaran]' disabled></td>
  </tr>
  <tr>
        <td><label for=\"penyetor\">Penyetor</label></td>
        
        <td>
    <span id=\"penyetor\">
<label for=\"penyetor\"></label>
<input type=\"text\" name=\"penyetor\" id=\"penyetor\" value='$data[penyetor]'/>
<span class=\"textfieldRequiredMsg\">Nama Penyetor Harus Diisi!</span></span></td>
      </tr>
  <tr>
        <td><label for=\"jumlah\">Jumlah</label></td>
        
        <td>
    <span id=\"jumlah\">
<label for=\"jumlah\"></label>
<input type=\"number\" name=\"jumlah\" id=\"jumlah\" value='$data[jumlah]'/>
<span class=\"textfieldRequiredMsg\">Jumlah Yang Disetorkan Harus Diisi dengan Angka!</span></span></td>
      </tr>
  <tr>
    <td>Cara Bayar</td>
    <td>
  <span id=\"cara_bayar\">
  <label for=\"cara_bayar\"></label>
  <select name=\"cara_bayar\" id=\"cara_bayar\">
      <option value='$data[cara_bayar]'>$data[cara_bayar]</option>
    <option value=''>----</option>
      <option value='Tunai'>Tunai</option>
      <option value='Memakai Voucher'>Memakai Voucher</option>
          <option value='Transfer Via BCA'>Transfer Via BCA</option>
      <option value='Transfer Via Mandiri'>Transfer Via Mandiri</option>
      <option value='Transfer Via Mandiri Syariah'>Transfer Via Mandiri Syariah</option>
      <option value='Transfer Via BRI'>Transfer Via BRI</option>
      <option value='Transfer Via BNI'>Transfer Via BNI</option>
      <option value='Transfer Via Permata Syariah'>Transfer Via Permata Syariah</option>
  </select>
  <span class=\"selectRequiredMsg\">Cara Bayar Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td>Kurs</td>
    <td><span id=\"kurs\">
  <label for=\"kurs\"></label>
  <select name=\"kurs\" id=\"kurs\">
      <option value='$data[kurs]'>$data[kurs]</option>
      <option value=''>---</option>
      <option value='IDR'>IDR</option>
      <option value='USD'>USD</option>
  </select>
  <span class=\"selectRequiredMsg\">Mata Uang Harus Dipilih!</span></span>
    </td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td><textarea name='keterangan' cols=45>$data[keterangan]</textarea>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type='submit' value='Simpan'>&nbsp;<input type='reset' value='Batal'></td>
  </tr>
</table></fieldset></form>
<script type=\"text/javascript\">
var cara_bayar = new Spry.Widget.ValidationSelect(\"cara_bayar\");
var kurs = new Spry.Widget.ValidationSelect(\"kurs\");
var penyetor = new Spry.Widget.ValidationTextField(\"penyetor\");
var jumlah = new Spry.Widget.ValidationTextField(\"jumlah\");
</script>
";
}

//==================(dokumen)====================
if($p=='dokumen'){
echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Dokumen \" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_dokumen.php\" toolbar=\"#dokumen\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_pelanggan',align:'center'\" sortable=\"true\">ID Pelanggan</th>
            <th data-options=\"field:'nama_pelanggan',align:'left'\">Nama Lengkap</th>
            <th data-options=\"field:'jenis_kelamin',align:'center'\">Jenis Kelamin</th>
            <th data-options=\"field:'detail_pelanggan',align:'center'\">Detail Pelanggan</th>
            <th data-options=\"field:'detail_dokumen',align:'center'\">Detail Dokumen</th>
            
        </tr>
    </thead>
  </table>
    <div id=\"dokumen\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='ddokumen'){
$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$_GET[id_pelanggan]'"));
$dokumen=mysql_fetch_array(mysql_query("select * from dokumen_pelanggan WHERE id_pelanggan='$pelanggan[id_pelanggan]'"));
$passport=mysql_fetch_array(mysql_query("select * from passport WHERE id_pelanggan='$pelanggan[id_pelanggan]'"));

echo "
<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>
<br><br>

<b><h2 align=center>Data Kelengkapan Dokumen $pelanggan[nama_depan]&nbsp;$pelanggan[nama_tengah]&nbsp;$pelanggan[nama_belakang]</h2></b><hr>
<table width='50%' border='0' cellpadding='2' align=center>
  <tr>
    <td><strong>Passport</strong></td>
    <td>";if ($dokumen['passport']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($dokumen['passport']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$dokumen[passport]&nbsp;&nbsp; </b></font>";
  }
  echo"
    </td>
  </tr>
  <tr>
    <td><strong>No. Passport</strong></td>
    <td>$passport[no_passport]</td>
  </tr>
  <tr>
    <td><strong>Date Issued</strong></td>
    <td>$passport[date_issued]</td>
  </tr>
  <tr>
    <td><strong>Date Expired</strong></td>
    <td>$passport[date_expired]</td>
  </tr>
  <tr>
    <td><strong>Issuing Office</strong></td>
    <td>$passport[issuing_office]</td>
  </tr>
  <tr>
    <td><strong>Foto</strong></td>
    <td>";if ($dokumen['foto']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($dokumen['foto']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$dokumen[foto]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
  </tr>
<tr>
    <td><strong>Buku Vaksin</strong></td>
    <td>";if ($dokumen['buku_vaksin']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($dokumen['buku_vaksin']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$dokumen[buku_vaksin]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
  </tr>
  
  <tr>
    <td><strong>Buku Nikah</strong></td>
    <td>";if ($dokumen['buku_nikah']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($dokumen['buku_nikah']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$dokumen[buku_nikah]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
  </tr>
  <tr>
    <td><strong>Akta Lahir</strong></td>
    <td>";if ($dokumen['akta_lahir']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($dokumen['akta_lahir']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$dokumen[akta_lahir]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
  </tr>
  <tr>
    <td><strong>KTP</strong></td>
    <td>";if ($dokumen['fc_ktp']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($dokumen['fc_ktp']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$dokumen[fc_ktp]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
  </tr>
  <tr>
    <td><strong>Kartu Keluarga</strong></td>
    <td>";if ($dokumen['kk']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($dokumen['kk']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$dokumen[kk]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
  </tr>
  <tr>
    <td><strong>SPPH</strong></td>
    <td>";if ($dokumen['spph']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($dokumen['spph']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$dokumen[spph]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
  </tr>
    <tr>
    <td><strong>BPIH</strong></td>
    <td>";if ($dokumen['bpih']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($dokumen['bpih']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$dokumen[bpih]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
  </tr>
  <tr>
    <td><strong>Keterangan</strong></td>
    <td>$dokumen[keterangan]</td>
  </tr>
  <tr>
    <td><strong>Yang Menyerahkan</strong></td>
    <td>$dokumen[yang_menyerahkan]</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href='?p=eddokumen&id_dokumen=$dokumen[id_dokumen]'class=\"easyui-linkbutton\"><img src='../images/pencil.png'></a>
      <a href=\"controller.php?act=cetakdokumen_pelanggan&id_dokumen=$dokumen[id_dokumen]\" target='_target' class=\"easyui-linkbutton\"><img src='../images/print.png'></a></td>
  </tr>
</table>
";

}
if($p=='eddokumen'){
$dokumen=mysql_fetch_array(mysql_query("select * from dokumen_pelanggan WHERE id_dokumen='$_GET[id_dokumen]'"));
$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$dokumen[id_pelanggan]'"));
$passport=mysql_fetch_array(mysql_query("select*from passport where id_pelanggan='$dokumen[id_pelanggan]'"));
echo "
<a href='javascript:history.go(-1)'class=\"easyui-linkbutton\"><img src='../images/back.png'></a>
    
    <form method=POST action='controller.php?act=edokumen'>
<input type='hidden' name='id_dokumen' value='$dokumen[id_dokumen]'>
<input type='hidden' name='id_pelanggan' value='$dokumen[id_pelanggan]'>
<input type='hidden' name='id_passport' value='$passport[id_passport]'>

<fieldset><legend>Form Penyerahan Dokumen <b>$pelanggan[nama_depan]&nbsp;$pelanggan[nama_tengah]&nbsp;$pelanggan[nama_belakang]</b></legend><table width='100%' border='0' cellpadding='2'>
  <tr>
    <td><strong>Passport</strong></td>
    <td><select name='passport'>
        <option value='$dokumen[passport]'>$dokumen[passport]</option>
      <option value=''>---</option>
            <option value='Asli'>Asli</option>
            <option value='FC'>FC</option>
            <option value='Asli dan FC'>Asli dan FC</option>
            <option value='Sudah Dikembalikan'>Sudah Dikembalikan</option>
            </select></td>
  </tr>
  <tr>
    <td><strong>No. Passport</strong></td>
    <td><input type='text' name='no_passport' value='$passport[no_passport]'></td>
  </tr>
  <tr>
    <td><strong>Date Issued</strong></td>
    <td><input type='text' name='date_issued' value='$passport[date_issued]'></td>
  </tr>
  <tr>
    <td><strong>Date Expired</strong></td>
    <td><input type='text' name='date_expired' value='$passport[date_expired]'></td>
  </tr>
  <tr>
    <td><strong>Issuing Office</strong></td>
    <td><input type='text' name='issuing_office' value='$passport[issuing_office]'></td>
  </tr>
  <tr>
    <td><strong>Foto</strong></td>
    <td><select name='foto'>
        <option value='$dokumen[foto]'>$dokumen[foto]</option>
      <option value=''>---</option>
            <option value='3x4'>3x4</option>
            <option value='4x6'>4x6</option>
            <option value='3x4 dan 4x6'>3x4 dan 4x6</option>
            <option value='Sudah Dikembalikan'>Sudah Dikembalikan</option>
            </select></td>
  </tr>
<tr>
    <td><strong>Buku Vaksin</strong></td>
    <td><select name='buku_vaksin'>
        <option value='$dokumen[buku_vaksin]'>$dokumen[buku_vaksin]</option>
      <option value=''>---</option>
            <option value='Asli'>Asli</option>
            <option value='FC'>FC</option>
            <option value='Asli dan FC'>Asli dan FC</option>
            <option value='Sudah Dikembalikan'>Sudah Dikembalikan</option>
            </select></td>
  </tr>
  
  <tr>
    <td><strong>Buku Nikah</strong></td>
    <td><select name='buku_nikah'>
        <option value='$dokumen[buku_nikah]'>$dokumen[buku_nikah]</option>
      <option value=''>---</option>
            <option value='Asli'>Asli</option>
            <option value='FC'>FC</option>
            <option value='Asli dan FC'>Asli dan FC</option>
            <option value='Sudah Dikembalikan'>Sudah Dikembalikan</option>
            </select></td>
  </tr>
  <tr>
    <td><strong>Akta Lahir</strong></td>
    <td><select name='akta_lahir'>
        <option value='$dokumen[akta_lahir]'>$dokumen[akta_lahir]</option>
      <option value=''>---</option>
            <option value='Asli'>Asli</option>
            <option value='FC'>FC</option>
            <option value='Asli dan FC'>Asli dan FC</option>
            <option value='Sudah Dikembalikan'>Sudah Dikembalikan</option>
            </select></td>
  </tr>
  <tr>
    <td><strong>KTP</strong></td>
    <td><select name='fc_ktp'>
        <option value='$dokumen[fc_ktp]'>$dokumen[fc_ktp]</option>
      <option value=''>---</option>
            <option value='Asli'>Asli</option>
            <option value='FC'>FC</option>
            <option value='Asli dan FC'>Asli dan FC</option>
            <option value='Sudah Dikembalikan'>Sudah Dikembalikan</option>
            </select></td>
  </tr>
  <tr>
    <td><strong>Kartu Keluarga</strong></td>
    <td><select name='kk'>
        <option value='$dokumen[kk]'>$dokumen[kk]</option>
      <option value=''>---</option>
            <option value='Asli'>Asli</option>
            <option value='FC'>FC</option>
            <option value='Asli dan FC'>Asli dan FC</option>
            <option value='Sudah Dikembalikan'>Sudah Dikembalikan</option>
            </select></td>
  </tr>
  <tr>
    <td><strong>SPPH</strong></td>
    <td><select name='spph'>
        <option value='$dokumen[spph]'>$dokumen[spph]</option>
      <option value=''>---</option>
            <option value='Asli'>Asli</option>
            <option value='FC'>FC</option>
            <option value='Asli dan FC'>Asli dan FC</option>
            <option value='Sudah Dikembalikan'>Sudah Dikembalikan</option>
            </select></td>
  </tr>
    <tr>
    <td><strong>BPIH</strong></td>
    <td><select name='bpih'>
        <option value='$dokumen[bpih]'>$dokumen[bpih]</option>
      <option value=''>---</option>
            <option value='Asli'>Asli</option>
            <option value='FC'>FC</option>
            <option value='Asli dan FC'>Asli dan FC</option>
            <option value='Sudah Dikembalikan'>Sudah Dikembalikan</option>
            </select></td>
  </tr>
  <tr>
    <td><strong>Keterangan</strong></td>
    <td><textarea name='keterangan'>$dokumen[keterangan]</textarea></td>
  </tr>
  <tr>
    <td><strong>Yang Menyerahkan</strong></td>
    <td><input type='text' name='yang_menyerahkan' value='$dokumen[yang_menyerahkan]' required></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type='submit' value='Update'>&nbsp;<input type='reset' value='Batal'></td>
  </tr>
</table>
</fieldset></form>
";

}

//==================(pemberitahuan)====================
if($p=='pemberitahuan'){
  echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Pemberitahuan\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_pemberitahuan.php\" toolbar=\"#pemberitahuan\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_pemberitahuan',align:'center'\" sortable=\"true\">ID Pemberitahuan</th>
      <th data-options=\"field:'id_staf',align:'center'\" sortable=\"true\">ID Staf</th>
            <th data-options=\"field:'judul_pemberitahuan',align:'center'\">Judul Pemberitahuan</th>
      <th data-options=\"field:'pemberitahuan',width:300,align:'center'\">Pemberitahuan</th>
      <th data-options=\"field:'waktu_kirim',align:'center'\">Waktu Kirim</th>
      <th data-options=\"field:'edit',align:'center'\">Edit</th>
      <th data-options=\"field:'hapus',align:'center'\">Hapus</th>
        </tr>
    </thead>
  </table>
    <div id=\"pemberitahuan\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href='?p=tpemberitahuan'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";

}
if($p=='tpemberitahuan'){
  echo "
  <script>$(document).ready(function() {
        $(\"#form_foto\").validate();
      });
</script><script type=\"text/javascript\" src=\"../js/js_easy/tiny_mce.js\"></script>
<script type=\"text/javascript\">
  tinyMCE.init({
    // General options
    mode : \"textareas\",
    theme : \"advanced\",
    
  });
</script>
<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=ipemberitahuan' name='artikel'enctype='multipart/form-data'><fieldset><legend><strong>Form Pemberitahuan</strong></legend><input type='hidden' name='id_staf' value=$_SESSION[id_staf]>
    <input type=hidden name=id_staf value=$_SESSION[id_staf]>
    <table width='100%' border='0'>
      <tr>
        <td><label for=\"judul_pemberitahuan\">Judul Pemberitahuan</label></td>
        <td>:</td>
        <td>
    <span id=\"judul_pemberitahuan\">
<label for=\"judul_pemberitahuan\"></label>
<input type=\"text\" size=40 name=\"judul_pemberitahuan\" id=\"judul_pemberitahuan\" />
<span class=\"textfieldRequiredMsg\">Judul Pemberitahuan Harus Diisi!</span></span></td>
      </tr>
    <tr>
        <td >Pemberitahuan</td>
        <td >:</td>
        <td ><span id=\"pemberitahuan\">
<label for=\"pemberitahuan\"></label>
<textarea name=\"pemberitahuan\" cols=\"100\" rows=\"5\"></textarea>
<span class=\"textareaRequiredMsg\">Pemberitahuan Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
  <script type=\"text/javascript\">
var pemberitahuan = new Spry.Widget.ValidationTextarea(\"pemberitahuan\");
var judul_pemberitahuan = new Spry.Widget.ValidationTextField(\"judul_pemberitahuan\");
</script>";
}
if($p=='epemberitahuan'){
$data=mysql_fetch_array(mysql_query("select * from pemberitahuan WHERE id_pemberitahuan='$_GET[id_pemberitahuan]'"));
  echo"<script>$(document).ready(function() {
        $(\"#form_foto\").validate();
      });
</script><script type=\"text/javascript\" src=\"../js/js_easy/tiny_mce.js\"></script>
<script type=\"text/javascript\">
  tinyMCE.init({
    // General options
    mode : \"textareas\",
    theme : \"advanced\",
    
  });
</script>
<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=epemberitahuan' name='artikel'enctype='multipart/form-data'><fieldset><legend><strong>Form Pemberitahuan</strong></legend><input type='hidden' name='id_staf' value=$_SESSION[id_staf]>
    <input type=hidden name=id_staf value=$_SESSION[id_staf]>
    <input type=hidden name=id_pemberitahuan value=$data[id_pemberitahuan]>
    <table width='100%' border='0'>
      <tr>
        <td><label for=\"judul_pemberitahuan\">Judul Pemberitahuan</label></td>
        <td>:</td>
        <td>
    <span id=\"judul_pemberitahuan\">
<label for=\"judul_pemberitahuan\"></label>
<input type=\"text\" size=40 name=\"judul_pemberitahuan\" id=\"judul_pemberitahuan\" value='$data[judul_pemberitahuan]'/>
<span class=\"textfieldRequiredMsg\">Judul Pemberitahuan Harus Diisi!</span></span></td>
      </tr>
    <tr>
        <td >Pemberitahuan</td>
        <td >:</td>
        <td ><span id=\"pemberitahuan\">
<label for=\"pemberitahuan\"></label>
<textarea name=\"pemberitahuan\" cols=\"100\" rows=\"5\">$data[pemberitahuan]</textarea>
<span class=\"textareaRequiredMsg\">Pemberitahuan Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
  <script type=\"text/javascript\">
var pemberitahuan = new Spry.Widget.ValidationTextarea(\"pemberitahuan\");
var judul_pemberitahuan = new Spry.Widget.ValidationTextField(\"judul_pemberitahuan\");
</script>";
}
//==================(mou)====================
if($p=='mou'){
echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data MOU \" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_mou.php\" toolbar=\"#mou\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_pelanggan',align:'center'\" sortable=\"true\">ID Pelanggan</th>
            <th data-options=\"field:'nama_pelanggan',align:'left'\">Nama Lengkap</th>
            <th data-options=\"field:'jenis_kelamin',align:'center'\">Jenis Kelamin</th>
            <th data-options=\"field:'detail_pelanggan',align:'center'\">Detail Pelanggan</th>
            <th data-options=\"field:'detail_mou',align:'center'\">Detail MOU</th>
        </tr>
    </thead>
  </table>
    <div id=\"mou\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='dmou'){
$pendaftaran=mysql_fetch_array(mysql_query("select * from pendaftaran_pelanggan WHERE id_pelanggan='$_GET[id_pelanggan]'"));
$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan where id_pelanggan='$pendaftaran[id_pelanggan]'"));

echo "

<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data MOU $pelanggan[nama_depan]&nbsp;$pelanggan[nama_tengah]&nbsp;$pelanggan[nama_belakang]\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\"toolbar=\"#dpembayaran\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
      
            <th data-options=\"field:'id_pendaftaran',align:'center'\" sortable=\"true\">ID Pendaftaran</th>
            <th data-options=\"field:'produk',align:'center'\" sortable=\"true\">Produk</th>
            <th data-options=\"field:'no_mou',align:'center'\" sortable=\"true\">No. MOU</th>
            <th data-options=\"field:'tgl_cetak',align:'center'\" sortable=\"true\">Tanggal Cetak</th>
            <th data-options=\"field:'edit',align:'center'\" sortable=\"true\">Edit</th>
            <th data-options=\"field:'cetak',align:'center'\" sortable=\"true\">Cetak</th>
      </tr>
    </thead>
  <tbody>";
            
                    $sql = mysql_query("SELECT * FROM pendaftaran_pelanggan where id_pelanggan = '$_GET[id_pelanggan]'");
                    while ($r = mysql_fetch_array($sql)) {
                      $mou=mysql_fetch_array(mysql_query("select*from mou where id_pendaftaran='$r[id_pendaftaran]'"));
                      $produk=mysql_fetch_array(mysql_query("select * from produk WHERE id_produk='$r[id_produk]'"));
                      if($produk['jenis_produk']=='Umrah Promo'){
                      echo "<tr>
                            
                            <td>$r[id_pendaftaran]</td>
                            <td><b>Jenis Produk </b>$produk[jenis_produk] <b>Jenis Paket </b>$produk[jenis_paket] <b>Tanggal Keberangatan :</b>$produk[tanggal_keberangkatan] ";echo"<b>Biaya : </b>".number_format($produk['biaya'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>$mou[no_mou]</td>
                            <td>$mou[tgl_cetak]</td>
                            <td><a href='?p=emou&id_mou=$mou[id_mou]'><img src='../images/pencil.png'></a></td>
                            <td><a href='controller.php?act=cetak_mou&id_mou=$mou[id_mou]&id_pendaftaran=$r[id_pendaftaran]&id_produk=$produk[id_produk]' target='_blank'><img src='../images/print.png'></a></td>
                            </tr>";
                          } else{
                            echo "<tr>
                            
                            <td>$r[id_pendaftaran]</td>
                            <td><b>Jenis Produk </b>$produk[jenis_produk] <b>Jenis Paket </b>$produk[jenis_paket] <b>Tanggal Keberangatan :</b>$produk[tanggal_keberangkatan] ";echo"<b>Biaya : </b>".number_format($produk['biaya'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>$mou[no_mou]</td>
                            <td>$mou[tgl_cetak]</td>
                            <td><img src='../images/pencil_disabled.png'></td>
                            <td><img src='../images/print_disabled.png'></td>
                            </tr>";
                          }

                      
                    }                    
                   echo"</tbody>
  </table>
    <div id=\"dpembayaran\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
    <a href='javascript:history.go(-1)' title='Kembali'class=\"easyui-tooltip\"data-options=\"position:'right'\"><img src='../images/back.png'></a>
    </div>
  </div><br>
";
  
}

if($p=='emou'){
$mou=mysql_fetch_array(mysql_query("select * from mou WHERE id_mou='$_GET[id_mou]'"));
$pendaftaran_pelanggan=mysql_fetch_array(mysql_query("select * from pendaftaran_pelanggan WHERE id_pendaftaran='$mou[id_pendaftaran]'"));
$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$pendaftaran_pelanggan[id_pelanggan]'"));
$produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$pendaftaran_pelanggan[id_produk]'"));
if($mou['status_cetak']=='0'){
  $status='Belum Dicetak';}
if($mou['status_cetak']=='1'){
  $status='Sudah Dicetak';}
echo "<a href='javascript:history.go(-1)'><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=emou' name='mou'enctype='multipart/form-data'>
<input type='hidden' name='id_mou' value='$mou[id_mou]'>
<input type='hidden' name='id_pelanggan' value='$pelanggan[id_pelanggan]'>
<fieldset><legend>Form MOU</legend><table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='12%'><strong>ID MOU</strong></td>
    <td width='1%'><strong>:</strong></td>
    <td width='87%'><input type='text' name='id_mou'value='$mou[id_mou]' disabled></td>
  </tr>
  <tr>
    <td><strong>ID Pelanggan</strong></td>
    <td><strong>:</strong></td>
    <td><input type='text' name='id_pelanggan'value='$pelanggan[id_pelanggan]' disabled></td>
  </tr>
  <tr>
    <td><strong>ID Produk</strong></td>
    <td><strong>:</strong></td>
    <td><input type='text' name='id_produk'value='$produk[id_produk]' disabled></td>
  </tr>
  <tr>
        <td><label for=\"no_mou\">No. MOU</label></td>
        <td>:</td>
        <td>
    <span id=\"no_mou\">
<label for=\"no_mou\"></label>
<input type=\"text\" name=\"no_mou\" id=\"no_mou\" value='$mou[no_mou]'/>
<span class=\"textfieldRequiredMsg\">No. MOU Harus Diisi!</span></span></td>
      </tr>
  <tr>
    <td><strong>Status</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"status\">
  <label for=\"status\"></label>
  <select name=\"status\" id=\"status\">
      <option value='$mou[status_cetak]'>$status</option>
        <option value=''>---</option>
    <option value='0'>Belum Dicetak</option>
    <option value='1'>Sudah Dicetak</option>
  </select>
  <span class=\"selectRequiredMsg\">Status MOU Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type='submit' value='Update'>&nbsp;<input type='reset' value='Batal'></td>
  </tr>
</table></fieldset></form>
<script type=\"text/javascript\">
var status = new Spry.Widget.ValidationSelect(\"status\");
var no_mou = new Spry.Widget.ValidationTextField(\"no_mou\");
</script>";
}
//==================(penanya)====================
if($p=='penanya'){
  echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Penanya\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_penanya.php\" toolbar=\"#penanya\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_penanya',align:'left'\" sortable=\"true\">ID Penanya</th>
      <th data-options=\"field:'nama',align:'left'\" sortable=\"true\">Nama</th>
            <th data-options=\"field:'email',align:'left'\">Email</th>
      <th data-options=\"field:'password',align:'left'\">Password</th>
      <th data-options=\"field:'status',align:'left'\">Status</th>
     <th data-options=\"field:'w_daftar',align:'center'\">Waktu Daftar</th>
        </tr>
    </thead>
  </table>
    <div id=\"penanya\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
//==================(pertanyaan)====================
if($p=='pertanyaan'){
  echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Pertanyaan\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_pertanyaan.php\" toolbar=\"#pertanyaan\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_pertanyaan',align:'left'\" sortable=\"true\">ID Pertanyaan</th>
      <th data-options=\"field:'id_penanya',align:'left'\" sortable=\"true\">ID Penanya</th>
            <th data-options=\"field:'pertanyaan',width:300, align:'left'\">Pertanyaan</th>
      <th data-options=\"field:'waktu_kirim',align:'left'\">Waktu Kirim</th>
      <th data-options=\"field:'jawaban',width:300,align:'left'\">Jawaban</th>
      <th data-options=\"field:'jawab',align:'center'\">Jawab</th>
         </tr>
    </thead>
  </table>
    <div id=\"pertanyaan\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='epertanyaan'){
  $data=mysql_fetch_array(mysql_query("select * from pertanyaan WHERE id_pertanyaan='$_GET[id_pertanyaan]'"));
  echo"
  <a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=jpertanyaan' name='pertanyaan' id='form_perwakilan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Jawab Pertanyaan</h1></legend>
<input type=\"hidden\" name=id_pertanyaan value=$data[id_pertanyaan]>
<input type=\"hidden\" name=pertanyaan value=\"$data[pertanyaan]\">
<input type=\"hidden\" name=id_staf value=$_SESSION[id_staf]>
<table width='100%' border='0'>
  <tr>
        <td >ID Pertanyaan</td>
        <td >:</td>
        <td ><input size='25' type='text'   name='id_pertanyaan' value='$data[id_pertanyaan]' disabled></td>
      </tr>
    <tr>
        <td >Pertanyaan</td>
        <td >:</td>
        <td ><span id=\"pertanyaan\">
<label for=\"pertanyaan\"></label>
<textarea name=\"pertanyaan\" id=\"pertanyaan\" cols=\"30\" rows=\"5\" disabled>$data[pertanyaan]</textarea>
<span class=\"textareaRequiredMsg\">pertanyaan Harus Diisi!</span></span>
  </td>
      </tr>
    <tr>
        <td >Jawaban</td>
        <td >:</td>
        <td ><span id=\"jawaban\">
<label for=\"jawaban\"></label>
<textarea name=\"jawaban\" id=\"jawaban\" cols=\"30\" rows=\"5\">$data[jawaban]</textarea>
<span class=\"textareaRequiredMsg\">Jawaban Harus Diisi!</span></span>
  </td>
      </tr>
     <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var pertanyaan = new Spry.Widget.ValidationTextarea(\"pertanyaan\");
var jawaban = new Spry.Widget.ValidationTextarea(\"jawaban\");
</script>
";
}
//==================(perlengkapan)====================
if($p=='perlengkapan'){
echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Perlengkapan \" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_perlengkapan.php\" toolbar=\"#perlengkapan\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_perlengkapan',align:'center'\" sortable=\"true\">ID Perlengkapan</th>
            <th data-options=\"field:'nama_perlengkapan',align:'left'\">Nama Perlengkapan</th>
            <th data-options=\"field:'sisa',align:'center'\">Sisa</th>
            <th data-options=\"field:'waktu_update',align:'center'\">Waktu Update</th>
            <th data-options=\"field:'id_staf',align:'center'\">ID Staf</th>
            <th data-options=\"field:'edit',align:'center'\">Edit</th>
            <th data-options=\"field:'hapus',align:'center'\">Hapus</th>
        </tr>
    </thead>
  </table>
    <div id=\"perlengkapan\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href='?p=tperlengkapan'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='tperlengkapan'){
	echo"
  <a href='javascript:history.go(-1)'class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=iperlengkapan' name='perlengkapan' id='form_perlengkapan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Perlengkapan</h1></legend>
<input type='hidden' name='id_staf' value='$_SESSION[id_staf]'>
<table width='100%' border='0'>
    <tr>
        <td><label for=\"nama_perlengkapan\">Nama Perlengkapan</label></td>
        <td>:</td>
        <td>
    <span id=\"nama_perlengkapan\">
<label for=\"nama_perlengkapan\"></label>
<input type=\"text\" name=\"nama_perlengkapan\" id=\"nama_perlengkapan\" />
<span class=\"textfieldRequiredMsg\">Nama Perlengkapan Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var nama_perlengkapan = new Spry.Widget.ValidationTextField(\"nama_perlengkapan\");
</script>
";
}
if($p=='eperlengkapan'){
  $data=mysql_fetch_array(mysql_query("select*from perlengkapan where id_perlengkapan='$_GET[id_perlengkapan]'"));
	echo"
  <a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=eperlengkapan' name='perlengkapan' id='form_perlengkapan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Perlengkapan</h1></legend>
<input type='hidden' name='id_staf' value='$_SESSION[id_staf]'>
<input type='hidden' name='id_perlengkapan' value='$data[id_perlengkapan]'>

<table width='100%' border='0'>
    <tr>
        <td><label for=\"nama_perlengkapan\">Nama Perlengkapan</label></td>
        <td>:</td>
        <td>
    <span id=\"nama_perlengkapan\">
<label for=\"nama_perlengkapan\"></label>
<input type=\"text\" name=\"nama_perlengkapan\" id=\"nama_perlengkapan\" value='$data[nama_perlengkapan]' />
<span class=\"textfieldRequiredMsg\">Nama Perlengkapan Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var nama_perlengkapan = new Spry.Widget.ValidationTextField(\"nama_perlengkapan\");
</script>
";
}
//==================(perlengkapan masuk)====================
if($p=='perlengkapan_masuk'){
echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Perlengkapan Masuk\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_perlengkapan_masuk.php\" toolbar=\"#perlengkapan_masuk\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_perlengkapan_masuk',align:'center'\" sortable=\"true\">ID Perlengkapan</th>
            <th data-options=\"field:'perlengkapan',align:'left'\">Perlengkapan</th>
            <th data-options=\"field:'jumlah',align:'center'\">Jumlah</th>
            <th data-options=\"field:'waktu_input',align:'center'\">Waktu Input</th>
            <th data-options=\"field:'id_staf',align:'center'\">ID Staf</th>
            <th data-options=\"field:'hapus',align:'center'\">Hapus</th>
        </tr>
    </thead>
  </table>
    <div id=\"perlengkapan_masuk\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href='?p=tperlengkapan_masuk'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='tperlengkapan_masuk'){
  echo"
  <a href='javascript:history.go(-1)'class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=iperlengkapan_masuk' name='perlengkapan' id='form_perlengkapan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Perlengkapan Masuk</h1></legend>
<input type='hidden' name='id_staf' value='$_SESSION[id_staf]'>
<table width='100%' border='0'>
    <tr>
        <td >Nama Perlengkapan</td>
        <td >:</td>
        <td ><span id=\"id_perlengkapan\">
  <label for=\"id_perlengkapan\"></label>
  <select name=\"id_perlengkapan\" id=\"id_perlengkapan\">
        <option value=''>----</option>";
  $sql=mysql_query('select*from perlengkapan');
          while($data1=mysql_fetch_array($sql)){
            echo"<option value=$data1[id_perlengkapan]>$data1[nama_perlengkapan]</option>";}
    echo"</select>
  <span class=\"selectRequiredMsg\">Perlengkapan Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"jumlah\">Jumlah</label></td>
        <td>:</td>
        <td><span id=\"jumlah\">
<label for=\"jumlah\"></label>
<input type=\"number\" name=\"jumlah\" id=\"jumlah\" />
<span class=\"textfieldRequiredMsg\">Jumlah Harus Diisi Dengan Angka!</span></span>
</td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var id_perlengkapan = new Spry.Widget.ValidationSelect(\"id_perlengkapan\");
var jumlah = new Spry.Widget.ValidationTextField(\"jumlah\");
</script>
";
}
//==================(perlengkapan keluar)====================
if($p=='perlengkapan_keluar'){
echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Perlengkapan Keluar\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_perlengkapan_keluar.php\" toolbar=\"#perlengkapan_keluar\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_perlengkapan_keluar',align:'center'\" sortable=\"true\">ID Perlengkapan</th>
            <th data-options=\"field:'perlengkapan',align:'left'\">Perlengkapan</th>
            <th data-options=\"field:'jumlah',align:'center'\">Jumlah</th>
            <th data-options=\"field:'waktu_keluar',align:'center'\">Waktu Keluar</th>
            <th data-options=\"field:'id_staf',align:'center'\">ID Staf</th>
            <th data-options=\"field:'hapus',align:'center'\">Hapus</th>
        </tr>
    </thead>
  </table>
    <div id=\"perlengkapan_keluar\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href='?p=tperlengkapan_keluar'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='tperlengkapan_keluar'){
  echo"
  <a href='javascript:history.go(-1)'class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=iperlengkapan_keluar' name='perlengkapan' id='form_perlengkapan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Perlengkapan Keluar</h1></legend>
<input type='hidden' name='id_staf' value='$_SESSION[id_staf]'>
<table width='100%' border='0'>
    <tr>
        <td >Nama Perlengkapan</td>
        <td >:</td>
        <td ><span id=\"id_perlengkapan\">
  <label for=\"id_perlengkapan\"></label>
  <select name=\"id_perlengkapan\" id=\"id_perlengkapan\">
        <option value=''>----</option>";
  $sql=mysql_query('select*from perlengkapan');
          while($data1=mysql_fetch_array($sql)){
            echo"<option value=$data1[id_perlengkapan]>$data1[nama_perlengkapan]</option>";}
    echo"</select>
  <span class=\"selectRequiredMsg\">Perlengkapan Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"jumlah\">Jumlah</label></td>
        <td>:</td>
        <td><span id=\"jumlah\">
<label for=\"jumlah\"></label>
<input type=\"number\" name=\"jumlah\" id=\"jumlah\" />
<span class=\"textfieldRequiredMsg\">Jumlah Harus Diisi Dengan Angka!</span></span>
</td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var id_perlengkapan = new Spry.Widget.ValidationSelect(\"id_perlengkapan\");
var jumlah = new Spry.Widget.ValidationTextField(\"jumlah\");
</script>
";
}
if($p=='eperlengkapan_keluar'){
	echo"";
}
//==================(perlengkapan pelanggan)====================
if($p=='perlengkapan_pelanggan'){
echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Perlengkapan Pelanggan \" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_perlengkapan_pelanggan.php\" toolbar=\"#perlengkapan_pelanggan\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_pelanggan',align:'center'\" sortable=\"true\">ID Pelanggan</th>
            <th data-options=\"field:'nama_pelanggan',align:'left'\">Nama Lengkap</th>
            <th data-options=\"field:'jenis_kelamin',align:'center'\">Jenis Kelamin</th>
            <th data-options=\"field:'detail_pelanggan',align:'center'\">Detail Pelanggan</th>
            <th data-options=\"field:'detail_perlengkapan',align:'center'\">Detail Perlengkapan</th>
        </tr>
    </thead>
  </table>
    <div id=\"perlengkapan_pelanggan\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='dperlengkapan'){
$pendaftaran=mysql_fetch_array(mysql_query("select * from pendaftaran_pelanggan WHERE id_pelanggan='$_GET[id_pelanggan]'"));

echo "

<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Perlengkapan $pelanggan[nama_depan]&nbsp;$pelanggan[nama_tengah]&nbsp;$pelanggan[nama_belakang]\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\"toolbar=\"#dperlengkapan\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
      
            <th data-options=\"field:'id_pendaftaran',align:'center'\" sortable=\"true\">ID Pendaftaran</th>
            <th data-options=\"field:'produk',align:'center'\" sortable=\"true\">Produk</th>
            <th data-options=\"field:'total_pembayaran',align:'center'\" sortable=\"true\">Total Pembayaran</th>
            <th data-options=\"field:'keterangan',align:'center'\" sortable=\"true\">Keterangan</th>
            <th data-options=\"field:'detail_perlengkapan',align:'center'\" sortable=\"true\">Detail Perlengkapan</th>
      </tr>
    </thead>
  <tbody>";
            
                    $sql = mysql_query("SELECT * FROM pendaftaran_pelanggan where id_pelanggan = '$_GET[id_pelanggan]'");
                $jmldata = mysql_num_rows($sql);
              $jml_des="0";
              $pem_des=",";
              $pem_rb=".";
                    while ($r = mysql_fetch_array($sql)) {
                      $pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan where id_pelanggan='$r[id_pelanggan]'"));
                      $produk=mysql_fetch_array(mysql_query("select * from produk WHERE id_produk='$r[id_produk]'"));
                      $total_bayar=mysql_query("SELECT SUM(jumlah) as totbayar FROM pembayaran where id_pendaftaran = '$r[id_pendaftaran]'");
                      $jml_bayar=mysql_fetch_array($total_bayar);

                      $sisa_bayar=$produk['biaya']-$jml_bayar['totbayar'];

                      echo "<tr>
                            
                            <td>$r[id_pendaftaran]</td>
                            <td><b>Jenis Produk </b>$produk[jenis_produk] <b>Jenis Paket </b>$produk[jenis_paket] <b>Tanggal Keberangatan :</b>$produk[tanggal_keberangkatan] ";echo"<b>Biaya : </b>".number_format($produk['biaya'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>";echo"".number_format($jml_bayar['totbayar'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>";

  if ($jml_bayar['totbayar'] < $produk['biaya']){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Lunas&nbsp;&nbsp; </b></font>";
  }
  else if ($jml_bayar['totbayar'] == $produk['biaya']){
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Lunas&nbsp;&nbsp; </b></font>";
  }
  else {
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Pembayaran Melebihi Biaya Yang Harus Dibayar&nbsp;&nbsp; </b></font>";
    }
  echo"</td>
                            <td><a href='?p=sperlengkapan&id_pendaftaran=$r[id_pendaftaran]'><img src='../images/search.png'></a></td>
                            </tr>";
                      
                    }                    
                   echo"</tbody>
  </table>
    <div id=\"dperlengkapan\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
    <a href='javascript:history.go(-1)' title='Kembali'class=\"easyui-tooltip\"data-options=\"position:'right'\"><img src='../images/back.png'></a>
    </div>
  </div><br>
";
  
}
if($p=='sperlengkapan'){
$data=mysql_fetch_array(mysql_query("select * from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan WHERE id_pelanggan='$data[id_pelanggan]'"));
$produk=mysql_fetch_array(mysql_query("select * from produk WHERE id_produk='$data[id_produk]'"));
$perlengkapan=mysql_fetch_array(mysql_query("select * from perlengkapan_pelanggan WHERE id_pendaftaran='$data[id_pendaftaran]'"));

echo "
<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>
<br><br>

<b><h2 align=center>Data Kelengkapan Dokumen $pelanggan[nama_depan]&nbsp;$pelanggan[nama_tengah]&nbsp;$pelanggan[nama_belakang]</h2></b><hr>
<p><b>Penerima : </b><u>$perlengkapan[penerima]</u></p>
<p><b>Waktu Pengambilan : </b>$perlengkapan[waktu_pengambilan]</p>
<fieldset><legend>Hak Booking Seat</legend><table width='50%' border='0' cellpadding='2' align=center>
  <tr>
    <td><strong>Koper</strong></td>
    <td>";
      if ($perlengkapan['koper']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($perlengkapan['koper']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
  </tr>
  <tr>
    <td><strong>Tas Kecil</strong></td>
    <td>";
      if ($perlengkapan['taskecil']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($perlengkapan['taskecil']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
  </tr>
<tr>
    <td><strong>DVD Profil</strong></td>
    <td>";
      if ($perlengkapan['dvdprofil']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($perlengkapan['dvdprofil']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
  </tr>
  
  <tr>
    <td><strong>Buku Marketing</strong></td>
    <td>";
      if ($perlengkapan['bukumarketing']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($perlengkapan['bukumarketing']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
  </tr>
  <tr>
    <td><strong>Buku Produk</strong></td>
    <td>";
      if ($perlengkapan['bukuproduk']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($perlengkapan['bukuproduk']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
  </tr>
  <tr>
    <td><strong>Buku Do'a</strong></td>
    <td>";
      if ($perlengkapan['bukudoa']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($perlengkapan['bukudoa']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
  </tr>
  <tr>
    <td><strong>Buku Pintar</strong></td>
    <td>";
      if ($perlengkapan['bukupintar']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($perlengkapan['bukupintar']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
  </tr>
  <tr>
    <td><strong>Voucher</strong></td>
    <td>";
      if ($perlengkapan['voucher']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($perlengkapan['voucher']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
  </tr>
</table></fieldset>
<fieldset><legend>Hak Pelunasan</legend><table width='50%' border='0' cellpadding='2' align=center>
  <tr>
    <td><strong>Kain Ihrom</strong></td>
    <td>";
      if ($perlengkapan['kainihrom']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($perlengkapan['kainihrom']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
  </tr>
  <tr>
    <td><strong>Ikat Pinggang</strong></td>
    <td>";
      if ($perlengkapan['ikatpinggang']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($perlengkapan['ikatpinggang']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
  </tr>
  <tr>
    <td><strong>Mukena Bergo</strong></td>
    <td>";
      if ($perlengkapan['mukenabergo']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($perlengkapan['mukenabergo']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
  </tr>
  <tr>
    <td><strong>Bahan Batik</strong></td>
    <td>";
      if ($perlengkapan['bahanbatik']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($perlengkapan['bahanbatik']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
  </tr>
</table></fieldset>
<p align=center><a href='?p=eperlengkapan_pelanggan&id_perlengkapan_pelanggan=$perlengkapan[id_perlengkapan_pelanggan]'class=\"easyui-linkbutton\"><img src='../images/pencil.png'></a>
      <a href=\"controller.php?act=cetakperlengkapan_pelanggan&id_perlengkapan_pelanggan=$perlengkapan[id_perlengkapan_pelanggan]\" target='_target' class=\"easyui-linkbutton\"><img src='../images/print.png'></a></p>
";

}
if($p=='eperlengkapan_pelanggan'){
$perlengkapan=mysql_fetch_array(mysql_query("select * from perlengkapan_pelanggan WHERE id_perlengkapan_pelanggan='$_GET[id_perlengkapan_pelanggan]'"));
$pendaftaran=mysql_fetch_array(mysql_query("select * from pendaftaran_pelanggan where id_pendaftaran='$perlengkapan[id_pendaftaran]'"));
$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan WHERE id_pelanggan='$pendaftaran[id_pelanggan]'"));
if ($perlengkapan['koper']=='0'){
  $koper="<font color='#FF0000'>Belum Diambil</font>";}else if ($perlengkapan['koper']=='1'){
    $koper="<font color='#046a10'> Sudah Diambil</font>";}
if ($perlengkapan['taskecil']=='0'){
  $tas_kecil="<font color='#FF0000'>Belum Diambil</font>";}else if ($perlengkapan['taskecil']=='1'){
    $tas_kecil="<font color='#046a10'> Sudah Diambil</font>";}
if ($perlengkapan['dvdprofil']=='0'){
  $dvd_profil="<font color='#FF0000'>Belum Diambil</font>";}else if ($perlengkapan['dvdprofil']=='1'){
    $dvd_profil="<font color='#046a10'> Sudah Diambil</font>";}
if ($perlengkapan['bukumarketing']=='0'){
  $buku_marketing="<font color='#FF0000'>Belum Diambil</font>";}else if ($perlengkapan['bukumarketing']=='1'){
    $buku_marketing="<font color='#046a10'> Sudah Diambil</font>";}
if ($perlengkapan['bukuproduk']=='0'){
  $buku_produk="<font color='#FF0000'>Belum Diambil</font>";}else if ($perlengkapan['bukuproduk']=='1'){
    $buku_produk="<font color='#046a10'> Sudah Diambil</font>";}
if ($perlengkapan['bukupintar']=='0'){
  $buku_pintar="<font color='#FF0000'>Belum Diambil</font>";}else if ($perlengkapan['bukupintar']=='1'){
    $buku_pintar="<font color='#046a10'> Sudah Diambil</font>";}
if ($perlengkapan['bukudoa']=='0'){
  $buku_doa="<font color='#FF0000'>Belum Diambil</font>";}else if ($perlengkapan['bukudoa']=='1'){
    $buku_doa="<font color='#046a10'> Sudah Diambil</font>";}
if ($perlengkapan['voucher']=='0'){
  $voucher="<font color='#FF0000'>Belum Diambil</font>";}else if ($perlengkapan['voucher']=='1'){
    $voucher="<font color='#046a10'> Sudah Diambil</font>";}
if ($perlengkapan['kainihrom']=='0'){
  $kain_ihrom="<font color='#FF0000'>Belum Diambil</font>";}else if ($perlengkapan['kainihrom']=='1'){
    $kain_ihrom="<font color='#046a10'> Sudah Diambil</font>";}
if ($perlengkapan['ikatpinggang']=='0'){
  $ikat_pinggang="<font color='#FF0000'>Belum Diambil</font>";}else if ($perlengkapan['ikatpinggang']=='1'){
    $ikat_pinggang="<font color='#046a10'> Sudah Diambil</font>";}
if ($perlengkapan['mukenabergo']=='0'){
  $mukena_bergo="<font color='#FF0000'>Belum Diambil</font>";}else if ($perlengkapan['mukenabergo']=='1'){
    $mukena_bergo="<font color='#046a10'> Sudah Diambil</font>";}
if ($perlengkapan['bahanbatik']=='0'){
  $bahan_batik="<font color='#FF0000'>Belum Diambil</font>";}else if ($perlengkapan['bahanbatik']=='1'){
    $bahan_batik="<font color='#046a10'> Sudah Diambil</font>";}

echo "
<a href='javascript:history.go(-1)'class=\"easyui-linkbutton\"><img src='../images/back.png'></a>
<form method=POST action='controller.php?act=eperlengkapan_pelanggan' name='perlengkapan_pelanggan'enctype='multipart/form-data'>
<input type=hidden name=id_perlengkapan_pelanggan value='$perlengkapan[id_perlengkapan_pelanggan]'>
<fieldset><legend>Perlengkapan $pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]</legend><table width='100%' border='0' cellpadding='2'>
  <tr>
        <td><label for=\"penerima\"><b>Penerima</b></label></td>
        <td><b>:</b></td>
        <td>
    <span id=\"penerima\">
<label for=\"penerima\"></label>
<input type=\"text\" name=\"penerima\" id=\"penerima\" value='$perlengkapan[penerima]'/>
<span class=\"textfieldRequiredMsg\">Nama Penerima Harus Diisi!</span></span></td>
      </tr>
</table>

<hr>
<fieldset><legend>Hak Booking Seat</legend><table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='17%'><strong>Koper</strong></td>
    <td width='1%'><strong>:</strong></td>
    <td width='82%'><span id=\"koper\">
  <label for=\"koper\"></label>
  <select name=\"koper\" id=\"koper\">
      <option value='$perlengkapan[koper]'>$koper</option>
    <option value=''>---</option>
        <option value='0'>Belum Diambil</option>
    <option value='1'>Sudah Diambil</option>
  </select>
  <span class=\"selectRequiredMsg\">Keterangan Koper Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Tas Kecil</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"tas_kecil\">
  <label for=\"tas_kecil\"></label>
  <select name=\"tas_kecil\" id=\"tas_kecil\">
      <option value='$perlengkapan[taskecil]'>$tas_kecil</option>
    <option value=''>---</option>
        <option value='0'>Belum Diambil</option>
    <option value='1'>Sudah Diambil</option>
  </select>
  <span class=\"selectRequiredMsg\">Keterangan Tas Kecil Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>DVD Profil</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"cd_company_profil\">
  <label for=\"cd_company_profil\"></label>
  <select name=\"cd_company_profil\" id=\"cd_company_profil\">
      <option value='$perlengkapan[dvdprofil]'>$dvd_profil</option>
    <option value=''>---</option>
        <option value='0'>Belum Diambil</option>
    <option value='1'>Sudah Diambil</option>
  </select>
  <span class=\"selectRequiredMsg\">Keterangan CD Company Profile Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Buku Marketing</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"buku_marketing\">
  <label for=\"buku_marketing\"></label>
  <select name=\"buku_marketing\" id=\"buku_marketing\">
      <option value='$perlengkapan[bukumarketing]'>$buku_marketing</option>
    <option value=''>---</option>
        <option value='0'>Belum Diambil</option>
    <option value='1'>Sudah Diambil</option>
  </select>
  <span class=\"selectRequiredMsg\">Keterangan Buku Marketing Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Buku Produk</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"buku_produk\">
  <label for=\"buku_produk\"></label>
  <select name=\"buku_produk\" id=\"buku_produk\">
      <option value='$perlengkapan[bukuproduk]'>$buku_produk</option>
    <option value=''>---</option>
        <option value='0'>Belum Diambil</option>
    <option value='1'>Sudah Diambil</option>
  </select>
  <span class=\"selectRequiredMsg\">Keterangan Buku Produk Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Buku Pintar</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"buku_pintar\">
  <label for=\"buku_pintar\"></label>
  <select name=\"buku_pintar\" id=\"buku_pintar\">
      <option value='$perlengkapan[bukupintar]'>$buku_pintar</option>
    <option value=''>---</option>
        <option value='0'>Belum Diambil</option>
    <option value='1'>Sudah Diambil</option>
  </select>
  <span class=\"selectRequiredMsg\">Keterangan Buku Pintar Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Buku Doa</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"buku_doa\">
  <label for=\"buku_doa\"></label>
  <select name=\"buku_doa\" id=\"buku_doa\">
      <option value='$perlengkapan[bukudoa]'>$buku_doa</option>
    <option value=''>---</option>
        <option value='0'>Belum Diambil</option>
    <option value='1'>Sudah Diambil</option>
  </select>
  <span class=\"selectRequiredMsg\">Keterangan Buku Doa Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Voucher</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"voucher\">
  <label for=\"voucher\"></label>
  <select name=\"voucher\" id=\"voucher\">
      <option value='$perlengkapan[voucher]'>$voucher</option>
    <option value=''>---</option>
        <option value='0'>Belum Diambil</option>
    <option value='1'>Sudah Diambil</option>
  </select>
  <span class=\"selectRequiredMsg\">Keterangan Voucher Harus Dipilih!</span></span></td>
  </tr>
</table></fieldset>
<fieldset><legend>Hak Pelunasan Paket</legend><table width='100%' border='0' cellpadding='2'>
  <tr>
    <td width='17%'><strong>Kain Ihrom</strong></td>
    <td width='1%'><strong>:</strong></td>
    <td width='82%'><span id=\"kain_ihrom\">
  <label for=\"kain_ihrom\"></label>
  <select name=\"kain_ihrom\" id=\"kain_ihrom\">
      <option value='$perlengkapan[kainihrom]'>$kain_ihrom</option>
    <option value=''>---</option>
        <option value='0'>Belum Diambil</option>
    <option value='1'>Sudah Diambil</option>
  </select>
  <span class=\"selectRequiredMsg\">Keterangan Kain Ihrom Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Ikat Pinggang</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"ikat_pinggang\">
  <label for=\"ikat_pinggang\"></label>
  <select name=\"ikat_pinggang\" id=\"ikat_pinggang\">
      <option value='$perlengkapan[ikatpinggang]'>$ikat_pinggang</option>
    <option value=''>---</option>
        <option value='0'>Belum Diambil</option>
    <option value='1'>Sudah Diambil</option>
  </select>
  <span class=\"selectRequiredMsg\">Keterangan ikat_pinggang Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Mukena Bergo</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"mukena_bergo\">
  <label for=\"mukena_bergo\"></label>
  <select name=\"mukena_bergo\" id=\"mukena_bergo\">
      <option value='$perlengkapan[mukenabergo]'>$mukena_bergo</option>
    <option value=''>---</option>
        <option value='0'>Belum Diambil</option>
    <option value='1'>Sudah Diambil</option>
  </select>
  <span class=\"selectRequiredMsg\">Keterangan Mukena Bergo Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Bahan Batik</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"bahan_batik\">
  <label for=\"bahan_batik\"></label>
  <select name=\"bahan_batik\" id=\"bahan_batik\">
      <option value='$perlengkapan[bahanbatik]'>$bahan_batik</option>
    <option value=''>---</option>
        <option value='0'>Belum Diambil</option>
    <option value='1'>Sudah Diambil</option>
  </select>
  <span class=\"selectRequiredMsg\">Keterangan Bahan Batik Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type='submit' value='Simpan'>&nbsp;&nbsp;<input type='reset' value='Batal'></td>
  </tr>
</table>
</fieldset></fieldset></form>
<script type=\"text/javascript\">
var penerima = new Spry.Widget.ValidationTextField(\"penerima\");
var koper = new Spry.Widget.ValidationSelect(\"koper\");
var tas_kecil = new Spry.Widget.ValidationSelect(\"tas_kecil\");
var cd_company_profil = new Spry.Widget.ValidationSelect(\"cd_company_profil\");
var buku_marketing = new Spry.Widget.ValidationSelect(\"buku_marketing\");
var buku_produk = new Spry.Widget.ValidationSelect(\"buku_produk\");
var buku_pintar = new Spry.Widget.ValidationSelect(\"buku_pintar\");
var buku_doa = new Spry.Widget.ValidationSelect(\"buku_doa\");
var voucher = new Spry.Widget.ValidationSelect(\"voucher\");
var kain_ihrom = new Spry.Widget.ValidationSelect(\"kain_ihrom\");
var ikat_pinggang = new Spry.Widget.ValidationSelect(\"ikat_pinggang\");
var mukena_bergo = new Spry.Widget.ValidationSelect(\"mukena_bergo\");
var bahan_batik = new Spry.Widget.ValidationSelect(\"bahan_batik\");
</script>
";
}

//==================(keadaan)====================
if($p=='keadaan'){
echo "

<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Keadaan Pelanggan\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\"toolbar=\"#dpembayaran\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
       <tr>
            <th data-options=\"field:'id_produk',align:'center'\" sortable=\"true\">ID Produk</th>
            <th data-options=\"field:'nama_pelanggan',align:'left'\">Nama Lengkap</th>
            <th data-options=\"field:'jenis_kelamin',align:'center'\">Jenis Kelamin</th>
            <th data-options=\"field:'detail_pelanggan',align:'center'\">Detail Pelanggan</th>
            <th data-options=\"field:'keadaan',align:'center'\">Keadaan Pelanggan</th>
            <th data-options=\"field:'waktu_update',align:'center'\">Waktu Update</th>
            <th data-options=\"field:'edit',align:'center'\">Edit</th>
        </tr>
    </thead>
  <tbody>";
            
                    $sql = mysql_query("SELECT produk.id_produk,produk.id_staf,pendaftaran_pelanggan.id_produk,pendaftaran_pelanggan.id_pelanggan,pelanggan.id_pelanggan,pelanggan.nama_depan,pelanggan.nama_tengah,pelanggan.nama_belakang,pelanggan.jenis_kelamin,keadaan_pelanggan.id_keadaan,keadaan_pelanggan.keadaan,keadaan_pelanggan.tanggal_update from produk,pendaftaran_pelanggan,pelanggan,keadaan_pelanggan where produk.id_produk=pendaftaran_pelanggan.id_produk and pendaftaran_pelanggan.id_pelanggan=pelanggan.id_pelanggan and keadaan_pelanggan.id_pendaftaran=pendaftaran_pelanggan.id_pendaftaran and pendaftaran_pelanggan.status_keberangkatan='Sedang Diberangkatkan' and produk.id_staf='$_SESSION[id_staf]'");
                    while ($r = mysql_fetch_array($sql)) {
                    echo "<tr>
                            
                            <td>$r[id_produk]</td>
                            <td>$r[nama_depan] $r[nama_tengah] $r[nama_belakang]</td>
                            <td>$r[jenis_kelamin]</td>
                            <td><a href='?p=dpelanggan&id_pelanggan=$r[id_pelanggan]'><img src='../images/search.png'></a></td>
                            <td><b>$r[keadaan]</b></td>
                            <td>$r[tanggal_update]</td>
                            <td><a href='?p=ekeadaan&id_keadaan=$r[id_keadaan]'><img src='../images/pencil.png'></a></td>
                            </tr>";
                      
                    }                    
                   echo"</tbody>
  </table>
    <div id=\"dpembayaran\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
    
    </div>
  </div><br>
";

}
if($p=='ekeadaan'){
$data=mysql_fetch_array(mysql_query("Select * from keadaan_pelanggan where id_keadaan='$_GET[id_keadaan]'"));
$pendaftaran_pelanggan=mysql_fetch_array(mysql_query("select * from pendaftaran_pelanggan where id_pendaftaran='$data[id_pendaftaran]'"));  
echo"<a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=ekeadaan' name='produk' id='form_keadaan' enctype='multipart/form-data'>
<input type=hidden name=id_keadaan value='$data[id_keadaan]'>
<fieldset><legend><h1>Form Keadaan</h1></legend>
<table width='100%' border='0'>
      <tr>
        <td>Keadaan</td>
        <td>:</td>
        <td><span id=\"keadaan\">
  <label for=\"keadaan\"></label>
  <select name=\"keadaan\" id=\"keadaan\">
      <option value='$data[keadaan]'>$data[keadaan]</option>
      <option value=''>----</option>
      <option value='SEHAT'>SEHAT</option>
      <option value='SAKIT'>SAKIT</option>
      <option value='DIRAWAT'>DIRAWAT</option>
      </select><span class=\"selectRequiredMsg\">Keadaan Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var keadaan = new Spry.Widget.ValidationSelect(\"keadaan\");
</script>";

}
//==================(keluhan)====================
if($p=='keluhan'){
echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Keluhan Pelanggan \" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_keluhan.php\" toolbar=\"#keluhan\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_pelanggan',align:'center'\" sortable=\"true\">ID Pelanggan</th>
            <th data-options=\"field:'nama_pelanggan',align:'left'\">Nama Lengkap</th>
            <th data-options=\"field:'jenis_kelamin',align:'center'\">Jenis Kelamin</th>
            <th data-options=\"field:'keluhan',width:'400', align:'center'\">Keluhan</th>
            <th data-options=\"field:'respon',align:'center'\">Respon Keluhan</th>
            <th data-options=\"field:'waktu',align:'center'\">Waktu Kirim</th>
            <th data-options=\"field:'edit',align:'center'\">Respon</th>
        </tr>
    </thead>
  </table>
    <div id=\"keluhan\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";


}
if($p=='ekeluhan'){
	$data=mysql_fetch_array(mysql_query("select * from keluhan WHERE id_keluhan='$_GET[id_keluhan]'"));
  echo"
  <a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=rkeluhan' name='keluhan' id='form_keluhan' enctype='multipart/form-data'>
<fieldset><legend><h1>Form Respon Keluhan</h1></legend>
<input type=\"hidden\" name=id_keluhan value=$data[id_keluhan]>
<input type=\"hidden\" name=keluhan value=\"$data[keluhan]\">
<input type=\"hidden\" name=id_staf value=$_SESSION[id_staf]>
<table width='100%' border='0'>
  <tr>
        <td >ID Keluhan</td>
        <td >:</td>
        <td ><input size='25' type='text'   name='id_keluhan' value='$data[id_keluhan]' disabled></td>
      </tr>
    <tr>
        <td >Keluhan</td>
        <td >:</td>
        <td ><span id=\"keluhan\">
<label for=\"keluhan\"></label>
<textarea name=\"keluhan\" id=\"keluhan\" cols=\"30\" rows=\"5\" disabled>$data[keluhan]</textarea>
<span class=\"textareaRequiredMsg\">pertanyaan Harus Diisi!</span></span>
  </td>
      </tr>
    <tr>
        <td >Respon</td>
        <td >:</td>
        <td ><span id=\"respon\">
<label for=\"respon\"></label>
<textarea name=\"respon\" id=\"respon\" cols=\"30\" rows=\"5\">$data[respon_keluhan]</textarea>
<span class=\"textareaRequiredMsg\">Respon Keluhan Harus Diisi!</span></span>
  </td>
      </tr>
     <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var keluhan = new Spry.Widget.ValidationTextarea(\"keluhan\");
var respon = new Spry.Widget.ValidationTextarea(\"respon\");
</script>
";
}
//==================(keuangan masuk)====================
if($p=='keuangan_masuk'){
echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Keuangan Masuk \" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_keuangan_masuk.php\" toolbar=\"#keuangan_masuk\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_keuangan',align:'center'\" sortable=\"true\">ID Keuangan</th>
            <th data-options=\"field:'penyetor',align:'left'\">Penyetor</th>
            <th data-options=\"field:'uraian_transaksi',align:'center'\">Transaksi</th>
            <th data-options=\"field:'jumlah',align:'center'\">Jumlah</th>
            <th data-options=\"field:'waktu_input',align:'center'\">Waktu Input</th>
             <th data-options=\"field:'keterangan',align:'center'\">Keterangan</th>
             <th data-options=\"field:'id_staf',align:'center'\">ID Staf</th>
            <th data-options=\"field:'edit',align:'center'\">Edit</th>
            <th data-options=\"field:'cetak',align:'center'\">Cetak</th>
            <th data-options=\"field:'hapus',align:'center'\">Hapus</th>
        </tr>
    </thead>
  </table>
    <div id=\"keuangan_masuk\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href='?p=tkeuangan_masuk'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div><br><br>
  <div class=\"easyui-tabs\" style='width:auto;height:auto;'>
    <div title='Laporan Harian'data-options=\"iconCls:'icon-help'\" style='padding:10px'>
      <form action='controller.php?act=cetak_keuangan_harian' target=\"_blank\" method=POST><h3><font size=3pt align=center>Laporan Keuangan Masuk</font></h3><hr>
  Tanggal : <input class='easyui-datebox' name='tanggal'></input>
  <input type=submit value=cetak></form>
    </div>
    <div title='Laporan Bulanan' data-options=\"iconCls:'icon-help'\" style='padding:10px'>
      <form action='controller.php?act=cetak_keuangan_bulanan' target=\"_blank\" method=POST><h3><font size=3pt align=center>Laporan Keuangan Masuk</font></h3><hr>
  Dari Tanggal : <input class='easyui-datebox' name='tgl1'></input>&nbsp;&nbsp;Sampai Tanggal : <input class='easyui-datebox' name='tgl2'></input>
  <input type=submit value=cetak></form>
  <hr>
  <form action='controller.php?act=cetak_keuangan_bulanan_excel' target=\"_blank\" method=POST><h3><font size=3pt align=center>Laporan Keuangan Masuk</font></h3><hr>
  Dari Tanggal : <input class='easyui-datebox' name='tgl1'></input>&nbsp;&nbsp;Sampai Tanggal : <input class='easyui-datebox' name='tgl2'></input>
  <input type=submit value='Export To Excel'></form>
    </div>
    ";

}
if($p=='tkeuangan_masuk'){
  echo"
  <a href='javascript:history.go(-1)'class=\"easyui-linkbutton\"><img src='../images/back.png'></a>
<form method=POST action='controller.php?act=ikeuangan_masuk' name='keuangan_masuk'enctype='multipart/form-data'>
<input type=\"hidden\" name=id_staf value=$_SESSION[id_staf]>
<fieldset><legend><b>Form Keuangan Masuk</b></legend><table width='100%' border='0' cellpadding='2'>
  <tr>
        <td><label for=\"penyetor\"><b>Penyetor</b></label></td>
        <td><b>:</b></td>
        <td>
    <span id=\"penyetor\">
<label for=\"penyetor\"></label>
<input type=\"text\" name=\"penyetor\" id=\"penyetor\" />
<span class=\"textfieldRequiredMsg\">Nama Penyetor Harus Diisi!</span></span></td>
      </tr>
  <tr>
    <td><strong>Uraian Transaksi</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"uraian_transaksi\">
<label for=\"uraian_transaksi\"></label>
<textarea name=\"uraian_transaksi\" id=\"uraian_transaksi\" cols=\"30\" rows=\"5\"></textarea>
<span class=\"textareaRequiredMsg\">Uraian Transaksi Harus Diisi!</span></span></td>
  </tr>
  <tr>
        <td><label for=\"jumlah\"><b>Jumlah</b></label></td>
        <td><b>:</b></td>
        <td>
    <span id=\"jumlah\">
<label for=\"jumlah\"></label>
<input type=\"number\" name=\"jumlah\" id=\"jumlah\" />
<span class=\"textfieldRequiredMsg\">Harus Memasukkan Angka!</span></span></td>
      </tr>
  <tr>
    <td><strong>Kurs</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"kurs\">
  <label for=\"kurs\"></label>
  <select name=\"kurs\" id=\"kurs\">
      <option value=''>---</option>
        <option value='IDR'>IDR</option>
    <option value='USD'>USD</option>
  </select>
  <span class=\"selectRequiredMsg\">Kurs Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Cara Bayar</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"cara_bayar\">
  <label for=\"cara_bayar\"></label>
  <select name=\"cara_bayar\" id=\"cara_bayar\">
        <option value=''>---</option>
        <option value='Tunai'>Tunai</option>
            <option value='Transfer Mandiri Syariah'>Transfer Mandiri Syariah</option>
            <option value='Transfer Mandiri'>Transfer Mandiri</option>
            <option value='Transfer BNI'>Transfer BNI</option>
            <option value='Transfer BRI'>Transfer BRI</option>
            <option value='Transfer BCA'>Transfer BCA</option>
            <option value='Transfer Permata Syariah'>Transfer Permata Syariah</option>
            </select>
      <span class=\"selectRequiredMsg\">Cara Bayar Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Keterangan</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"keterangan\">
<label for=\"keterangan\"></label>
<textarea name=\"keterangan\" id=\"keterangan\" cols=\"30\" rows=\"5\"></textarea>
<span class=\"textareaRequiredMsg\">Keterangan Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type='submit' value='Simpan'>&nbsp;<input type='reset' value='Batal'></td>
  </tr>
</table></fieldset></form>
<script type=\"text/javascript\">
var penyetor = new Spry.Widget.ValidationTextField(\"penyetor\");
var jumlah = new Spry.Widget.ValidationTextField(\"jumlah\");
var kurs = new Spry.Widget.ValidationSelect(\"kurs\");
var cara_bayar = new Spry.Widget.ValidationSelect(\"cara_bayar\");
var uraian_transaksi = new Spry.Widget.ValidationTextarea(\"uraian_transaksi\");
var keterangan = new Spry.Widget.ValidationTextarea(\"keterangan\");
</script>";
}
if($p=='ekeuangan_masuk'){
  $data=mysql_fetch_array(mysql_query("select*from keuangan_masuk where id_keuangan='$_GET[id_keuangan]'"));
  echo"
  <a href='javascript:history.go(-1)'class=\"easyui-linkbutton\"><img src='../images/back.png'></a>
<form method=POST action='controller.php?act=ekeuangan_masuk' name='keuangan_masuk'enctype='multipart/form-data'>
<input type=\"hidden\" name=id_staf value=$_SESSION[id_staf]>
<input type=\"hidden\" name=id_keuangan value=$data[id_keuangan]>
<fieldset><legend><b>Form Keuangan Masuk</b></legend><table width='100%' border='0' cellpadding='2'>
  <tr>
        <td><label for=\"penyetor\"><b>Penyetor</b></label></td>
        <td><b>:</b></td>
        <td>
    <span id=\"penyetor\">
<label for=\"penyetor\"></label>
<input type=\"text\" name=\"penyetor\" id=\"penyetor\" value='$data[penyetor]'/>
<span class=\"textfieldRequiredMsg\">Nama Penyetor Harus Diisi!</span></span></td>
      </tr>
  <tr>
    <td><strong>Uraian Transaksi</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"uraian_transaksi\">
<label for=\"uraian_transaksi\"></label>
<textarea name=\"uraian_transaksi\" id=\"uraian_transaksi\" cols=\"30\" rows=\"5\">$data[uraian_transaksi]</textarea>
<span class=\"textareaRequiredMsg\">Uraian Transaksi Harus Diisi!</span></span></td>
  </tr>
  <tr>
        <td><label for=\"jumlah\"><b>Jumlah</b></label></td>
        <td><b>:</b></td>
        <td>
    <span id=\"jumlah\">
<label for=\"jumlah\"></label>
<input type=\"number\" name=\"jumlah\" id=\"jumlah\"  value='$data[jumlah]'/>
<span class=\"textfieldRequiredMsg\">Harus Memasukkan Angka!</span></span></td>
      </tr>
  <tr>
    <td><strong>Kurs</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"kurs\">
  <label for=\"kurs\"></label>
  <select name=\"kurs\" id=\"kurs\">
      <option value='$data[kurs]'>$data[kurs]</option>
      <option value=''>---</option>
        <option value='IDR'>IDR</option>
    <option value='USD'>USD</option>
  </select>
  <span class=\"selectRequiredMsg\">Kurs Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Cara Bayar</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"cara_bayar\">
  <label for=\"cara_bayar\"></label>
  <select name=\"cara_bayar\" id=\"cara_bayar\">
        <option value='$data[cara_bayar]'>$data[cara_bayar]</option>
      <option value=''>---</option>
        <option value='Tunai'>Tunai</option>
            <option value='Transfer Mandiri Syariah'>Transfer Mandiri Syariah</option>
            <option value='Transfer Mandiri'>Transfer Mandiri</option>
            <option value='Transfer BNI'>Transfer BNI</option>
            <option value='Transfer BRI'>Transfer BRI</option>
            <option value='Transfer BCA'>Transfer BCA</option>
            <option value='Transfer Permata Syariah'>Transfer Permata Syariah</option>
            </select>
      <span class=\"selectRequiredMsg\">Cara Bayar Harus Dipilih!</span></span></td>
  </tr>
  <tr>
    <td><strong>Keterangan</strong></td>
    <td><strong>:</strong></td>
    <td><span id=\"keterangan\">
<label for=\"keterangan\"></label>
<textarea name=\"keterangan\" id=\"keterangan\" cols=\"30\" rows=\"5\">$data[keterangan]</textarea>
<span class=\"textareaRequiredMsg\">Keterangan Harus Diisi!</span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type='submit' value='Simpan'>&nbsp;<input type='reset' value='Batal'></td>
  </tr>
</table></fieldset></form>
<script type=\"text/javascript\">
var penyetor = new Spry.Widget.ValidationTextField(\"penyetor\");
var jumlah = new Spry.Widget.ValidationTextField(\"jumlah\");
var kurs = new Spry.Widget.ValidationSelect(\"kurs\");
var cara_bayar = new Spry.Widget.ValidationSelect(\"cara_bayar\");
var uraian_transaksi = new Spry.Widget.ValidationTextarea(\"uraian_transaksi\");
var keterangan = new Spry.Widget.ValidationTextarea(\"keterangan\");
</script>";
}
//==================(grafik pelanggan)====================
if($p=='grafik_pelanggan'){
  include'../include/grafik_pelanggan.php';
}
//==================(grafik pendaftaran)====================
if($p=='grafik_pendaftaran'){
	include'../include/grafik_pendaftaran.php';
}
//==================(staf)====================
if($p=='staf'){
  echo"<script type=\"text/javascript\">
var url;  
function fresh(){  
  $('#datagrid-crud').datagrid('reload');
}
function doSearch(value){  
  $('#datagrid-crud').datagrid('load',{    
        cari: value
    });  
}  
</script>
<table id=\"datagrid-crud\" title=\"Data Staf\" class=\"easyui-datagrid\" style=\"width:auto; height: auto;\" url=\"../json/json_user_damtour.php\" toolbar=\"#staf\" pagination=\"true\" rownumbers=\"true\" fitColumns=\"false\" singleSelect=\"true\">
    <thead>
        <tr>
            <th data-options=\"field:'id_staf',align:'center'\">ID Staf</th>
      <th data-options=\"field:'nama',align:'center'\">Nama</th>
      <th data-options=\"field:'jenis_kelamin',align:'center'\">Jenis Kelamin</th>
      <th data-options=\"field:'foto',align:'center'\">Foto</th>
      <th data-options=\"field:'alamat',align:'center'\">Alamat</th>
      <th data-options=\"field:'no_telp',align:'center'\">No. Telp</th>
      <th data-options=\"field:'jabatan',align:'center'\">Jabatan</th>
      <th data-options=\"field:'username',align:'center'\">Username</th>
      <th data-options=\"field:'password',align:'center'\">Password</th>
      <th data-options=\"field:'status',align:'center'\">Status</th>
      <th data-options=\"field:'edit',align:'center'\">Edit</th>
          <th data-options=\"field:'hapus',align:'center'\">Hapus</th>
        </tr>
    </thead>
  </table>
    <div id=\"staf\" style=\"padding:2px;height:30px;\">
    <div style=\"float:left;\">
      <a href='?p=tstaf'class=\"easyui-linkbutton\" iconCls=\"icon-add\" plain=\"true\">Tambah</a>
      <a href=\"javascript:void(0)\" class=\"easyui-linkbutton\" iconCls=\"icon-reload\" plain=\"true\" onclick=\"fresh()\">Refresh</a>
    </div>
    <div style=\"float:right;\">
        <input id=\"cari\" class=\"easyui-searchbox\" data-options=\"prompt:'&nbsp;&nbsp;',searcher:doSearch\" style=\"width:250px;\"></input> 
    </div>
  </div>";
}
if($p=='tstaf'){
$result = mysql_query("select * from user_damtour");
$jsArray = "var prdName = new Array();\n";
$result2 = mysql_query("select * from user_damtour");
$jsArray2 = "var prdName2 = new Array();\n";
$query="select max(id_staf) as maxID from user_damtour where id_staf like 'ST%'";
$hasil=mysql_query($query);
$data=mysql_fetch_array($hasil);
$idMax=$data['maxID'];

$noUrut=(int) substr($idMax,2,5);
$noUrut++;

$newID = 'ST'.sprintf("%04s",$noUrut);

  echo"
  <a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=istaf' name='staf' id='form_staf' enctype='multipart/form-data'>
<input type=hidden name=id_staf value='$newID'>
<fieldset><legend><h1>Form User Damtour</h1></legend>
<table width='100%' border='0'>
  <tr>
        <td>ID Staf</td>
        <td>:</td>
        <td><input type=text name=id_staf value='$newID' disabled></td>
      </tr>
    <tr>
        <td><label for=\"nama\">Nama Lengkap</label></td>
        <td>:</td>
        <td>
    <span id=\"nama\">
<label for=\"nama\"></label>
<input type=\"text\" name=\"nama\" id=\"nama\" />
<span class=\"textfieldRequiredMsg\">Nama Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td >Jenis Kelamin</td>
        <td >:</td>
        <td ><span id=\"jenis_kelamin\">
  <label for=\"jenis_kelamin\"></label>
  <select name=\"jenis_kelamin\" id=\"jenis_kelamin\">
      <option value=''>---</option>
        <option value='Laki-Laki'>Laki-Laki</option>
    <option value='Perempuan'>Perempuan</option>
  </select>
  <span class=\"selectRequiredMsg\">Jenis Kelamin Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td >Foto</td>
        <td >:</td>
        <td ><input type=\"file\" name='foto'></td>
      </tr>
    <tr>
        <td >Alamat</td>
        <td >:</td>
        <td ><span id=\"alamat\">
<label for=\"alamat\"></label>
<textarea name=\"alamat\" id=\"alamat\" cols=\"30\" rows=\"5\"></textarea>
<span class=\"textareaRequiredMsg\">Alamat Harus Diisi!</span></span>
  </td>
      </tr>
    <tr>
        <td><label for=\"no_telp\">No. Telp</label></td>
        <td>:</td>
        <td>
    <span id=\"no_telp\">
<label for=\"no_telp\"></label>
<input type=\"number\" name=\"no_telp\" id=\"no_telp\" />
<span class=\"textfieldRequiredMsg\">Harus Memasukkan Angka!</span></span></td>
      </tr>
     <tr>
        <td >Jabatan</td>
        <td >:</td>
        <td ><span id=\"jabatan\">
  <label for=\"jabatan\"></label>
  <select name=\"jabatan\" id=\"jabatan\">
  <option value=''>----</option>";
  $sql=mysql_query('select*from jabatan');
          while($data1=mysql_fetch_array($sql)){
            echo"<option value=$data1[id_jabatan]>$data1[jabatan]</option>";}
    echo"</select>
  <span class=\"selectRequiredMsg\">Jabatan Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"username\">Username</label></td>
        <td>:</td>
        <td><span id=\"username\">
<label for=\"username\"></label>
<input type=\"text\" name=\"username\" id=\"username\" />
<span class=\"textfieldRequiredMsg\">Username Harus Diisi!</span></span>
</td>
      </tr>
     <tr>
        <td><label for=\"password\">Password</td>
        <td>:</td>
        <td><span id=\"password\">
<label for=\"password\"></label>
<input type=\"text\" name=\"password\" id=\"password\" />
<span class=\"textfieldRequiredMsg\">Password Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var jenis_kelamin = new Spry.Widget.ValidationSelect(\"jenis_kelamin\");
var jabatan = new Spry.Widget.ValidationSelect(\"jabatan\");
var username = new Spry.Widget.ValidationTextField(\"username\");
var nama = new Spry.Widget.ValidationTextField(\"nama\");
var password = new Spry.Widget.ValidationTextField(\"password\");
var no_telp = new Spry.Widget.ValidationTextField(\"no_telp\");
var alamat = new Spry.Widget.ValidationTextarea(\"alamat\");
</script>
";
}
if($p=='estaf'){
$data=mysql_fetch_array(mysql_query("select*from user_damtour where id_staf='$_GET[id_staf]'"));
  echo"
  <a href='javascript:history.go(-1)' class=\"easyui-linkbutton\"><img src='../images/back.png'></a>

<form method=POST action='controller.php?act=estaf' name='staf' id='form_staf' enctype='multipart/form-data'>
<input type=hidden name=id_staf value='$data[id_staf]'>
<fieldset><legend><h1>Form User Damtour</h1></legend>
<table width='100%' border='0'>
  <tr>
        <td>ID Staf</td>
        <td>:</td>
        <td><input type=text name=id_staf value='$data[id_staf]' disabled></td>
      </tr>
    <tr>
        <td><label for=\"nama\">Nama Lengkap</label></td>
        <td>:</td>
        <td>
    <span id=\"nama\">
<label for=\"nama\"></label>
<input type=\"text\" name=\"nama\" id=\"nama\" value='$data[nama]'/>
<span class=\"textfieldRequiredMsg\">Nama Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td >Jenis Kelamin</td>
        <td >:</td>
        <td ><span id=\"jenis_kelamin\">
  <label for=\"jenis_kelamin\"></label>
  <select name=\"jenis_kelamin\" id=\"jenis_kelamin\">
      <option value='$data[jenis_kelamin]'>$data[jenis_kelamin]</option>
    <option value=''>---</option>
        <option value='Laki-Laki'>Laki-Laki</option>
    <option value='Perempuan'>Perempuan</option>
  </select>
  <span class=\"selectRequiredMsg\">Jenis Kelamin Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td >Foto</td>
        <td >:</td>
        <td ><img src='../upload/img_staf/$data[foto]' height='50' width='50'></td>
      </tr>
    <tr>
        <td >Alamat</td>
        <td >:</td>
        <td ><span id=\"alamat\">
<label for=\"alamat\"></label>
<textarea name=\"alamat\" id=\"alamat\" cols=\"30\" rows=\"5\">$data[alamat]</textarea>
<span class=\"textareaRequiredMsg\">Alamat Harus Diisi!</span></span>
  </td>
      </tr>
    <tr>
        <td><label for=\"no_telp\">No. Telp</label></td>
        <td>:</td>
        <td>
    <span id=\"no_telp\">
<label for=\"no_telp\"></label>
<input type=\"number\" name=\"no_telp\" id=\"no_telp\" value='$data[no_telp]'/>
<span class=\"textfieldRequiredMsg\">Harus Memasukkan Angka!</span></span></td>
      </tr>
     <tr>
        <td >Jabatan</td>
        <td >:</td>
        <td ><span id=\"jabatan\">
  <label for=\"jabatan\"></label>
  <select name=\"jabatan\" id=\"jabatan\">";
  $jabatan=mysql_fetch_array(mysql_query("select*from jabatan"));
  echo"
      <option value='$jabatan[id_jabatan]'>$jabatan[jabatan]</option>
      <option value=''>----</option>";
  $sql=mysql_query('select*from jabatan');
          while($data1=mysql_fetch_array($sql)){
            echo"<option value=$data1[id_jabatan]>$data1[jabatan]</option>";}
    echo"</select>
  <span class=\"selectRequiredMsg\">Jabatan Harus Dipilih!</span></span></td>
      </tr>
      <tr>
        <td><label for=\"username\">Username</label></td>
        <td>:</td>
        <td><span id=\"username\">
<label for=\"username\"></label>
<input type=\"text\" name=\"username\" id=\"username\" value='$data[username]' />
<span class=\"textfieldRequiredMsg\">Username Harus Diisi!</span></span>
</td>
      </tr>
     <tr>
        <td><label for=\"password\">Password</td>
        <td>:</td>
        <td><span id=\"password\">
<label for=\"password\"></label>
<input type=\"text\" name=\"password\" id=\"password\" value='$data[password]'/>
<span class=\"textfieldRequiredMsg\">Password Harus Diisi!</span></span></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><button type='submit' >Simpan</button>&nbsp;<button type='reset' >Reset</button></td>
      </tr>
    </table></fieldset></form>
<script type=\"text/javascript\">
var jenis_kelamin = new Spry.Widget.ValidationSelect(\"jenis_kelamin\");
var status = new Spry.Widget.ValidationSelect(\"status\");
var jabatan = new Spry.Widget.ValidationSelect(\"jabatan\");
var username = new Spry.Widget.ValidationTextField(\"username\");
var nama = new Spry.Widget.ValidationTextField(\"nama\");
var password = new Spry.Widget.ValidationTextField(\"password\");
var no_telp = new Spry.Widget.ValidationTextField(\"no_telp\");
var alamat = new Spry.Widget.ValidationTextarea(\"alamat\");
</script>
";
}


?>