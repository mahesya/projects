<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_video';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_video LIKE '%$cari%' OR id_staf LIKE '%$cari%'";

$text = "SELECT * FROM video
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM video $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	
	$row[] = array(
		'id_video'=>$data['id_video'],
		'id_staf'=>$data['id_staf'],
		'video'=>htmlentities($data['video']),
		'keterangan'=>$data['keterangan'],
		'edit'=>"<a href='?p=evideo&id_video=$data[id_video]'class=\"easyui-linkbutton\"><img src='../images/pencil.png'></a>",
		'hapus'=>"<a href=\"controller.php?delete=hvideo&id_video=$data[id_video]\" class=\"easyui-linkbutton\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_video] ?');\"><img src='../images/cancel.png'></a>"
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>