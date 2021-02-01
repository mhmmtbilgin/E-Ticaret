<?php include ('baglan.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
	<title>MARKETIUM</title>
<link href="css/stipl.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="image/logo.ico" type="image/x-icon" >
</head>

<body>
<?php include("include/ust.php"); ?>
<div id="cizgi"></div>
<div id="govde">
  <div id="menu">
  <ul>
      <li>
        <div id="telicon"><img src="image/4.png" alt="" width="30" height="30" /></div>
        <a href="ceptel.php?kategori=ceptel" >&nbsp;Telefon</a></li>
      <li>
        <div id="bilicon"><img src="image/6.png" width="30" height="30" /></div>
        <a href="bilgisayar.php?kategori=bilgisayar" > &nbsp;Bilgisayar</a></li>
      <li>
        <div id="icon3"><img src="image/8.png" width="30" height="30" /></div>
        <a href="bilgisayarparca.php?kategori=bilgisayarparca" >&nbsp;Bilgisayar Parçaları</a></li>
      <li>
        <div id="icon4"><img src="image/2.png" width="30" height="30" /></div>
        <a href="fotokamera.php?kategori=fotokamera">&nbsp;Foto &amp; Kamera</a></li>
      <li>
        <div id="icon5"><img src="image/5.png" width="30" height="30" /></div>
        <a href="tv.php?kategori=tv">&nbsp;TV &amp; Ev Elektroniği</a></li>
      <li>
        <div id="icon6"><img src="image/9.png" width="30" height="30" /></div>
        <a href="ofis.php?kategori=ofis">&nbsp;Ofis Malzemeleri</a></li>
      <li>
        <div id="icon7"><img src="image/1.png" width="30" height="30" /></div>
        <a href="aksesuar.php?kategori=aksesuar">&nbsp;Aksesuarlar</a></li>
      <li>
        <div id="icon8"><img src="image/3.png" width="30" height="30" /></div>
        <a href="oyun.php?kategori=oyun">&nbsp;Oyun &amp; Hobi</a></li>
      <li>
        <div id="icon9"><img src="image/7.png" width="30" height="30" /></div>
        <a href="evaletleri.php?kategori=evaletleri">&nbsp;Ev Aletleri &amp; Kişisel<br />
          &nbsp;Bakım</a></li>
    </ul>
    <p>&nbsp;</p>
  </div>
  <div id="icerik">
    <form id="form1" name="form1" method="post" action="action.php">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <table width="500" border="0" align="center" cellpadding="10" cellspacing="0" style="font-size: 14px">
        <tr>
          <td height="32" colspan="2" align="center" valign="middle">ÜYE GİRİŞİ</td>
        </tr>
        <tr>
          <td width="158">&nbsp;</td>
          <td width="302">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">E-mail: </td>
          <td><input type="text" name="ad" id="ad" /></td>
        </tr>
        <tr>
          <td align="right">Şifre: </td>
          <td><input type="password" name="sifre" id="sifre" /></td>
        </tr>
        <tr>
          <td><input name="action" type="hidden" id="action" value="entrance" /></td>
          <td><input type="submit" name="button3" id="button3" value="Giriş Yap" /></td>
        </tr>
      </table>
    </form>
  </div></div>
</div>
</div>
<div id="cizgi"></div>
<div id="sonfooter">
  <table width="1000" border="0">
    <tr>
      <td width="175" height="99" align="right">Sosyal Medya</td>
      <td width="397"><img src="image/iconlar.png" width="345" height="62" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="304" align="center" valign="top" bgcolor="#999999"><p><br />
      <span id="yeni">Kategoriler</span></br>
      Notebook<br />
      Cep Telefonu<br />
      Tablet PC<br />
      Akıllı Saat
      </span></p></td>
      <td align="center" valign="top" bgcolor="#999999"><br />
        <span id="yeni"><br />
        Kategoriler</span><br />
        Küçük Ev Aletleri<br />
        Kişisel Bakım Ürünleri<br />
        Süpürge<br />
        Ütü
      </span></td>
      <td width="414" align="center" valign="top" bgcolor="#999999" ><p><br />
        Hakkımızda<br />
        Servis Takip<br />
        Müşteri Hizmetleri<br />
        Sipariş Aşamaları<br />
        Sık Sorulan Sorulan<br />
        İnsan Kaynakları<br />
        İletişim
        <br />
      </p></td>
    </tr>
    <tr>
      <td height="91" colspan="2" align="left" valign="top"><br />        <p>Türkiye’nin Teknolojı Marketi <br />
      Copyright&copy;     www.marketıum.com <img src="image/iletisim.png" alt="" width="30" height="30" /> 0555 555 55 55</p></td>
      <td align="right" valign="middle"><br />
        <br />
        <br />
      MARKETIUM</td>
    </tr>
  </table>
</div>
</body>
</html>