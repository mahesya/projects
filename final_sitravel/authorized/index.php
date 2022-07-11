<head>
<link href="../images/logo_nama.png" rel="shortcut icon">
<script language="JavaScript">
 var txt="Damtour - Mengawal Anda Menuju Tanah Suci";
 var kecepatan=500; var segarkan=null; function bergerak(){document.title=txt;
 txt=txt.substring(1,txt.length)+txt.charAt(0);
 segarkan=setTimeout("bergerak()",kecepatan);}bergerak();</script>
</head>
<body onLoad="document.login.nama.focus();">
<?php
echo "
<table width='406' height='236' border='0' align='center' bgcolor=\"#0066FF\">
  <tr>
    <td valign='midle' align='center' >
    <form method=POST action='cek_login.php' name='login'>
    <table width='275' border='0'>
      <tr>
        <td width='76' ><img src=../images/user.png></td>
        <td width='3'>:</td>
        <td width='244'><input size='20' type='text' name='username' placeholder=username required></td>
      </tr>
      <tr>
        <td ><img src=../images/password.png></td>
        <td >:</td>
        <td ><input size='20' type='password' name='password' placeholder=password required></td>
      </tr>
      <tr>
        <td colspan='2'>&nbsp;</td>
        <td><input type='submit' value='LogIn'>&nbsp; <input type='reset' value='reset'></td>
      </tr>
    </table></form></td>
  </tr>
</table><br>
"
?>
<table width='406' border='0' align='center'>
  <tr>
    <td align="center" valign="middle"><p style="font-size:12px; color:#00F;";><a href="../"><img src="../images/logo_nama.png" height="75" width="150" /></a><br><br><strong>DAMTOUR &copy;<?=date('Y')?> - Developed By: Hendri Mahesya</strong></p>
     </td>
  </tr>
</table></body>

