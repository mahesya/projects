<?php
error_reporting(0);

$p=$_GET['p'];
if($_SESSION[status_registrasi]=='UNREGISTERED'){

if($p==''){
	echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Selamat Datang <b>$_SESSION[nama_depan]</b></h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pelanggan</a></li>
                                <li>Username: <b>$_SESSION[username]</b></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

    </section>

        ";
}
if($p=='pelanggan'){
$produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$_SESSION[id_produk]'"));
$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$_SESSION[id_pelanggan]'"));

    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Pelanggan</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Profil</a></li>
                                <li>Data Pelanggan</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
<section class='content typography'>
            <div class='container'>

                            
                            
                            <div class='comment_form'>
                               <div class='row'>
                                   <div class='col-sm-4'>
                                       Nama Depan <input class='col-lg-4 col-md-4 form-control' name='nama_depan' type='text'  size='30' value='$pelanggan[nama_depan]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Tengah
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_tengah' type='text'  size='30'  value='$pelanggan[nama_tengah]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Belakang
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_belakang' type='text'  size='30'  value='$pelanggan[nama_belakang]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Panggilan
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_panggilan' type='text'  size='30'   value='$pelanggan[nama_panggilan]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Tempat Lahir<input class='col-lg-4 col-md-4 form-control' name='tempat_lahir' type='text'  size='30'  value='$pelanggan[tempat_lahir]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Tanggal Lahir(tanggal/bulan/tahun)<input class='col-lg-4 col-md-4 form-control' name='tanggal_lahir' type='text'  size='30'  value='$pelanggan[tanggal_lahir]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       No. KTP <input class='col-lg-4 col-md-4 form-control' name='no_ktp' type='text'  size='30'  placeholder='No. KTP'  value='$pelanggan[no_ktp]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Jenis Kelamin <input class='col-lg-4 col-md-4 form-control' name='jenis_kelamin' type='text'  size='30'  placeholder='jenis_kelamin'  value='$pelanggan[jenis_kelamin]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Pendidikan
                                       <input class='col-lg-4 col-md-4 form-control' name='pendidikan' type='text'  size='30'  placeholder='Pendidikan' value='$pelanggan[pendidikan]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Pekerjaan
                                       <input class='col-lg-4 col-md-4 form-control' name='pekerjaan' type='text'  size='30'  placeholder='Pekerjaan' value='$pelanggan[pekerjaan]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Ket. Umrah 
                                       <input class='col-lg-4 col-md-4 form-control' name='ket_umrah' type='text'  size='30'  placeholder='ket_umrah'  value='$pelanggan[ket_umrah]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Ket. Haji 
                                       <input class='col-lg-4 col-md-4 form-control' name='ket_haji' type='text'  size='30'  placeholder='ket_haji'  value='$pelanggan[ket_haji]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Ukuran Pakaian
                                       <input class='col-lg-4 col-md-4 form-control' name='ukuran_pakaian' type='text'  size='30'  placeholder='ukuran_pakaian'  value='$pelanggan[ukuran_pakaian]' disabled>
                                    </div>
                                   <div class='col-sm-4'>
                                   Kota
                                       <input class='col-lg-4 col-md-4 form-control' name='kota' type='text'  size='30'  placeholder='Kota' value='$pelanggan[kota]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Telp. Rumah
                                       <input class='col-lg-4 col-md-4 form-control' name='telp_rumah' type='text'  size='30'  placeholder='Telp. Rumah' value='$pelanggan[telp_rumah]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Telp. Kantor
                                       <input class='col-lg-4 col-md-4 form-control' name='telp_kantor' type='text'  size='30'  placeholder='Telp. Kantor' value='$pelanggan[telp_kantor]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       No.HP <input class='col-lg-4 col-md-4 form-control' name='hp' type='text'  size='30'  placeholder='Hp' value='$pelanggan[hp]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Email
                                       <input class='col-lg-4 col-md-4 form-control' name='email' type='email'  size='30'  placeholder='Email' value='$pelanggan[email]' disabled>
                                   </div>
                               </div>
                            </div>
                            <div class='comment-box row'>
                                <div class='col-sm-12'>Alamat
                                    <p>
                                        <textarea name='alamat' class='form-control' rows='3' cols='40' disabled>$pelanggan[alamat]</textarea>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                       Ahli Waris <input class='col-lg-4 col-md-4 form-control' name='ahli_waris' type='text'  size='30'  placeholder='Ahli Waris' value='$pelanggan[ahli_waris]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Hubungan <input class='col-lg-4 col-md-4 form-control' name='hubungan' type='text'  size='30'  placeholder='Hubungan' value='$pelanggan[hubungan]' disabled>
                                   </div>

                               </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                    No. Rekening
                                       <input class='col-lg-4 col-md-4 form-control' name='no_rekening' type='text' id='name' size='30'  placeholder='No. Rekening' value='$pelanggan[no_rekening]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Atas Nama
                                       <input class='col-lg-4 col-md-4 form-control' name='atas_nama' type='text'  size='30'  placeholder='Atas Nama' value='$pelanggan[atas_nama]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Bank
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_bank' type='text' size='30'  placeholder='Nama Bank' value='$pelanggan[nama_bank]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Cabang
                                       <input class='col-lg-4 col-md-4 form-control' name='cabang' type='text' id='name' size='30'  placeholder='Cabang' value='$pelanggan[cabang]' disabled>
                                   </div>
                               </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                      ID Da'i - Nama Da'i<input class='col-lg-4 col-md-4 form-control' name='id_dai' type='text' id='name' size='30'  placeholder='id dai' value='$pelanggan[reg_dai] - $pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]' disabled>
                                   </div>
                                   
                               </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                       Username <input class='col-lg-4 col-md-4 form-control' name='username' type='text'  size='30'  value='$pelanggan[username]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Password <input class='col-lg-4 col-md-4 form-control' name='password' type='text'  size='30'  value='$pelanggan[username]' disabled>
                                   </div>

                               </div>
                            </div>
                            <hr>
                            
                            <div class='comment_form'>
                               
                            </div>
                            
                        </div>
        </section>

   </section>

        ";
}
if($p=='produk'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Produk</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Profil</a></li>
                                <li>Data Produk</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>ID Pendaftaran</th>
                                    <th>Produk</th>
                                    <th>Tgl. Daftar</th>
                                    
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM pendaftaran_pelanggan where id_pelanggan = '$_SESSION[id_pelanggan]'");
                            $jmldata = mysql_num_rows($sql);
                            while ($r = mysql_fetch_array($sql)) {
                                $produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$r[id_produk]'"));
                      echo "<tr>
                            
                            <td>$r[id_pendaftaran]</td>
                            <td><b>Jenis Produk: </b>$produk[jenis_produk] <b>Jenis Paket: </b>$produk[jenis_paket] <b>Tanggal Berangkat: </b>$produk[tanggal_keberangkatan]</td>
                            <td>$r[tanggal_pendaftaran]</td>
                            </tr>";
                      
                    }                    
                   echo"
                                </tbody>
                                </table>

                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='keluhan'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Keluhan</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Profil</a></li>
                                <li>Data Keluhan</li>
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
                            <h1><i class='fa fa-warning'></i></h1>
                            <p>Maaf, Anda tidak dapat mengakses data pada halaman ini karena Akun anda belum divalidasi. silahkan hubungi Staf Administrasi kami!</p>
                            <a href='pelanggan.php' class='btn btn-default btn-lg back_home'>
                                <i class='fa fa-arrow-circle-o-left'></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='testimoni'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Testimoni</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Profil</a></li>
                                <li>Data Testimoni</li>
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
                            <h1><i class='fa fa-warning'></i></h1>
                            <p>Maaf, Anda tidak dapat mengakses data pada halaman ini karena Akun anda belum divalidasi. silahkan hubungi Staf Administrasi kami!</p>
                            <a href='pelanggan.php' class='btn btn-default btn-lg back_home'>
                                <i class='fa fa-arrow-circle-o-left'></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='pembayaran'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Pembayaran</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pembayaran</a></li>
                                <li>Data Pembayaran</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>ID Pendaftaran</th>
                                    <th>Produk</th>
                                    <th>Tgl. Daftar</th>
                                    <th>Detail</th>
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM pendaftaran_pelanggan where id_pelanggan = '$_SESSION[id_pelanggan]'");
                            $jmldata = mysql_num_rows($sql);
                            while ($r = mysql_fetch_array($sql)) {
                                $produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$r[id_produk]'"));
                      echo "<tr>
                            
                            <td>$r[id_pendaftaran]</td>
                            <td><b>Jenis Produk: </b>$produk[jenis_produk] <b>Jenis Paket: </b>$produk[jenis_paket] <b>Tanggal Berangkat: </b>$produk[tanggal_keberangkatan]<b>- Biaya: </b>$produk[biaya]</td>
                            <td>$r[tanggal_pendaftaran]</td>
                            <td><a href='?p=dpembayaran&id_pendaftaran=$r[id_pendaftaran]'><img src='images/search.png'></a></td>
                            </tr>";
                      
                    }                    
                   echo"
                                </tbody>
                                </table>

                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='dpembayaran'){
  $pendaftaran=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Detail Pembayaran</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pembayaran</a></li>
                                <li>Detail Pembayaran</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>Penyetor</th>
                                    <th>Jumlah</th>
                                    <th>Kurs</th>
                                    <th>Tanggal Bayar</th>
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM pembayaran where id_pendaftaran ='$pendaftaran[id_pendaftaran]'");
                            $jmldata = mysql_num_rows($sql);
                            $jml_des="0";
                            $pem_des=",";
                            $pem_rb=".";
                            while ($r = mysql_fetch_array($sql)) {
                      $total_bayar=mysql_query("SELECT SUM(jumlah) as totbayar FROM pembayaran where id_pendaftaran = '$r[id_pendaftaran]'");
                      $jml_bayar=mysql_fetch_array($total_bayar);
                      $produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$pendaftaran[id_produk]'"));          
                      echo "<tr>
                            
                            <td>$r[penyetor]</td>
                            <td>";echo"".number_format($r['jumlah'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>$r[kurs]</td>
                            <td>$r[tanggal_bayar]</td>
                            </tr>";
                      
                    }                    
                   echo"
                                </tbody>
                                </table>
                                <p><b>Biaya </b>:";echo" ".number_format($produk['biaya'],$jml_des,$pem_des,$pem_rb);echo" <b>Total Pembayaran </b>:";echo" <u>".number_format($jml_bayar['totbayar'],$jml_des,$pem_des,$pem_rb);echo"</u> <strong>Keterangan : </strong>";

  if ($jml_bayar['totbayar'] < $produk['biaya']){
    echo"<font color='#FF0000'> Belum Lunas </font>";
  }
  else if ($jml_bayar['totbayar'] == $produk['biaya']){
    echo"<font color='#046a10'> Lunas </font>";
  }
  else {
    echo"<font color='#0000FF'> Pembayaran Melebihi Biaya Yang Harus Dibayar </font>";
    }
  echo"</p>
                                <a href='javascript:history.go(-1)' class='btn btn-default btn-lg back_home'>
                <i class='fa fa-arrow-circle-o-left'></i>
                Kembali
              </a>

                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}

if($p=='konfirmasi_pembayaran'){
    $daftar=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pelanggan='$_SESSION[id_pelanggan]'"));
    $produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$daftar[id_produk]'"));
    $pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$_SESSION[id_pelanggan]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Konfirmasi Pembayaran</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pembayaran</a></li>
                                <li>Data Konfirmasi Pembayaran</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>ID Pendaftaran</th>
                                    <th>Produk</th>
                                    <th>Tgl. Daftar</th>
                                    <th>Detail</th>
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM pendaftaran_pelanggan where id_pelanggan = '$_SESSION[id_pelanggan]'");
                            $jmldata = mysql_num_rows($sql);
                            while ($r = mysql_fetch_array($sql)) {
                                $produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$r[id_produk]'"));
                      echo "<tr>
                            
                            <td>$r[id_pendaftaran]</td>
                            <td><b>Jenis Produk: </b>$produk[jenis_produk] <b>Jenis Paket: </b>$produk[jenis_paket] <b>Tanggal Berangkat: </b>$produk[tanggal_keberangkatan]<b>- Biaya: </b>$produk[biaya]</td>
                            <td>$r[tanggal_pendaftaran]</td>
                            <td><a href='?p=dkonfirmasi&id_pendaftaran=$r[id_pendaftaran]'><img src='images/search.png'></a></td>
                            </tr>";
                      
                    }                    
                   echo"
                                </tbody>
                                </table>

                    </div>
                </div>
                
            </div>
        </section>

        
    </section>

        ";
}
if($p=='dkonfirmasi'){
  $pendaftaran=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Detail Konfirmasi Pembayaran</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pembayaran</a></li>
                                <li>Detail Konfirmasi Pembayaran</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>Nama Bank</th>
                                    <th>Jumlah</th>
                                    <th>Waktu Kirim</th>
                                    <th>Bukti</th>
                                    <th>Keterangan</th>
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM konfirmasi_pembayaran where id_pendaftaran ='$pendaftaran[id_pendaftaran]'");
                            $jmldata = mysql_num_rows($sql);
                            $jml_des="0";
                            $pem_des=",";
                            $pem_rb=".";
                            while ($r = mysql_fetch_array($sql)) {
                      if ($r['status']==0){
                        $status='Belum Dicek Oleh Staf Administrasi';
                        echo "<tr>
                            
                            <td>$r[nama_bank]</td>
                            <td>";echo"".number_format($r['jumlah'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>$r[waktu_kirim]</td>
                            <td><img src='upload/img_bukti/$r[bukti]' width=30 height=30></td>
                            <td>$status</td>
                            </tr>";
                      }else if ($r['status']==1){
                        $status='Data Valid';
                        echo "<tr>
                            
                            <td>$r[nama_bank]</td>
                            <td>";echo"".number_format($r['jumlah'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>$r[waktu_kirim]</td>
                            <td><img src='upload/img_bukti/$r[bukti]' width=30 height=30></td>
                            <td>$status</td>
                            </tr>";
                      }else if ($r['status']==2){
                        $status='Data Tidak Valid';
                        echo "<tr>
                            
                            <td>$r[nama_bank]</td>
                            <td>";echo"".number_format($r['jumlah'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>$r[waktu_kirim]</td>
                            <td><img src='images/cancel.png'></td>
                            <td>$status</td>
                            </tr>";
                      }
                                
                      
                      
                    }                    
                   echo"
                                </tbody>
                                </table>
                                
                                <a href='?p=tkonfirmasi&id_pendaftaran=$pendaftaran[id_pendaftaran]' class='btn btn-default btn-lg back_home'>
                <i class='fa fa-plus-square'></i>
                Tambah
              </a>

                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='tkonfirmasi'){
  $data=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
  $pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$data[id_pelanggan]'"));
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
                <li>Konfirmasi Pembayaran</li>
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
                            <input type=hidden name=id_pendaftaran value='$data[id_pendaftaran]'>
                            <div class='comment_form'>
                               <div class='row'>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='no_rekening' type='number' id='name' size='30'  placeholder='No. Rekening' required value='$pelanggan[no_rekening]'>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_bank' type='text' id='email' size='30'  placeholder='Nama Bank' required value='$pelanggan[nama_bank]'>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='atas_nama' type='text' id='url' size='30'  placeholder='Atas Nama' required value='$pelanggan[atas_nama]'>
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

if($p=='perlengkapan'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Perlengkapan</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Perlengkapan</a></li>
                                <li>Data Perlengkapan</li>
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
                            <h1><i class='fa fa-warning'></i></h1>
                            <p>Maaf, Anda tidak dapat mengakses data pada halaman ini karena Akun anda belum divalidasi. silahkan hubungi Staf Administrasi kami!</p>
                            <a href='pelanggan.php' class='btn btn-default btn-lg back_home'>
                                <i class='fa fa-arrow-circle-o-left'></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='dokumen'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Dokumen</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Dokumen</a></li>
                                <li>Data Dokumen</li>
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
                            <h1><i class='fa fa-warning'></i></h1>
                            <p>Maaf, Anda tidak dapat mengakses data pada halaman ini karena Akun anda belum divalidasi. silahkan hubungi Staf Administrasi kami!</p>
                            <a href='pelanggan.php' class='btn btn-default btn-lg back_home'>
                                <i class='fa fa-arrow-circle-o-left'></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='passport'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Passport</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Dokumen</a></li>
                                <li>Data Passport</li>
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
                            <h1><i class='fa fa-warning'></i></h1>
                            <p>Maaf, Anda tidak dapat mengakses data pada halaman ini karena Akun anda belum divalidasi. silahkan hubungi Staf Administrasi kami!</p>
                            <a href='pelanggan.php' class='btn btn-default btn-lg back_home'>
                                <i class='fa fa-arrow-circle-o-left'></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='pemberitahuan'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Pemberitahuan</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pemberitahuan</a></li>
                                <li>Data Pemberitahuan</li>
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
                            <h1><i class='fa fa-warning'></i></h1>
                            <p>Maaf, Anda tidak dapat mengakses data pada halaman ini karena Akun anda belum divalidasi. silahkan hubungi Staf Administrasi kami!</p>
                            <a href='pelanggan.php' class='btn btn-default btn-lg back_home'>
                                <i class='fa fa-arrow-circle-o-left'></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='daftar'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Form Pendaftaran</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pendaftaran</a></li>
                                <li>Form Pendaftaran</li>
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
                            <h1><i class='fa fa-warning'></i></h1>
                            <p>Maaf, Anda tidak dapat mengakses data pada halaman ini karena Akun anda belum divalidasi. silahkan hubungi Staf Administrasi kami!</p>
                            <a href='pelanggan.php' class='btn btn-default btn-lg back_home'>
                                <i class='fa fa-arrow-circle-o-left'></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='bertanya'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Silahkan LogIn Untuk Bertanya!</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Bertanya</a></li>
                                <li>LogIn Form</li>
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
                            <h1><i class='fa fa-warning'></i></h1>
                            <p>Maaf, Anda tidak dapat mengakses data pada halaman ini karena Akun anda belum divalidasi. silahkan hubungi Staf Administrasi kami!</p>
                            <a href='pelanggan.php' class='btn btn-default btn-lg back_home'>
                                <i class='fa fa-arrow-circle-o-left'></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
}
if($_SESSION[status_registrasi]=='REGISTERED'){

if($p==''){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Selamat Datang <b>$_SESSION[nama_depan]</b></h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pelanggan</a></li>
                                <li>Username: <b>$_SESSION[username]</b></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>


    </section>

        ";
}
if($_GET['p']=='daftar'){
$produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$_SESSION[id_produk]'"));
$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$_SESSION[id_pelanggan]'"));

$daftar=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pelanggan='$pelanggan[id_pelanggan]' and id_produk='$produk[id_produk]'"));
if($daftar['id_produk']==$produk['id_produk'] AND $daftar['id_pelanggan']==$pelanggan['id_pelanggan']){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Form Pendaftaran</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pendaftaran</a></li>
                                <li>Form Pendaftaran</li>
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
                            <h1><i class='fa fa-warning'></i></h1>
                            <p>Maaf, Anda Sudah Mendaftarkan Diri Anda Untuk Paket Ini Sebelumnya!</p>
                            <a href='pelanggan.php?p=produk' class='btn btn-default btn-lg back_home'>
                                <i class='fa fa-arrow-circle-o-left'></i>
                                Kembali
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


    </section>
";
}
else if($daftar['id_produk']!=$produk['id_produk'] AND $daftar['id_pelanggan']!=$pelanggan['id_pelanggan']){
$query="select max(id_pendaftaran) as maxID from pendaftaran_pelanggan where id_pendaftaran like 'PP%'";
$hasil=mysql_query($query);
$data=mysql_fetch_array($hasil);
$idMax=$data['maxID'];

$noUrut=(int) substr($idMax,2,6);
$noUrut++;

$newID = 'PP'.sprintf("%06s",$noUrut);
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
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pelanggan</a></li>
                                <li>Form Pendaftaran</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class='content typography'>
            <div class='container'>

                            
                            <form method=POST action='daftar_lama.php' name='daftar'enctype='multipart/form-data'>
                            <input type=hidden name=id_produk value='$produk[id_produk]'>
                            <input type=hidden name=id_pendaftaran value='$newID'>
                            <input type=hidden name=id_pelanggan value='$pelanggan[id_pelanggan]'>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='id_pelanggan' type='text'  size='30'  placeholder='ID. Pelanggan' value='$pelanggan[id_pelanggan]' disabled>
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
                                       Nama Depan <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='nama_depan' type='text'  size='30' value='$pelanggan[nama_depan]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Tengah
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_tengah' type='text'  size='30'  value='$pelanggan[nama_tengah]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Belakang
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_belakang' type='text'  size='30'  value='$pelanggan[nama_belakang]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Panggilan
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_panggilan' type='text'  size='30'   value='$pelanggan[nama_panggilan]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Tempat Lahir<font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='tempat_lahir' type='text'  size='30'  value='$pelanggan[tempat_lahir]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Tanggal Lahir(tanggal/bulan/tahun)<font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='tanggal_lahir' type='text'  size='30'  value='$pelanggan[tanggal_lahir]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       No. KTP <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='no_ktp' type='text'  size='30'  placeholder='No. KTP'  value='$pelanggan[no_ktp]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Jenis Kelamin <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='jenis_kelamin' type='text'  size='30'  placeholder='jenis_kelamin'  value='$pelanggan[jenis_kelamin]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Pendidikan
                                       <input class='col-lg-4 col-md-4 form-control' name='pendidikan' type='text'  size='30'  placeholder='Pendidikan' value='$pelanggan[pendidikan]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Pekerjaan
                                       <input class='col-lg-4 col-md-4 form-control' name='pekerjaan' type='text'  size='30'  placeholder='Pekerjaan' value='$pelanggan[pekerjaan]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Ket. Umrah 
                                       <input class='col-lg-4 col-md-4 form-control' name='ket_umrah' type='text'  size='30'  placeholder='ket_umrah'  value='$pelanggan[ket_umrah]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Ket. Haji 
                                       <input class='col-lg-4 col-md-4 form-control' name='ket_haji' type='text'  size='30'  placeholder='ket_haji'  value='$pelanggan[ket_haji]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Ukuran Pakaian
                                       <input class='col-lg-4 col-md-4 form-control' name='ukuran_pakaian' type='text'  size='30'  placeholder='ukuran_pakaian'  value='$pelanggan[ukuran_pakaian]' disabled>
                                    </div>
                                   <div class='col-sm-4'>
                                   Kota
                                       <input class='col-lg-4 col-md-4 form-control' name='kota' type='text'  size='30'  placeholder='Kota' value='$pelanggan[kota]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Telp. Rumah
                                       <input class='col-lg-4 col-md-4 form-control' name='telp_rumah' type='text'  size='30'  placeholder='Telp. Rumah' value='$pelanggan[telp_rumah]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Telp. Kantor
                                       <input class='col-lg-4 col-md-4 form-control' name='telp_kantor' type='text'  size='30'  placeholder='Telp. Kantor' value='$pelanggan[telp_kantor]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       No.HP<font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='hp' type='text'  size='30'  placeholder='Hp' value='$pelanggan[hp]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Email
                                       <input class='col-lg-4 col-md-4 form-control' name='email' type='email'  size='30'  placeholder='Email' value='$pelanggan[email]' disabled>
                                   </div>
                               </div>
                            </div>
                            <div class='comment-box row'>
                                <div class='col-sm-12'>Alamat<font color='red'>*Data Wajib</font>
                                    <p>
                                        <textarea name='alamat' class='form-control' rows='3' cols='40' disabled>$pelanggan[alamat]</textarea>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                       Ahli Waris <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='ahli_waris' type='text'  size='30'  placeholder='Ahli Waris' value='$pelanggan[ahli_waris]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Hubungan <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='hubungan' type='text'  size='30'  placeholder='Hubungan' value='$pelanggan[hubungan]' disabled>
                                   </div>

                               </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                    No. Rekening
                                       <input class='col-lg-4 col-md-4 form-control' name='no_rekening' type='text' id='name' size='30'  placeholder='No. Rekening' value='$pelanggan[no_rekening]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Atas Nama
                                       <input class='col-lg-4 col-md-4 form-control' name='atas_nama' type='text'  size='30'  placeholder='Atas Nama' value='$pelanggan[atas_nama]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Bank
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_bank' type='text' size='30'  placeholder='Nama Bank' value='$pelanggan[nama_bank]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Cabang
                                       <input class='col-lg-4 col-md-4 form-control' name='cabang' type='text' id='name' size='30'  placeholder='Cabang' value='$pelanggan[cabang]' disabled>
                                   </div>
                               </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                      ID Da'i - Nama Da'i<input class='col-lg-4 col-md-4 form-control' name='id_dai' type='text' id='name' size='30'  placeholder='id dai' value='$pelanggan[reg_dai] - $pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]' disabled>
                                   </div>
                                   
                               </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                       Username <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='username' type='text'  size='30'  value='$pelanggan[username]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Password <font color='red'>*Data Wajib</font><input class='col-lg-4 col-md-4 form-control' name='password' type='text'  size='30'  value='$pelanggan[username]' disabled>
                                   </div>

                               </div>
                            </div>
                            <hr>
                            
                            <div class='comment_form'>
                               
                            </div>
                            <input type=submit class='btn btn-lg btn-default' value='Daftar'></form>
                        </div>
        </section>

    </section>
    ";}
}

if($p=='pelanggan'){

$produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$_SESSION[id_produk]'"));
$pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$_SESSION[id_pelanggan]'"));

    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Pelanggan</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Profil</a></li>
                                <li>Data Pelanggan</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
<section class='content typography'>
            <div class='container'>

                            
                            
                            <div class='comment_form'>
                               <div class='row'>
                                   <div class='col-sm-4'>
                                       Nama Depan <input class='col-lg-4 col-md-4 form-control' name='nama_depan' type='text'  size='30' value='$pelanggan[nama_depan]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Tengah
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_tengah' type='text'  size='30'  value='$pelanggan[nama_tengah]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Belakang
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_belakang' type='text'  size='30'  value='$pelanggan[nama_belakang]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Panggilan
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_panggilan' type='text'  size='30'   value='$pelanggan[nama_panggilan]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Tempat Lahir<input class='col-lg-4 col-md-4 form-control' name='tempat_lahir' type='text'  size='30'  value='$pelanggan[tempat_lahir]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Tanggal Lahir(tanggal/bulan/tahun)<input class='col-lg-4 col-md-4 form-control' name='tanggal_lahir' type='text'  size='30'  value='$pelanggan[tanggal_lahir]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       No. KTP <input class='col-lg-4 col-md-4 form-control' name='no_ktp' type='text'  size='30'  placeholder='No. KTP'  value='$pelanggan[no_ktp]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Jenis Kelamin <input class='col-lg-4 col-md-4 form-control' name='jenis_kelamin' type='text'  size='30'  placeholder='jenis_kelamin'  value='$pelanggan[jenis_kelamin]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Pendidikan
                                       <input class='col-lg-4 col-md-4 form-control' name='pendidikan' type='text'  size='30'  placeholder='Pendidikan' value='$pelanggan[pendidikan]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Pekerjaan
                                       <input class='col-lg-4 col-md-4 form-control' name='pekerjaan' type='text'  size='30'  placeholder='Pekerjaan' value='$pelanggan[pekerjaan]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Ket. Umrah 
                                       <input class='col-lg-4 col-md-4 form-control' name='ket_umrah' type='text'  size='30'  placeholder='ket_umrah'  value='$pelanggan[ket_umrah]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Ket. Haji 
                                       <input class='col-lg-4 col-md-4 form-control' name='ket_haji' type='text'  size='30'  placeholder='ket_haji'  value='$pelanggan[ket_haji]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Ukuran Pakaian
                                       <input class='col-lg-4 col-md-4 form-control' name='ukuran_pakaian' type='text'  size='30'  placeholder='ukuran_pakaian'  value='$pelanggan[ukuran_pakaian]' disabled>
                                    </div>
                                   <div class='col-sm-4'>
                                   Kota
                                       <input class='col-lg-4 col-md-4 form-control' name='kota' type='text'  size='30'  placeholder='Kota' value='$pelanggan[kota]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Telp. Rumah
                                       <input class='col-lg-4 col-md-4 form-control' name='telp_rumah' type='text'  size='30'  placeholder='Telp. Rumah' value='$pelanggan[telp_rumah]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Telp. Kantor
                                       <input class='col-lg-4 col-md-4 form-control' name='telp_kantor' type='text'  size='30'  placeholder='Telp. Kantor' value='$pelanggan[telp_kantor]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       No.HP <input class='col-lg-4 col-md-4 form-control' name='hp' type='text'  size='30'  placeholder='Hp' value='$pelanggan[hp]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Email
                                       <input class='col-lg-4 col-md-4 form-control' name='email' type='email'  size='30'  placeholder='Email' value='$pelanggan[email]' disabled>
                                   </div>
                               </div>
                            </div>
                            <div class='comment-box row'>
                                <div class='col-sm-12'>Alamat
                                    <p>
                                        <textarea name='alamat' class='form-control' rows='3' cols='40' disabled>$pelanggan[alamat]</textarea>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                       Ahli Waris <input class='col-lg-4 col-md-4 form-control' name='ahli_waris' type='text'  size='30'  placeholder='Ahli Waris' value='$pelanggan[ahli_waris]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Hubungan <input class='col-lg-4 col-md-4 form-control' name='hubungan' type='text'  size='30'  placeholder='Hubungan' value='$pelanggan[hubungan]' disabled>
                                   </div>

                               </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                    No. Rekening
                                       <input class='col-lg-4 col-md-4 form-control' name='no_rekening' type='text' id='name' size='30'  placeholder='No. Rekening' value='$pelanggan[no_rekening]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Atas Nama
                                       <input class='col-lg-4 col-md-4 form-control' name='atas_nama' type='text'  size='30'  placeholder='Atas Nama' value='$pelanggan[atas_nama]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Nama Bank
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_bank' type='text' size='30'  placeholder='Nama Bank' value='$pelanggan[nama_bank]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                   Cabang
                                       <input class='col-lg-4 col-md-4 form-control' name='cabang' type='text' id='name' size='30'  placeholder='Cabang' value='$pelanggan[cabang]' disabled>
                                   </div>
                               </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                      ID Da'i - Nama Da'i<input class='col-lg-4 col-md-4 form-control' name='id_dai' type='text' id='name' size='30'  placeholder='id dai' value='$pelanggan[reg_dai] - $pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang]' disabled>
                                   </div>
                                   
                               </div>
                            </div>
                            <hr>
                            <div class='comment_form'>
                               <div class='row'>
                                    <div class='col-sm-4'>
                                       Username <input class='col-lg-4 col-md-4 form-control' name='username' type='text'  size='30'  value='$pelanggan[username]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       Password <input class='col-lg-4 col-md-4 form-control' name='password' type='text'  size='30'  value='$pelanggan[username]' disabled>
                                   </div>

                               </div>
                            </div>
                            <hr>
                            
                            <div class='comment_form'>
                               
                            </div>
                            
                        </div>
        </section>

   </section>

        ";
    }
if($p=='produk'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Produk</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Profil</a></li>
                                <li>Data Produk</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>ID Pendaftaran</th>
                                    <th>Produk</th>
                                    <th>Tgl. Daftar</th>
                                    
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM pendaftaran_pelanggan where id_pelanggan = '$_SESSION[id_pelanggan]'");
                            $jmldata = mysql_num_rows($sql);
                            while ($r = mysql_fetch_array($sql)) {
                                $produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$r[id_produk]'"));
                      echo "<tr>
                            
                            <td>$r[id_pendaftaran]</td>
                            <td><b>Jenis Produk: </b>$produk[jenis_produk] <b>Jenis Paket: </b>$produk[jenis_paket] <b>Tanggal Berangkat: </b>$produk[tanggal_keberangkatan]</td>
                            <td>$r[tanggal_pendaftaran]</td>
                            </tr>";
                      
                    }                    
                   echo"
                                </tbody>
                                </table>

                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='keluhan'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Form Keluhan</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Profil</a></li>
                                <li>Keluhan Pelanggan</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class='content typography'>
        <div class='container'>
            <div class='row sub_content'>
            <div class='col-lg-6 '>
                <div>
                    <form action=ikeluhan.php method='post'>
                    <input type=hidden name=id_pelanggan value='$_SESSION[id_pelanggan]'>
                    <textarea name='keluhan' rows=4></textarea>
                    <input type='submit' class='btn btn-lg btn-default' value='Kirim Keluhan'>
                    </form>
                </div>
            </div>
            <div class='row sub_content'>
            <div class='col-lg-6 '>
                <b>Histori Keluhan</b>
                <iframe src='tampil_keluhan.php' width='100%' height='100%' style='-webkit-border-radius:3px;'></iframe>
            </div>
        </div>
    </section>


    </section>

        ";
}
if($p=='testimoni'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Testimoni</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Profil</a></li>
                                <li>Data Testimoni</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>ID Pendaftaran</th>
                                    <th>Produk</th>
                                    <th>Tgl. Daftar</th>
                                    <th>Detail</th>
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM pendaftaran_pelanggan where id_pelanggan = '$_SESSION[id_pelanggan]'");
                            $jmldata = mysql_num_rows($sql);
                            while ($r = mysql_fetch_array($sql)) {
                                $produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$r[id_produk]'"));
                      echo "<tr>
                            
                            <td>$r[id_pendaftaran]</td>
                            <td><b>Jenis Produk: </b>$produk[jenis_produk] <b>Jenis Paket: </b>$produk[jenis_paket] <b>Tanggal Berangkat: </b>$produk[tanggal_keberangkatan]</td>
                            <td>$r[tanggal_pendaftaran]</td>
                            <td><a href='?p=dtestimoni&id_pendaftaran=$r[id_pendaftaran]'><img src='images/search.png'></a></td>
                            </tr>";
                      
                    }                    
                   echo"
                                </tbody>
                                </table>

                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='dtestimoni'){
  $data=mysql_fetch_array(mysql_query("select*from testimoni where id_pendaftaran='$_GET[id_pendaftaran]'"));
  if($data['status']==0){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Form Testimoni</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Profil</a></li>
                                <li>Testimoni Pelanggan</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class='content typography'>
        <div class='container'>
            <div class='row sub_content'>
            <div class='col-lg-6 '>
                <div>
                    <form action=itestimoni.php method='post'>
                    <input type=hidden name=id_testimoni value='$data[id_testimoni]'>
                    <textarea name='testimoni' rows=4></textarea>
                    <input type='submit' class='btn btn-lg btn-default' value='Kirim Testimoni'>
                    </form>
                </div><br>
                <a href='javascript:history.go(-1)' class='btn btn-default btn-lg back_home'>
                <i class='fa fa-arrow-circle-o-left'></i>
                Kembali
              </a>
            </div>

    </section>


    </section>

        ";}
  else if($data['status']==1){
    $data=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
    $testimoni=mysql_fetch_array(mysql_query("select * from testimoni where id_pendaftaran='$data[id_pendaftaran]'"));
  $pelanggan=mysql_fetch_array(mysql_query("select * from pelanggan where id_pelanggan='$data[id_pelanggan]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Form Testimoni</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Profil</a></li>
                                <li>Testimoni Pelanggan</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class='content typography'>
        <div class='container'>
            <div class='row sub_content'>
            <div class='col-lg-6 '>
                <b><u>Anda Sudah Mengirim Testimoni, Testimoni Yang Akan Ditampilkan :</u></b>
                <table width='100%'>
  <tr><td><b><font color=#000066>$pelanggan[nama_depan] $pelanggan[nama_tengah] $pelanggan[nama_belakang] :  </font></b> $testimoni[testimoni]</td></tr>
  <tr><td align=left><font size='-2'><b>Status Tampil : </b>$testimoni[publish]</font></td></tr>
  </table><br><a href='javascript:history.go(-1)' class='btn btn-default btn-lg back_home'>
                <i class='fa fa-arrow-circle-o-left'></i>
                Kembali
              </a>

            </div>
            </div>
        </div>
    </section>


    </section>

        ";}
        
}
if($p=='pembayaran'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Pembayaran</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pembayaran</a></li>
                                <li>Data Pembayaran</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>ID Pendaftaran</th>
                                    <th>Produk</th>
                                    <th>Tgl. Daftar</th>
                                    <th>Detail</th>
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM pendaftaran_pelanggan where id_pelanggan = '$_SESSION[id_pelanggan]'");
                            $jmldata = mysql_num_rows($sql);
                            while ($r = mysql_fetch_array($sql)) {
                                $produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$r[id_produk]'"));
                      echo "<tr>
                            
                            <td>$r[id_pendaftaran]</td>
                            <td><b>Jenis Produk: </b>$produk[jenis_produk] <b>Jenis Paket: </b>$produk[jenis_paket] <b>Tanggal Berangkat: </b>$produk[tanggal_keberangkatan]<b>- Biaya: </b>$produk[biaya]</td>
                            <td>$r[tanggal_pendaftaran]</td>
                            <td><a href='?p=dpembayaran&id_pendaftaran=$r[id_pendaftaran]'><img src='images/search.png'></a></td>
                            </tr>";
                      
                    }                    
                   echo"
                                </tbody>
                                </table>

                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='dpembayaran'){
  $pendaftaran=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Detail Pembayaran</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pembayaran</a></li>
                                <li>Detail Pembayaran</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>Penyetor</th>
                                    <th>Jumlah</th>
                                    <th>Kurs</th>
                                    <th>Tanggal Bayar</th>
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM pembayaran where id_pendaftaran ='$pendaftaran[id_pendaftaran]'");
                            $jmldata = mysql_num_rows($sql);
                            $jml_des="0";
                            $pem_des=",";
                            $pem_rb=".";
                            while ($r = mysql_fetch_array($sql)) {
                      $total_bayar=mysql_query("SELECT SUM(jumlah) as totbayar FROM pembayaran where id_pendaftaran = '$r[id_pendaftaran]'");
                      $jml_bayar=mysql_fetch_array($total_bayar);
                      $produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$pendaftaran[id_produk]'"));          
                      echo "<tr>
                            
                            <td>$r[penyetor]</td>
                            <td>";echo"".number_format($r['jumlah'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>$r[kurs]</td>
                            <td>$r[tanggal_bayar]</td>
                            </tr>";
                      
                    }                    
                   echo"
                                </tbody>
                                </table>
                                <p><b>Biaya </b>:";echo" ".number_format($produk['biaya'],$jml_des,$pem_des,$pem_rb);echo" <b>Total Pembayaran </b>:";echo" <u>".number_format($jml_bayar['totbayar'],$jml_des,$pem_des,$pem_rb);echo"</u> <strong>Keterangan : </strong>";

  if ($jml_bayar['totbayar'] < $produk['biaya']){
    echo"<font color='#FF0000'> Belum Lunas </font>";
  }
  else if ($jml_bayar['totbayar'] == $produk['biaya']){
    echo"<font color='#046a10'> Lunas </font>";
  }
  else {
    echo"<font color='#0000FF'> Pembayaran Melebihi Biaya Yang Harus Dibayar </font>";
    }
  echo"</p>
                                <a href='javascript:history.go(-1)' class='btn btn-default btn-lg back_home'>
                <i class='fa fa-arrow-circle-o-left'></i>
                Kembali
              </a>

                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='konfirmasi_pembayaran'){
    $daftar=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pelanggan='$_SESSION[id_pelanggan]'"));
    $produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$daftar[id_produk]'"));
    $pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$_SESSION[id_pelanggan]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Konfirmasi Pembayaran </h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pembayaran</a></li>
                                <li>Data Konfirmasi Pembayaran</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>ID Pendaftaran</th>
                                    <th>Produk</th>
                                    <th>Tgl. Daftar</th>
                                    <th>Detail</th>
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM pendaftaran_pelanggan where id_pelanggan = '$_SESSION[id_pelanggan]'");
                            $jmldata = mysql_num_rows($sql);
                            while ($r = mysql_fetch_array($sql)) {
                                $produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$r[id_produk]'"));
                      echo "<tr>
                            
                            <td>$r[id_pendaftaran]</td>
                            <td><b>Jenis Produk: </b>$produk[jenis_produk] <b>Jenis Paket: </b>$produk[jenis_paket] <b>Tanggal Berangkat: </b>$produk[tanggal_keberangkatan]<b>- Biaya: </b>$produk[biaya]</td>
                            <td>$r[tanggal_pendaftaran]</td>
                            <td><a href='?p=dkonfirmasi&id_pendaftaran=$r[id_pendaftaran]'><img src='images/search.png'></a></td>
                            </tr>";
                      
                    }                    
                   echo"
                                </tbody>
                                </table>

                    </div>
                </div>
                
            </div>
        </section>

        
    </section>

        ";
}
if($p=='dkonfirmasi'){
  $pendaftaran=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Detail Konfirmasi Pembayaran</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pembayaran</a></li>
                                <li>Detail Konfirmasi Pembayaran</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>Nama Bank</th>
                                    <th>Jumlah</th>
                                    <th>Waktu Kirim</th>
                                    <th>Bukti</th>
                                    <th>Keterangan</th>
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM konfirmasi_pembayaran where id_pendaftaran ='$pendaftaran[id_pendaftaran]'");
                            $jmldata = mysql_num_rows($sql);
                            $jml_des="0";
                            $pem_des=",";
                            $pem_rb=".";
                            while ($r = mysql_fetch_array($sql)) {
                      if ($r['status']==0){
                        $status='Belum Dicek Oleh Staf Administrasi';
                        echo "<tr>
                            
                            <td>$r[nama_bank]</td>
                            <td>";echo"".number_format($r['jumlah'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>$r[waktu_kirim]</td>
                            <td><img src='upload/img_bukti/$r[bukti]' width=30 height=30></td>
                            <td>$status</td>
                            </tr>";
                      }else if ($r['status']==1){
                        $status='Data Valid';
                        echo "<tr>
                            
                            <td>$r[nama_bank]</td>
                            <td>";echo"".number_format($r['jumlah'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>$r[waktu_kirim]</td>
                            <td><img src='upload/img_bukti/$r[bukti]' width=30 height=30></td>
                            <td>$status</td>
                            </tr>";
                      }else if ($r['status']==2){
                        $status='Data Tidak Valid';
                        echo "<tr>
                            
                            <td>$r[nama_bank]</td>
                            <td>";echo"".number_format($r['jumlah'],$jml_des,$pem_des,$pem_rb);echo"</td>
                            <td>$r[waktu_kirim]</td>
                            <td><img src='images/cancel.png'></td>
                            <td>$status</td>
                            </tr>";
                      }
                                
                      
                      
                    }                    
                   echo"
                                </tbody>
                                </table>
                                
                                <a href='?p=tkonfirmasi&id_pendaftaran=$pendaftaran[id_pendaftaran]' class='btn btn-default btn-lg back_home'>
                <i class='fa fa-plus-square'></i>
                Tambah
              </a>

                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='tkonfirmasi'){
  $data=mysql_fetch_array(mysql_query("select*from pendaftaran_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
  $pelanggan=mysql_fetch_array(mysql_query("select*from pelanggan where id_pelanggan='$data[id_pelanggan]'"));
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
                <li>Konfirmasi Pembayaran</li>
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
                            <input type=hidden name=id_pendaftaran value='$data[id_pendaftaran]'>
                            <div class='comment_form'>
                               <div class='row'>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='no_rekening' type='number' id='name' size='30'  placeholder='No. Rekening' required value='$pelanggan[no_rekening]'>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='nama_bank' type='text' id='email' size='30'  placeholder='Nama Bank' required value='$pelanggan[nama_bank]'>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='atas_nama' type='text' id='url' size='30'  placeholder='Atas Nama' required value='$pelanggan[atas_nama]'>
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

if($p=='perlengkapan'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Perlengkapan</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Perlengkapan</a></li>
                                <li>Data Perlengkapan</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>ID Pendaftaran</th>
                                    <th>Produk</th>
                                    <th>Tgl. Daftar</th>
                                    <th>Detail</th>
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM pendaftaran_pelanggan where id_pelanggan = '$_SESSION[id_pelanggan]'");
                            $jmldata = mysql_num_rows($sql);
                            while ($r = mysql_fetch_array($sql)) {
                                $produk=mysql_fetch_array(mysql_query("select*from produk where id_produk='$r[id_produk]'"));
                      echo "<tr>
                            
                            <td>$r[id_pendaftaran]</td>
                            <td><b>Jenis Produk: </b>$produk[jenis_produk] <b>Jenis Paket: </b>$produk[jenis_paket] <b>Tanggal Berangkat: </b>$produk[tanggal_keberangkatan]</td>
                            <td>$r[tanggal_pendaftaran]</td>
                            <td><a href='?p=dperlengkapan&id_pendaftaran=$r[id_pendaftaran]'><img src='images/search.png'></a></td>
                            </tr>";
                      
                    }                    
                   echo"
                                </tbody>
                                </table>

                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='dperlengkapan'){
    $data=mysql_fetch_array(mysql_query("select * from perlengkapan_pelanggan where id_pendaftaran='$_GET[id_pendaftaran]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Perlengkapan [ $data[id_pendaftaran] ]</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Perlengkapan</a></li>
                                <li>Detail Perlengkapan</li>
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
                    <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Hak Booking Seat</th>
                        <th>Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Koper</td>
                        <td>";
                              if ($data['koper']==1){
                                  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
                                  }
                                if ($data['koper']==0){
                                  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
                                }
                echo"</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tas Kecil</td>
                        <td>";
      if ($data['taskecil']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($data['taskecil']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>DVD Profil</td>
                        <td>";
      if ($data['dvdprofil']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($data['dvdprofil']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Buku Marketing</td>
                        <td>";
      if ($data['bukumarketing']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($data['bukumarketing']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Buku Produk</td>
                        <td>";
      if ($data['bukuproduk']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($data['bukuproduk']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Buku Doa</td>
                        <td>";
      if ($data['bukudoa']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($data['bukudoa']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Buku Pintar</td>
                        <td>";
      if ($data['bukupintar']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($data['bukupintar']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Voucher</td>
                        <td>";
      if ($data['voucher']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($data['voucher']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
                    </tr>
                    </tbody>
                </table><br><hr>
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Hak Pelunasan</th>
                        <th>Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kain Ihrom</td>
                        <td>";
      if ($data['kainihrom']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($data['kainihrom']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ikat Pinggang</td>
                        <td>";
      if ($data['ikatpinggang']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($data['ikatpinggang']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mukena Bergo</td>
                        <td>";
      if ($data['mukenabergo']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($data['mukenabergo']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Bahan Batik</td>
                        <td>";
      if ($data['bahanbatik']==1){
  echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;Sudah Diambil&nbsp;&nbsp; </b></font>";
}
if ($data['bahanbatik']==0){
  echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diambil&nbsp;&nbsp; </b></font>";
}
    echo"</td>
                    </tr></tbody>
                </table>
                <br><br>
                <a href='javascript:history.go(-1)' class='btn btn-default btn-lg back_home'>
                <i class='fa fa-arrow-circle-o-left'></i>
                Kembali
              </a>
                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='dokumen'){
    $data=mysql_fetch_array(mysql_query("select * from dokumen_pelanggan where id_pelanggan='$_SESSION[id_pelanggan]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Dokumen Pelanggan</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Perlengkapan</a></li>
                                <li>Detail Dokumen Pelanggan</li>
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
                    <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Dokumen</th>
                        <th>Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Passport</td>
                        <td>";if ($data['passport']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($data['passport']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[passport]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Foto</td>
                        <td>";if ($data['foto']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($data['foto']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[foto]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Buku Vaksin</td>
                        <td>";if ($data['buku_vaksin']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($data['buku_vaksin']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[buku_vaksin]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Buku Nikah</td>
                        <td>";if ($data['buku_nikah']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($data['buku_nikah']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[buku_nikah]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Akta Lahir</td>
                        <td>";if ($data['akta_lahir']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($data['akta_lahir']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[akta_lahir]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>FC KTP</td>
                        <td>";if ($data['fc_ktp']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($data['fc_ktp']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[fc_ktp]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>KK</td>
                        <td>";if ($data['kk']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($data['kk']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[kk]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>SPPH</td>
                        <td>";if ($data['spph']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($data['spph']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[spph]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>BPIH</td>
                        <td>";if ($data['bpih']=='Belum Diserahkan'){
    echo"<font color='yellow' style= 'background:red'> <b>&nbsp;&nbsp;Belum Diserahkan&nbsp;&nbsp; </b></font>";
  }
  else if ($data['bpih']=='Sudah Dikembalikan'){
    echo"<font color='white' style= 'background:purple'> <b>&nbsp;&nbsp;Sudah Dikembalikan&nbsp;&nbsp; </b></font>";
    }
  else {
    echo"<font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[bpih]&nbsp;&nbsp; </b></font>";
  }
  echo"</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Keterangan</td>
                        <td>$data[keterangan]</td>
                    </tr>
                    </tbody>
                </table>
                <br><p><b>Yang Menyerahkan :</b> $data[yang_menyerahkan] - <b>Waktu Penyerahan :</b> $data[waktu_penyerahan] <br></br>
                <a href='javascript:history.go(-1)' class='btn btn-default btn-lg back_home'>
                <i class='fa fa-arrow-circle-o-left'></i>
                Kembali
              </a>
                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='passport'){
  $data=mysql_fetch_array(mysql_query("select*from passport where id_pelanggan='$_SESSION[id_pelanggan]'"));
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Passport</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Dokumen</a></li>
                                <li>Data Passport</li>
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
                    <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Keterangan Dokumen</th>
                        <th>Data Dokumen</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>ID Passport</td>
                        <td><font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[id_passport]&nbsp;&nbsp; </b></font></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>No. Passport</td>
                        <td><font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[no_passport]&nbsp;&nbsp; </b></font></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Date Issued</td>
                        <td><font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[date_issued]&nbsp;&nbsp; </b></font></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Date Expired</td>
                        <td><font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[date_expired]&nbsp;&nbsp; </b></font></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Issuing Office</td>
                        <td><font color='yellow' style= 'background:green'> <b>&nbsp;&nbsp;$data[issuing_office]&nbsp;&nbsp; </b></font></td>
                    </tr>
                    </tbody>
                </table>
                <br></br>
                <a href='javascript:history.go(-1)' class='btn btn-default btn-lg back_home'>
                <i class='fa fa-arrow-circle-o-left'></i>
                Kembali
              </a>
                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='pemberitahuan'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Data Pemberitahuan</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Pemberitahuan</a></li>
                                <li>Data Pemberitahuan</li>
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
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>ID Pemberitahuan</th>
                                    <th>Judul Pemberitahuan</th>
                                    <th>Waktu Posting</th>
                                    <th>Detail</th>
                                </tr>
                                <tbody>
                            </thead>";
            
                              $sql = mysql_query("SELECT * FROM pemberitahuan ");
                            $jmldata = mysql_num_rows($sql);
                            while ($r = mysql_fetch_array($sql)) {
                                
                      echo "<tr>
                            
                            <td>$r[id_pemberitahuan]</td>
                            <td>$r[judul_pemberitahuan]</td>
                            <td>$r[waktu_kirim]</td>
                            <td><a href='?p=dpemberitahuan&id_pemberitahuan=$r[id_pemberitahuan]'><img src='images/search.png'></a></td>
                            </tr>";
                      
                    }                    
                   echo"
                                </tbody>
                                </table>

                    </div>
                </div>
                
            </div>
        </section>


    </section>

        ";
}
if($p=='dpemberitahuan'){
  $data=mysql_fetch_array(mysql_query("select*from pemberitahuan where id_pemberitahuan='$_GET[id_pemberitahuan]'"));
  $staf=mysql_fetch_array(mysql_query("select*from user_damtour where id_staf='$data[id_staf]'"));
  echo"
  <section class=\"wrapper\">
    <section class=\"page_head\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12\">
            <h2>$data[judul_pemberitahuan]</h2>
            <nav id=\"breadcrumbs\">
              <ul>
                <li>Anda Di Halaman Ini:</li>
                <li><a href='pelanggan.php'>Home</a></li>
                <li><a href='pelanggan.php'>Pemberitahuan</a></li>
                <li>$data[judul_pemberitahuan]</li>
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
              <h4><span>$data[judul_pemberitahuan]</span></h4>

            </div>
            <table align='center' style='width:auto' height=40% border=0><tr><td>
            $data[pemberitahuan]
            </td></tr></table>
            <hr>
            <small><b>Tanggal Pemberitahuan :</b> $data[waktu_kirim] - <b>DiPosting Oleh :</b> $staf[nama]</small>
          </div>
        </div>


      </div>
    </section>
  </section>
";
}

if($p=='bertanya'){
    echo"
    <section class=\"wrapper\">
        <section class=\"page_head\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12\">
                        <h2>Silahkan LogIn Untuk Bertanya!</h2>
                        <nav id=\"breadcrumbs\">
                            <ul>
                                <li>Anda Di Halaman Ini:</li>
                                <li><a href='pelanggan.php'>Home</a></li>
                                <li><a href='pelanggan.php'>Bertanya</a></li>
                                <li>LogIn Form</li>
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
                            <input type=hidden name=email value='$_SESSION[email]'>
                            <input type=hidden name=password value='$_SESSION[password]'>
                            <div class='comment_form'>
                               <div class='row'>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='email' type='email' id='email' size='30'  value='$_SESSION[email]' disabled>
                                   </div>
                                   <div class='col-sm-4'>
                                       <input class='col-lg-4 col-md-4 form-control' name='password' type='password' id='url' size='30' value='$_SESSION[password]' disabled>
                                   </div>
                                </div>
                            </div>
                            <input type='submit' class='btn btn-lg btn-default' value='Login'></form>
            </div>
        </section>


    </section>

        ";
}
}
?>