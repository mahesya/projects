<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_pertanyaan';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_pertanyaan LIKE '%$cari%' OR pertanyaan LIKE '%$cari%'";

$text = "SELECT * FROM pertanyaan
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM pertanyaan $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	$penanya=mysql_fetch_array(mysql_query("select*from penanya where id_penanya='$data[id_penanya]'"));
	$row[] = array(
		'id_pertanyaan'=>$data['id_pertanyaan'],
		'id_penanya'=>$data['id_penanya']." - ".$penanya['nama'],
		'pertanyaan'=>$data['pertanyaan'],
		'waktu_kirim'=>$data['waktu_kirim'],
		'jawaban'=>$data['jawaban'],
		'jawab'=>"<a href='?p=epertanyaan&id_pertanyaan=$data[id_pertanyaan]'><img src='../images/pencil.png'></a>",
			);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>