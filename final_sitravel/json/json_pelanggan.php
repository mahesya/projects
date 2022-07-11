<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_pelanggan';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_pelanggan LIKE '%$cari%' OR nama_depan LIKE '%$cari%' OR nama_tengah LIKE '%$cari%' OR nama_belakang LIKE '%$cari%'";

$text = "SELECT * FROM pelanggan
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM pelanggan $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	if ($data['status_registrasi']=='UNREGISTERED'){
	$row[] = array(
		'id_pelanggan'=>$data['id_pelanggan'],
		'nama_pelanggan'=>$data['nama_depan'].' '.$data['nama_tengah'].' '.$data['nama_belakang'],
		'jenis_kelamin'=>$data['jenis_kelamin'],
		'status'=>"<font color='#FF0000'><b>$data[status_registrasi]</b></font>",
		'detail'=>"<a href='?p=dpelanggan&id_pelanggan=$data[id_pelanggan]'><img src='../images/search.png'></a>",
		'validasi'=>"<a href='?p=validasi&id_pelanggan=$data[id_pelanggan]'><img src='../images/ok.png'></a>",
		'edit'=>"<a href='?p=epelanggan&id_pelanggan=$data[id_pelanggan]'><img src='../images/pencil.png'></a>",
		'hapus'=>"<a href=\"controller.php?delete=hpelanggan&id_pelanggan=$data[id_pelanggan]\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_pelanggan] ?');\"><img src='../images/cancel.png'></a>"
	);}
	if ($data['status_registrasi']=='REGISTERED'){
	$row[] = array(
		'id_pelanggan'=>$data['id_pelanggan'],
		'nama_pelanggan'=>$data['nama_depan'].' '.$data['nama_tengah'].' '.$data['nama_belakang'],
		'jenis_kelamin'=>$data['jenis_kelamin'],
		'status'=>"<font color='#00CC00'><b>$data[status_registrasi]</b></font>",
		'detail'=>"<a href='?p=dpelanggan&id_pelanggan=$data[id_pelanggan]'><img src='../images/search.png'></a>",
		'validasi'=>"<img src='../images/validated.png'>",
		'edit'=>"<a href='?p=epelanggan&id_pelanggan=$data[id_pelanggan]'><img src='../images/pencil.png'></a>",
		'hapus'=>"<a href=\"controller.php?delete=hpelanggan&id_pelanggan=$data[id_pelanggan]\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_pelanggan] ?');\"><img src='../images/cancel.png'></a>"
	);}
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>