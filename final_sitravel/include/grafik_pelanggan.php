<?php
error_reporting(0);
include'config.php';
?>

		<script type="text/javascript" src="../HighChart/jgrafik.js"></script>
		<style type="text/css">
${demo.css}
		</style>
        <?php 
		
		$tahun=$_POST['tahun'];
		
		$januari = mysql_query("SELECT * FROM pelanggan WHERE w_input LIKE '$tahun-01-%'");
		$laki_laki1 = 0;
		$perempuan1 = 0;
		
		while ($show = mysql_fetch_array($januari)) { 	
			if ($show['jenis_kelamin']=="Laki-Laki"){
				$laki_laki1++;
			}
			elseif ($show['jenis_kelamin']=="Perempuan"){
				$perempuan1++;
			}
		}
		$februari = mysql_query("SELECT * FROM pelanggan WHERE w_input LIKE '$tahun-02-%'");
		$laki_laki2 = 0;
		$perempuan2 = 0;
		
		while ($show = mysql_fetch_array($februari)) { 	
			if ($show['jenis_kelamin']=="Laki-Laki"){
				$laki_laki2++;
			}
			elseif ($show['jenis_kelamin']=="Perempuan"){
				$perempuan2++;
			}
		}
		$maret = mysql_query("SELECT * FROM pelanggan WHERE w_input LIKE '$tahun-03-%'");
		$laki_laki3 = 0;
		$perempuan3 = 0;
		
		while ($show = mysql_fetch_array($maret)) { 	
			if ($show['jenis_kelamin']=="Laki-Laki"){
				$laki_laki3++;
			}
			elseif ($show['jenis_kelamin']=="Perempuan"){
				$perempuan3++;
			}
		}
		$april = mysql_query("SELECT * FROM pelanggan WHERE w_input LIKE '$tahun-04-%'");
		$laki_laki4 = 0;
		$perempuan4 = 0;
		
		while ($show = mysql_fetch_array($april)) { 	
			if ($show['jenis_kelamin']=="Laki-Laki"){
				$laki_laki4++;
			}
			elseif ($show['jenis_kelamin']=="Perempuan"){
				$perempuan4++;
			}
		}
		$mei = mysql_query("SELECT * FROM pelanggan WHERE w_input LIKE '$tahun-05-%'");
		$laki_laki5 = 0;
		$perempuan5 = 0;
		
		while ($show = mysql_fetch_array($mei)) { 	
			if ($show['jenis_kelamin']=="Laki-Laki"){
				$laki_laki5++;
			}
			elseif ($show['jenis_kelamin']=="Perempuan"){
				$perempuan5++;
			}
		}
		$juni = mysql_query("SELECT * FROM pelanggan WHERE w_input LIKE '$tahun-06-%'");
		$laki_laki6 = 0;
		$perempuan6 = 0;
		
		while ($show = mysql_fetch_array($juni)) { 	
			if ($show['jenis_kelamin']=="Laki-Laki"){
				$laki_laki6++;
			}
			elseif ($show['jenis_kelamin']=="Perempuan"){
				$perempuan6++;
			}
		}
		$juli = mysql_query("SELECT * FROM pelanggan WHERE w_input LIKE '$tahun-07-%'");
		$laki_laki7 = 0;
		$perempuan7 = 0;
		
		while ($show = mysql_fetch_array($juli)) { 	
			if ($show['jenis_kelamin']=="Laki-Laki"){
				$laki_laki7++;
			}
			elseif ($show['jenis_kelamin']=="Perempuan"){
				$perempuan7++;
			}
		}
		$agustus = mysql_query("SELECT * FROM pelanggan WHERE w_input LIKE '$tahun-08-%'");
		$laki_laki8 = 0;
		$perempuan8 = 0;
		
		while ($show = mysql_fetch_array($agustus)) { 	
			if ($show['jenis_kelamin']=="Laki-Laki"){
				$laki_laki8++;
			}
			elseif ($show['jenis_kelamin']=="Perempuan"){
				$perempuan8++;
			}
		}
		$september = mysql_query("SELECT * FROM pelanggan WHERE w_input LIKE '$tahun-09-%'");
		$laki_laki9 = 0;
		$perempuan9 = 0;
		
		while ($show = mysql_fetch_array($september)) { 	
			if ($show['jenis_kelamin']=="Laki-Laki"){
				$laki_laki9++;
			}
			elseif ($show['jenis_kelamin']=="Perempuan"){
				$perempuan9++;
			}
		}
		$oktober = mysql_query("SELECT * FROM pelanggan WHERE w_input LIKE '$tahun-10-%'");
		$laki_laki10 = 0;
		$perempuan10 = 0;
		
		while ($show = mysql_fetch_array($oktober)) { 	
			if ($show['jenis_kelamin']=="Laki-Laki"){
				$laki_laki10++;
			}
			elseif ($show['jenis_kelamin']=="Perempuan"){
				$perempuan10++;
			}
		}
		$november = mysql_query("SELECT * FROM pelanggan WHERE w_input LIKE '$tahun-11-%'");
		$laki_laki11 = 0;
		$perempuan11 = 0;
		
		while ($show = mysql_fetch_array($november)) { 	
			if ($show['jenis_kelamin']=="Laki-Laki"){
				$laki_laki11++;
			}
			elseif ($show['jenis_kelamin']=="Perempuan"){
				$perempuan11++;
			}
		}
		$desember = mysql_query("SELECT * FROM pelanggan WHERE w_input LIKE '$tahun-12-%'");
		$laki_laki12 = 0;
		$perempuan12 = 0;
		
		while ($show = mysql_fetch_array($desember)) { 	
			if ($show['jenis_kelamin']=="Laki-Laki"){
				$laki_laki12++;
			}
			elseif ($show['jenis_kelamin']=="Perempuan"){
				$perempuan12++;
			}
		}
		
	?>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: "Pelanggan Yang Mendaftar Di PT. Do'a Arafah Madinah"
        },
        subtitle: {
            text: 'Sumber: Data Pelanggan'
        },
        xAxis: {
            categories: [
                'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Pelanggan'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.0f} Orang</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Laki-Laki',
            data: [<?php echo "$laki_laki1,$laki_laki2,$laki_laki3,$laki_laki4,$laki_laki5,$laki_laki6,$laki_laki7,$laki_laki8,$laki_laki9,$laki_laki10,$laki_laki11,$laki_laki12";?>]

        }, {
            name: 'Perempuan',
            data: [<?php echo "$perempuan1,$perempuan2,$perempuan3,$perempuan4,$perempuan5,$perempuan6,$perempuan7,$perempuan8,$perempuan9,$perempuan10,$perempuan11,$perempuan12";?>]

        }]
    });
});
		</script>

<script src="../HighChart/highcharts.js"></script>
<script src="../HighChart/exporting.js"></script>
<?php echo"<form action=\"\" method=\"POST\">
		<select name=\"tahun\">
		<option value=\"\" selected>Tahun
";
		$sekarang=(integer)date("Y");
		for($i=$sekarang; $i>($sekarang-10); $i--)
		print("<option value='$i'>$i");
		echo"
		</option></select>
	</td>
	<td>
		<input type=\"submit\" value=\"Submit\">
		</form>";?>

<div id="container" ></div>

