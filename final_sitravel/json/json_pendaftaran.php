<?php 
include '../include/config.php';
include '../include/lib.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_pendaftaran';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_pendaftaran LIKE '%$cari%' OR id_pelanggan LIKE '%$cari%' OR id_produk LIKE '%$cari%'";

$text = "SELECT * FROM pendaftaran_pelanggan
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM pendaftaran_pelanggan $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{
	if($data['status_keberangkatan']=='Belum Diberangkatkan'){
		$status="<font color=white style='background-color: red'><b>&nbsp;&nbsp;Belum Diberangkatkan&nbsp;&nbsp;<b></font>";
	}
	if($data['status_keberangkatan']=='Sedang Diberangkatkan'){
		$status="<font color=yellow style='background-color: green'><b>&nbsp;&nbsp;Sedang Diberangkatkan&nbsp;&nbsp;<b></font>";
	}
	if($data['status_keberangkatan']=='Sudah Diberangkatkan'){
		$status="<font color=white style='background-color: purple'><b>&nbsp;&nbsp;Sudah Diberangkatkan&nbsp;&nbsp;<b></font>";
	}
	$produk=mysql_fetch_array(mysql_query("select * from produk where id_produk='$data[id_produk]'"));	
	$pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan where id_pelanggan='$data[id_pelanggan]'"));	
	$row[] = array(
		'id_pendaftaran'=>$data['id_pendaftaran'],
		'nama_pelanggan'=>$pelanggan['nama_depan'].' '.$pelanggan['nama_tengah'].' '.$pelanggan['nama_belakang'],
		'produk'=>$produk['jenis_produk'].' - '.$produk['jenis_paket'].' - '.$produk['tanggal_keberangkatan'].' - '.$produk['biaya'],
		'detail_pelanggan'=>"<a href='?p=dpelanggan&id_pelanggan=$data[id_pelanggan]'><img src='../images/search.png'></a>",
		'waktu_daftar'=>$data['tanggal_pendaftaran'],
		'status'=>"$status",
		'edit'=>"<a href='?p=ependaftaran_pelanggan&id_pendaftaran=$data[id_pendaftaran]'><img src='../images/pencil.png'></a>",
		'hapus'=>"<a href=\"controller.php?delete=hpendaftaran_pelanggan&id_pendaftaran=$data[id_pendaftaran]\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_pendaftaran] ?');\"><img src='../images/cancel.png'></a>"
		);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>