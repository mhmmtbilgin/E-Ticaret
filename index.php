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
  <div id="icerik"> <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:790px;margin:0px auto 56px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
        <?php 
			$sorgu=mysqli_query($baglan1,"Select * from slider ORDER BY id DESC LIMIT 4")or die(mysql_error());
			while ($oku=mysqli_fetch_array($sorgu)){?>
            <ul class="amazingslider-slides" style="display:none;">
                <li><a href="<?=$oku['foto_link'];?>"><img src="images/<?=$oku['foto_adres'];?>" alt="<?=$oku['foto_baslik'];?>" /></a></li>
            </ul>
            <?php }?>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="images/1-tn.jpg" alt="1" /></li>
                <li><img src="images/2-tn.jpg" alt="2" /></li>
                <li><img src="images/3-tn.jpg" alt="3" /></li>
                <li><img src="images/4-tn.jpg" alt="4" /></li>
              
            </ul>
        </div>
    </div></div>
</div>
<div id="footer1">
  <div id="gunurun">
    <div id="baslikgun">GÜNÜN ÜRÜNLERİ</div>
    <div id="gunicerik"><table id="tb" width="300" height="512" border="1">
  <tr><?php 
  $sorguu=mysqli_query($baglan1,"select * from urunler order by rand() LIMIT 1");
  while($db=mysqli_fetch_array($sorguu)){
  ?>
    <td width="150" rowspan="2" valign="top"><a href="urun_detay.php?urun_id=<?=$db['urun_id'];?>"><img src="urunicerik/foto/<?php echo $db['urun_menu_kategori'].'/'.$db['foto_yol']; ?>" height="150" width="150"/></a></td>
    <td width="134" height="101" valign="top"><div class="kopru2"><?=$db['urun_adi'];?></div></td>
  </tr>
  <tr>
    <td height="37" align="center"><div class="kopru3"><?=$db['urun_fiyati'];?></div></td>
  </tr><?php }?>
  <tr><?php 
  $sorguu=mysqli_query($baglan1,"select * from urunler order by rand() LIMIT 1");
  while($db=mysqli_fetch_array($sorguu)){
  ?>
    <td rowspan="2"><a href="urun_detay.php?urun_id=<?=$db['urun_id'];?>"><img src="urunicerik/foto/<?php echo $db['urun_menu_kategori'].'/'.$db['foto_yol']; ?>" height="150" width="150"/></a></td>
    <td height="104" valign="top"><div class="kopru2"><?=$db['urun_adi'];?></div></td>
  </tr>
  <tr>
    <td height="41" align="center"><div class="kopru3"><?=$db['urun_fiyati'];?></div></td>
  </tr><?php }?>
  <tr><?php 
  $sorguu=mysqli_query($baglan1,"select * from urunler order by rand() LIMIT 1");
  while($db=mysqli_fetch_array($sorguu)){
  ?>
    <td rowspan="2"><a href="urun_detay.php?urun_id=<?=$db['urun_id'];?>"><img src="urunicerik/foto/<?php echo $db['urun_menu_kategori'].'/'.$db['foto_yol']; ?>" height="150" width="150"/></a></td>
    <td height="108" valign="top"><div class="kopru2"><?=$db['urun_adi'];?></div></td>
  </tr>
  <tr>
    <td height="30" align="center"><div class="kopru3"><?=$db['urun_fiyati'];?></div></td><?php }?>
  </tr>
    </table>
</div>
  </div>
  <div id="onecikan">
    <div id="baslikonecikan">ÖNE ÇIKAN ÜRÜNLER</div>
    <div id="onecikanicerikk">
    <?php
$i = 0;
$sutun = 3;
$sql=mysqli_query($baglan1,"select * from urunler order by one_cikan_urun DESC LIMIT 6");

?>
      <table width="701" height="135" >
        <tr>
<?php
while($veri = mysqli_fetch_assoc($sql)){ 
    $i++;
		  

  ?>
          <td width="407" valign="top"><table id="tb" width="225" height="151" cellpadding="0" cellspacing="0" border="1">
            <tr>
              <td align="center"><a href="urun_detay.php?urun_id=<?=$veri['urun_id'];?>"><img src="urunicerik/foto/<?php echo $veri['urun_menu_kategori'].'/'.$veri['foto_yol']; ?>" height="105" width="105"/></a></td>
            </tr>
            <tr>
            <td height="108" valign="top"><div class="kopru2"><?=$veri['urun_adi'];?></div></td>
            </tr>
            <tr>
              <td height="30" align="center"><div class="kopru3"><?=$veri['urun_fiyati'];?></div></td>
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
    <div id="önecikanicerik"></div>
  </div>

</div>
</div>
<p>&nbsp;</p>
<div id="cizgi"></div>
<?php include("include/footer.php"); ?>
</body>
</html>