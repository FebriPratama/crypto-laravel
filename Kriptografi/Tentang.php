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
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style94 {font-size: 16; font-weight: bold; }
.style97 {
	color: #0000FF;
	font-size: 12px;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style98 {color: #0000FF; font-size: 16; font-weight: bold; }
.style5 {color: #000099
}
.style7 {color: #000099;
	font-weight: bold;
}
.style8 {font-size: 12px}
.style90 {font-family: Arial, Helvetica, sans-serif;
	color: #00FF00;
}
.style99 {
	color: #00FF00;
	font-weight: bold;
}
.style101 {
	font-size: 14px;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #333333;
	font-weight: bold;
}
.style102 {font-family: Georgia, "Times New Roman", Times, serif}
.style103 {font-size: 12px; font-family: Georgia, "Times New Roman", Times, serif; color: #333333; font-weight: bold; }
.style104 {	font-weight: bold;
	font-size: 11px;
	font-family: Arial, Helvetica, sans-serif;
}
.style106 {color: #00FF00; font-size: 12px; }
-->
</style>
<title>Aplikasi Kriptografi Vigenere</title></head>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div>
  <p>&nbsp;</p>
  <table background="images/bg5.jpg" width="912" height="477" align="center">
  <tr>
    <td height="98" background="images/bg2.jpg"><p align="center" class="style84 style85 style88">&nbsp;</p></td>
  </tr>
  <tr>
    <td height="190">
<table width="904" align="center">
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
    <td width="487"><table width="494" height="308" align="center" bgcolor="#00CCCC">
      <tr>
        <td width="536" height="42"><p align="left"><span class="style92">Tentang Saya : </span></p>
          <p align="left"> </p></td>
      </tr>
      <tr>
        <td><table width="479" height="148" align="center">
            <tr>
              <td width="106" height="34" class="style98"><span class="style94 style8 style102"><span class="style86">Nama </span></span></td>
              <td width="26" class="style98"><span class="style94 style8 style102"><span class="style86">: </span></span></td>
              <td width="325" class="style98"><span class="style94 style8 style102"><span class="style86">Suwaji </span></span></td>
            </tr>
            <tr>
              <td width="106" height="32" class="style98"><span class="style94 style8 style102"><span class="style86">NPM</span></span></td>
              <td width="26" class="style98"><span class="style94 style8 style102"><span class="style86">: </span></span></td>
              <td width="325" class="style98"><span class="style94 style8 style102"><span class="style86">1412110270</span></span></td>
            </tr>
            <tr>
              <td width="106" height="36" class="style98"><span class="style94 style8 style102"><span class="style86">Angkatan</span></span></td>
              <td width="26" class="style98"><span class="style94 style8 style102"><span class="style86">: </span></span></td>
              <td width="325" class="style98"><span class="style94 style8 style102"><span class="style86">2011 - F </span></span></td>
            </tr>
            <tr>
              <td height="34" class="style98"><span class="style98 style8 style102"><span class="style86">Alamat</span></span></td>
              <td class="style98"><span class="style98 style8 style102"><span class="style86">:</span></span></td>
              <td><span class="style97 style8">Ds. Kebomlati Kec. Plumpang Kab. Tuban </span></td>
            </tr>
          </table>
          <div padding-left="10px"  align="justify">
            <p class="style101">&nbsp;</p>
            <p class="style103">Terkadang kebiasaan itu tak pernah jadikan hal yang pernah dimimpikan, tapi kebiasaan itu akan jadi suatu yang berharga nantinya.  </p>
          </div></td>
      </tr>
    </table></td>
    <td width="218" bgcolor="#333333"><p align="center" class="style84 style89"><img src="images/fotoku.jpg" width="188" height="250"></p>
      <p align="center" class="style84 style89">SUWAJI</p></td>
  </tr>
</table>
    <table width="902" align="center" class="footer" background="images/bg3.jpg">
      <tr>
        <td height="53" id="pad2"><table id="footer" width="100%">
            <tr>
              <td height="32"><p align="center"><a href="#"><span class="style5 style7"><span class="style5 style8 style90">Copyright @ 2015 <strong> Keamanan Komputer <br>
                  </strong></span></span><span class="style99">Powered by<strong> Suwaji | 1412110270 | TEKNIK INFORMATIKA - 2011 F | suwaji0270@gmail.com</strong></span><br />
              </a> </p></td>
            </tr>
        </table></td>
      </tr>
    </table>    </td>
  </tr>

</table>
  <div style="position:absolute; align=;width: 435px; left: 620px; top: 115px;"center="center"" class="style104"><strong><span class="style106">
    <?php

/* script menentukan hari */  
 $array_hr= array(1=>"Senin,","Selasa,","Rabu,","Kamis,","Jumat,","Sabtu,","Minggu,");
 $hr = $array_hr[date('N')];

/* script perintah keluaran*/ 
 echo $hr; ?>
    </span></strong>
      <span class="style106">
      <?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "<b>".date("d-M-Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| <strong>Pukul : </strong><b>". $jam." "."</b>";
$a = date ("H");
?>
  </span><span class="style106">      </span></div>
</div>
<!-- End ImageReady Slices -->
</body>
</html>