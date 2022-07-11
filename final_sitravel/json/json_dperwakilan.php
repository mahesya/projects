<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_pendaftaran';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_perwakilan='$_GET[id_perwakilan]'";

$text = "SELECT * FROM pendaftaran_perwakilan
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM pendaftaran_perwakilan $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	
	$row[] = array(
		'id_pendaftaran'=>$data['id_pendaftaran'],
		'id_perwakilan'=>$data['id_perwakilan'],
		'id_jenis'=>$data['id_jenis'],
		'tanggal_daftar'=>$data['tanggal_daftar'],
		'edit'=>"<a href='?p=edperwakilan&id_pendaftaran=$data[id_pendaftaran]'><img src='../images/pencil.png'></a>",
		'hapus'=>"<a href=\"controller.php?delete=hdperwakilan&id_pendaftaran=$data[id_pendaftaran]\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_pendaftaran] ?');\"><img src='../images/cancel.png'></a>"
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>