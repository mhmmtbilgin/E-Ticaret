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
<link href="css/style.css" rel="stylesheet" type="text/css" /></head>
<link rel="shortcut icon" href="image/logo.ico" type="image/x-icon" >

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
    <div id="icerik2">
      <form id="form1" name="form1" method="post" action="islem.php">
        <p>&nbsp;</p>
        <table width="358" height="433" border="0" align="center" style="font-size: 14px">
          <tr>
            <td height="32" colspan="2" valign="top" id="table-font">ÜYE OL <br />
              <hr /></td>
          </tr>
          <tr>
            <td width="181">Ad</td>
            <td width="167">Soyad</td>
          </tr>
          <tr>
            <td><label for="ad"></label>
              <input type="text" name="ad" id="ad" /></td>
            <td><label for="soyad"></label>
              <input type="text" name="soyad" id="soyad" /></td>
          </tr>
          <tr>
            <td>E-Mail Adresi</td>
            <td>Şifre</td>
          </tr>
          <tr>
            <td><label for="mail"></label>
              <input type="text" name="mail" id="mail" /></td>
            <td><label for="sifre"></label>
              <input type="password" name="sifre" id="sifre" /></td>
          </tr>
          <tr>
            <td>Doğum Tarihi</td>
            <td>Cinsiyet</td>
          </tr>
          <tr>
            <td><label for="dogum"></label>
              <input type="date" name="dogum" id="dogum" /></td>
            <td><label for="cinsiyet"></label>
              <select name="cinsiyet" id="cinsiyet">
                <option selected="selected">Erkek</option>
                <option>Bayan</option>
              </select></td>
          </tr>
          <tr>
            <td>Cep Telefonu</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label for="cep"></label>
              <input type="text" name="cep" id="cep" /></td>
            <td><label for="textfield10"></label></td>
          </tr>
          <tr>
            <td><input type="submit" name="button3" id="button3" value="Kaydet" /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="14">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
</div>
<div id="cizgi"></div>
<?php include("include/footer.php"); ?>
</body>
</html>