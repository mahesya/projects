<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_keluhan';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_keluhan LIKE '%$cari%' OR keluhan LIKE '%$cari%'";

$text = "SELECT * FROM keluhan
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM keluhan $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$data[id_pelanggan]'"));
	$row[] = array(
		'id_pelanggan'=>$data['id_pelanggan'],
		'nama_pelanggan'=>"$pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]",
		'jenis_kelamin'=>$pelanggan['jenis_kelamin'],
		'keluhan'=>$data['keluhan'],
		'respon'=>$data['respon_keluhan'],
		'waktu'=>$data['waktu_kirim'],
		'edit'=>"<a href='?p=ekeluhan&id_keluhan=$data[id_keluhan]'><img src='../images/pencil.png'></a>",
			);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>