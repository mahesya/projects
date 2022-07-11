<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_pelanggan';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_pelanggan LIKE '%$cari%' OR nama_depan LIKE '%$cari%' OR nama_tengah LIKE '%$cari%' OR nama_belakang LIKE '%$cari%' OR nama_panggilan LIKE '%$cari%'";

$text = "SELECT * FROM pelanggan
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM pelanggan $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	

	$row[] = array(
		'id_pelanggan'=>$data['id_pelanggan'],
		'nama_pelanggan'=>"$data[nama_depan] $data[nama_tengah] $data[nama_belakang]",
		'jenis_kelamin'=>$data['jenis_kelamin'],
		'detail_pelanggan'=>"<a href='?p=dpelanggan&id_pelanggan=$data[id_pelanggan]'><img src='../images/search.png'></a>",
		'detail_mou'=>"<a href='?p=dmou&id_pelanggan=$data[id_pelanggan]'><img src='../images/search.png'></a>"
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>