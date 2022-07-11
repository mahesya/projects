<?php
error_reporting(0);
include ('Cezpdf.php');
include'../sit/include/lib.php';
$pdf = new Cezpdf();
$all=$pdf->openObject();
$pdf->line(10,50,578,50);
$pdf->addText(30,34,8,'Dicetak Tanggal : '.date('d-m-Y , H:i:s'));

$pdf->closeObject();


mysql_connect("localhost","root","");
mysql_select_db("sitravel");

$sql=mysql_query("select * from pembayaran where id_pelanggan='000018'");
$total_bayar=mysql_query("SELECT SUM(angsuran) as totbayar FROM pembayaran where id_pelanggan = '000018'");
							  $jml_bayar=mysql_fetch_array($total_bayar);
							  $where = " WHERE pelanggan.id_produk=produk.id_produk and (id_pelanggan = '000018') ";

							$text = "SELECT * FROM pelanggan,produk $where";
							$biaya = mysql_query($text);
							$sbiaya=mysql_fetch_array($biaya);
							$sisabayar=$sbiaya['biaya'] - $jml_bayar['totbayar'];
$i=1;
while($r=mysql_fetch_array($sql)){
	$data[$i]=array('No'=>$i,
					'ID Pembayaran'=>$r[id_pembayaran],
					'ID Pelanggan'=>$r[id_pelanggan],
					'Tanggal Pembayaran'=>$r[tgl_bayar],
					'Angsuran'=>format_angka($r['angsuran']));
					$i++;
					}
	$options=array('shaded'=>0,'width'=>500);
	$pdf->ezImage("images/kop.jpg",0,550,'none','center');
	$pdf->ezText(" Nama Jama'ah :  <u>$sbiaya[nam_pelanggan]</u>\n\n");
	$pdf->ezTable($data,'',"<b>Data Pembayaran Jama'ah</b>\n",$options); 
	$pdf->ezText("\n\n Biaya Paket :  Rp ".format_angka($sbiaya['biaya']));
	$pdf->ezText("\n Total Pembayaran Anda :  Rp ".format_angka($jml_bayar['totbayar']));
	$pdf->ezText("\n Sisa Pembayaran Yang Harus Anda Bayar :   Rp ".format_angka($sisabayar));
	$pdf->addObject($all,'all');
$pdf->ezStartPageNumbers(320,15,8);
$pdf->ezStream();
?>