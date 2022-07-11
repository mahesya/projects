<?php 
include '../include/config.php';
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$sort = isset($_POST['sort']) ? strval($_POST['sort']) : 'id_konfirmasi';
$order = isset($_POST['order']) ? strval($_POST['order']) : 'desc';
$cari = isset($_POST['cari']) ? mysql_real_escape_string($_POST['cari']) : '';

$offset = ($page-1) * $rows;

$where = " WHERE id_konfirmasi LIKE '%$cari%' OR id_pendaftaran LIKE '%$cari%'";

$text = "SELECT * FROM konfirmasi_pembayaran
	$where 
	ORDER BY $sort $order
	LIMIT $rows OFFSET $offset";

$result = array();
$result['total'] = mysql_num_rows(mysql_query("SELECT * FROM konfirmasi_pembayaran $where"));
$row = array();	

$criteria = mysql_query($text);
							$jml_des="0";
                            $pem_des=",";
                            $pem_rb=".";
while($data=mysql_fetch_array($criteria))
{	
	if ($data['status']==0){
                        $status='Belum Dicek Oleh Staf Administrasi';
                        $pendaftaran=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$data[id_pendaftaran]'"));
	$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$pendaftaran[id_pelanggan]'"));
	$produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$pendaftaran[id_produk]'"));
	$row[] = array(
		'id_pendaftaran'=>$data['id_pendaftaran'],
		'nama_pelanggan'=>"$pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]",
		'produk'=>$produk['jenis_produk'].' - '.$produk['jenis_paket'].' - '.$produk['tanggal_keberangkatan'].' - '.$produk['biaya'],
		'detail_pelanggan'=>"<a href='?p=dpelanggan&id_pelanggan=$pelanggan[id_pelanggan]'><img src='../images/search.png'></a>",
		'jumlah'=>number_format($data['jumlah'],$jml_des,$pem_des,$pem_rb),
		'bukti'=>"<img src='../upload/img_bukti/$data[bukti]' width=30 height=30>",
		'waktu_kirim'=>$data['waktu_kirim'],
		'status'=>"<b><font color=grape>".$status."</font></b>",
		'valid'=>"<a href='?p=vkonfirmasi&id_konfirmasi=$data[id_konfirmasi]'><img src='../images/ok.png'></a>"
	);
                        
                      }else if ($data['status']==1){
                        $status='Data Valid';
                        $pendaftaran=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$data[id_pendaftaran]'"));
	$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$pendaftaran[id_pelanggan]'"));
	$produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$pendaftaran[id_produk]'"));
	$row[] = array(
		'id_pendaftaran'=>$data['id_pendaftaran'],
		'nama_pelanggan'=>"$pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]",
		'produk'=>$produk['jenis_produk'].' - '.$produk['jenis_paket'].' - '.$produk['tanggal_keberangkatan'].' - '.$produk['biaya'],
		'detail_pelanggan'=>"<a href='?p=dpelanggan&id_pelanggan=$pelanggan[id_pelanggan]'><img src='../images/search.png'></a>",
		'jumlah'=>number_format($data['jumlah'],$jml_des,$pem_des,$pem_rb),
		'bukti'=>"<img src='../upload/img_bukti/$data[bukti]' width=30 height=30>",
		'waktu_kirim'=>$data['waktu_kirim'],
		'status'=>"<b><font color=green>".$status."</font></b>",
		'valid'=>"<img src='../images/validated.png'>"
	);
                        
                      }else if ($data['status']==2){
                        $status='Data Tidak Valid';
                        $pendaftaran=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$data[id_pendaftaran]'"));
	$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$pendaftaran[id_pelanggan]'"));
	$produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$pendaftaran[id_produk]'"));
	$row[] = array(
		'id_pendaftaran'=>$data['id_pendaftaran'],
		'nama_pelanggan'=>"$pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]",
		'produk'=>$produk['jenis_produk'].' - '.$produk['jenis_paket'].' - '.$produk['tanggal_keberangkatan'].' - '.$produk['biaya'],
		'detail_pelanggan'=>"<a href='?p=dpelanggan&id_pelanggan=$pelanggan[id_pelanggan]'><img src='../images/search.png'></a>",
		'jumlah'=>number_format($data['jumlah'],$jml_des,$pem_des,$pem_rb),
		'bukti'=>"<img src='../images/cancel.png'>",
		'waktu_kirim'=>$data['waktu_kirim'],
		'status'=>"<b><font color=red>".$status."</font></b>",
		'valid'=>"<img src='../images/validated.png'>"
	);
                      }
	
}
$result=array_merge($result,array('rows'=>$row));
echo json_encode($result);
?>