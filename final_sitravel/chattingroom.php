<?php
error_reporting(0);
ob_start();
session_start();
include"include/config.php";
include"include/lib.php";
$email=ucwords($_SESSION['email']);
$nama=ucwords($_SESSION['nama']);
$id_penanya=ucwords($_SESSION['id_penanya']);



if(empty($_SESSION['id_penanya']) OR empty($_SESSION['email'])){
echo"<p align='center'>Harap LogIn Terlebih Dahulu! <br> <a href='index.php?p=login_chatting'>Mau LogIn?</a></p>";}
else
{?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Damtour|Mengawal Anda Menuju Tanah Suci</title>
	<meta name="description" content="">
	
	<!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="css/layout/wide.css" data-name="layout">

    <link rel="stylesheet" href="css/fractionslider.css"/>
    <link rel="stylesheet" href="css/style-fraction.css"/>

    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    <script language="JavaScript">
 var txt="Damtour - Mengawal Anda Menuju Tanah Suci";
 var kecepatan=500; var segarkan=null; function bergerak(){document.title=txt;
 txt=txt.substring(1,txt.length)+txt.charAt(0);
 segarkan=setTimeout("bergerak()",kecepatan);}bergerak();</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--Start Header-->
	<header id="header" class="clearfix">
        <div id="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 hidden-xs top-info">
                        <span><i class="fa fa-phone"></i>Phone: (021) 7710-670</span>
                        <span><i class="fa fa-envelope"></i>Email: damtour@hotmail.com</span>
                    </div>
                    <div class="col-sm-5 top-info">
                        <ul>
                            <li><a href="https://twitter.com/@damtourtravel" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/damtoursukses" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOGO bar -->
       <div id="logo-bar" class="clearfix">
           <!-- Container -->
           <div class="container">
               <div class="row">
                   <!-- Logo / Mobile Menu -->
                   <div class="col-xs-12">
                       <div id="logo">
                           <h1><a href="index.php"><img src="images/logo.png" alt="Eve" /></a></h1>
                       </div>
                   </div>
               </div>
           </div>
           <!-- Container / End -->
       </div>
        <!--LOGO bar / End-->

        <!-- Navigation
================================================== -->
        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="logout_chatting.php"onClick="return confirm('Anda Mau Keluar Chatting Room?');"> <i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div><!--/.row -->
            </div><!--/.container -->
        </div>
	</header>
	<!--End Header-->

	<!--briefcaset wrapper-->
	<?php
    echo"<section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Chatting Room [ $_SESSION[nama] ]</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='chattingroom.php'>Home</a></li>
                                <li><a href='chattingroom.php'>Pertanyaan</a></li>
                                <li>Chatting Room</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>";?>
    <section class='content typography'>
        <div class='container'>
            <div class='row sub_content'>
            <div class='col-lg-6 '>
                <div>
                    <form action=ipertanyaan.php method='post'>
                    <textarea name='pertanyaan' rows=4></textarea>
                    <input type='submit' class='btn btn-lg btn-default' value=Kirim>
                    </form>
                </div>
            </div>
            <div class='row sub_content'>
            <div class='col-lg-6 '>
                <b>Histori Pertanyaan</b>
                <iframe src='tampil_pertanyaan.php' width='100%' height='100%' style='-webkit-border-radius:3px;'></iframe>
            </div>
        </div>
    </section>

    </section>
        	<section class="clients">
			<div class="container">
				<div class="row sub_content">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="dividerHeading">
							<h4><span>PT. Do'a Arafah Madinah</span></h4>

						</div>
						
						<div class="our_clients">
							<ul class="client_items clearfix">
								<li class="col-sm-3 col-md-3 col-lg-3"><img src="images/clients/1.png" alt="" /></li>
								<li class="col-sm-3 col-md-3 col-lg-3"><img src="images/clients/2.png" alt="" /></li>
								<li class="col-sm-3 col-md-3 col-lg-3"><img src="images/clients/3.png" alt="" /></li>
								<li class="col-sm-3 col-md-3 col-lg-3"><img src="images/clients/4.png" alt="" /></li>
							</ul><!--/ .client_items-->
						</div>
					</div>
				</div>
			</div>
		</section>
	    <section class="clients">
			<div class="container">
				<div class="row sub_content">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="dividerHeading">
							<h4><span>Waktu</span></h4>
                            <div style="margin: 15px 0px 0px; margin-right: 15px; display: inline-block; text-align: center; width: 120px;"><div style="display: inline-block; padding: 2px 4px; margin: 0px 0px 5px; border: 1px solid rgb(204, 204, 204); text-align: center; background-color: rgb(255, 255, 255);"><a style="text-decoration: none; font-size: 13px; color: rgb(0, 0, 0);" href="http://localtimes.info/Asia/Indonesia/Jakarta/"><img src="http://localtimes.info/images/countries/id.png"="" border=0="" style="border:0;margin:0;padding:0"=""> Jakarta</a></div><script src="http://localtimes.info/clock.php?continent=Asia&country=Indonesia&city=Jakarta&cp1_Hex=000000&cp2_Hex=FFFFFF&cp3_Hex=000000&fwdt=120&ham=0&hbg=0&hfg=0&sid=0&mon=0&wek=0&wkf=0&sep=0&widget_number=119" type="text/javascript"></script></div>
                        <div style="margin: 15px 0px 0px; display: inline-block; text-align: center; width: 120px;"><div style="display: inline-block; padding: 2px 4px; margin: 0px 0px 5px; border: 1px solid rgb(204, 204, 204); text-align: center; background-color: rgb(255, 255, 255);"><a style="text-decoration: none; font-size: 13px; color: rgb(0, 0, 0);" href="http://localtimes.info/Asia/Saudi_Arabia/Mecca/"><img src="http://localtimes.info/images/countries/sa.png"="" border=0="" style="border:0;margin:0;padding:0"=""> Mecca</a></div><script src="http://localtimes.info/clock.php?continent=Asia&country=Saudi Arabia&city=Mecca&cp1_Hex=000000&cp2_Hex=FFFFFF&cp3_Hex=000000&fwdt=120&ham=0&hbg=0&hfg=0&sid=0&mon=0&wek=0&wkf=0&sep=0&widget_number=119" type="text/javascript"></script></div>
						</div>
						
						<div class="our_clients">
							
						</div>
					</div>
				</div>
			</div>
		</section>
	    
        <!--end wrapper-->
	
        
    </section>

    <!--briefcaset footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Tentang Kami</span></h4>
                    </div>
                    <div class="widget_content">
                        <p>PT. Do'a Arafah Madinah</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15859.579256714982!2d106.8563425!3d-6.4075496!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x49a9f6a02676abd2!2sGRAHA+DAMTOUR!5e0!3m2!1sid!2sid!4v1450342095197" width="250" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <ul class="contact-details-alt">
                            <li><i class="fa fa-map-marker"></i><p>Alamat :Jl.Tole Iskandar,No.6-7,Depok.</p></li>
                            <li><i class="fa fa-building-o"></i><p>Telp.Kantor :(021)7710670</p></li>
                            <li><i class="fa fa-phone"></i><p>Hp.Kantor :087714442525</p></li>
                            <li><i class="fa fa-envelope"></i><p>Email :damtour@hotmail.com</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Pelanggan Baru Daftar</span></h4>
                    </div>
                    <div class="widget_content">
                        <ul class="arrow"><marquee direction="down" onmouseover="this.stop()" onmouseout="this.start()"><?php
                $query = mysql_query("SELECT * FROM pelanggan ORDER BY id_pelanggan ASC");
                while ($row=mysql_fetch_array($query)){
                    $namalengkap="$row[nama_depan] $row[nama_tengah] $row[nama_belakang]";
                    echo"<small><li>$row[id_pelanggan]- $namalengkap - $row[kota]</li></small>";
    }?>
                    </marquee></ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Keadaan Pelanggan</span></h4>

                    </div>
                    <div class="widget_content">
                        <ul class="arrow"><marquee direction="down" onmouseover="this.stop()" onmouseout="this.start()"><?php
                $query = mysql_query("SELECT * FROM pendaftaran_pelanggan where status_keberangkatan ='Sedang Diberangkatkan' ORDER BY id_pelanggan DESC");
                while ($row=mysql_fetch_array($query)){
                    $pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$row[id_pelanggan]'"));
                    $keadaan=mysql_fetch_array(mysql_query("select*from keadaan_pelanggan where id_pendaftaran='$row[id_pendaftaran]'"));
                    $namalengkap="$pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]";
                    echo"<small><li>$namalengkap - ";
                    if ($keadaan['keadaan']=='SAKIT'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;$keadaan[keadaan]&nbsp;&nbsp; </b></font>";
  }
  else if ($keadaan['keadaan']=='SEHAT'){
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$keadaan[keadaan]&nbsp;&nbsp; </b></font>";
  }
  else if ($keadaan['keadaan']=='DIRAWAT'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;$keadaan[keadaan]&nbsp;&nbsp; </b></font>";
    } echo" -$keadaan[tanggal_update]</li></small>";
    }?>
                    </marquee></ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="widget_title">
                        <h4><span>Statistik Pengunjung</span></h4>
                    </div>
                    <div class="widget_content">
                        <a href="http://info.flagcounter.com/ovKQ"><img src="http://s10.flagcounter.com/count/ovKQ/bg_FFFFFF/txt_3732C9/border_CCCCCC/columns_3/maxflags_20/viewers_Pengunjung/labels_0/pageviews_0/flags_0/percent_0/" alt="Pengunjung Damtour" border="0"></a><br>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end footer-->
	
	<section class="footer_bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 ">
                    <p class="copyright">&copy; DAMTOUR 2016 | Developed by  <a href="http://mahesyasoftwaresolution.web.id/">Hendri Mahesya</a> |Powered by <a href="http://www.jqueryrain.com/">jQuery Rain</a></p>
				</div>
				
				<div class="col-lg-6 ">
					<div class="footer_social">
						<ul class="footbot_social">
							<li><a class="fb" href="https://www.facebook.com/damtoursukses" data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twtr" href="https://twitter.com/@damtourtravel" data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>

    <script src="js/main.js"></script>

    
    <script>
        $(window).load(function(){
            $('.slider').fractionSlider({
                'fullWidth': 			true,
                'controls': 			true,
                'responsive': 			true,
                'dimensions': 			"1920,450",
                'increase': 			true,
                'pauseOnHover': 		true,
                'slideEndAnimation': 	true,
                'autoChange':           true
            });
        });
    </script>
</body>
</html>
<?php }
?>

