<?php 
include '../include/config.php';
include '../include/lib.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_akomodasi';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_akomodasi LIKE '%$cari%' OR akomodasi_hotel LIKE '%$cari%' OR akomodasi_pesawat LIKE '%$cari%' ";

$text = "SELECT * FROM akomodasi
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM akomodasi $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{
	$produk=mysql_fetch_array(mysql_query("select * from produk where id_produk='$data[id_produk]'"));	
	$row[] = array(
		'id_akomodasi'=>$data['id_akomodasi'],
		'id_produk'=>$data['id_produk']."- $produk[jenis_produk]- $produk[bulan_keberangkatan]- ".format_angka($produk['biaya']),
		'akomodasi_hotel'=>htmlspecialchars($data['akomodasi_hotel']),
		'akomodasi_pesawat'=>htmlspecialchars($data['akomodasi_pesawat']),
		'edit'=>"<a href='?p=eakomodasi&id_akomodasi=$data[id_akomodasi]&id_produk=$data[id_produk]'><img src='../images/pencil.png'></a>"	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>