<?php 
include '../include/config.php';
include '../include/lib.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_produk';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_produk LIKE '%$cari%' OR bulan_keberangkatan LIKE '%$cari%' ";

$text = "SELECT * FROM produk
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM produk $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	$staf=mysql_fetch_array(mysql_query("select*from user_damtour where id_staf='$data[id_staf]'"));
	$row[] = array(
		'id_produk'=>$data['id_produk'],
		'jenis_produk'=>$data['jenis_produk'],
		'jenis_paket'=>$data['jenis_paket'],
		'lama_perjalanan'=>$data['lama_perjalanan'],
		'biaya'=>format_angka($data['biaya']),
		'tanggal_keberangkatan'=>$data['tanggal_keberangkatan'],
		'bulan_keberangkatan'=>$data['bulan_keberangkatan'],
		'pelunasan'=>$data['pelunasan'],
		'id_staf'=>$staf['nama'],
		'keterangan'=>$data['keterangan'],
		'edit'=>"<a href='?p=eproduk&id_produk=$data[id_produk]'class=\"easyui-linkbutton\"><img src='../images/pencil.png'></a>",
		'hapus'=>"<a href=\"controller.php?delete=hproduk&id_produk=$data[id_produk]\"class=\"easyui-linkbutton\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_produk] ?');\"><img src='../images/cancel.png'></a>"
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>