<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_staf';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'asc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_staf LIKE '%$cari%' OR nama LIKE '%$cari%' ";

$text = "SELECT * FROM user_damtour
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM user_damtour $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	$jabatan=mysql_fetch_array(mysql_query("select*from jabatan where id_jabatan='$data[id_jabatan]'"));
if ($data['status']=='OFFLINE'){
	$status="<font color=\"#FFFFFF\" style='background-color: #ff0000'>&nbsp;OFFLINE&nbsp;</font>";}
	else if
		($data['status']=='ONLINE'){
	$status="<font color=\"yellow\" style='background-color: #009900'>&nbsp;ONLINE&nbsp;</font>";
		}
	$row[] = array(
		'id_staf'=>$data['id_staf'],
		'nama'=>$data['nama'],
		'jenis_kelamin'=>$data['jenis_kelamin'],
		'foto'=>"<img src='../upload/img_staf/$data[foto]' height=\"30\" width=\"30\">",
		'alamat'=>$data['alamat'],
		'no_telp'=>$data['no_telp'],
		'jabatan'=>$jabatan['jabatan'],
		'username'=>$data['username'],
		'password'=>$data['password'],
		'status'=>"<b>".$status."</b>",
		'edit'=>"<a href='?p=estaf&id_staf=$data[id_staf]'class=\"easyui-linkbutton\"><img src='../images/pencil.png'></a>",
		'hapus'=>"<a href=\"controller.php?delete=hstaf&id_staf=$data[id_staf]&foto=$data[foto]\"class=\"easyui-linkbutton\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_staf] ?');\"><img src='../images/cancel.png'></a>"
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>