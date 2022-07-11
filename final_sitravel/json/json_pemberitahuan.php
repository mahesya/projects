<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_pemberitahuan';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_pemberitahuan LIKE '%$cari%' OR pemberitahuan LIKE '%$cari%' OR judul_pemberitahuan LIKE '%$cari%' ";

$text = "SELECT * FROM pemberitahuan
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM pemberitahuan $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	

	$row[] = array(
		'id_pemberitahuan'=>$data['id_pemberitahuan'],
		'id_staf'=>$data['id_staf'],
		'judul_pemberitahuan'=>$data['judul_pemberitahuan'],
		'pemberitahuan'=>htmlentities($data['pemberitahuan']),
		'waktu_kirim'=>$data['waktu_kirim'],
		'edit'=>"<a href='?p=epemberitahuan&id_pemberitahuan=$data[id_pemberitahuan]'><img src='../images/pencil.png'></a>",
		'hapus'=>"<a href=\"controller.php?delete=hpemberitahuan&id_pemberitahuan=$data[id_pemberitahuan]\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_pemberitahuan] - $data[judul_pemberitahuan] ?');\"><img src='../images/cancel.png'></a>"
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>