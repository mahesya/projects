<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_staf';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'asc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE user_damtour.id_staf=produk.id_staf and (id_staf LIKE '%$cari%' OR nama LIKE '%$cari%') ";

$text = "SELECT * FROM user_damtour,produk
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM user_damtour,produk $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	
	$pendaftaran=mysql_fetch_array(mysql_query("select * from pendaftaran_pelanggan where id_produk='$data[id_produk]'"));
	$row[] = array(
		'id_produk'=>$data['id_produk'],
		'nama_pelanggan'=>$data['nam_pelanggan'],
		'jenis_kelamin'=>$data['id_produk'],
		'detail_pelanggan'=>format_angka($data['biaya']),
		'keadaan'=>"<a href='?p_adm=dpembayaran_pel&id_pelanggan=$data[id_pelanggan]'><img src='../images/detail.png'></a>",
		'waktu_update'=>format_angka($data['biaya']),
		'edit'=>format_angka($data['biaya'])
		
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>