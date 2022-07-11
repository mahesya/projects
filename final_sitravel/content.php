<?php
error_reporting(0);
include'include/config.php';
include'include/lib.php';


if($_GET['p']==''){
	echo"
	<section class='wrapper'>
        <div class='slider-wrapper'>
            <div class='slider'>
                <div class='fs_loader'></div>
                <div class='slide'>
                    <!--1- slide background-->
                    <img src='images/fraction-slider/gadgets/laptop-lg.png' data-position='-30,550' data-in='bottom' data-delay='500' data-out='fade'  width='800' height='750'>                                     <!--3- laptop-->

                    <p class='para-new' data-position='10,600' data-in='top'  data-out='Right' data-delay=''>PT. DO'A ARAFAH MADINAH</p>
                </div>
                <div class='slide'>
                    <img src='images/fraction-slider/fraction_2.png' data-in='fade' data-delay='' data-out='fade' width='1920' height='auto'>     <!--2- slide background-->

                    <img src='images/fraction-slider/slider1.png' width='600' height='auto' data-position='8,1240' data-in='bottomLeft' data-delay='500' data-out='fade' style='width:auto; height:auto'>

                    <p class='claim light-pink' data-position='40,230' data-in='top'  data-out='left' data-delay='1800' data-ease-in='easeOutBounce'>Produk Damtour</p>

                    <p class='teaser turky small' data-position='150,230' data-in='left' data-out='left' data-delay='5500'><a href='?p=reguler'>Umroh Reguler</a></p>

                    <p class='teaser turky small' data-position='210,230'  data-in='left' data-out='left' data-delay='6500'><a href='?p=ppl'>Umroh Promo</a></p>

                    

                    <p class='teaser turky small' data-position='150,670' data-in='right' data-out='right' data-delay='5500'><a href='?p=pluswisata'>Umroh + Wisata</a></p>

                    <p class='teaser turky small' data-position='210,670' data-in='right' data-out='right' data-delay='6500'><a href='?p=haji'>Haji Khusus</a></p>

                </div>
                <div class='slide'>
                    <img src='images/fraction-slider/build.png' data-in='fade' data-out='fade' width='1920' height='auto'/>                                     <!--3- slide background-->

                    <p class='claim light-pink' data-position='30,250' data-in='top' data-out='top' data-ease-in='easeOutBounce' data-delay='1500'>Syi'ar Umrah Dan Haji</p>

                    <p class='claim  theme-colored' data-position='110,250' data-in='left' data-out='Right' data-delay='2500'>QS. 22:27</p>

                    <img src='images/fraction-slider/gadgets/laptop.png' width='456' height='272' data-position='103,1180' data-in='bottom' data-out='bottom' data-delay='400'>

                    <img src='images/fraction-slider/gadgets/mack.png' width='357' height='313' data-position='60,1040' data-in='top' data-out='bottom' data-delay='200'>

                    <img src='images/fraction-slider/gadgets/ipad.png' width='120' height='170' data-position='230,1030' data-in='left' data-delay='300' data-out='left'>

                    <img src='images/fraction-slider/gadgets/smartphone.png' width='70' height='140' data-position='270,1320' data-in='right' data-delay='300' data-out='right'>

                    <div class='para-2'	data-position='200,250' data-in='left' data-out='right' data-delay='3000'>
                        27. Dan berserulah kepada manusia untuk mengerjakan haji, niscaya mereka akan datang kepadamu dengan berjalan kaki, dan mengendarai unta yang kurus[984] yang datang dari segenap penjuru yang jauh.<br>
                        [984]Unta yang kurus menggambarkan jauh dan sukarnya yang ditempuh oleh jama'ah haji.
                    </div>

                    
                </div>
                <div class='slide'>
                    <img src='images/fraction-slider/fraction_6.png' data-in='fade' data-out='fade' width='1920' height='auto'>         <!--4- slide background-->

                    <p class='claim light-pink' data-position='50,1050' data-in='top'  data-out='top' data-ease-in='jswing'>Kami Pun Menyediakan:</p>

                    <p class='teaser turky' data-position='120,1180' data-in='left' data-delay='1500'><a href='?p=buatpassport'>Jasa Pembuatan Passport</a></p>

                    <p class='teaser turky' data-position='170,1180' data-in='left'  data-delay='3000'><a href='?p=buatvisa'>Jasa Pembuatan Visa</a></p>

                    <p class='teaser turky' data-position='220,1180' data-in='left'  data-delay='4500' data-out='none'><a href='?p=buatdokumen'>Jasa Pembuatan Dokumen</a></p>

                    <p class='teaser turky' data-position='270,1180' data-in='left' data-delay='5500' data-out='none'><a href='?p=tiketing'>Tiketing</a></p>

                    <img src='images/fraction-slider/slider2.png' width='480' height='480' data-position='-20,250' data-in='right' data-delay='500' data-out='fade' style='width:auto; height:auto'>

                    
                </div>
            </div>
        </div>
		<!--End Slider-->
		
		<!--briefcaset info service-->
		<section class='info_service'>
			<div class='container'>
				<div class='row sub_content'>
					<div class='rs_box'>
						<div class='col-sm-4 col-md-4 col-lg-4'>
							<div class='serviceBox_1'>
								<div class='icon_service'>
									<img src='images/kabah.png' width=25 height=40>
                                    <h3>Umroh Reguler</h3>
								</div>
								<div class='fr_content'>
									
									<a class='read' href='?p=reguler'><img src='images/search.png'> Lihat Detail</a>
								</div>
							</div>
						</div>
						
						<div class='col-sm-4 col-md-4 col-lg-4'>
							<div class='serviceBox_1'>
								<div class='icon_service'>
									<img src='images/kabah.png' width=25 height=40>
                                    <h3>Umroh Promo</h3>
								</div>
								<div class='fr_content'>
									
									<a class='read' href='?p=ppl'><img src='images/search.png'> Lihat Detail</a>
								</div>
							</div>
						</div>	

						<div class='col-sm-4 col-md-4 col-lg-4'>
							<div class='serviceBox_1'>
								<div class='icon_service'>
									<img src='images/kabah.png' width=25 height=40>
									<h3>Umroh Plus Wisata</h3>
								</div>
								<div class='fr_content'>
									
									<a class='read' href='?p=pluswisata'><img src='images/search.png'> Lihat Detail</a>
								</div>
							</div>
						</div>	
					
					</div>
				</div>
                <div class='row sub_content'>
					<div class='rs_box'>
						<div class='col-sm-4 col-md-4 col-lg-4'>
							<div class='serviceBox_1'>
								<div class='icon_service'>
                                    <img src='images/kabah.png' width=25 height=40>
                                    <h3> Haji Khusus</h3>
								</div>
								<div class='fr_content'>
									
									<a class='read' href='?p=haji'><img src='images/search.png'> Lihat Detail</a>
								</div>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</section>
		<!--end info service-->

		<!--Start recent work-->
		<section class='latest_work'>
			<div class='container'>
				<div class='row sub_content'>
					<div class='carousel-intro'>
						<div class='col-md-12'>
							<div class='dividerHeading'>
								<h4><span>Rekening Damtour</span></h4>
							</div>
							<div class='carousel-navi'>
								<div id='work-prev' class='arrow-left jcarousel-prev'><i class='fa fa-angle-left'></i></div>
								<div id='work-next' class='arrow-right jcarousel-next'><i class='fa fa-angle-right'></i></div>
							</div>
							<div class='clearfix'></div>
						</div>
					</div>
					
					<div class='jcarousel recent-work-jc'>
                        <ul class='jcarousel-list'>
                            <!-- Recent Work Item -->
                            <li class='col-sm-3 col-md-3 col-lg-3'>
                                <div class='recent-item'>
                                    <figure>
                                        <div class='touching medium'>
                                            <img src='images/portfolio/1_small.png' alt='' />
                                        </div>
                                        
                                        <figcaption class='item-description'>
                                            <h5>Bank Mandiri Syariah</h5>
                                            
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>

                            <!-- Recent Work Item -->
                            <li class='col-sm-3 col-md-3 col-lg-3'>
                                <div class='recent-item'>
                                    <figure>
                                        <div class='touching medium'>
                                            <img src='images/portfolio/2_small.png' alt='' />
                                        </div>
                                        
                                        <figcaption class='item-description'>
                                            <h5>Bank Mandiri</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>

                            <!-- Recent Work Item -->
                            <li class='col-sm-3 col-md-3 col-lg-3'>
                                <div class='recent-item'>
                                    <figure>
                                        <div class='touching medium'>
                                            <img src='images/portfolio/3_small.png' alt='' />
                                        </div>
                                        
                                        <figcaption class='item-description'>
                                            <h5>Bank BNI</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>

                            <!-- Recent Work Item -->
                            <li class='col-sm-3 col-md-3 col-lg-3'>
                                <div class='recent-item'>
                                    <figure>
                                        <div class='touching medium'>
                                            <img src='images/portfolio/4_small.png' alt='' />
                                        </div>
                                        
                                        <figcaption class='item-description'>
                                            <h5>Bank BRI</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>

                            <!-- Recent Work Item -->
                            <li class='col-sm-3 col-md-3 col-lg-3'>
                                <div class='recent-item'>
                                    <figure>
                                        <div class='touching medium'>
                                            <img src='images/portfolio/5_small.png' alt='' />
                                        </div>
                                        
                                        <figcaption class='item-description'>
                                            <h5>Bank BCA</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>

                            <!-- Recent Work Item -->
                            <li class='col-sm-3 col-md-3 col-lg-3'>
                                <div class='recent-item'>
                                    <figure>
                                        <div class='touching medium'>
                                            <img src='images/portfolio/6_small.png' alt='' />
                                        </div>
                                       
                                        <figcaption class='item-description'>
                                            <h5>Bank Permata Syariah</h5>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                        </ul>
					</div>
				</div>
			</div>
		</section>
		<!--Start recent work-->
		
		<section class='fetaure_bottom'>
			<div class='container'>
				<div class='row sub_content'>
					<div class='col-lg-6'>
                <div class='dividerHeading'>
                    <h4><span><i class='fa fa- fa-star'></i> Testimoni <i class='fa fa- fa-star'></i></span></h4>
                </div>
                <ul class='nav nav-tabs' id='myTab'>
                    <li class='active'><a data-toggle='tab' href='#testimoni'>Testimoni <i class='fa fa- fa-thumbs-up'></i></a></li>
                    
                </ul>

                <div class='tab-content clearfix' id='myTabContent'>
                    <div id='testimoni' class='tab-pane fade active in'>
                        <ul class='recent_tab_list'><marquee direction=\"down\" onmouseover=\"this.stop()\" onmouseout=\"this.start()\">";
                $query = mysql_query("SELECT * FROM testimoni where publish='Tampil' ORDER BY id_pendaftaran ASC");
                while ($row=mysql_fetch_array($query)){
                    $daftar=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$row[id_pendaftaran]'"));
                    $data=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$daftar[id_pelanggan]'"));
                    $namalengkap="$data[nama_depan] $data[nama_tengah] $data[nama_belakang]";echo"
                            <li>
                                <span><a href='#'><img alt='' src='images/pelanggan.png'></a></span>
                                <a href='#'>$namalengkap |$data[jenis_kelamin] |$data[kota]</a>
                                <i>($row[testimoni])</i>
                            </li>";
                            }
                            echo"</marquee>
                        </ul>
                    </div>                    
                </div>
            </div>					
					<!-- TESTIMONIALS -->
					<div class='col-lg-6 col-md-6'>
						<div class='dividerHeading'>
							<h4><span>Hitung Kurs</span></h4>
						</div>";
                 
				 
						 $r1=mysql_fetch_array(mysql_query("select*from kurs"));
						
		
echo"<form method=POST>
						<input type=hidden name='krupiah1' value='$r1[kurs]'>
						<div id='testimonial-carousel' class='testimonial carousel slide'>
							<div class='carousel-inner'>
								<div class='active item'>
									<div class='testimonial-item'>
                                    <p align='center'><u><b>Note :</b>Kurs Mengikuti Bank Mandiri +Rp200,-</u></p>
										<div class='comment_form'>
                               <div class='row'>
                                   <div class='col-sm-4'>
                                       Jumlah Yang Ditukar<input class='col-lg-4 col-md-4 form-control' name='jumlah' type='number'>
                                   </div>
                                   <div class='col-sm-4'>
                                       Rupiah/USD<input class='col-lg-4 col-md-4 form-control' type='text' name='krupiah1' value='";echo format_angka($r1['kurs']);echo"' disabled>
                                   </div>
                                   
                               </div>
                            </div>
                            <button type=\"submit\" name=\"submit\" class='btn btn-lg btn-default' required=\"required\">Hitung</button>
									</div>
								</div></form>
								<div class='dividerHeading'>
							<h4><span>Hasil</span></h4>";
 
		
		$jumlah=$_POST['jumlah'];
		$krupiah1=$_POST['krupiah1']+200;
		$ttl_usd=($jumlah*$krupiah1);
		
		
		
		echo"
                            <p align='center'>[Jumlah Yang Ditukar] :<b><font color=#000066> ";echo format_angka($jumlah);echo"</font></b></p>
                            <p>[USD/Dollar] :<b><font color=#000066>Rp ";echo format_angka($ttl_usd);echo",-</font></b></p>
                            
						</div>
							</div>
							
						</div>
					</div><!-- TESTIMONIALS END -->
				</div>
			</div>
		</section>
	";
}
if($_GET['p']=='profil'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Profil</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Tentang Kami</a></li>
								<li>Profil</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class='content'>
			<div class='container'>
			<div class=\"row sub_content\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<div class=\"dividerHeading\">
							<h4><span>Profil Perusahaan</span></h4>

						</div>
						<p style='text-align:justify;'>DAMTOUR singkatan dari PT. Do'a 'Arafah Madinah yang
dipimpin oleh Ust. Hambali Abbas.S.Pdi (Direktur Utama)
 yang berkedudukan di
GRAHA DAMTOUR No.120 Jl. KH.Abdullah Syafei (Casablanca) Bukit Duri - Tebet - Jakarta Selatan.</p>
					</div>
				</div>


			</div>
		</section>
	</section>

		";
}
if($_GET['p']=='visi'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Visi dan Misi</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Tentang Kami</a></li>
								<li>Visi dan Misi</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class='content'>
			<div class='container'>
			<div class=\"row sub_content\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<div class=\"dividerHeading\">
							<h4><span>Visi dan Misi</span></h4>

						</div>
						<p style='text-align:justify;'>
				<b>Visi Damtour</b><br> 1.	Menjadi travel amanah yang berkelas dunia, terdepan dalam pelayanan, digandrungi banyak orang dari berbagai kalangan.
<br><br><b>Misi Damtour</b> <br>1.	Menjadi bagian dari pelayan tamu-tamu Allah dengan dasar keikhlasan dan profesionalisme.<br>
2.	Membantu seluruh jama’ah untuk mewujudkan cita-cita mulia yakni berangkat umrah dan haji.
</p>
						</div>
				</div>


			</div>
		</section>
	</section>
";
}
if($_GET['p']=='legalitas'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Legalitas Perusahaan</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Tentang Kami</a></li>
								<li>Legalitas Perusahaan</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class='content'>
			<div class='container'>
			<div class=\"row sub_content\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<div class=\"dividerHeading\">
							<h4><span>Legalitas Perusahaan</span></h4>

						</div>
						<table border='0' align='center' style=' width:auto;'>
	<tbody>
		<tr>
			<td width='27%' align='left'>Nama Perusahaan</td>
			<td width='14%' align='left'>:</td>
			<td width='59%' align='left'>PT. Do&#39;a &#39;Arafah Madinah</td>
		</tr>
		<tr>
			<td align='left'>Bidang Usaha</td>
			<td width='14%' align='left'>:</td>
			<td align='left'>Penyelenggara Perjalanan Ibadah Umrah dan Haji Plus</td>
		</tr>
		<tr>
			<td align='left'>Alamat</td>
			<td width='14%' align='left'>:</td>
			<td align='left'>Graha Damtour, JL. KH. Abdullah Syafei No.120 Bukit Duri-Tebet- Jakarta Selatan</td>
		</tr>
		<tr>
			<td align='left'>No. Telepon</td>
			<td width='14%' align='left'>:</td>
			<td align='left'>021-7710670</td>
		</tr>
		<tr>
			<td align='left'>No. Telepon</td>
			<td width='14%' align='left'>:</td>
			<td align='left'>+62877 1444 2525</td>
		</tr>
		<tr>
			<td align='left'>Email</td>
			<td width='14%' align='left'>:</td>
			<td align='left'>damtour@hotmail.com</td>
		</tr>
		<tr>
			<td align='left'>Website</td>
			<td width='14%' align='left'>:</td>
			<td align='left'>www.damtour.co.id</td>
		</tr>
		<tr>
			<td align='left'>Komisaris</td>
			<td width='14%' align='left'>:</td>
			<td align='left'>H.Syamsul Riadi</td>
		</tr>
		<tr align='left'>
			<td>Direktur Utama</td>
			<td width='14%'>:</td>
			<td>Hambali Abbas, S.Pd.I</td>
		</tr>
		<tr align='left'>
			<td>ITUP Pariwisata</td>
			<td width='14%'>:</td>
			<td>3044/2011</td>
		</tr>
		<tr align='left'>
			<td>SK. Menteri Hukum dan HAM</td>
			<td width='14%'>:</td>
			<td>AHU-58767.AH.01.01 Tahun 2011</td>
		</tr>
		<tr align='left'>
			<td>SITU(Surat Izin Tempat Usaha)</td>
			<td width='14%'>:</td>
			<td>SK.1624/1/2011</td>
		</tr>
		<tr align='left'>
			<td>Akta</td>
			<td width='14%'>:</td>
			<td>No. 15 Tanggal 26 September 2011</td>
		</tr>
		<tr align='left'>
			<td>SK. Terdaftar</td>
			<td width='14%'>:</td>
			<td>PEM-03173/WPJ.20/KP.0903/2011</td>
		</tr>
		<tr align='left'>
			<td>NPWP</td>
			<td width='14%'>:</td>
			<td>03.171.518.8.008.000</td>
		</tr>
		<tr align='left'>
			<td>ASITA</td>
			<td width='14%'>:</td>
			<td>1540/VI/ASITA Jakarta/2012</td>
		</tr>
		<tr align='left'>
			<td>Izin Umrah</td>
			<td width='14%'>:</td>
			<td>D/196 Tahun 2014</td>
		</tr>
		<tr>
			<td align='left'>Izin Haji</td>
			<td width='14%' align='left'>:</td>
			<td align='left'>D/238 Tahun 2010 (AMSA NUR)</td>
		</tr>
	</tbody>
</table>	
						</div>
				</div>


			</div>
		</section>
	</section>
";
}
if($_GET['p']=='cek_porsi'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Cek No. Porsi Haji</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Aplikasi</a></li>
								<li>Cek No. Porsi Haji</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class='content'>
			<div class='container'>
			<div class=\"row sub_content\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<div class=\"dividerHeading\">
							<h4><span>No. Porsi Haji</span></h4>

						</div>
						<form class='webform-client-form' enctype='multipart/form-data' action='http://haji.kemenag.go.id/v2/node/955358' method='post' target='_blank' id='webform-client-form-955358' accept-charset='UTF-8'><div><div class='form-item webform-component webform-component-textfield' id='webform-component-nomor-porsi'>
  <label for='edit-submitted-nomor-porsi'>Nomor Porsi <span class='form-required' title='Bagian ini harus diisi.'>:</span></label>
 <input type='text' id='edit-submitted-nomor-porsi' name='submitted[nomor_porsi]' value='' size='25' maxlength='10' class='form-text required' />
 <div class='description'>* Perkiraan berangkat dapat berubah, sesuai dengan regulasi.</div>
</div>
<input type='hidden' name='details[sid]' />
<input type='hidden' name='details[page_num]' value='1' />
<input type='hidden' name='details[page_count]' value='1' />
<input type='hidden' name='details[finished]' value='0' />
<input type='hidden' name='form_build_id' value='form-ntLA__aj_aArlNfrmB64sP_kKtgMaF7D7HvSTBKTiOU' />
<input type='hidden' name='form_id' value='webform_client_form_955358' />
<div class='form-actions form-wrapper' id='edit-actions--2'><span class='button edit-submit--2'>
    <input type='submit' name='op'  value='CEK'  class='btn btn-lg btn-default' />
    </span>
</form>
					</div>
				</div>


			</div>
		</section>
	</section>
";
}
if($_GET['p']=='perwakilan'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Perwakilan</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Tentang Kami</a></li>
								<li>Perwakilan</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
<section class='content typography'>
			<div class='container'>
		<div class='row sub_content'>
            <div class='col-lg-12 col-md-12 col-sm-12'>
                <div class='dividerHeading'>
                    <h4><span>Perwakilan Damtour</span></h4>
                </div>
            </div>

            <div class='col-lg-12 col-md-12 col-sm-12'>
                <div id='accordion' class='panel-group accordion'><!-- Accordians -->
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#1' data-parent='#accordion' data-toggle='collapse'>
                                    Sumatera
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='1'>";
                            $sql=mysql_query("SELECT*FROM perwakilan where provinsi LIKE '%Sumatera%'");
	while($data=mysql_fetch_array($sql)){
                      echo"<ul style=\"text-align: justify;\" class='panel-body'><table>
				<tr>
					<td><b>Pimpinan  : </b> $data[nama]
					</td>
				</tr>
				<tr>
					<td><b>Jenis Perwakilan  : </b> ";
    $sql2=mysql_query("select*from pendaftaran_perwakilan where id_perwakilan='$data[id_perwakilan]'");
    while($data2=mysql_fetch_array($sql2)){
        $jenis=mysql_fetch_array(mysql_query("select*from jenis_perwakilan where id_jenis='$data2[id_jenis]'"));
        echo"$jenis[perwakilan];";}  
    echo"
					</td>
				</tr>
				<tr>
					<td><b>Alamat : </b> $data[alamat] - $data[provinsi]
					</td>
				</tr>
				
			</table></ul><hr>";
	}echo"
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#2' data-parent='#accordion' data-toggle='collapse'>
                                    Riau
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='2'>
                            ";
                            $sql=mysql_query("SELECT*FROM perwakilan where provinsi LIKE '%Riau%'");
	while($data=mysql_fetch_array($sql)){
                      echo"<ul style=\"text-align: justify;\" class='panel-body'><table>
				<tr>
					<td><b>Pimpinan  : </b> $data[nama]
					</td>
				</tr>
				<tr>
					<td><b>Jenis Perwakilan  : </b> ";
    $sql2=mysql_query("select*from pendaftaran_perwakilan where id_perwakilan='$data[id_perwakilan]'");
    while($data2=mysql_fetch_array($sql2)){
        $jenis=mysql_fetch_array(mysql_query("select*from jenis_perwakilan where id_jenis='$data2[id_jenis]'"));
        echo"$jenis[perwakilan];";}  
    echo"</td>
				</tr>
				<tr>
					<td><b>Alamat : </b> $data[alamat] - $data[provinsi]
					</td>
				</tr>
				
			</table></ul><hr>";
	}echo"
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#3' data-parent='#accordion' data-toggle='collapse'>
                                    Jakarta
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='3'>
                            ";
                            $sql=mysql_query("SELECT*FROM perwakilan where provinsi LIKE '%Jakarta%'");
	while($data=mysql_fetch_array($sql)){
                      echo"<ul style=\"text-align: justify;\" class='panel-body'><table>
				<tr>
					<td><b>Pimpinan  : </b> $data[nama]
					</td>
				</tr>
				<tr>
					<td><b>Jenis Perwakilan  : </b>  ";
    $sql2=mysql_query("select*from pendaftaran_perwakilan where id_perwakilan='$data[id_perwakilan]'");
    while($data2=mysql_fetch_array($sql2)){
        $jenis=mysql_fetch_array(mysql_query("select*from jenis_perwakilan where id_jenis='$data2[id_jenis]'"));
        echo"$jenis[perwakilan];";}  
    echo"</td>
				</tr>
				<tr>
					<td><b>Alamat : </b> $data[alamat] - $data[provinsi]
					</td>
				</tr>
				
			</table></ul><hr>";
	}echo"
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#4' data-parent='#accordion' data-toggle='collapse'>
                                    Banten
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='4'>
                         ";
                            $sql=mysql_query("SELECT*FROM perwakilan where provinsi LIKE '%Banten%'");
	while($data=mysql_fetch_array($sql)){
                      echo"<ul style=\"text-align: justify;\" class='panel-body'><table>
				<tr>
					<td><b>Pimpinan  : </b> $data[nama]
					</td>
				</tr>
				<tr>
					<td><b>Jenis Perwakilan  : </b> ";
    $sql2=mysql_query("select*from pendaftaran_perwakilan where id_perwakilan='$data[id_perwakilan]'");
    while($data2=mysql_fetch_array($sql2)){
        $jenis=mysql_fetch_array(mysql_query("select*from jenis_perwakilan where id_jenis='$data2[id_jenis]'"));
        echo"$jenis[perwakilan];";}  
    echo"</td>
				</tr>
				<tr>
					<td><b>Alamat : </b> $data[alamat] - $data[provinsi]
					</td>
				</tr>
				
			</table></ul><hr>";
	}echo"   
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#5' data-parent='#accordion' data-toggle='collapse'>
                                    Jawa Barat
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='5'>
                            ";
                            $sql=mysql_query("SELECT*FROM perwakilan where provinsi LIKE '%Jawa Barat%'");
	while($data=mysql_fetch_array($sql)){
                      echo"<ul style=\"text-align: justify;\" class='panel-body'><table>
				<tr>
					<td><b>Pimpinan  : </b> $data[nama]
					</td>
				</tr>
				<tr>
					<td><b>Jenis Perwakilan  : </b> ";
    $sql2=mysql_query("select*from pendaftaran_perwakilan where id_perwakilan='$data[id_perwakilan]'");
    while($data2=mysql_fetch_array($sql2)){
        $jenis=mysql_fetch_array(mysql_query("select*from jenis_perwakilan where id_jenis='$data2[id_jenis]'"));
        echo"$jenis[perwakilan];";}  
    echo"</td>
				</tr>
				<tr>
					<td><b>Alamat : </b> $data[alamat] - $data[provinsi]
					</td>
				</tr>
				
			</table></ul><hr>";
	}echo"
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#6' data-parent='#accordion' data-toggle='collapse'>
                                    Jawa Tengah
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='6'>
                            ";
                            $sql=mysql_query("SELECT*FROM perwakilan where provinsi LIKE '%Jawa Tengah%'");
	while($data=mysql_fetch_array($sql)){
                      echo"<ul style=\"text-align: justify;\" class='panel-body'><table>
				<tr>
					<td><b>Pimpinan  : </b> $data[nama]
					</td>
				</tr>
				<tr>
					<td><b>Jenis Perwakilan  : </b> ";
    $sql2=mysql_query("select*from pendaftaran_perwakilan where id_perwakilan='$data[id_perwakilan]'");
    while($data2=mysql_fetch_array($sql2)){
        $jenis=mysql_fetch_array(mysql_query("select*from jenis_perwakilan where id_jenis='$data2[id_jenis]'"));
        echo"$jenis[perwakilan];";}  
    echo"</td>
				</tr>
				<tr>
					<td><b>Alamat : </b> $data[alamat] - $data[provinsi]
					</td>
				</tr>
				
			</table></ul><hr>";
	}echo"
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#7' data-parent='#accordion' data-toggle='collapse'>
                                    Jawa Timur
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='7'>
                            ";
                            $sql=mysql_query("SELECT*FROM perwakilan where provinsi LIKE '%Jawa Timur%'");
	while($data=mysql_fetch_array($sql)){
                      echo"<ul style=\"text-align: justify;\" class='panel-body'><table>
				<tr>
					<td><b>Pimpinan  : </b> $data[nama]
					</td>
				</tr>
				<tr>
					<td><b>Jenis Perwakilan  : </b> ";
    $sql2=mysql_query("select*from pendaftaran_perwakilan where id_perwakilan='$data[id_perwakilan]'");
    while($data2=mysql_fetch_array($sql2)){
        $jenis=mysql_fetch_array(mysql_query("select*from jenis_perwakilan where id_jenis='$data2[id_jenis]'"));
        echo"$jenis[perwakilan];";}  
    echo"</td>
				</tr>
				<tr>
					<td><b>Alamat : </b> $data[alamat] - $data[provinsi]
					</td>
				</tr>
				
			</table></ul><hr>";
	}echo"
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#8' data-parent='#accordion' data-toggle='collapse'>
                                    Kalimantan
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='8'>
                            ";
                            $sql=mysql_query("SELECT*FROM perwakilan where provinsi LIKE '%Kalimantan%'");
	while($data=mysql_fetch_array($sql)){
                      echo"<ul style=\"text-align: justify;\" class=list><table>
				<tr>
					<td><b>Pimpinan  : </b> $data[nama]
					</td>
				</tr>
				<tr>
					<td><b>Jenis Perwakilan  : </b> ";
    $sql2=mysql_query("select*from pendaftaran_perwakilan where id_perwakilan='$data[id_perwakilan]'");
    while($data2=mysql_fetch_array($sql2)){
        $jenis=mysql_fetch_array(mysql_query("select*from jenis_perwakilan where id_jenis='$data2[id_jenis]'"));
        echo"$jenis[perwakilan];";}  
    echo"</td>
				</tr>
				<tr>
					<td><b>Alamat : </b> $data[alamat] - $data[provinsi]
					</td>
				</tr>
			</table></ul><hr>";
	}echo"
                        </div>
                    </div>
<div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#9' data-parent='#accordion' data-toggle='collapse'>
                                    Sulawesi
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='9'>
                            ";
                            $sql=mysql_query("SELECT*FROM perwakilan where provinsi LIKE '%Sulawesi%'");
    while($data=mysql_fetch_array($sql)){
                      echo"<ul style=\"text-align: justify;\" class=list><table>
                <tr>
                    <td><b>Pimpinan  : </b> $data[nama]
                    </td>
                </tr>
                <tr>
                    <td><b>Jenis Perwakilan  : </b> ";
    $sql2=mysql_query("select*from pendaftaran_perwakilan where id_perwakilan='$data[id_perwakilan]'");
    while($data2=mysql_fetch_array($sql2)){
        $jenis=mysql_fetch_array(mysql_query("select*from jenis_perwakilan where id_jenis='$data2[id_jenis]'"));
        echo"$jenis[perwakilan];";}  
    echo"</td>
                </tr>
                <tr>
                    <td><b>Alamat : </b> $data[alamat] - $data[provinsi]
                    </td>
                </tr>
            </table></ul><hr>";
    }echo"
                        </div>
                    </div>
                </div>
            </div><!-- /Accordians -->
            </div>
        </div><!--./row-->
        </div>
        </section>
	</section>
";
}
if($_GET['p']=='prosedur'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Prosedur Pendaftaran Umroh</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Aplikasi</a></li>
								<li>Prosedur Pendaftaran Umroh</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content typography'>
			<div class='container'>
			<p align='center'><img class='img-responsive' src='images/services/1.JPG' alt=''></p>
<p align='center'><img class='img-responsive' src='images/services/2.JPG' alt=''></p>
<p align='center'><img class='img-responsive' src='images/services/3.JPG' alt=''></a></p>
<p align='center'><img class='img-responsive' src='images/services/4.JPG' alt=''></p>
<p align='center'><img class='img-responsive' src='images/services/5.JPG' alt=''></p>
<p align='center'><img class='img-responsive' src='images/services/6.JPG' alt=''></p>
			</div>
		</section>

	</section>
	";
}
if($_GET['p']=='reguler'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Umroh Reguler</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Produk</a></li>
								<li>Umroh Reguler</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content typography'>
			<div class='container'>
				<div class='row sub_content'>
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class='dividerHeading'>
							<h4><span>Paket Favorit</span></h4>

						</div>
					</div>
					
                    <div class='mrgb-50 clearfix'></div>
					<div class='pricingBlock theme-color-pt'>
						";
				$query = mysql_query("SELECT * FROM produk where jenis_produk='Umrah Reguler' AND jenis_paket='Favorit'");
				while ($row=mysql_fetch_array($query)){
					if($row[biaya]<3000){
						$kurs='USD';
					}
					else if($row[biaya]>3000){
						$kurs='IDR';
					}
					echo"<!--  DARK-BLUE PRICE ITEM  -->
						<div class='col-lg-3 col-md-3 col-sm-3'>
							<div class='pricingTable'><!-- BODY BOX-->
								<div class='pricingTable-header'><!-- HEADER BOX-->
									<span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
									<span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
								</div><!--/ BODY BOX-->

								<div class='pricingContent'>
									<ul>
										<li><strong>ID Program :</strong> $row[id_produk]</li>
										<li><strong>Perjalanan :</strong> $row[lama_perjalanan]</li>
										<li><strong>Tanggal Keberangkatan :</strong> $row[tanggal_keberangkatan]</li>
                                        <li><strong>Bulan Keberangkatan :</strong> $row[bulan_keberangkatan]</li>
										<li><strong>Batas Pelunasan :</strong> $row[pelunasan]</li>
                                        <li><strong>Keterangan :</strong> $row[keterangan]</li>
									</ul>
								</div><!-- /  CONTENT BOX-->

								<div class='pricingTable-sign-up'><!-- BUTTON BOX-->
									<a href='?p=sitinerari&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Itinerari</a>
                                    <a href='?p=sakomodasi&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Akomodasi</a>
								    <a href='?p=daftar&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-pencil\"></i> Daftar Sekarang!</a>
                                </div><!-- BUTTON BOX-->

							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						";
				}
				echo"		
					</div>			
					
				</div>

				<div class='row sub_content'>
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class='dividerHeading'>
							<h4><span>Paket Premium</span></h4>

						</div>
					</div>
					
                    <div class='mrgb-50 clearfix'></div>
					<div class='pricingBlock theme-color-pt'>
						";
$query = mysql_query("SELECT * FROM produk where jenis_produk='Umrah Reguler' AND jenis_paket='Premium'");
                while ($row=mysql_fetch_array($query)){
                    if($row[biaya]<3000){
                        $kurs='USD';
                    }
                    else if($row[biaya]>3000){
                        $kurs='IDR';
                    }
                    echo"<!--  DARK-BLUE PRICE ITEM  -->
                        <div class='col-lg-3 col-md-3 col-sm-3'>
                            <div class='pricingTable'><!-- BODY BOX-->
                                <div class='pricingTable-header'><!-- HEADER BOX-->
                                    <span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
                                    <span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
                                </div><!--/ BODY BOX-->

                                <div class='pricingContent'>
                                    <ul>
                                        <li><strong>ID Program :</strong> $row[id_produk]</li>
                                        <li><strong>Perjalanan :</strong> $row[lama_perjalanan]</li>
                                        <li><strong>Tanggal Keberangkatan :</strong> $row[tanggal_keberangkatan]</li>
                                        <li><strong>Bulan Keberangkatan :</strong> $row[bulan_keberangkatan]</li>
                                        <li><strong>Batas Pelunasan :</strong> $row[pelunasan]</li>
                                        <li><strong>Keterangan :</strong> $row[keterangan]</li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                                <div class='pricingTable-sign-up'><!-- BUTTON BOX-->
                                    <a href='?p=sitinerari&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Itinerari</a>
                                    <a href='?p=sakomodasi&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Akomodasi</a>
                                    <a href='?p=daftar&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-pencil\"></i> Daftar Sekarang!</a>
                                </div><!-- BUTTON BOX-->

							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						";
				}
				echo"					
					
					</div>
				</div>
				<div class='row sub_content'>
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class='dividerHeading'>
							<h4><span>Paket Executive</span></h4>

						</div>
					</div>
					<div class='mrgb-50 clearfix'></div>
					<div class='pricingBlock theme-color-pt'>
						";
$query = mysql_query("SELECT * FROM produk where jenis_produk='Umrah Reguler' AND jenis_paket='Executive'");
                while ($row=mysql_fetch_array($query)){
                    if($row[biaya]<3000){
                        $kurs='USD';
                    }
                    else if($row[biaya]>3000){
                        $kurs='IDR';
                    }
                    echo"<!--  DARK-BLUE PRICE ITEM  -->
                        <div class='col-lg-3 col-md-3 col-sm-3'>
                            <div class='pricingTable'><!-- BODY BOX-->
                                <div class='pricingTable-header'><!-- HEADER BOX-->
                                    <span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
                                    <span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
                                </div><!--/ BODY BOX-->

                                <div class='pricingContent'>
                                    <ul>
                                        <li><strong>ID Program :</strong> $row[id_produk]</li>
                                        <li><strong>Perjalanan :</strong> $row[lama_perjalanan]</li>
                                        <li><strong>Tanggal Keberangkatan :</strong> $row[tanggal_keberangkatan]</li>
                                        <li><strong>Bulan Keberangkatan :</strong> $row[bulan_keberangkatan]</li>
                                        <li><strong>Batas Pelunasan :</strong> $row[pelunasan]</li>
                                        <li><strong>Keterangan :</strong> $row[keterangan]</li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                                <div class='pricingTable-sign-up'><!-- BUTTON BOX-->
                                    <a href='?p=sitinerari&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Itinerari</a>
                                    <a href='?p=sakomodasi&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Akomodasi</a>
                                    <a href='?p=daftar&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-pencil\"></i> Daftar Sekarang!</a>
                                </div><!-- BUTTON BOX-->

							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						";
				}
				echo"	
					</div>				
					
				</div>
				<div class='row sub_content'>
            <div class='col-lg-12 col-md-12 col-sm-12'>
                <div class='dividerHeading'>
                    <h4><span>Keterangan</span></h4>
                </div>
            </div>

            <div class='col-lg-12 col-md-12 col-sm-12'>
                <div id='accordion' class='panel-group accordion'><!-- Accordians -->
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#1' data-parent='#accordion' data-toggle='collapse'>
                                    Biaya Paket Sudah Termasuk
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='1'>
                            <ul style=\"text-align: justify;\" class='panel-body'>
<li><strong>Tiket pesawat pulang pergi Jakarta &ndash; Jeddah </strong></li>
<li><strong>Akomodasi sesuai program</strong></li>
<li><strong>Ziarah dengan bus AC</strong></li>
<li><strong>Makan 3x sehari dengan menu Indonesia</strong></li>
<li><strong>Muthawif/guide, air zam-zam 5 liter</strong></li>
<li><strong>Visa umroh</strong></li>
<li><strong>Mansik umroh 1x di Jakarta</strong></li>
<li><strong>Handling dan Perlengkapan Rp 1.500.000,-</strong></li>
</ul>
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#2' data-parent='#accordion' data-toggle='collapse'>
                                    Biaya Paket Belum Termasuk
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='2'>
                            <ul style=\"text-align: justify;\" class='panel-body'>
<li><strong>Biaya Mahrom Rp 350.000,-</strong></li>
<li><strong>Vaksin meningitis</strong></li>
<li><strong>Tiket domestik</strong></li>
<li><strong>Biaya pembuatan passport dan dokumen lainnya</strong></li>
<li><strong>Pengeluaran pribadi laundry, telepon, tips, dll.</strong></li>
<li><strong>Tour/acara diluar program atas permintaan sendiri</strong></li>
<li><strong>Kelebihan bagasi (over weight)</strong></li>
<li><strong>Obat-obatan dan biaya rumah sakit</strong></li>
<li><strong>Kursi roda dan pendorong kursi roda</strong></li>
<li><strong>Biaya Pengurusan Kepulangan jenazah atau jamaah kondisi sakit parah</strong></li>
</ul>
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#3' data-parent='#accordion' data-toggle='collapse'>
                                    Persyaratan
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='3'>
                            <ul style='text-align: justify;' class='panel-body'>
<li><strong>Mengisi Formulir Pendaftaran</strong></li>
<li><strong>Melampirkan Fc. KTP 5 lembar</strong></li>
<li><strong>Menentukan pilihan program dan jadwal keberangkatan melalui petugas kami.</strong></li>
<li><strong>Membayar pelunasan maksimal pada bulan yang telah ditentukan saat mendaftar</strong></li>
<li><strong>Melengkapi Dokumen Umroh 45 hari sebelum keberangkatan : </strong></li>
</ul>
<ol style='text-align: justify;' class='panel-body'>
<li style='margin-left: 30px;'><strong>&raquo; Pasport dengan nama 3 (tiga) kata, Seperti : PUTRI SEPTIANI RAMADANI.</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Kartu Keluarga asli (bagi suami istri dan keluarga)</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Surat Nikah asli (bagi suami-istri yang usia istrinya di bawah 45 tahun)</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Akte kelahiran asli (bagi yang membawa putra-putri)</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Buku Vaksin Meningitis</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Foto berwarna dengan latar belakang putih dan posisi kepala atau muka 80 %, Ukuran 3 x 4 = 5 lbr, ukuran 4 x 6 = 5 lbr.</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Bila yang berangkat perempuan usia kurang dari 45 tahun tanpa didampingi suami/muhrim akan dikenakan biaya mahram yaitu Rp. 350.000,-</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Pasport berlaku minimal 7 bulan sebelum berakhir masa aktifnya </strong></li>
</ol>
<ul style='text-align: justify;' class='panel-body'>
<li><strong>Membayar pelunasan tahap akhir biaya paket Umroh sesuai pilihan paket maksimal 45 hari sebelum keberangkatan. </strong></li>
<li><strong>Membayar Airport tax, Handling, Perlengkapan sejumlah Rp. 1.000.000,- maksimal 45 hari sebelum keberangkatan.</strong></li>
</ul>
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#4' data-parent='#accordion' data-toggle='collapse'>
                                    Pembatalan Paket
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='4'>
                           <ul style='text-align: justify;' class='panel-body'>
                           <p><strong>Apabila terjadi sesuatu hal yang tidak terduga bagi calon jamaah umroh dan terpaksa membatalkan diri maka dikenakan biaya pembatalan : </strong></p>
<ol style=\"text-align: justify;\" class=list>
<li><strong>Pembatalan 1 minggu setelah pendaftaran dikenakan biaya 5 % dari harga paket + Booking Seat tidak kembali.</strong></li>
<li><strong>Pembatalan setelah proses visa dikenakan biaya 35 % dari harga paket + Booking Seat tidak kembali.</strong></li>
<li><strong>Pembatalan 1 minggu menjelang keberangkatan dikenakan biaya 50 % dari harga paket + biaya Booking Seat tidak kembali.</strong></li>
<li><strong>Pembatalan 1 hari menjelang keberangkatan , dikenakan 100% dari harga paket + Booking Seat tidak kembali.</strong></li>
</ol>
</ul>	
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#5' data-parent='#accordion' data-toggle='collapse'>
                                    Ketentuan Lain
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='5'>
                        	<ul style=\"text-align: justify;\" class='panel-body'>
<li><strong>Harga paket dan program sewaktu-waktu dapat berubah tanpa pemberitahuan sebelumnya tapi tidak mengurangi nilai ibadah</strong></li>
<li><strong>Jika hotel yang sesuai dengan program penuh, maka perusahaan berhak mengganti dengan hotel yang sesuai.</strong></li>
<li><strong>Apabila terjadi perubahan harga tiket/hotel, maka jama&rsquo;ah yang belum berangkat dikenakan biaya harga baru dan harga dihitung dari Jakarta kembali ke Jakarta.</strong></li>
<li><strong>Apabila visa tidak keluar maka perusahaan akan menyerahkan keputusan kepada jamaah bersangkutan untuk memilih meneruskan proses sampai keluarnya visa, atau menjadwal ulang di keberangkatan berikutnya atau mengundurkan diri dengan dipotong biaya administrasi proses.</strong></li>
</ul>
                        </div>
                    </div>
                    
                </div>
            </div><!-- /Accordians -->
            </div>
        </div><!--./row-->
			</div>
			
			</div>
		</section>
	</section>
	</section>
	";
}
if($_GET['p']=='ppl'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Umrah Promo</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Produk</a></li>
								<li>Umrah Promo</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content typography'>
			<div class='container'>
				<div class='row sub_content'>
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class='dividerHeading'>
							<h4><span>Januari-April</span></h4>

						</div>
					</div>
					<div class='mrgb-50 clearfix'></div>
					<div class='pricingBlock theme-color-pt'>
						";
				$query = mysql_query("SELECT * FROM produk where jenis_produk='Umrah Promo' AND (bulan_keberangkatan like 'Januari%' or bulan_keberangkatan like 'Februari%' or bulan_keberangkatan like 'Maret%' or bulan_keberangkatan like 'April%')");
				while ($row=mysql_fetch_array($query)){
					if($row[biaya]<3000){
						$kurs='USD';
					}
					else if($row[biaya]>3000){
						$kurs='IDR';
					}
					echo"
                    
						<!--  DARK-BLUE PRICE ITEM  -->
						<div class='col-lg-3 col-md-3 col-sm-3'>
							<div class='pricingTable'><!-- BODY BOX-->
								<div class='pricingTable-header'><!-- HEADER BOX-->
									<span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
									<span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
								</div><!--/ BODY BOX-->

                                <div class='pricingContent'>
                                    <ul>
                                        <li><strong>ID Program :</strong> $row[id_produk]</li>
                                        <li><strong>Perjalanan :</strong> $row[lama_perjalanan]</li>
                                        <li><strong>Tanggal Keberangkatan :</strong> $row[tanggal_keberangkatan]</li>
                                        <li><strong>Bulan Keberangkatan :</strong> $row[bulan_keberangkatan]</li>
                                        <li><strong>Batas Pelunasan :</strong> $row[pelunasan]</li>
                                        <li><strong>Keterangan :</strong> $row[keterangan]</li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                                <div class='pricingTable-sign-up'><!-- BUTTON BOX-->
                                    <a href='?p=sitinerari&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Itinerari</a>
                                    <a href='?p=sakomodasi&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Akomodasi</a>
                                    <a href='?p=daftar&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-pencil\"></i> Daftar Sekarang!</a>
                                </div><!-- BUTTON BOX-->

							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						";
				}
				echo"
					</div>
				</div>

				<div class='row sub_content'>
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class='dividerHeading'>
							<h4><span>Mei</span></h4>

						</div>
					</div>
					<div class='mrgb-50 clearfix'></div>
					<div class='pricingBlock theme-color-pt'>
						";
				$query = mysql_query("SELECT * FROM produk where jenis_produk='Umrah Promo' AND bulan_keberangkatan like 'Mei%')");
                while ($row=mysql_fetch_array($query)){
                    if($row[biaya]<3000){
                        $kurs='USD';
                    }
                    else if($row[biaya]>3000){
                        $kurs='IDR';
                    }
                    echo"
                    
                        <!--  DARK-BLUE PRICE ITEM  -->
                        <div class='col-lg-3 col-md-3 col-sm-3'>
                            <div class='pricingTable'><!-- BODY BOX-->
                                <div class='pricingTable-header'><!-- HEADER BOX-->
                                    <span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
                                    <span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
                                </div><!--/ BODY BOX-->

                                <div class='pricingContent'>
                                    <ul>
                                        <li><strong>ID Program :</strong> $row[id_produk]</li>
                                        <li><strong>Perjalanan :</strong> $row[lama_perjalanan]</li>
                                        <li><strong>Tanggal Keberangkatan :</strong> $row[tanggal_keberangkatan]</li>
                                        <li><strong>Bulan Keberangkatan :</strong> $row[bulan_keberangkatan]</li>
                                        <li><strong>Batas Pelunasan :</strong> $row[pelunasan]</li>
                                        <li><strong>Keterangan :</strong> $row[keterangan]</li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                                <div class='pricingTable-sign-up'><!-- BUTTON BOX-->
                                    <a href='?p=sitinerari&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Itinerari</a>
                                    <a href='?p=sakomodasi&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Akomodasi</a>
                                    <a href='?p=daftar&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-pencil\"></i> Daftar Sekarang!</a>
                                </div><!-- BUTTON BOX-->

							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						";
				}
				echo"
					</div>
				</div>
				<div class='row sub_content'>
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class='dividerHeading'>
							<h4><span>Juni</span></h4>

						</div>
					</div>
					<div class='mrgb-50 clearfix'></div>
					<div class='pricingBlock theme-color-pt'>
						";
$query = mysql_query("SELECT * FROM produk where jenis_produk='Umrah Promo' AND bulan_keberangkatan like 'Juni%')");
                while ($row=mysql_fetch_array($query)){
                    if($row[biaya]<3000){
                        $kurs='USD';
                    }
                    else if($row[biaya]>3000){
                        $kurs='IDR';
                    }
                    echo"
                    
                        <!--  DARK-BLUE PRICE ITEM  -->
                        <div class='col-lg-3 col-md-3 col-sm-3'>
                            <div class='pricingTable'><!-- BODY BOX-->
                                <div class='pricingTable-header'><!-- HEADER BOX-->
                                    <span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
                                    <span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
                                </div><!--/ BODY BOX-->

                                <div class='pricingContent'>
                                    <ul>
                                        <li><strong>ID Program :</strong> $row[id_produk]</li>
                                        <li><strong>Perjalanan :</strong> $row[lama_perjalanan]</li>
                                        <li><strong>Tanggal Keberangkatan :</strong> $row[tanggal_keberangkatan]</li>
                                        <li><strong>Bulan Keberangkatan :</strong> $row[bulan_keberangkatan]</li>
                                        <li><strong>Batas Pelunasan :</strong> $row[pelunasan]</li>
                                        <li><strong>Keterangan :</strong> $row[keterangan]</li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                                <div class='pricingTable-sign-up'><!-- BUTTON BOX-->
                                    <a href='?p=sitinerari&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Itinerari</a>
                                    <a href='?p=sakomodasi&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Akomodasi</a>
                                    <a href='?p=daftar&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-pencil\"></i> Daftar Sekarang!</a>
                                </div><!-- BUTTON BOX-->

							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						";
				}
				echo"
					</div>
				</div>
				<div class='row sub_content'>
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class='dividerHeading'>
							<h4><span>Awal Ramadhan</span></h4>

						</div>
					</div>
					<div class='mrgb-50 clearfix'></div>
					<div class='pricingBlock theme-color-pt'>
						";
$query = mysql_query("SELECT * FROM produk where jenis_produk='Umrah Promo' AND bulan_keberangkatan like 'Awal Ramadhan%')");
                while ($row=mysql_fetch_array($query)){
                    if($row[biaya]<3000){
                        $kurs='USD';
                    }
                    else if($row[biaya]>3000){
                        $kurs='IDR';
                    }
                    echo"
                    
                        <!--  DARK-BLUE PRICE ITEM  -->
                        <div class='col-lg-3 col-md-3 col-sm-3'>
                            <div class='pricingTable'><!-- BODY BOX-->
                                <div class='pricingTable-header'><!-- HEADER BOX-->
                                    <span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
                                    <span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
                                </div><!--/ BODY BOX-->

                                <div class='pricingContent'>
                                    <ul>
                                        <li><strong>ID Program :</strong> $row[id_produk]</li>
                                        <li><strong>Perjalanan :</strong> $row[lama_perjalanan]</li>
                                        <li><strong>Tanggal Keberangkatan :</strong> $row[tanggal_keberangkatan]</li>
                                        <li><strong>Bulan Keberangkatan :</strong> $row[bulan_keberangkatan]</li>
                                        <li><strong>Batas Pelunasan :</strong> $row[pelunasan]</li>
                                        <li><strong>Keterangan :</strong> $row[keterangan]</li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                                <div class='pricingTable-sign-up'><!-- BUTTON BOX-->
                                    <a href='?p=sitinerari&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Itinerari</a>
                                    <a href='?p=sakomodasi&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Akomodasi</a>
                                    <a href='?p=daftar&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-pencil\"></i> Daftar Sekarang!</a>
                                </div><!-- BUTTON BOX-->

							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						";
				}
				echo"
					</div>
					</div>
				<div class='row sub_content'>
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class='dividerHeading'>
							<h4><span>Tengah Ramadhan</span></h4>

						</div>
					</div>
					<div class='mrgb-50 clearfix'></div>
					<div class='pricingBlock theme-color-pt'>
						";
				$jprogram=mysql_fetch_array(mysql_query("select * from jenis_program where jenis_program='Promo Lunas'"));
				$query = mysql_query("SELECT * FROM program where id_jenis='$jprogram[id_jenis]' AND bulan_keberangkatan like 'Tengah Ramadhan%'");
				while ($row=mysql_fetch_array($query)){
					if($row[biaya]<3000){
						$kurs='USD';
					}
					else if($row[biaya]>3000){
						$kurs='IDR';
					}
					echo"
                    
						<!--  DARK-BLUE PRICE ITEM  -->
						<div class='col-lg-3 col-md-3 col-sm-3'>
							<div class='pricingTable'><!-- BODY BOX-->
								<div class='pricingTable-header'><!-- HEADER BOX-->
									<span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
									<span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
								</div><!--/ BODY BOX-->

								<div class='pricingContent'>
									<ul>
										<li><strong>ID Program</strong> $row[id_program]</li>
										<li><strong>Perjalanan</strong> $row[lama_keberangkatan]</li>
										<li><strong>Keberangkatan</strong> $row[bulan_keberangkatan]</li>
										<li><strong>Batas Pelunasan</strong> $row[bulan_pelunasan]</li>
									</ul>
								</div><!-- /  CONTENT BOX-->

								<div class='pricingTable-sign-up'><!-- BUTTON BOX-->
									<a href='?p=daftar&id_program=$row[id_program]' class='btn btn-block btn-default'>Daftar Sekarang!</a>
								</div><!-- BUTTON BOX-->

							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						";
				}
				echo"
					</div>
					</div>
				<div class='row sub_content'>
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class='dividerHeading'>
							<h4><span>Akhir Ramadhan [12Hari]</span></h4>

						</div>
					</div>
					<div class='mrgb-50 clearfix'></div>
					<div class='pricingBlock theme-color-pt'>
						";
$query = mysql_query("SELECT * FROM produk where jenis_produk='Umrah Promo' AND bulan_keberangkatan like 'Akhir Ramadhan%')");
                while ($row=mysql_fetch_array($query)){
                    if($row[biaya]<3000){
                        $kurs='USD';
                    }
                    else if($row[biaya]>3000){
                        $kurs='IDR';
                    }
                    echo"
                    
                        <!--  DARK-BLUE PRICE ITEM  -->
                        <div class='col-lg-3 col-md-3 col-sm-3'>
                            <div class='pricingTable'><!-- BODY BOX-->
                                <div class='pricingTable-header'><!-- HEADER BOX-->
                                    <span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
                                    <span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
                                </div><!--/ BODY BOX-->

                                <div class='pricingContent'>
                                    <ul>
                                        <li><strong>ID Program :</strong> $row[id_produk]</li>
                                        <li><strong>Perjalanan :</strong> $row[lama_perjalanan]</li>
                                        <li><strong>Tanggal Keberangkatan :</strong> $row[tanggal_keberangkatan]</li>
                                        <li><strong>Bulan Keberangkatan :</strong> $row[bulan_keberangkatan]</li>
                                        <li><strong>Batas Pelunasan :</strong> $row[pelunasan]</li>
                                        <li><strong>Keterangan :</strong> $row[keterangan]</li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                                <div class='pricingTable-sign-up'><!-- BUTTON BOX-->
                                    <a href='?p=sitinerari&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Itinerari</a>
                                    <a href='?p=sakomodasi&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Akomodasi</a>
                                    <a href='?p=daftar&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-pencil\"></i> Daftar Sekarang!</a>
                                </div><!-- BUTTON BOX-->

							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						";
				}
				echo"
					</div>
					</div>
					<div class='row sub_content'>
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class='dividerHeading'>
							<h4><span>Full Ramadhan</span></h4>

						</div>
					</div>
					<div class='mrgb-50 clearfix'></div>
					<div class='pricingBlock theme-color-pt'>
						";
			$query = mysql_query("SELECT * FROM produk where jenis_produk='Umrah Promo' AND bulan_keberangkatan like 'Full Ramadhan%')");
                while ($row=mysql_fetch_array($query)){
                    if($row[biaya]<3000){
                        $kurs='USD';
                    }
                    else if($row[biaya]>3000){
                        $kurs='IDR';
                    }
                    echo"
                    
                        <!--  DARK-BLUE PRICE ITEM  -->
                        <div class='col-lg-3 col-md-3 col-sm-3'>
                            <div class='pricingTable'><!-- BODY BOX-->
                                <div class='pricingTable-header'><!-- HEADER BOX-->
                                    <span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
                                    <span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
                                </div><!--/ BODY BOX-->

                                <div class='pricingContent'>
                                    <ul>
                                        <li><strong>ID Program :</strong> $row[id_produk]</li>
                                        <li><strong>Perjalanan :</strong> $row[lama_perjalanan]</li>
                                        <li><strong>Tanggal Keberangkatan :</strong> $row[tanggal_keberangkatan]</li>
                                        <li><strong>Bulan Keberangkatan :</strong> $row[bulan_keberangkatan]</li>
                                        <li><strong>Batas Pelunasan :</strong> $row[pelunasan]</li>
                                        <li><strong>Keterangan :</strong> $row[keterangan]</li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                                <div class='pricingTable-sign-up'><!-- BUTTON BOX-->
                                    <a href='?p=sitinerari&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Itinerari</a>
                                    <a href='?p=sakomodasi&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Akomodasi</a>
                                    <a href='?p=daftar&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-pencil\"></i> Daftar Sekarang!</a>
                                </div><!-- BUTTON BOX-->

							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						";
				}
				echo"
					</div>
					</div>
					<div class='row sub_content'>
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class='dividerHeading'>
							<h4><span>Desember</span></h4>

						</div>
					</div>
					<div class='mrgb-50 clearfix'></div>
					<div class='pricingBlock theme-color-pt'>
						";
				$query = mysql_query("SELECT * FROM produk where jenis_produk='Umrah Promo' AND bulan_keberangkatan like 'Desember%')");
                while ($row=mysql_fetch_array($query)){
                    if($row[biaya]<3000){
                        $kurs='USD';
                    }
                    else if($row[biaya]>3000){
                        $kurs='IDR';
                    }
                    echo"
                    
                        <!--  DARK-BLUE PRICE ITEM  -->
                        <div class='col-lg-3 col-md-3 col-sm-3'>
                            <div class='pricingTable'><!-- BODY BOX-->
                                <div class='pricingTable-header'><!-- HEADER BOX-->
                                    <span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
                                    <span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
                                </div><!--/ BODY BOX-->

                                <div class='pricingContent'>
                                    <ul>
                                        <li><strong>ID Program :</strong> $row[id_produk]</li>
                                        <li><strong>Perjalanan :</strong> $row[lama_perjalanan]</li>
                                        <li><strong>Tanggal Keberangkatan :</strong> $row[tanggal_keberangkatan]</li>
                                        <li><strong>Bulan Keberangkatan :</strong> $row[bulan_keberangkatan]</li>
                                        <li><strong>Batas Pelunasan :</strong> $row[pelunasan]</li>
                                        <li><strong>Keterangan :</strong> $row[keterangan]</li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                                <div class='pricingTable-sign-up'><!-- BUTTON BOX-->
                                    <a href='?p=sitinerari&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Itinerari</a>
                                    <a href='?p=sakomodasi&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Akomodasi</a>
                                    <a href='?p=daftar&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-pencil\"></i> Daftar Sekarang!</a>
                                </div><!-- BUTTON BOX-->

							</div><!--/ BODY BOX-->
						</div>
						<!--  DARK-BLUE PRICE ITEM  -->

						<!--  DARK-BLUE PRICE ITEM  -->
						";
				}
				echo"
					</div>		
				</div>
				<div class='row sub_content'>
            <div class='col-lg-12 col-md-12 col-sm-12'>
                <div class='dividerHeading'>
                    <h4><span>Keterangan</span></h4>
                </div>
            </div>

            <div class='col-lg-12 col-md-12 col-sm-12'>
                <div id='accordion' class='panel-group accordion'><!-- Accordians -->
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#1' data-parent='#accordion' data-toggle='collapse'>
                                    Biaya Paket Sudah Termasuk
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='1'>
                            <ul style=\"text-align: justify;\" class=list>
<li><strong>Tiket pesawat pulang pergi Jakarta &ndash; Jeddah </strong></li>
<li><strong>Akomodasi sesuai program</strong></li>
<li><strong>Ziarah dengan bus AC</strong></li>
<li><strong>Makan 3x sehari dengan menu Indonesia</strong></li>
<li><strong>Muthawif/guide, air zam-zam 5 liter</strong></li>
<li><strong>Visa umroh</strong></li>
<li><strong>Mansik umroh 1x di Jakarta</strong></li>
</ul>
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#2' data-parent='#accordion' data-toggle='collapse'>
                                    Biaya Paket Belum Termasuk
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='2'>
                            <ul style=\"text-align: justify;\" class=list>
<li><strong>Biaya Mahrom Rp 350.000,-</strong></li>
<li><strong>Vaksin meningitis</strong></li>
<li><strong>Tiket domestik</strong></li>
<li><strong>Biaya pembuatan passport dan dokumen lainnya</strong></li>
<li><strong>Pengeluaran pribadi laundry, telepon, tips, dll.</strong></li>
<li><strong>Tour/acara diluar program atas permintaan sendiri</strong></li>
<li><strong>Kelebihan bagasi (over weight)</strong></li>
<li><strong>Obat-obatan dan biaya rumah sakit</strong></li>
<li><strong>Kursi roda dan pendorong kursi roda</strong></li>
</ul>
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#3' data-parent='#accordion' data-toggle='collapse'>
                                    Persyaratan
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='3'>
                            <ul style='text-align: justify;' class=list>
<li><strong>Mengisi Formulir Pendaftaran</strong></li>
<li><strong>Melampirkan Fc. KTP 5 lembar</strong></li>
<li><strong>Menentukan pilihan program dan jadwal keberangkatan melalui petugas kami.</strong></li>
<li><strong>Membayar pelunasan maksimal pada bulan yang telah ditentukan saat mendaftar</strong></li>
<li><strong>Melengkapi Dokumen Umroh 45 hari sebelum keberangkatan : </strong></li>
</ul>
<ol style='text-align: justify;' >
<li style='margin-left: 30px;'><strong>&raquo; Pasport dengan nama 3 (tiga) kata, Seperti : PUTRI SEPTIANI RAMADANI.</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Kartu Keluarga asli (bagi suami istri dan keluarga)</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Surat Nikah asli (bagi suami-istri yang usia istrinya di bawah 45 tahun)</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Akte kelahiran asli (bagi yang membawa putra-putri)</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Buku Vaksin Meningitis</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Foto berwarna dengan latar belakang putih dan posisi kepala atau muka 80 %, Ukuran 3 x 4 = 5 lbr, ukuran 4 x 6 = 5 lbr.</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Bila yang berangkat perempuan usia kurang dari 45 tahun tanpa didampingi suami/muhrim akan dikenakan biaya mahram yaitu Rp. 350.000,-</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Pasport berlaku minimal 7 bulan sebelum berakhir masa aktifnya </strong></li>
</ol>
<ul style='text-align: justify;' class=list>
<li><strong>Membayar pelunasan tahap akhir biaya paket Umroh sesuai pilihan paket maksimal 45 hari sebelum keberangkatan. </strong></li>
<li><strong>Membayar Airport tax, Handling, Perlengkapan sejumlah Rp. 1.000.000,- maksimal 45 hari sebelum keberangkatan.</strong></li>
</ul>
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#4' data-parent='#accordion' data-toggle='collapse'>
                                    Pembatalan Paket
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='4'>
                           <ul style='text-align: justify;' class=list>
                           <p><strong>Apabila terjadi sesuatu hal yang tidak terduga bagi calon jamaah umroh dan terpaksa membatalkan diri maka dikenakan biaya pembatalan : </strong></p>
<ol style=\"text-align: justify;\" class=list>
<li><strong>Pembatalan 1 minggu setelah pendaftaran dikenakan biaya 5 % dari harga paket + Booking Seat tidak kembali.</strong></li>
<li><strong>Pembatalan setelah proses visa dikenakan biaya 35 % dari harga paket + Booking Seat tidak kembali.</strong></li>
<li><strong>Pembatalan 1 minggu menjelang keberangkatan dikenakan biaya 50 % dari harga paket + biaya Booking Seat tidak kembali.</strong></li>
<li><strong>Pembatalan 1 hari menjelang keberangkatan , dikenakan 100% dari harga paket + Booking Seat tidak kembali.</strong></li>
</ol>
</ul>	
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#5' data-parent='#accordion' data-toggle='collapse'>
                                    Ketentuan Lain
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='5'>
                        	<ul style=\"text-align: justify;\" class=list>
<li><strong>Harga paket dan program sewaktu-waktu dapat berubah tanpa pemberitahuan sebelumnya tapi tidak mengurangi nilai ibadah</strong></li>
<li><strong>Jika hotel yang sesuai dengan program penuh, maka perusahaan berhak mengganti dengan hotel yang sesuai.</strong></li>
<li><strong>Apabila terjadi perubahan harga tiket/hotel, maka jama&rsquo;ah yang belum berangkat dikenakan biaya harga baru dan harga dihitung dari Jakarta kembali ke Jakarta.</strong></li>
<li><strong>Apabila visa tidak keluar maka perusahaan akan menyerahkan keputusan kepada jamaah bersangkutan untuk memilih meneruskan proses sampai keluarnya visa, atau menjadwal ulang di keberangkatan berikutnya atau mengundurkan diri dengan dipotong biaya administrasi proses.</strong></li>
</ul>
                        </div>
                    </div>
                    
                </div>
            </div><!-- /Accordians -->
            </div>
        </div><!--./row-->
			</div>
			
			</div>
		</section>
	</section>
	";
}
if($_GET['p']=='pluswisata'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Umroh + Wisata</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Produk</a></li>
								<li>Umroh + Wisata</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content typography'>
            <div class='container'>
                <div class='row sub_content'>
                    <div class='col-lg-12 col-md-12 col-sm-12'>
                        <div class='dividerHeading'>
                            <h4><span>Umroh Plus Wisata</span></h4>

                        </div>
                    </div>
                    <div class='mrgb-50 clearfix'></div>
                    <div class='pricingBlock theme-color-pt'>
                        ";
                $query = mysql_query("SELECT * FROM produk where jenis_produk='Umrah+Wisata' ");
                while ($row=mysql_fetch_array($query)){
                    if($row[biaya]<3000){
                        $kurs='USD';
                    }
                    else if($row[biaya]>3000){
                        $kurs='IDR';
                    }
                    echo"
                    
                        <!--  DARK-BLUE PRICE ITEM  -->
                        <div class='col-lg-3 col-md-3 col-sm-3'>
                            <div class='pricingTable'><!-- BODY BOX-->
                                <div class='pricingTable-header'><!-- HEADER BOX-->
                                    <span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
                                    <span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
                                </div><!--/ BODY BOX-->

                                <div class='pricingContent'>
                                    <ul>
                                        <li><strong>ID Program :</strong> $row[id_produk]</li>
                                        <li><strong>Perjalanan :</strong> $row[lama_perjalanan]</li>
                                        <li><strong>Tanggal Keberangkatan :</strong> $row[tanggal_keberangkatan]</li>
                                        <li><strong>Bulan Keberangkatan :</strong> $row[bulan_keberangkatan]</li>
                                        <li><strong>Batas Pelunasan :</strong> $row[pelunasan]</li>
                                        <li><strong>Keterangan :</strong> $row[keterangan]</li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                                <div class='pricingTable-sign-up'><!-- BUTTON BOX-->
                                    <a href='?p=sitinerari&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Itinerari</a>
                                    <a href='?p=sakomodasi&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Akomodasi</a>
                                    <a href='?p=daftar&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-pencil\"></i> Daftar Sekarang!</a>
                                </div><!-- BUTTON BOX-->

                            </div><!--/ BODY BOX-->
                        </div>
                        <!--  DARK-BLUE PRICE ITEM  -->

                        <!--  DARK-BLUE PRICE ITEM  -->
                        ";
                }
                echo"
                    </div>
                </div>

                <div class='row sub_content'>
            <div class='col-lg-12 col-md-12 col-sm-12'>
                <div class='dividerHeading'>
                    <h4><span>Keterangan</span></h4>
                </div>
            </div>

            <div class='col-lg-12 col-md-12 col-sm-12'>
                <div id='accordion' class='panel-group accordion'><!-- Accordians -->
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#1' data-parent='#accordion' data-toggle='collapse'>
                                    Biaya Paket Sudah Termasuk
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='1'>
                            <ul style=\"text-align: justify;\" class=list>
<li><strong>Tiket pesawat pulang pergi Jakarta &ndash; Jeddah </strong></li>
<li><strong>Akomodasi sesuai program</strong></li>
<li><strong>Ziarah dengan bus AC</strong></li>
<li><strong>Makan 3x sehari dengan menu Indonesia</strong></li>
<li><strong>Muthawif/guide, air zam-zam 5 liter</strong></li>
<li><strong>Visa umroh</strong></li>
<li><strong>Mansik umroh 1x di Jakarta</strong></li>
</ul>
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#2' data-parent='#accordion' data-toggle='collapse'>
                                    Biaya Paket Belum Termasuk
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='2'>
                            <ul style=\"text-align: justify;\" class=list>
<li><strong>Biaya Mahrom Rp 350.000,-</strong></li>
<li><strong>Vaksin meningitis</strong></li>
<li><strong>Tiket domestik</strong></li>
<li><strong>Biaya pembuatan passport dan dokumen lainnya</strong></li>
<li><strong>Pengeluaran pribadi laundry, telepon, tips, dll.</strong></li>
<li><strong>Tour/acara diluar program atas permintaan sendiri</strong></li>
<li><strong>Kelebihan bagasi (over weight)</strong></li>
<li><strong>Obat-obatan dan biaya rumah sakit</strong></li>
<li><strong>Kursi roda dan pendorong kursi roda</strong></li>
</ul>
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#3' data-parent='#accordion' data-toggle='collapse'>
                                    Persyaratan
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='3'>
                            <ul style='text-align: justify;' class=list>
<li><strong>Mengisi Formulir Pendaftaran</strong></li>
<li><strong>Melampirkan Fc. KTP 5 lembar</strong></li>
<li><strong>Menentukan pilihan program dan jadwal keberangkatan melalui petugas kami.</strong></li>
<li><strong>Membayar pelunasan maksimal pada bulan yang telah ditentukan saat mendaftar</strong></li>
<li><strong>Melengkapi Dokumen Umroh 45 hari sebelum keberangkatan : </strong></li>
</ul>
<ol style='text-align: justify;' >
<li style='margin-left: 30px;'><strong>&raquo; Pasport dengan nama 3 (tiga) kata, Seperti : PUTRI SEPTIANI RAMADANI.</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Kartu Keluarga asli (bagi suami istri dan keluarga)</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Surat Nikah asli (bagi suami-istri yang usia istrinya di bawah 45 tahun)</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Akte kelahiran asli (bagi yang membawa putra-putri)</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Buku Vaksin Meningitis</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Foto berwarna dengan latar belakang putih dan posisi kepala atau muka 80 %, Ukuran 3 x 4 = 5 lbr, ukuran 4 x 6 = 5 lbr.</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Bila yang berangkat perempuan usia kurang dari 45 tahun tanpa didampingi suami/muhrim akan dikenakan biaya mahram yaitu Rp. 350.000,-</strong></li>
<li style='margin-left: 30px;'><strong>&raquo; Pasport berlaku minimal 7 bulan sebelum berakhir masa aktifnya </strong></li>
</ol>
<ul style='text-align: justify;' class=list>
<li><strong>Membayar pelunasan tahap akhir biaya paket Umroh sesuai pilihan paket maksimal 45 hari sebelum keberangkatan. </strong></li>
<li><strong>Membayar Airport tax, Handling, Perlengkapan sejumlah Rp. 1.000.000,- maksimal 45 hari sebelum keberangkatan.</strong></li>
</ul>
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#4' data-parent='#accordion' data-toggle='collapse'>
                                    Pembatalan Paket
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='4'>
                           <ul style='text-align: justify;' class=list>
                           <p><strong>Apabila terjadi sesuatu hal yang tidak terduga bagi calon jamaah umroh dan terpaksa membatalkan diri maka dikenakan biaya pembatalan : </strong></p>
<ol style=\"text-align: justify;\" class=list>
<li><strong>Pembatalan 1 minggu setelah pendaftaran dikenakan biaya 5 % dari harga paket + Booking Seat tidak kembali.</strong></li>
<li><strong>Pembatalan setelah proses visa dikenakan biaya 35 % dari harga paket + Booking Seat tidak kembali.</strong></li>
<li><strong>Pembatalan 1 minggu menjelang keberangkatan dikenakan biaya 50 % dari harga paket + biaya Booking Seat tidak kembali.</strong></li>
<li><strong>Pembatalan 1 hari menjelang keberangkatan , dikenakan 100% dari harga paket + Booking Seat tidak kembali.</strong></li>
</ol>
</ul>   
                        </div>
                    </div>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#5' data-parent='#accordion' data-toggle='collapse'>
                                    Ketentuan Lain
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='5'>
                            <ul style=\"text-align: justify;\" class=list>
<li><strong>Harga paket dan program sewaktu-waktu dapat berubah tanpa pemberitahuan sebelumnya tapi tidak mengurangi nilai ibadah</strong></li>
<li><strong>Jika hotel yang sesuai dengan program penuh, maka perusahaan berhak mengganti dengan hotel yang sesuai.</strong></li>
<li><strong>Apabila terjadi perubahan harga tiket/hotel, maka jama&rsquo;ah yang belum berangkat dikenakan biaya harga baru dan harga dihitung dari Jakarta kembali ke Jakarta.</strong></li>
<li><strong>Apabila visa tidak keluar maka perusahaan akan menyerahkan keputusan kepada jamaah bersangkutan untuk memilih meneruskan proses sampai keluarnya visa, atau menjadwal ulang di keberangkatan berikutnya atau mengundurkan diri dengan dipotong biaya administrasi proses.</strong></li>
</ul>
                        </div>
                    </div>
                    
                </div>
            </div><!-- /Accordians -->
            </div>
        </div><!--./row-->
            </div>
            
            </div>
        </section>
	</section>
	";
}
if($_GET['p']=='haji'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Program Haji Khusus</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Program</a></li>
								<li>Program Haji Khusus</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content typography'>
			<div class='container'>
				<div class='row sub_content'>
					<div class='col-lg-12 col-md-12 col-sm-12'>
						<div class='dividerHeading'>
							<h4><span>Haji Khusus</span></h4>

						</div>
					</div>
					<div class='mrgb-50 clearfix'></div>
					<div class='pricingBlock theme-color-pt'>
						";
				$query = mysql_query("SELECT * FROM produk where jenis_produk='Haji Khusus' AND jenis_paket='Haji Khusus'");
				while ($row=mysql_fetch_array($query)){
					if($row[biaya]<15000){
						$kurs='USD';
					}
					else if($row[biaya]>15000){
						$kurs='IDR';
					}
					echo"
                        <!--  DARK-BLUE PRICE ITEM  -->
                        <div class='col-lg-3 col-md-3 col-sm-3'>
                            <div class='pricingTable'><!-- BODY BOX-->
                                <div class='pricingTable-header'><!-- HEADER BOX-->
                                    <span class='heading'><i class=\"fa fa-plane\"></i> Paket $row[jenis_paket]</span>
                                    <span class='price-value'>$kurs <span>";echo format_angka($row['biaya']);echo"</span></span>
                                </div><!--/ BODY BOX-->

                                <div class='pricingContent'>
                                    <ul>
                                        <li><strong>ID Program :</strong> $row[id_produk]</li>
                                        <li><strong>Perjalanan :</strong> $row[lama_perjalanan]</li>
                                        <li><strong>Tanggal Keberangkatan :</strong> $row[tanggal_keberangkatan]</li>
                                        <li><strong>Bulan Keberangkatan :</strong> $row[bulan_keberangkatan]</li>
                                        <li><strong>Batas Pelunasan :</strong> $row[pelunasan]</li>
                                        <li><strong>Keterangan :</strong> $row[keterangan]</li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                                <div class='pricingTable-sign-up'><!-- BUTTON BOX-->
                                    <a href='?p=sitinerari&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Itinerari</a>
                                    <a href='?p=sakomodasi&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-search\"></i> Akomodasi</a>
                                    <a href='?p=daftar&id_produk=$row[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-pencil\"></i> Daftar Sekarang!</a>
                                </div><!-- BUTTON BOX-->

                            </div><!--/ BODY BOX-->
                        </div>
                        <!--  DARK-BLUE PRICE ITEM  -->

                        <!--  DARK-BLUE PRICE ITEM  -->
                        ";
				}
				echo"	
					</div>
				</div>
		<div class='row sub_content'>
            <div class='col-lg-12 col-md-12 col-sm-12'>
                <div class='dividerHeading'>
                    <h4><span>Keterangan</span></h4>
                </div>
            </div>

            <div class='col-lg-12 col-md-12 col-sm-12'>
                <div id='accordion' class='panel-group accordion'><!-- Accordians -->
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#1' data-parent='#accordion' data-toggle='collapse'>
                                    Prosedur Pendaftaran Haji Khusus
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='1'>
                            <div class='panel-body'>&raquo; Harga Paket Haji Khusus untuk pelunasan tahun 2015 USD 10.500 dan pelunasan tahun 2016 USD 11.000, handling Rp 1.000.000,- Dam Tamattu USD 100.</div>
                            <div class='panel-body'>&raquo; Setor Awal USD 4.000 + Rp 5.000.000,- (USD 500).</div>
                            <div class='panel-body'>&raquo; Melengkapi Dokumen Haji (Fc.KTP 5 Lembar, Fc.KK 1 Lembar, Fc.Akte Kelahiran 1 Lembar, Fc.Warna Halaman Buku Nikah yang ada fotonya 1 Lembar, pass foto warna background putih close up wajah 80% uk. 3x4=50 lembar, 4x6=10 lembar, Fc. Passport apabila sudah memiliki passport 2 lembar).</div>
                            <div class='panel-body'>&raquo; Melunasi Biaya Paket 7 Bulan sebelum keberangkatan setelah ada pengumuman dari Kemenag RI. Ketentuan biaya pelunasan sesuai harga paket pada tahun pelunasan.</div>
                            <div class='panel-body'>&raquo; Harga tetap, bagi yang melunasi biaya paket haji pada tahun pendaftaran.</div>
                        </div>
                    </div>
                    
                    
                </div>
            </div><!-- /Accordians -->
            </div>
        </div><!--./row-->		
			</div>
			
			</div>
		</section>

	</section>
	";
}
if($_GET['p']=='konfirmasi'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Konfirmasi Pembayaran</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Aplikasi</a></li>
								<li>Pembayaran</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content typography'>
			<div class='container'>

							<div class='dividerHeading'>
                                <h4><span>Konfirmasi Pembayaran</span></h4>
                                </div>
                            <form method=POST action='ikonfirmasi.php' name='konfirmasi'enctype='multipart/form-data'>
                            <div class='comment_form'>
                               <div class='row'>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='no_rekening' type='number' id='name' size='30'  placeholder='No. Rekening' required>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_bank' type='text' id='email' size='30'  placeholder='Nama Bank' required>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='atas_nama' type='text' id='url' size='30'  placeholder='Atas Nama' required>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='no_resi' type='text' id='name' size='30'  placeholder='No. Resi' >
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='jumlah' type='number' id='name' size='30'  placeholder='Jumlah' required>
                                   </div>
                                   <div class='col-sm-4'>
                                       Bukti Transfer<input name='bukti' type='file'  size='30'  placeholder='Bukti' required>
                                   </div>
                               </div>
                            </div>
                            <div class='comment-box row'>
                                <div class='col-sm-12'>
                                    <p>
                                        <textarea name='keterangan' class='form-control' rows='6' cols='40' id='comments' placeholder='Keterangan'></textarea>
                                    </p>
                                </div>
                            </div>
                            <input type='submit' class='btn btn-lg btn-default' value='Kirim'></form>
            </div>
        </section>

	</section>
	";
}
if($_GET['p']=='daftar_baru'){
session_start();
if(!isset($_SESSION['submit'])){
    $_SESSION['submit'] = true;
}
$produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$_GET[id_produk]'"));
$result = mysql_query("select * from pelanggan");
$jsArray = "var prdName = new Array();\n";
$query="select max(id_pelanggan) as maxID from pelanggan where id_pelanggan like 'DAM%'";
$hasil=mysql_query($query);
$data=mysql_fetch_array($hasil);
$idMax=$data['maxID'];

$noUrut=(int) substr($idMax,3,6);
$noUrut++;

$newID = 'DAM'.sprintf("%05s",$noUrut);
echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Form Pendaftaran [$produk[id_produk]]</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Aplikasi</a></li>
								<li>Daftar</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content typography'>
			<div class='container'>

							
                            <form method=POST action='daftar.php' name='daftar'enctype='multipart/form-data'>
                            <input type=hidden name=id_produk value='$produk[id_produk]'>
                            <input type=hidden name=id_pelanggan value='$newID'>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='id_pelanggan' type='text'  size='30'  placeholder='ID. Pelanggan' value='$newID' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='jenis_produk' type='text'  size='30'  placeholder='Jenis Produk' value='Jenis Produk: $produk[jenis_produk]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='bulan_keberangkatan' type='text'  size='30'  placeholder='Keberangkatan' value='Bulan Keberangkatan: $produk[bulan_keberangkatan]' disabled>
                                   </div>
                                </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                   <div class='col-sm-4'>
                                       Nama Depan <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='nama_depan' type='text'  size='30'   required>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Tengah
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_tengah' type='text'  size='30'  >
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Belakang
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_belakang' type='text'  size='30'  >
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Panggilan
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_panggilan' type='text'  size='30'   >
                                   </div>
                                   <div class='col-sm-4'>
                                       Tempat Lahir<font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='tempat_lahir' type='text'  size='30'  required>
                                   </div>
                                   <div class='col-sm-4'>
                                       Tanggal Lahir(tanggal/bulan/tahun)<font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='tanggal_lahir' type='text'  size='30'  required>
                                   </div>
                                   <div class='col-sm-4'>
                                       No. KTP <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='no_ktp' type='text'  size='30'  placeholder='No. KTP' required>
                                   </div>
                                   <div class='col-sm-4'>
                                       Jenis Kelamin <font color='red'>*Data Wajib</font><select class='col-lg-4 col-md-4 form-control' name='jenis_kelamin' required>
                                       <option value''></option>
                                       <option value='Laki-Laki'>Laki-Laki</option>
                                       <option value='Perempuan'>Perempuan</option>
                                       </select>
                                   </div>
                                   <div class='col-sm-4'>
                                   Pendidikan
                                       <input class='col-lg-4 col-md-4 form-control' name='pendidikan' type='text'  size='30'  placeholder='Pendidikan' >
                                   </div>
                                   <div class='col-sm-4'>
                                   Pekerjaan
                                       <input class='col-lg-4 col-md-4 form-control' name='pekerjaan' type='text'  size='30'  placeholder='Pekerjaan' >
                                   </div>
                                   <div class='col-sm-4'>
                                   Ket. Umrah 
                                       <select class='col-lg-4 col-md-4 form-control' name='ket_umrah' >
                                       <option value''></option>
                                       <option value='Sudah Pernah'>Sudah Pernah</option>
                                       <option value='Belum Pernah'>Belum Pernah</option>
                                       </select>
                                   </div>
                                   <div class='col-sm-4'>
                                       Ket. Haji 
                                       <select class='col-lg-4 col-md-4 form-control' name='ket_haji' >
                                       <option value''></option>
                                       <option value='Sudah Pernah'>Sudah Pernah</option>
                                       <option value='Belum Pernah'>Belum Pernah</option>
                                       </select>
                                   </div>
                                   <div class='col-sm-4'>
                                   Ukuran Pakaian
                                       <select class='col-lg-4 col-md-4 form-control' name='ukuran_pakaian' >
                                       <option value''></option>
                                       <option value='S'>S</option>
                                       <option value='L'>L</option>
                                       <option value='XL'>XL</option>
                                       <option value='XXL'>XXL</option>
                                       </select>
									</div>
                                   <div class='col-sm-4'>
                                   Kota
                                       <input class='col-lg-4 col-md-4 form-control' name='kota' type='text'  size='30'  placeholder='Kota' >
                                   </div>
                                   <div class='col-sm-4'>
                                   Telp. Rumah
                                       <input class='col-lg-4 col-md-4 form-control' name='telp_rumah' type='text'  size='30'  placeholder='Telp. Rumah' >
                                   </div>
                                   <div class='col-sm-4'>
                                   Telp. Kantor
                                       <input class='col-lg-4 col-md-4 form-control' name='telp_kantor' type='text'  size='30'  placeholder='Telp. Kantor' >
                                   </div>
                                   <div class='col-sm-4'>
                                       No.HP<font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='hp' type='text'  size='30'  placeholder='Hp' required>
                                   </div>
                                   <div class='col-sm-4'>
                                   Email
                                       <input class='col-lg-4 col-md-4 form-control' name='email' type='email'  size='30'  placeholder='Email' required>
                                   </div>
                               </div>
                            </div>
                            <div class='comment-box row'>
                                <div class='col-sm-12'>Alamat<font color='red'>*Data Wajib</font>
                                    <p>
                                        <textarea name='alamat' class='form-control' rows='3' cols='40' required></textarea>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                       Ahli Waris <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='ahli_waris' type='text'  size='30'  placeholder='Ahli Waris' required>
                                   </div>
                                   <div class='col-sm-4'>
                                       Hubungan <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='hubungan' type='text'  size='30'  placeholder='Hubungan' required>
                                   </div>

                               </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                    No. Rekening
                                       <input class='col-lg-4 col-md-4 form-control' name='no_rekening' type='text' id='name' size='30'  placeholder='No. Rekening' >
                                   </div>
                                   <div class='col-sm-4'>
                                   Atas Nama
                                       <input class='col-lg-4 col-md-4 form-control' name='atas_nama' type='text'  size='30'  placeholder='Atas Nama' >
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Bank
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_bank' type='text' size='30'  placeholder='Nama Bank' >
                                   </div>
                                   <div class='col-sm-4'>
                                   Cabang
                                       <input class='col-lg-4 col-md-4 form-control' name='cabang' type='text' id='name' size='30'  placeholder='Cabang' >
                                   </div>
                               </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                       ";echo "ID Da'i - Nama Da'i<select class='col-lg-4 col-md-4 form-control' name=\"reg_dai\" onchange=\"document.getElementById(\'prd_name\').value = prdName[this.value]\">";
echo '<option></option>';
while ($row = mysql_fetch_array($result)) {
    echo '<option value="' . $row['id_pelanggan'] . '">' . $row['id_pelanggan'] .'-'.$row['nama_depan'].' '.$row['nama_tengah'].' '.$row['nama_belakang']. '</option>';
    $jsArray .= "prdName['" . $row['id_pelanggan'] . "'] = '" . addslashes($row['nama_depan']) . "';\n";
}
echo "</select>
                                   </div>
                                   
                               </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                       Username <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='username' type='text'  size='30'  required>
                                   </div>
                                   <div class='col-sm-4'>
                                       Password <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='password' type='text'  size='30'  required>
                                   </div>

                               </div>
                            </div>
                            <hr>
                            
                            <div class='comment_form'>
                               
                            </div>
                            <input type='submit' class='btn btn-lg btn-default' value='Daftar'></form>
                        </div>
        </section>

	</section>
	";
}

if($_GET['p']=='peluang'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Peluang Usaha</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Aplikasi</a></li>
								<li>Peluang Usaha</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content not_found'>
			<div class='container'>
				<div class='row'>
					<div class='col-sm-12 col-lg-12 col-md-12'>
						<div class='page_404'>
							<h1><i class='fa fa-phone'></i></h1>
							<p>Silahkan Hubungi CS Kami Untuk Informasi Lebih Lanjut</p>
							<a href='index.php' class='btn btn-default btn-lg back_home'>
								<i class='fa fa-arrow-circle-o-left'></i>
								Kembali
							</a>
						</div>
					</divvd>
				</div>
				
			</div>
		</section>


	</section>
	";
}
if($_GET['p']=='foto'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Foto-Foto Damtour</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Galeri</a></li>
								<li>Foto-Foto Damtour</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content portfolio small-images'>
			<div class='container'>
				<div class='row'>
					<!--begin isotope -->
					<div class='isotope col-lg-12'>
						<!--begin portfolio filter -->
						
						<!--end portfolio filter -->
						
						<!--begin portfolio_list -->   
						<ul id='list' class='portfolio_list clearfix '>
							<!--begin List Item -->";
				$query = mysql_query("SELECT * FROM foto ");
				while ($row=mysql_fetch_array($query)){
					echo"
                    <li class='list_item col-lg-3 col-md-3 col-sm-3 branding'>
								<div class='recent-item'>
									<figure>
										<div class='touching medium'>
											<img src='upload/img_foto/$row[foto]'  width='265' height='200' />
                                        </div>
                                        <figcaption class='item-description'>
                                            <h5>$row[foto]</h5>
                                            <span>$row[keterangan]</span>
                                        </figcaption>
                                        <div class='option'>
                                            <a href='upload/img_foto/$row[foto]' class='hover-zoom mfp-image' ><i class='fa fa-search'></i></a>
                                        </div>
                                    </figure>
								</div>
							</li>
							<!--end List Item -->
                    ";
				}
				echo"					
							
						</ul> <!--end portfolio_list -->
					</div>
					
				</div> <!--./row-->
			</div> <!--./div-->
		</section>

	</section>
	";
}
if($_GET['p']=='fdokumentasi'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Foto Dokumentasi Umroh</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Galeri</a></li>
								<li>Foto Dokumentasi Umroh Damtour</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content portfolio small-images'>
			<div class='container'>
				<div class='row'>
					<!--begin isotope -->
					<div class='isotope col-lg-12'>
						<!--begin portfolio filter -->
						
						<!--end portfolio filter -->
						
						<!--begin portfolio_list -->   
						<ul id='list' class='portfolio_list clearfix '>
							<!--begin List Item -->";
				$jfoto2=mysql_fetch_array(mysql_query("select * from jenis_foto where jenis='Dokumentasi Umroh'"));
				$query = mysql_query("SELECT * FROM foto where id_jenis='$jfoto2[id_jenis]'");
				while ($row=mysql_fetch_array($query)){
					$jfoto=mysql_fetch_array(mysql_query("select * from jenis_foto where id_jenis='$row[id_jenis]'"));
					echo"
                    <li class='list_item col-lg-3 col-md-3 col-sm-3 branding'>
								<div class='recent-item'>
									<figure>
										<div class='touching medium'>
											<img src='upload/img_foto/$row[foto]'  width='265' height='200' />
                                        </div>
                                        <figcaption class='item-description'>
                                            <h5>$row[foto]</h5>
                                            <span>$row[keterangan]</span>
                                        </figcaption>
                                        <div class='option'>
                                            <a href='upload/img_foto/$row[foto]' class='hover-zoom mfp-image' ><i class='fa fa-search'></i></a>
                                        </div>
                                    </figure>
								</div>
							</li>
							<!--end List Item -->
                    ";
				}
				echo"					
							
						</ul> <!--end portfolio_list -->
					</div>
					
				</div> <!--./row-->
			</div> <!--./div-->
		</section>

	</section>
	";
}
if($_GET['p']=='video'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Video Damtour</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Galeri</a></li>
								<li>Video Damtour</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content portfolio small-images'>
			<div class='container'>
				<div class='row'>
					<!--begin isotope -->
					<div class='isotope col-lg-12'>
						<!--begin portfolio filter -->
						
						<!--end portfolio filter -->
						
						<!--begin portfolio_list -->   
						<ul id='list' class='portfolio_list clearfix '>
							<!--begin List Item -->";
				$query = mysql_query("SELECT * FROM video");
				while ($row=mysql_fetch_array($query)){
					echo"
                    <li class='list_item col-lg-3 col-md-3 col-sm-3 branding'>
								<div class='recent-item'>
									<figure>
										$row[video] 
                                    </figure>
								</div>
							</li>
							<!--end List Item -->
                    ";
				}
				echo"					
							
						</ul> <!--end portfolio_list -->
					</div>
					
				</div> <!--./row-->
			</div> <!--./div-->
		</section>

	</section>
";
}
if($_GET['p']=='vdokumentasi'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Video Dokumentasi Umroh Damtour</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Galeri</a></li>
								<li>Video Kegiatan Dokumentasi Umroh Damtour</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content portfolio small-images'>
			<div class='container'>
				<div class='row'>
					<!--begin isotope -->
					<div class='isotope col-lg-12'>
						<!--begin portfolio filter -->
						
						<!--end portfolio filter -->
						
						<!--begin portfolio_list -->   
						<ul id='list' class='portfolio_list clearfix '>
							<!--begin List Item -->";
				$jvideo2=mysql_fetch_array(mysql_query("select * from jenis_video where jenis='Dokumentasi Umroh'"));
				$query = mysql_query("SELECT * FROM video where id_jenis='$jvideo2[id_jenis]'");
				while ($row=mysql_fetch_array($query)){
					$jvideo=mysql_fetch_array(mysql_query("select * from jenis_video where id_jenis='$row[id_jenis]'"));
					echo"
                    <li class='list_item col-lg-3 col-md-3 col-sm-3 branding'>
								<div class='recent-item'>
									<figure>
										$row[video] 
                                    </figure>
								</div>
							</li>
							<!--end List Item -->
                    ";
				}
				echo"					
							
						</ul> <!--end portfolio_list -->
					</div>
					
				</div> <!--./row-->
			</div> <!--./div-->
		</section>

	</section>
";
}
if($_GET['p']=='live_makkah'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Siaran Langsung Dari Makkah</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Live</a></li>
								<li>Live Makkah</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class='content'>
			<div class='container'>
			<div class=\"row sub_content\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<div class=\"dividerHeading\">
							<h4><span>Live Makkah</span></h4>
						</div>
						<iframe width=\"100%\" height=\"234\" src=\"https://www.youtube.com/embed/ArVmnth5jB4\" frameborder=\"0\" allowfullscreen></iframe>
               <br>
                <a href='http://www.accuweather.com/id/sa/mecca/299427/weather-forecast/299427' class='aw-widget-legal'>
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id='awcc1446612461543' class='aw-widget-current'  data-locationkey='299427' data-unit='c' data-language='id' data-useip='false' data-uid='awcc1446612461543'></div><script type='text/javascript' src='http://oap.accuweather.com/launch.js'></script>
					</div>
				</div>


			</div>
		</section>
	</section>
";
}
if($_GET['p']=='live_madinah'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Siaran Langsung Dari Madinah</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Live</a></li>
								<li>Live Madinah</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class='content'>
			<div class='container'>
			<div class=\"row sub_content\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<div class=\"dividerHeading\">
							<h4><span>Live Madinah</span></h4>
						</div>
						<iframe width=\"100%\" height=\"234\" src=\"https://www.youtube.com/embed/4OoKpZWJASY\" frameborder=\"0\" allowfullscreen></iframe>
               <br>
                <a href='http://www.accuweather.com/id/sa/medina/296807/weather-forecast/296807' class='aw-widget-legal'>
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id='awcc1446612526110' class='aw-widget-current'  data-locationkey='296807' data-unit='c' data-language='id' data-useip='false' data-uid='awcc1446612526110'></div><script type='text/javascript' src='http://oap.accuweather.com/launch.js'></script>
					</div>
				</div>


			</div>
		</section>
	</section>
	";
}
if($_GET['p']=='buatpassport'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Jasa Pembuatan Passport</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Jasa</a></li>
								<li>Jasa Pembuatan Passport</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class='content'>
			<div class='container'>
			<div class=\"row sub_content\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<div class=\"dividerHeading\">
							<h4><span>Jasa Pembuatan Passport</span></h4>

						</div>
						<table align='center' style='width:auto' height=40% border=0><tr><td><p align=center>Jasa untuk pembuatan passport di
IMIGASI JAKARTA SELATAN, TIMUR & IMIGRASI KOTA DEPOK</p> 

<p align=center>Tanpa RIBET, Cepat & Terjamin Biaya :<br>
==================================<br>
Jalur Reguler (estimasi 7 hari kerja) -- Rp 600.000<br>
Jalur Express (3 hari kerja) -- Rp 1.000.000</p>
<p style='text-align:justify;'>
Persyaratan dokumen u/ paspor dewasa :<br>
----------------------------------------<br>
1. KTP<br>
2. KK (kartu keluarga)<br>
3. Akte Kelahiran atau Ijazah terakhir<br>
4. Surat Nikah (untuk status menikah)<br>
5. Surat rekomendasi dari kantor (untuk karyawan/ti)<br>
6. Paspor lama (untuk yang pernah memiliki paspor)<br><br>

Persyaratan pembuatan Paspor Anak :<br>
--------------------------------------<br>
1. Akta Lahir Anak<br>
2. KTP ayah dan Ibu<br>
3. KK (Nama anak harus sudah tercantum di Kartu Keluarga)<br>
4. Surat Nikah orang tua<br>
5. Paspor Ayah dan Ibu (jika ada)<br>
6. Paspor lama Anak (untuk yang pernah memiliki paspor)<br><br>

prosedur pembuatan adalah sbb:<br>
---------------------------------<br>

1. semua kelengkapan dokumen mohon di email atau di fax ke kami.<br>

2. Rulesnya :<br>
A. Jalur Reguler<br>
- Hari ini kasih berkas ke kami sebelum jam 13:00 wib<br>
- 2 hari kerja setelah penerimaan berkas sudah bisa foto & interview<br>
- 5 hari kerja setelah proses foto & interview paspor jadi & siap diantar.<br>

B.Jalur Ekspress<br>
- Hari ini kasih berkas ke kami sebelum jam 12:00 wib maka hari itu juga sudah bisa langsung foto & interview.<br>
- 2 hari kerjanya paspor jadi & siap diantar,
<br>
 Untuk info lebih lanjut silahkan hubungi Customer Service Kami.
</p></td></tr></table>
					</div>
				</div>


			</div>
		</section>
	</section>
";
}
if($_GET['p']=='buatvisa'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Jasa Pembuatan Visa</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Jasa</a></li>
								<li>Jasa Pembuatan Visa</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class='content'>
			<div class='container'>
			<div class=\"row sub_content\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<div class=\"dividerHeading\">
							<h4><span>Jasa Pembuatan Visa</span></h4>

						</div>
						<table align='center' style='width:auto;' height=40% border=0><tr><td><p style='text-align:justify;'>Kami saat ini juga menyediakan layanan JASA PENGURUSAN VISA UMRAH bagi travel umrah atau biro umrah maupun jamaah pribadi atau kelompok pengajian. Layanan pengurusan visa umrah ini kami berikan karena tingginya minat masyarakat yang ingin melakukan ibadah umrah tanpa melalui travel agent atau biro umrah lainnya yang kesulitan untuk mendapatkan visa umrah dari provider yang sudah bekerjasama sebelumnya.
Saat ini kami telah bekerjasama dengan 10 (sepuluh) provider yang telah mengantongi izin dalam mengajukan izin visa umrah ke kedutaan arab saudi. Provider kami telah berpengalaman puluhan tahun dalam melayani pembuatan visa umrah dan memiliki kuota visa umrah ribuan setiap tahunnya.Proses visa umrah yang dilakukan oleh provider kami dilakukan secara cepat dan apabila terdapat kendala yang diluar dugaan kepastian terbit atau tidaknya visa dikeluarkan maksimal 2 (dua) minggu setelah pengajuan.<br><br>
Kami mensyaratkan dalam pengajuan visa umrah ini dilakukan melalui kelompok dengan minimal pengajuan adalah 4 (empat) orang karena untuk menghindari pihak-pihak yang ingin menggunakan visa umrah ini untuk kepentingan lainnya. Visa umrah ini hanya digunakan murni untuk kegiatan ibadah umrah bukan untuk bekerja dan berlaku hanya maksimal 30 hari setelah diterbitkan.
Segera hubungi customer service kami untuk mengetahui biaya layanan JASA PENGURUSAN VISA UMRAH ini dan persyaratan yang harus disiapkan oleh pemohon. 
</p></td></tr></table>
					</div>
				</div>


			</div>
		</section>
	</section>
";
}
if($_GET['p']=='buatdokumen'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Jasa Pembuatan Dokumen</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Jasa</a></li>
								<li>Jasa Pembuatan Dokumen</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class='content'>
			<div class='container'>
			<div class=\"row sub_content\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<div class=\"dividerHeading\">
							<h4><span>Jasa Pembuatan Dokumen</span></h4>

						</div>
						<table align='center' style='auto;' height=40% border=0><tr><td><p style='text-align:justify;'>Kami menerima Jasa Pengurusan PT, CV, UD, HO, SIUP, TDP atau jasa terjemahan bahasa,dll
Akta Notaris
Dokumen Perusahaan (Akta, SIUP, TDP, dll)
Dokumen Pribadi (Akta Kelahiran, KTP, Ijazah, dll)
Company Prifile
Website
User Manual/ Manual Book, dll.<br><br>

Untuk keterangan lebih lanjut hubungi Sdr. Syamsul Riadi di 0818 0888 3635.
</p></td></tr></table>
					</div>
				</div>


			</div>
		</section>
	</section>
";
}
if($_GET['p']=='tiketing'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Tiketing</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Jasa</a></li>
								<li>Tiketing</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<section class='content'>
			<div class='container'>
			<div class=\"row sub_content\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<div class=\"dividerHeading\">
							<h4><span>Tiketing</span></h4>

						</div>
						<table align='center' style='width:auto;' height=40% border=0><tr><td><p style='text-align:justify;'>Kami pun saat ini melayani pembelian tiket pesawat domestik, untuk keterangan lebih lanjut silahkan hubungi customer service kami.</p></td></tr></table>
					</div>
				</div>


			</div>
		</section>
	</section>
";
}

if($_GET['p']=='login_chatting'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Log In Chatting Room</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Login Chatting</a></li>
								<li>Chatting </li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content typography'>
			<div class='container'>

							<div class='dividerHeading'>
                                <h4><span>Form Log In</span></h4>
                                </div>
                                <form method=POST action='cek_login_chatting.php' name='login_chatting'enctype='multipart/form-data'>
                            <div class='comment_form'>
                               <div class='row'>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='email' type='email' id='email' size='30'  placeholder='Email' required>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='password' type='password' id='url' size='30'  placeholder='Password' required>
                                   </div>
                                </div>
                            </div>
                            <input type='submit' class='btn btn-lg btn-default' value='Login'></form>
            </div>
        </section>
	</section>
";
}

if($_GET['p']=='regchatting'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Daftar Chatting</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Pertanyaan</a></li>
								<li>Daftar Chatting</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
<section class='content typography'>
	<div class='container'>
		<div class='dividerHeading'>
                                <h4><span>Daftar Chatting</span></h4>
                                </div>
                            <form method=POST action='daftar_chatting.php' name='daftar_chatting'enctype='multipart/form-data'>
                            <div class='comment_form'>
                               <div class='row'>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='nama' type='text'  size='30'  placeholder='Nama Lengkap' required>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='email' type='email'  size='30'  placeholder='Email' required>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='password' type='password'  size='30'  placeholder='Password' required>
                                   </div>
                                </div>
                            </div>
                            <input type=submit class='btn btn-lg btn-default' value='Daftar'>
                        </div>
                        </form>
        </div>
    </section>
	</section>
";
}
if($_GET['p']=='login_pelanggan'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>LogIn Pelanggan</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='index.php'>Home</a></li>
                                <li><a href='index.php'>Pelanggan</a></li>
                                <li>Form Login Pelanggan</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class='content typography'>
            <div class='container'>

                            <div class='dividerHeading'>
                                <h4><span>Form Log In</span></h4>
                                </div>
                                <form method=POST action='cek_login_pelanggan.php' name='login_pelanggan'enctype='multipart/form-data'>
                            <div class='comment_form'>
                               <div class='row'>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='email' type='email' id='email' size='30'  placeholder='Email' required>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='password' type='password' id='url' size='30'  placeholder='Password' required>
                                   </div>
                                </div>
                            </div>
                            <input type='submit' class='btn btn-lg btn-default' value='Login'></form>
            </div>
        </section>
    </section>
";
}
if($_GET['p']=='prosedur_haji'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Prosedur Pendaftaran Haji</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Program</a></li>
								<li>Prosedur Pendaftaran Haji</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content typography'>
			<div class='container'>
			<p align='center'><img class='img-responsive' src='images/services/1a.JPG' alt=''></p>
<p align='center'><img class='img-responsive' src='images/services/2a.JPG' alt=''></p>
<p align='center'><img class='img-responsive' src='images/services/3a.JPG' alt=''></a></p>
<p align='center'><img class='img-responsive' src='images/services/4a.JPG' alt=''></p>
<p align='center'><img class='img-responsive' src='images/services/5a.JPG' alt=''></p>
<p align='center'><img class='img-responsive' src='images/services/6a.JPG' alt=''></p>
<p align='center'><img class='img-responsive' src='images/services/7a.JPG' alt=''></p>
			</div>
		</section>
	</section>
";
}
if($_GET['p']=='viewartikel'){
	$r=mysql_fetch_array(mysql_query("select*from artikel where judul_artikel='$_GET[judul_artikel]'"));
	$r2=mysql_fetch_array(mysql_query("select*from kategori where id_kategori='$r[id_kategori]'"));
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>$r2[kategori]</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Artikel&Berita</a></li>
								<li>$r2[kategori]</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content blog'>
			<div class='container'>
				<div class='row'>
					<div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>
						<div class='blog_single'>
							<article class='post'>
								<figure class='post_img'>
									<a href='#'>
										<img src='upload/img_artikel/$r[foto]'  alt='blog post'>
									</a>
								</figure>
								
								<div class='post_content'>
									<div class='post_meta'>
										<h2>
											$r[judul_artikel]
										</h2>
										<div class='metaInfo'>
											<span><i class='fa fa-calendar'></i> $r[tanggal_posting] </span>
											<span><i class='fa fa-user'></i> By Admin </span>
											<span><i class='fa fa-tag'></i> $r2[kategori] </span>
											
										</div>
									</div>
									<p style=\"text-align: justify;\">$r[isi_artikel]</p>
								</div>
								
							</article>
							
						</div>

						
				    </div>

					<!--Sidebar Widget-->
					<div class='col-xs-12 col-md-4 col-lg-4 col-sm-4'>
						<div class='sidebar'>
							<div class='widget widget_search'>
								<div class='site-search-area'>
									
								</div><!-- end site search -->
							</div>
							
							<div class='widget widget_categories'>
								<div class='widget_title'>
									<h4><span>Berita&Artikel Lain</span></h4>
									</div>
								<ul class='arrows_list'>";
								$query = mysql_query("SELECT * FROM artikel ORDER BY id_artikel DESC limit 5");
                while ($row=mysql_fetch_array($query)){
                    $kategori=mysql_fetch_array(mysql_query("select * from kategori where id_kategori='$row[id_kategori]'"));
                    echo"
                    <li><i class=\"fa fa-caret-right\"></i> <a href=\"?p=viewartikel&judul_artikel=$row[judul_artikel]\">$row[judul_artikel]</a></li>";
                }
									echo"
								</ul>
							</div>
							
							<div class='widget widget_about'>
								<div class='widget_title'>
									<h4><span>Info Damtour</span></h4>
									</div>";
									$query = mysql_query("SELECT * FROM info ORDER BY id_info DESC limit 5");
                while ($r=mysql_fetch_array($query)){
                   
                    echo"
								<p>$r[isi_info] - $r[tanggal_posting]</p>
								<img src='upload/img_info/$r[foto]' height=100 width=100 align=center>";
							}
							echo"
							</div>

                            

							
						</div>
					</div>
				</div><!--/.row-->
			</div> <!--/.container-->
		</section>

	</section>
";
}
if($_GET['p']=='info'){
	echo"
	<section class=\"wrapper\">
		<section class=\"page_head\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-lg-12 col-md-12 col-sm-12\">
						<h2>Info Damtour</h2>
						<nav id=\"breadcrumbs\">
							<ul>
								<li>Anda Di Halaman Ini:</li>
								<li><a href='index.php'>Home</a></li>
								<li><a href='index.php'>Tentang Kami</a></li>
								<li>Info Damtour</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class='content typography'>
			<div class='container'>
		<div class='row sub_content'>
            
            <div class='col-lg-12 col-md-12 col-sm-12'>
                <div id='accordion' class='panel-group accordion'><!-- Accordians -->
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <h4 class='panel-title'>
                                <span class='accordian-icon'>
                                    <i class='switch fa fa-plus-circle'></i>
                                </span>
                                <a href='#1' data-parent='#accordion' data-toggle='collapse'>
                                    Klik Untuk Melihat Detail
                                </a>
                            </h4>
                        </div>
                        <div class='panel-collapse collapse' id='1'>
                            ";
                             $sql=mysql_query("SELECT*FROM info");
	while($data=mysql_fetch_array($sql)){
                      echo"<ul style=\"text-align: justify;\" class='panel-body'><table>
				<tr>
					<td><b>Judul  : </b> $data[judul_info]
					</td>
				</tr>
				<tr>
					<td><b>Isi Info  : </b> $data[isi_info]
					</td>
				</tr>
				<tr>
					<td><img src='upload/img_info/$data[foto]' width=100 height=100>
					</td>
				</tr>
				<tr>
					<td><b>Tanggal Posting : </b> $data[tanggal_posting]
					</td>
				</tr>
			</table></ul><hr>";
	}echo"
                        </div>
                    </div>
                    
                </div>
            </div><!-- /Accordians -->
            </div>
        </div><!--./row-->
        </div>
        </section>

	</section>
	";
}
if($_GET['p']=='sitinerari'){
    $data=mysql_fetch_array(mysql_query("select*from itinerari where id_produk='$_GET[id_produk]'"));
    $data2=mysql_fetch_array(mysql_query("select*from produk where id_produk='$_GET[id_produk]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>&nbsp;<a href='javascript:history.go(-1)'><img src='images/back.png'></a> $data2[jenis_produk] Paket $data2[jenis_paket] ID Produk [$data2[id_produk]]</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='index.php'>Home</a></li>
                                <li><a href='index.php'>Produk</a></li>
                                <li>Itinerari</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class='content'>
            <div class='container'>
            <div class=\"row sub_content\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        $data[itinerari]
                    </div>
                </div>


            </div>
        </section>
    </section>

        ";
}
if($_GET['p']=='sakomodasi'){
    $data=mysql_fetch_array(mysql_query("select*from akomodasi where id_produk='$_GET[id_produk]'"));
    $data2=mysql_fetch_array(mysql_query("select*from produk where id_produk='$_GET[id_produk]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>&nbsp;<a href='javascript:history.go(-1)'><img src='images/back.png'></a> $data2[jenis_produk] Paket $data2[jenis_paket] ID Produk [$data2[id_produk]]</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='index.php'>Home</a></li>
                                <li><a href='index.php'>Produk</a></li>
                                <li>Akomodasi</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class='content'>
            <div class='container'>
            <div class=\"row sub_content\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        $data[akomodasi_hotel]
                        <hr>
                        $data[akomodasi_pesawat]
                    </div>
                </div>


            </div>
        </section>
    </section>

        ";
}
if($_GET['p']=='daftar'){
    $data=mysql_fetch_array(mysql_query("select*from produk where id_produk='$_GET[id_produk]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>&nbsp;<a href='javascript:history.go(-1)'><img src='images/back.png'></a>Pendaftaran </h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='index.php'>Home</a></li>
                                <li><a href='index.php'>produk</a></li>
                                <li>Pendaftaran</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class='content'>
            <div class='container'>
            <div class=\"row sub_content\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <table width=100%>
                        <tr><td align=center><a href='?p=daftar_baru&id_produk=$_GET[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-user\"></i> Pelanggan Baru</a></td></tr>
                        <tr><td align=center>&nbsp;</td></tr>
                        <tr><td align=center><a href='?p=daftar_lama&id_produk=$_GET[id_produk]' class='btn btn-block btn-default'><i class=\"fa fa-user\"></i> Pelanggan Lama</a></td></tr>
                        </table>
                    </div>
                </div>


            </div>
        </section>
    </section>

        ";
}
if($_GET['p']=='daftar_lama'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2><font color=red>Silahkan Login Terlebih Dahulu!</font></h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='index.php'>Home</a></li>
                                <li><a href='index.php'>Daftar Pelanggan Lama</a></li>
                                <li>Daftar pelanggan Lama</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class='content typography'>
            <div class='container'>

                            <div class='dividerHeading'>
                                <h4><span>Form Log In</span></h4>
                                </div>
                                <form method=POST action='cek_login_daftar.php' name='login_pelanggan'enctype='multipart/form-data'>
                            <input type=hidden name=id_produk value='$_GET[id_produk]'>
                            <div class='comment_form'>
                               <div class='row'>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='email' type='email' id='email' size='30'  placeholder='Email' required>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='password' type='password' id='url' size='30'  placeholder='Password' required>
                                   </div>
                                </div>
                            </div>
                            <input type='submit' class='btn btn-lg btn-default' value='Login'></form>
            </div>
        </section>
    </section>
";
}


?>