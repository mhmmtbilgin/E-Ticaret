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
$(document).ready(function(){
	$('.ver').click(function(){
		$('#sepet_ekle_btn').submit();
		});
	});
</script>

</head>

<body>

<?php include("include/ust.php"); ?>
<div id="cizgi"></div>
<div id="ust">
  <p>&nbsp;</p>
  <table width="999" height="566" border="1" align="center">
    <tr>
    
      <td colspan="3" align="left" valign="top" bgcolor="#FFFFFF">
      <p>&nbsp;</p>
      <table width="921" border="0" align="center" cellpadding="2" cellspacing="5">
        <tr>  <?php
  $urun_id = $_GET['urun_id'];
  $sorgu = mysqli_query($baglan1,"SELECT * FROM urunler WHERE urun_id = $urun_id");
  while($dr = mysqli_fetch_array($sorgu)){
	  $urun_adi = $dr['urun_adi'];
					$urun_fiyati = $dr['urun_fiyati'];
  ?>
   
          <td colspan="2" rowspan="4" align="center" valign="top"><img src="urunicerik/foto/<?php echo $dr['urun_menu_kategori'].'/'.$dr['foto_yol'];?>" alt="" width="300" height="350" align="top" /></td>
          <td height="22" colspan="3" valign="middle" bgcolor="#CCCCCC"><h3><center><?php echo $dr['urun_adi']; ?></b></h3></td>
          </tr>
        <tr>
          <td width="312" rowspan="3" align="center" valign="middle" bgcolor="#CCCCCC"><?php echo $dr['urun_ozellikleri']; ?></td>
          <font color="#FF0000"><H1><td height="57" colspan="2" align="center" bgcolor="#CCCCCC"><h1 id="b"><?php echo $dr['urun_fiyati']; ?></h1></td></H1></font>
        </tr>
        <tr>
          <td height="76" colspan="2" align="center" valign="top" bgcolor="#FFFFFF"><p><br />
          </p>
            <form id="form1" name="form1" method="post" action="action.php">
              <p>
                <input type="submit" name="sepet_ekle_btn" id="sepet_ekle_btn" value="" style="background:transparent url(2.png) no-repeat center top; width:164px; height:44px; display:<?php if(!isset($_COOKIE['guvenlik'])) echo 'none;'?>"/>
              </p>
              <p><a href="action.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','1.PNG',1)">
                <input name="sepet" type="hidden" id="sepet" value="sepetim" />
                <?php
				$urun_adi = '';
				$urun_fiyati = '';
				$sorgu = mysqli_query($baglan1,"SELECT * FROM urunler WHERE urun_id = ".$urun_id."");
				while($dr = mysqli_fetch_array($sorgu)){
					$urun_adi = $dr['urun_adi'];
					$urun_fiyati = $dr['urun_fiyati'];
					}
				?>
                <input name="idd" type="hidden" id="id" value="<?php echo $urun_id;?>" />
                <input name="add" type="hidden" id="add" value="<?php echo $urun_adi;?>" />
                <input name="fiyatt" type="hidden" id="fiyatt" value="<?php echo $urun_fiyati;?>" />
              </a></p>
            </form>
            <p><a href="action.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','1.PNG',1)">              <br />
            
            </a></p></td>
        </tr>
        <tr>
          <td colspan="2" align="center" valign="middle" bgcolor="#FFFFFF"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','1.PNG',1)"><img src="image/logooo.png" alt="" width="100" height="50" /></a><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','1.PNG',1)"></a>            
          <div>Marketium’da sizlere sunulan tüm ürünler Türkiye’deki yetkili ithalatçı ve üretici firmaların garantisi altındadır, Uluslararası markaların sadece Türkiye için üretilen veya özelleştirilen ve yetkili servislerin ülke garantisi sağladığı modelleri sizlere sunulmaktadır.</div></td>
        </tr>
        <?php } ?>
        <tr>
          <td height="22" colspan="2" align="left" valign="middle">&nbsp;</td>
          <td height="22" colspan="3" align="left" valign="middle"><img src="kargo.png" alt="" width="41" height="33" /> <span id="a">Saat 15:00 a kadar olan siparişler aynı gün içerisinde kargoya verilir.</span></td>
          </tr>
        <tr>
          <td height="45" colspan="5" align="left" valign="middle" bgcolor="#FFCCFF"><H3>YORUMLAR</H3></td>
        </tr>
        <?php
  $urun_id = $_GET['urun_id'];
  $sorgu = mysqli_query($baglan1,"SELECT * FROM yorumlar where urun_id='$urun_id' and onay = 1");
  while($dr = mysqli_fetch_array($sorgu)){
  ?>
        <tr>
          <td width="299" height="22" align="left" bgcolor="#666666"><b><?php echo $dr['adisoyadi'];?></b></td>
          <td height="22" colspan="4" align="left" bgcolor="#666666"><?PHP echo $dr['tarih'];?></td>
          </tr>
        <tr>
          <td height="22" colspan="5" align="left" bgcolor="#99FFFF"><?php echo $dr['yorum']; ?></td>
        </tr>
        <?php }?>
      </table>
     
      <form id="form2" name="form2" method="post" action="action.php">
        <p>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ad Soyad:
<input type="text" name="ad" id="ad" />
        </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yorum :</p>
        <p style="margin-top: -30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <textarea name="yorum" id="yorum" cols="45" rows="5"></textarea>
          <br />
          <br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="yorum_btn" id="button" value="Yorum Ekle" />
          <input name="id" type="hidden"  value="<?php echo $urun_id;?>" />
        </p>
      </form>
      
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
  <?php include("include/footer.php"); ?>
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