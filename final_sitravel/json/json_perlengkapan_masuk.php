<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_perlengkapan_masuk';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'asc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_perlengkapan_masuk LIKE '%$cari%' OR id_perlengkapan LIKE '%$cari%' ";

$text = "SELECT * FROM perlengkapan_masuk
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM perlengkapan_masuk $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	$perlengkapan=mysql_fetch_array(mysql_query("select*from perlengkapan where id_perlengkapan='$data[id_perlengkapan]'"));
	$row[] = array(
		'id_perlengkapan_masuk'=>$data['id_perlengkapan_masuk'],
		'perlengkapan'=>$perlengkapan['nama_perlengkapan'],
		'jumlah'=>$data['jumlah'],
		'waktu_input'=>$data['waktu_input'],
		'id_staf'=>$data['id_staf'],
		'hapus'=>"<a href=\"controller.php?delete=hperlengkapan_masuk&id_perlengkapan_masuk=$data[id_perlengkapan_masuk]\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_perlengkapan_masuk] ?');\"><img src='../images/cancel.png'></a>"
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>