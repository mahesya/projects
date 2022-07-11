<?php 
include '../include/config.php';
include '../include/lib.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_keuangan';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'asc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_keuangan LIKE '%$cari%' OR uraian_transaksi LIKE '%$cari%' ";

$text = "SELECT * FROM keuangan_masuk
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM keuangan_masuk $where"));
$row = array();	

$criteria = mysql_query($text);
while($data=mysql_fetch_array($criteria))
{	
	$row[] = array(
		'id_keuangan'=>$data['id_keuangan'],
		'id_staf'=>$data['id_staf'],
		'penyetor'=>$data['penyetor'],
		'uraian_transaksi'=>$data['uraian_transaksi'],
		'jumlah'=>format_angka($data['jumlah']),
		'kurs'=>$data['kurs'],
		'cara_bayar'=>$data['cara_bayar'],
		'keterangan'=>$data['keterangan'],
		'waktu_input'=>$data['waktu_input'],
		'keterangan'=>$data['keterangan'],
		'id_staf'=>$data['id_staf'],
		'edit'=>"<a href='?p=ekeuangan_masuk&id_keuangan=$data[id_keuangan]'><img src='../images/pencil.png'></a>",
		'cetak'=>"<a href=\"controller.php?act=cetak_keuangan_masuk&id_keuangan=$data[id_keuangan]\"target=\"_blank\" ><img src='../images/print.png'></a>",
		'hapus'=>"<a href=\"controller.php?delete=hkeuangan_masuk&id_keuangan=$data[id_keuangan]\" onclick=\" return confirm('Yakin Mau Menghapus $data[id_keuangan] ?');\"><img src='../images/cancel.png'></a>"
	);
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>