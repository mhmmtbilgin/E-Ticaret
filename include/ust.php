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
          <input type="submit" name="ara" id="ara" value="ARA" />
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
          <td width="138"><a href="iletisim.php" class="kopru1">İletişim </a>|<a href="uye_kayit.php" class="kopru1"> Üye Ol</a></td>
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
      <td width="260" align="left"><span><a href="sepet.php" ?>SEPETİM(0 ÜRÜN)</a> |  <span style="display:<?php if(!isset($_COOKIE['guvenlik'])) echo 'none;' ?>">Hoşgeldin<a href="profil_guncelle.php?mail='<?php echo $email;  ?>'" class="kopru1"> <?php echo $ad; ?></a></span><a href="uye_giris.php" class="kopru1" style="display:<?php if(isset($_COOKIE['guvenlik'])) echo 'none;' ?>"> Giriş Yap</a></td>
    </tr>
  </table>
</div>