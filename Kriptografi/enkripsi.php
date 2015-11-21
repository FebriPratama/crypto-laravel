<html>
<head><link href='images/axcrypt.PNG' rel='SHORTCUT ICON'/>
<script type='text/javascript'>

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
var zstpagid =1;</script>
<script type="text/javascript" src="enkripsi_act.js"></script>
</script>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">

</script>
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
.style80 {	font-weight: bold;
	font-size: 14px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style81 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style82 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style84 {
	font-size: 36px;
	font-weight: bold;
	color: #FFFFFF;
}
.style5 {	color: #000099
}
.style7 {	color: #000099;
	font-weight: bold;
}
.style8 {font-size: 12px}
.style86 {font-size: 16}
.style87 {color: #FF0000}
.style88 {color: #00FF00;
	font-size: 36px;
}
.style90 {
	font-family: Arial, Helvetica, sans-serif;
	color: #00FF00;
	font-size: 12px;
}
.style92 {font-size: 18px}
.style25 {color: #FFFF00; }
.style97 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 30px;
}
.style99 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; color: #0000FF; }
.style101 {color: #FF0000; font-size: 22px; }
.style102 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
	color: #FF0000;
	font-size: 22px;
}
.style106 {	font-weight: bold;
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.style107 {color: #00FF00}
-->
</style>
<title>Aplikasi Kriptografi Vigenere</title></head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<p>&nbsp;</p>
<table background="images/bg5.jpg" width="913" height="473" align="center">
  <tr>
    <td height="93" background="images/bg2.jpg">
      <p align="center" class="style84 style88 style97">&nbsp;</p>    </td>
  </tr>
  <tr>
    <td><table width="908" align="center">
      <tr>
        <td width="211" height="45" bgcolor="#333333"><div align="center" class="style47 style74 style86">
          <p><span class="style47 style74 style48"><a href="index.php" title="Halaman Index" class="style37 style25"><img src="images/Home.png" width="59" height="53" /><br />
                      <span class="style87">Home</span></a></span></p>
        </div>
              <div align="center" class="style51"><a href="enkripsi.php" title="Halaman Enkripsi" class="style37 style25"><img src="images/axcrypt.png" width="69" height="60" /><br />
                    <span class="style87">Enkripsi - Dekripsi</span></a></div>
<div align="center" class="style51">
  <p><a href="Tentang.php" title="Halaman Enkripsi" class="style37 style25"><img src="images/customer.png" width="72" height="68"><br />
      <span class="style87">Tentang Saya </span></a></p>
  </div></td>
        <td width="330"><table width="330" height="299" align="center" bgcolor="#00CCCC">
          <tr>
            <td width="300" height="293"><table width="306" height="228" align="center">
              <tr>
                <td width="300" height="222"><div id="div">
                  <form action="" method="post" name="contact" id="contact">
                    <span class="style80">                    </span><div>
                      <p align="center" class="style92"><span class="style99 style87"><span class="style101">Enkripsi</span></span></p>
                      </div>
                      <span class="style80"></span><span class="style80"><input type="hidden" id="cipher" name="cipher" value="ENKRIPSI DENGAN ALGORITMA VIGENERE" readonly="" size="43" />
                      <label for="author">Masukkan Plain Teks :</label>
                      </span><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input id="plaintext" name="plaintext" class="textbox" size="50"/>
                      </strong><br />
                    <br />
                    <div class="cleaner_h10 style74 style81"></div>
                    <span class="style82"><strong>
                      <label for="email">Masukkan Kunci  :</label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input id="key" class="textbox" name="key" size="50" type="text" />
                      </strong></span>
                    <div class="cleaner_h10 style74 style81"><strong><br />
                    </strong></div>
                    <div align="right"><span class="style82"><strong>
                    </strong></span></div>
                    <span class="style82"><strong><label for="text"> </label>
                      </strong></span>
                    <div align="left"><span class="style82"><strong>
                                            <input name="button2" type="button" class="submit_btn float_l" onClick="enkripsi()" value=" Enkripsi " />
                      <input type="reset" class="submit_btn float_r" name="reset2" id="reset2" value="Bersihkan" />
                    </strong></span></div>
                    <span class="style82"><strong></strong><strong></strong></span><span class="style82"><strong>
                      <label for="text">
                      <div align="left"><br>
                        <br>
                        Hasil Ciper Teks :</div>
                      </label>
                      </strong></span>
                    <div align="right">
                      <input id="ciphertext" size="50" class="textbox" name="ciphertext"/>
                      <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</strong>
                      </div>
                  </form>
                </div></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="337" bgcolor="#00CCCC"><table width="306" height="270" align="center">
          <tr>
            <td width="356" height="264"><div id="contact_form"><div>
                      <p align="center" class="style92"><span class="style102">Dekripsi</span></p>
                      </div>
              <form action="" method="post" name="contact" id="contact">
                <span class="style80">
                  <input type="hidden" id="cipherr" name="cipherr" value="DEKRIPSI DENGAN ALGORITMA VIGENERE" readonly="" size="43" />
                  Masukkan
                  <label for="author">Ciper Teks :</label>
                  </span><strong>&nbsp;&nbsp;&nbsp;
                    <input id="ciphertextt" class="textbox" size="50" name="ciphertextt" />
                  </strong><br />
                <br />
                <div class="cleaner_h10 style81"></div>
                <span class="style82"><strong>
                  Masukkan Kunci  :
                  <label for="email"></label><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><strong><strong><strong><strong><strong>
                    <input id="keyy" class="textbox" name="keyy" size="50" type="text" />
                    </strong></strong></strong></strong></strong></strong></strong></strong></span>
                <div class="cleaner_h10 style81">
                  <div align="left"><strong><br />
                    </strong><span class="style82"><strong>
                      <input name="button"  type="button" class="submit_btn float_l" onClick="dekripsi()" value="Dekripsi" />
                      <strong>
                        <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Bersihkan" />
                      </strong></strong></span></div>
                </div>
                <span class="style82"><strong>
                  <label for="text"> </label>
                  <label for="text"><br>
                  <br>
                  Hasil Plain Teks :</label>
                  </strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="plaintextt" class="textbox" size="50" name="plaintextt" />
                <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
              </form>
            </div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="909" height="50" align="center" background="images/bg3.jpg" class="footer">
      <tr>
        <td id="pad2"><table width="100%" height="38" id="footer">
          <tr>
            <td height="32"><p align="center"><a href="#"><span class="style5 style7"><span class="style5 style8 style90">Copyright @ 2015 <strong> Keamanan Komputer <br>
              Powered by<strong> Suwaji | 1412110270 | TEKNIK INFORMATIKA - 2011 F | suwaji0270@gmail.com</strong></strong></span></span><br />
            </a> </p></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<div" class="style106" style="position:absolute; align=;width: 435px; left: 646px; top: 103px;"center="center"><strong><span class="style107">
  <?php

/* script menentukan hari */  
 $array_hr= array(1=>"Senin,","Selasa,","Rabu,","Kamis,","Jumat,","Sabtu,","Minggu,");
 $hr = $array_hr[date('N')];

/* script perintah keluaran*/ 
 echo $hr; ?>
  </span></strong>
    <span class="style107">
    <?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "<b>".date("d-M-Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| <strong>Pukul : </strong><b>". $jam." "."</b>";
$a = date ("H");
?>
    </span></div>
</body>
</html>