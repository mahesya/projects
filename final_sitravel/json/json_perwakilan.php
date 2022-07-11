<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_perwakilan';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_perwakilan LIKE '%$cari%' OR nama LIKE '%$cari%'";

$text = "SELECT * FROM perwakilan
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM perwakilan $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	
	$staf=mysql_fetch_array(mysql_query("select * from user_damtour where id_staf='$data[id_staf]'"));
	$row[] = array(
		'id_perwakilan'=>$data['id_perwakilan'],
		'id_staf'=>$data['id_staf']. "-" .$staf['nama'],
		'nama'=>$data['nama'],
		'jenis_kelamin'=>$data['jenis_kelamin'],
		'alamat'=>$data['alamat'],
		'provinsi'=>$data['provinsi'],
		'email'=>$data['email'],
		'no_telp'=>$data['no_telp'],
		'edit'=>"<a href='?p=eperwakilan&id_perwakilan=$data[id_perwakilan]'><img src='../images/pencil.png'></a>",
		'detail'=>"<a href='?p=dperwakilan&id_perwakilan=$data[id_perwakilan]'><img src='../images/search.png'></a>",
		'hapus'=>"<a href=\"controller.php?delete=hperwakilan&id_perwakilan=$data[id_perwakilan]\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_perwakilan] ?');\"><img src='../images/cancel.png'></a>"
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>