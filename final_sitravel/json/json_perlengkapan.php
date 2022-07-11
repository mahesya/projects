<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_perlengkapan';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_staf LIKE '%$cari%' OR nama_perlengkapan LIKE '%$cari%' ";

$text = "SELECT * FROM perlengkapan
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM perlengkapan $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	
	$row[] = array(
		'id_perlengkapan'=>$data['id_perlengkapan'],
		'nama_perlengkapan'=>$data['nama_perlengkapan'],
		'sisa'=>$data['sisa'],
		'waktu_update'=>$data['waktu_update'],
		'id_staf'=>$data['id_staf'],
		'edit'=>"<a href='?p=eperlengkapan&id_perlengkapan=$data[id_perlengkapan]'><img src='../images/pencil.png'></a>",
		'hapus'=>"<a href=\"controller.php?delete=hperlengkapan&id_perlengkapan=$data[id_perlengkapan]\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_perlengkapan] ?');\"><img src='../images/cancel.png'></a>"
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>