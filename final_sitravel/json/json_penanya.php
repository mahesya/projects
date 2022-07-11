<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_penanya';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_penanya LIKE '%$cari%' OR nama LIKE '%$cari%'";

$text = "SELECT * FROM penanya
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM penanya $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	
	$row[] = array(
		'id_penanya'=>$data['id_penanya'],
		'nama'=>$data['nama'],
		'email'=>$data['email'],
		'password'=>$data['password'],
		'status'=>$data['status_penanya'],
		'w_daftar'=>$data['waktu_daftar']
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>