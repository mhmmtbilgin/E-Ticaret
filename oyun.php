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
  
<br /><br /><br />
 <?php
 $baglan1 = $_SESSION["baglan"];
$i = 0;
$sutun = 5;
$sql=mysqli_query($baglan1,"select * from urunler where urun_menu_kategori='oyun'");

?>
      <table width="500" height="110" border="1">
        <tr>
<?php
while($veri = mysqli_fetch_assoc($sql)){ 
    $i++;
		  

  ?>
          <td width="300" valign="top"><table width="150" height="100" border="1" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center"><a href="urun_detay.php?urun_id=<?=$veri['urun_id'];?>"><img src="urunicerik/foto/<?php echo $veri['urun_menu_kategori'].'/'.$veri['foto_yol']; ?>" height="70" width="70"/></a></td>
            </tr>
            <tr>
              <td align="center"><font color="#010101"><?=$veri['urun_adi'];?></font></td>
            </tr>
            <tr>
              <td align="center"><font color="#010101"><?=$veri['urun_fiyati'];?></font></td>
            </tr>
          </table></td>
<?php 
if ($i % $sutun == 0) 
        {
 ?>
</tr>
<tr>
<?php 
      } 
    }
?>
</tr>
      </table>
  </div>
</div>
</div>
<div id="cizgi"></div>
<?php include("include/footer.php"); ?>
</body>
</html>