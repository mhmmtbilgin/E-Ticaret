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
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('1.PNG')">
<div id="ust">
  <div id="logo"><a href="index.php"><img src="image/logooo.png" alt="" width="210" height="100" border="0" align="baseline" usemap="#Map" /></a>
    <map name="Map" id="Map">
      <area shape="rect" coords="2,2,207,99" href="index.php" />
    </map>
  </div>
  <table width="790" height="100" border="0">
    <tr>
      <td width="482" rowspan="2" align="center" valign="top"><br />
        <form id="form1" name="form1" method="post" action="ara.php">
          <label for="kelime">Ürün Arama : </label>
          <input type="text" name="kelime" id="kelime" placeholder="Ürün adı giriniz..." />
          <input type="submit" name="ara" id="ara" value="Ürün Adı Giriniz" />
<br />
          <span class="baslikk">Marketium E-Ticaretin Tek Adresi
          </form>
          </form>
          </form>
          </span>
        </form></td>
      <td height="52" colspan="2"><table width="320" border="0" align="right">
        <tr>
          <td width="57" align="right"><img src="ikonlar/telefon.ico" alt="" width="40" height="40" align="right" /></td>
          <td width="89" align="right">0555 555 55 55</td>
          <td width="138"><a href="#" class="kopru1">İletişim </a>|<a href="uye_kayit.php" class="kopru1"> Üye Ol</a></td>
        </tr>
      </table>
        <br /></td>
    </tr>
    <tr>
    <?php
	$baglan1 = $_SESSION["baglan"];
	$mail = '';
	if(isset($_COOKIE['guvenlik'])) $mail=$_COOKIE['guvenlik'];
	$ad = '';
	$email = '';
	 $sorgu=mysqli_query($baglan1,"Select *from uyekayit where email='$mail'");
	while ($vt=mysqli_fetch_array($sorgu)){
		$ad = $vt['ad'];
		$email = $vt['email'];
	}
	?>
    
      <td width="84" height="42" align="right"><img src="ikonlar/sepet.ico" alt="" width="40" height="40" /></td>
      <td width="260" align="left"><span>SEPETİM(0 ÜRÜN) |  <span style="display:<?php if(!isset($_COOKIE['guvenlik'])) echo 'none;' ?>">Hoşgeldin<a href="profil_guncelle.php?mail='<?php echo $email;  ?>'" class="kopru1"> <?php echo $ad; ?></a></span><a href="uye_giris.php" class="kopru1" style="display:<?php if(isset($_COOKIE['guvenlik'])) echo 'none;' ?>"> Giriş Yap</a></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="999" height="969" border="1" align="center">
    <tr>
    
      <td colspan="3" align="left" valign="top" bgcolor="#FFFFFF">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <table width="921" border="0" align="center" cellpadding="2" cellspacing="5">
        <tr>  
		<?php
		$baglan1 = $_SESSION["baglan"];
		if(isset($_POST['ara']))
		{
  $aranan = $_POST['kelime'];
  $sorgu = mysqli_query($baglan1,"SELECT * FROM urunler WHERE urun_adi like '%$aranan%' or urun_alt_kategori like '%$aranan%' or urun_ozellikleri like '%$aranan%' order by urun_id DESC");
  while($dr = mysqli_fetch_array($sorgu)){
  ?>
          <td width="299" rowspan="4" align="center" valign="top"><img src="urunicerik/foto/<?php echo $dr['urun_menu_kategori'].'/'.$dr['foto_yol'];?>" alt="" width="300" height="350" align="top" /></td>
          <td height="22" colspan="3" valign="middle" bgcolor="#CCCCCC"><h3><center><?php echo $dr['urun_adi']; ?></b></h3></td>
          </tr>
        <tr>
          <td width="312" rowspan="3" align="center" valign="middle" bgcolor="#CCCCCC"><?php echo $dr['urun_ozellikleri']; ?></td>
          <font color="#FF0000"><H1><td height="57" colspan="2" align="center" bgcolor="#CCCCCC"><h1 id="b"><?php echo $dr['urun_fiyati']; ?></h1></td></H1></font>
        </tr>
        <tr>
          <td height="76" colspan="2" align="center" valign="top" bgcolor="#FFFFFF">
          <p>
              <input type="submit" name="sepet_ekle_btn" id="sepet_ekle_btn" value="" style="background:transparent url(2.png) no-repeat center top; width:164px; height:44px; display:<?php if(!isset($_COOKIE['guvenlik'])) echo 'none;'?>;"/>
          </p><br />
          </a></td>
        </tr>
        <tr>
          <td colspan="2" align="center" valign="middle" bgcolor="#FFFFFF"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','1.PNG',1)"></a></td>
        </tr>
       
        <?php }}
		else
		{
		echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".'Aradığınız kelime hakkında ürün mevcut değildir.';	
		}
		 ?>
        <tr>
          <td height="22" align="left" valign="middle">&nbsp;</td>
          <p>&nbsp;</p>
      <p>&nbsp;</p>
          <td height="22" colspan="3" align="left" valign="middle"><img src="kargo.png" alt="" width="41" height="33" /> <span id="a">Saat 15:00 a kadar olan siparişler aynı gün içerisinde kargoya verilir.</span></td>
          </tr>
        
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>
      
       
      </p></td>
      
    </tr>
  </table>
  <table width="1000" border="0">
    <tr>
      <td width="175" height="99" align="right">Sosyal Medya</td>
      <td width="397"><img src="image/iconlar.png" alt="" width="345" height="62" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="304" align="center" valign="top" bgcolor="#999999"><p><br />
        <span id="yeni">Kategoriler</span></br>
        Notebook<br />
        Cep Telefonu<br />
        Tablet PC<br />
      Akıllı Saat </p></td>
      <td align="center" valign="top" bgcolor="#999999"><br />
        <span id="yeni"><br />
          Kategoriler</span><br />
        Küçük Ev Aletleri<br />
        Kişisel Bakım Ürünleri<br />
        Süpürge<br />
        Ütü </td>
      <td width="414" align="center" valign="top" bgcolor="#999999" ><p><br />
        Hakkımızda<br />
        Servis Takip<br />
        Müşteri Hizmetleri<br />
        Sipariş Aşamaları<br />
        Sık Sorulan Sorulan<br />
        İnsan Kaynakları<br />
        İletişim <br />
      </p></td>
    </tr>
    <tr>
      <td height="91" colspan="2" align="left" valign="top"><br />
        <p>Türkiye’nin Teknoloji Hiperstoru <br />
          Copyright&copy;      Vatan Bilgisayar San. ve Tic. A.Ş. <img src="image/iletisim.png" alt="" width="30" height="30" /> 0850 222 56 56</p></td>
      <td align="right" valign="middle"><br />
        <br />
        <br />
        Powered by  Ramazan Emre Tarık  Kardeşler</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>