<?php
if(isset($_COOKIE['guvenlik'])){}else{header('location: uye_giris.php');}
include('baglan.php');?>
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
<form id="form1" name="form1" method="post" action="action.php">
  <table width="1000" height="613" border="1" align="center" cellpadding="0" cellspacing="0">
    
     

          <?php  
		  $baglan1 = $_SESSION["baglan"];
    $mail=$_COOKIE['guvenlik'];
	 $sorgu=mysqli_query($baglan1,"Select * from uyekayit where email='$mail'");
	while ($vt=mysqli_fetch_array($sorgu)){
		$ad=$vt['ad'];
		$soyad=$vt['soyad'];
		$email=$vt['email'];
		$dogum=$vt['dogum'];
		$cinsiyet=$vt['cinsiyet'];
		$adres=$vt['adres'];
		$sifre=$vt['sifre'];
		$cep=$vt['cep'];
		$uye=$vt['uyeid'];
	 ?>
 
    <tr>
    <td align="center" valign="top"  bgcolor="#e2e2e2"><table width="100" height="152" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><a href="profil_guncelle.php?mail='<?php echo $email;  ?>'" >Üye Bilgilerim</a></td>
        </tr>
        <tr>
          <td><a href="sepet.php">Sepetim</a></td>
        </tr>
        <tr>
          <td><a href="cikis.php">Çıkış</a></td>
        </tr>
      </table></td>
      <td align="center" bgcolor="#e2e2e2">
   
      <table width="365" height="152" border="1" cellpadding="0" cellspacing="0">
        <tr>
          <td width="223">Ürün Adı</td>
          <td width="100">Ürün Fiyatı</td>
          <td width="108">Ürün Onay</td>
        </tr>
        <?php
		$sorgu=mysqli_query($baglan1,"select * from uyekayit where email='$email'") or die(mysql_error());
	$id = 0;
	   while($oku=mysqli_fetch_array($sorgu)){
		   $id = $oku['uyeid'];
	   }
        $sorgu=mysqli_query($baglan1,"select * from sepetim where kisi_id=$id") or die(mysql_error());
   while($oku=mysqli_fetch_array($sorgu)){
   ?>
        <form id="form1" name="form1" method="post" action="action.php">
        <tr>
          <td><?php echo $oku['urun_ad']; ?></td>
          <td><p>
            <label for="onay"><?php echo $oku['urun_fiyat']; ?></label>
          </p></td>
          <td><p>
              <span><?php if($oku['onay'] == '1') echo 'Onaylandi';else echo 'Onaylanmadi'?></span>
          </p>          
        </tr>
  </form>
  <?php }?>
      </table>

      <?php }?>
      </td>
    </tr>
    
  </table>
  <br />
  <div id="cizgi"></div>
<?php include("include/footer.php"); ?>
</form>
</body>
</html>