<?php
if(isset($_COOKIE['guvenlik'])){}else{header('location: uye_giris.php');}
include('baglan.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profil Güncelleme </title>
<link href="css/stipl.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="image/logo.ico" type="image/x-icon" >
</head>
<?php include("include/ust.php"); ?>
<div id="cizgi"></div>
<body>
<form id="form1" name="form1" method="post" action="action.php">
  <table width="1000" height="613" border="1" align="center" cellpadding="0" cellspacing="0">
  <?php  
		  $baglan1 = $_SESSION["baglan"];
    $mail=$_GET['mail'];
	 $sorgu=mysqli_query($baglan1,"Select * from uyekayit where email=$mail");
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
      <td align="center" valign="top"  bgcolor="#e2e2e2">&nbsp;
        <table width="365" height="152" border="0" >
          <tr>
            <td colspan="2"><h1>ÜYE BİLGİLERİ</h1></td>
          </tr>
          <tr>
            <td width="70" height="24" align="left">Adı</td>
            <td width="285"><label for="textfield"></label>
              <input name="textfield" type="text" id="textfield" value="<?=$ad;?>" /></td>
          </tr>
          <tr>
            <td height="24" align="left">Soyadı</td>
            <td><input name="textfield2" type="text" id="textfield2" value="<?=$soyad;?>" /></td>
          </tr>
          <tr>
            <td height="24" align="left">E-mail</td>
            <td><input name="textfield3" type="text" id="textfield3" value="<?=$email;?>" /></td>
          </tr>
          <tr>
            <td height="24" align="left">Cep Telefonu</td>
            <td><input name="textfield4" type="text" id="textfield4" value="<?=$cep;?>" /></td>
          </tr>
          <tr>
            <td height="24" align="left">Doğum Tarihi</td>
            <td><input name="textfield5" type="text" id="textfield5" value="<?=$dogum;?>" /></td>
          </tr>
          <tr>
            <td height="24" align="left">Cinsiyet</td>
            <td><input name="textfield6" type="text" id="textfield6" value="<?=$cinsiyet;?>" /></td>
          </tr>
          <tr>
            <td height="69" align="left">Adres</td>
            <td><label for="textarea"></label>
              <textarea name="textarea" id="textarea" cols="40" rows="4"><?=$adres;?>
          </textarea></td>
          </tr>
          <tr>
            <td><input name="guncelle" type="hidden" id="guncelle" value="guncelle" /></td>
            <td><input type="submit" name="button" id="button" value="güncelle" />
              <input name="uyeid" type="hidden" id="uyeid" value="<?=$uye;?>" /></td>
          </tr>
      </table>
      <?php }?>
      </td>
    </tr>
    
  </table>
  <br />

  <div id="cizgi"></div>
<?php include("include/footer.php"); ?>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>