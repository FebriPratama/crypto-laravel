<html>
<head>
<link href='images/axcrypt.PNG' rel='SHORTCUT ICON'/>
<style type="text/css">
<!--
body {
	background-image: url(images/d.gif);
}
a:link {
	text-decoration: none;
	color: #FFFFFF;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	margin-left: 10px;
}
.style47 {
	color: #F0F0F0;
	font-weight: bold;
	font-size: 12px;
}
.style48 {
	font-size: 14px
}
.style51 {color: #F0F0F0; font-weight: bold; font-size: 14px; }
.style84 {	font-size: 36px;
	font-weight: bold;
	color: #FFFFFF;
}
.style5 {	color: #000099
}
.style7 {	color: #000099;
	font-weight: bold;
}
.style8 {font-size: 12px}
.style9 {
	font-family: Arial, Helvetica, sans-serif;
	color: #00FF00;
	font-size: 12px;
}
.style85 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style86 {font-size: 16}
.style87 {color: #FF0000}
.style88 {
	color: #00FF00;
	font-size: 36px;
}
.style89 {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FF00FF;
	font-size: 24px;
}
.style92 {
	font-size: 20px;
	color: #FF0000;
}
.style25 {color: #FFFF00; }
.style94 {color: #00FF00}
.style95 {
	color: #0000FF;
	font-weight: bold;
}
.style96 {	font-weight: bold;
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<title>Aplikasi Kriptografi Vigenere</title></head>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div>
  <p>&nbsp;</p>
  <table background="images/bg5.jpg"width="925" height="352" align="center">
  <tr>
    <td width="917" height="98" background="images/bg2.jpg""><p align="center" class="style84 style85 style88">&nbsp;</p></td>
  </tr>
  <tr>
    <td height="186">
<table width="917" align="center">
  <tr>
    <td width="172" height="45" bgcolor="#333333"><div align="center" class="style47 style74 style86">
      <p><span class="style47 style74 style48"><a href="index.php" title="Halaman Index" class="style37 style25"><img src="images/Home.png" width="59" height="53" /><br />
                <span class="style87">Home</span></a></span></p>
    </div>
        <div align="center" class="style51"><a href="enkripsi.php" title="Halaman Enkripsi" class="style37 style25"><img src="images/axcrypt.png" width="69" height="60" /><br />
            <span class="style87">Enkripsi - Dekripsi</span></a></div>
<div align="center" class="style51">
  <p><a href="Tentang.php" title="Halaman Enkripsi" class="style37 style25"><img src="images/customer.png" width="72" height="68"><br />
      <span class="style87">Tentang Saya </span></a></p>
  </div></td>
    <td width="540"><table width="566" height="313" align="center" bgcolor="#00CCCC">
      <tr>
        <td width="527" height="40"><p align="left"><span class="style92"><strong>Selamat Datang</strong> <strong>di Kriptografi Vigenere</strong></span></p>
          <p align="left"> </p></td>
      </tr>
      <tr>
        <td height="122"><div  align="justify" class="style95">Sandi Vigenere adalah metode menyandikan teks alfabet dengan menggunakan deretan sandi Caesar berdasarkan huruf-huruf pada kata kunci. Sandi Vigenere merupakan bentuk sederhana dari sandi substitusi polialfabetik. Enkripsi ini menggunakan tabel bujur sangkar yang berisi kombinasi dari plaintext pada kolom, serta kunci pada baris. Kombinasi keduanya akan menghasilkan cipher pada baris dan kolom yang dipilih.<br>
          Sandi ini dikenal luas karena cara kerjanya mudah dimengerti dan dijalankan, dan bagi para pemula sulit dipecahkan. Sandi Vigenere sebenarnya merupakan pengembangan dari sandi Caesar. </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="165" bgcolor="#333333"><p align="center" class="style84 style89">KEAMANAN</p>
      <p align="center" class="style84 style89"> KOMPUTER </p></td>
  </tr>
</table>    </td>
  </tr>
  <tr>
    <td>
<table width="910" height="62" align="center" background="images/bg3.jpg" class="footer">
  <tr>
    <td id="pad2"><table id="footer" width="100%">
      <tr>
        <td height="33" align="center" background="images/Picture4_03.gif"><p><a href="#"><span class="style5 style7"><span class="style5  style8 style9 style9"><span class="style8 style9 style94">Copyright @ 2015 Keamanan Komputer <strong><br>
          Powered by<strong> Suwaji | 1412110270 | TEKNIK INFORMATIKA - 2011 F | suwaji0270@gmail.com</strong></strong></span></span></span><br />
        </a> </p></td>
      </tr>
    </table></td>
  </tr>
</table>    </td>
  </tr>
</table>
  <div" class="style96" style="position:absolute; align=;width: 435px; left: 641px; top: 118px;"center="center"><strong><span class="style94">
    <?php

/* script menentukan hari */  
 $array_hr= array(1=>"Senin,","Selasa,","Rabu,","Kamis,","Jumat,","Sabtu,","Minggu,");
 $hr = $array_hr[date('N')];

/* script perintah keluaran*/ 
 echo $hr; ?>
    </span></strong>
      <span class="style94">
      <?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "<b>".date("d-M-Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| <strong>Pukul : </strong><b>". $jam." "."</b>";
$a = date ("H");
?>
      </span></div>
</div>
<!-- End ImageReady Slices -->
</body>
</html>