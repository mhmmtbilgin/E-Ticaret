<?php include('../baglan.php');?>
<title>MARKETIUM - YÖNETİCİ</title>
<link rel="shortcut icon" href="../image/logo.ico" type="image/x-icon" >
<link href="css/style.css" rel="stylesheet" type="text/css" />
<table width="900" height="298" border="1" align="center">
<tr>
  <td height="30" colspan="2" align="center" bgcolor="#000000" style="color: #F00; font-weight: bold;">YÖNETİCİ PANELİ YORUM ONAY</td></tr>
  <tr>
    <td width="108" height="23" align="center" bgcolor="#e2e2e2" id="a"><a >YORUMLAR</a></td>
    <td width="1076" colspan="3" rowspan="3" align="center" valign="top">
    <p>&nbsp;</p>
    
        <?php 
		
		$baglan1 = $_SESSION["baglan"];
   $sorgu=mysqli_query($baglan1,"select * from yorumlar where onay=0");
   while($oku=mysqli_fetch_array($sorgu)){
   ?>
   <form id="form1" name="form1" method="post" action="../action.php">
      <table width="549" height="150" border="1" cellpadding="0" cellspacing="0">
        <tr>
          <td width="223">Yorum İçeriği</td>
          <td width="210">Yorum onayı</td>
          <td width="108">&nbsp;</td>
        </tr>
        <tr>
          <td><?php echo $oku['yorum']; ?></td>
          <td><p>
            <label for="onay"></label>
            <select name="onay" id="onay">
              <option>0</option>
              <option>1</option>
            </select>
          </p>
            <p>YORUMU ONAYI İÇİN 1 İ SEÇİN</p></td>
          <td><input type="submit" name="yorum_onay_btn" id="yorum_onay_btn" value="ONAYLA" />
            <input name="idd" type="hidden" id="idd" value="<?php echo $oku['id'];?>" /></td>
        </tr>
      </table>
  </form>
      <?php } ?>
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>    
    </tr>
 
  <tr>
    <td height="23" align="center" bgcolor="#e2e2e2" class="b"><a href="admin.php">ADMİN ANASAYFA<img src="../image/logoo.png" width="157" height="140"/></a></td>
  </tr>
</table>
<br>
