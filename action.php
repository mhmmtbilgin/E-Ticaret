<?php
if(isset($_COOKIE['guvenlik'])){}else{header('location: uye_giris.php');}
include('baglan.php');

$baglan1 = $_SESSION["baglan"];

$gelen=$_POST['action'];
if($gelen=='entrance'){
	$user=$_POST['ad'];
	$pass=$_POST['sifre'];
	$sorgu=mysqli_query($baglan1,"select * from uyekayit where email='$user' and sifre='$pass'");
	if(mysqli_num_rows($sorgu)){
		setcookie('guvenlik',$user);
		header("location: index.php");
		}else{
			header('location: uye_giris.php');
			}
		
					}
$gelen=$_POST['yonetici'];
if($gelen=='giris'){
	$user=$_POST['ad'];
	$pass=$_POST['sifre'];
	$sorgu=mysqli_query($baglan1,"select * from yoneticikayit where email='$user' and sifre='$pass'");
	if(mysqli_num_rows($sorgu)){
		setcookie('guvenlik',$user);
		header('location: include/admin.php');
		}else{
			header('location: yonetici_giris.php');
			}
					}
				
$gelen=$_POST['guncelle'];
if($gelen=='guncelle'){
$uyeid=$_POST['uyeid'];
$ad=$_POST['textfield'];
$soyad=$_POST['textfield2'];
$email=$_POST['textfield3'];
$cep=$_POST['textfield4'];
$dogum=$_POST['textfield5'];
$cinsiyet=$_POST['textfield6'];
$adres=$_POST['textarea'];
mysqli_query($baglan1,"UPDATE uyekayit SET ad='$ad',soyad='$soyad',email='$email',cep='$cep',dogum='$dogum',cinsiyet='$cinsiyet',adres='$adres' where uyeid=$uyeid ");
header ("location: profil_guncelle.php?mail='$email'");
}
		else if(isset($_POST['yorum_btn'])){
			$idddd=$_POST['id'];
			$yorum=$_POST['yorum'];
			$ad=$_POST['ad'];
			mysqli_query($baglan1,"insert into yorumlar values('','$idddd','$ad','$yorum','','')");
			header('location: urun_detay.php?urun_id='.$idddd.'');
			}
			//YORUM ONAY
				else if (isset ($_POST['yorum_onay_btn'])){
					$yorum_id=$_POST['idd'];
					$yorum_onay=$_POST['onay'];
					mysqli_query($baglan1,"update yorumlar set onay=$yorum_onay where id=$yorum_id");
					header("location: include/yorum_onay.php");
					}
					else if (isset ($_POST['sepet_ekle_btn'])){
						$urun_id=$_POST['idd'];
	                    $ad=$_POST['add'];
						$fiyat=$_POST['fiyatt'];
						$kisi_mail = $_COOKIE['guvenlik'];
						$sorgu=mysqli_query($baglan1,"select * from uyekayit where email='$kisi_mail'") or die(mysql_error());
						$id = 0;
   while($oku=mysqli_fetch_array($sorgu)){
	   $id = $oku['uyeid'];
   }
mysqli_query($baglan1,"insert into sepetim value('',$id,'$urun_id','$ad','$fiyat','0')");
header('location:index.php');
                     }
else if (isset ($_POST['sepet_onay_btn'])){
					$urun_id=$_POST['idd'];
					$urun_onay=$_POST['onay'];
					$onay = 0;
					if(trim($urun_onay) == 'Onaylandi') $onay = 1;
					mysqli_query($baglan1,"update sepetim set onay=$onay where urun_idd=$urun_id");
					header("location: sepetim.php");
					}				 
					
?>