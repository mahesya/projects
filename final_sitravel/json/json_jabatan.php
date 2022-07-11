<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_jabatan';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_jabatan LIKE '%$cari%' OR jabatan LIKE '%$cari%'";

$text = "SELECT * FROM jabatan
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM jabatan $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	
	$row[] = array(
		'id_jabatan'=>$data['id_jabatan'],
		'jabatan'=>$data['jabatan'],
		'edit'=>"<a href='?p=ejabatan&id_jabatan=$data[id_jabatan]'><img src='../images/pencil.png'></a>",
		'hapus'=>"<a href=\"controller.php?delete=hjabatan&id_jabatan=$data[id_jabatan]\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_jabatan] ?');\"><img src='../images/cancel.png'></a>"
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>