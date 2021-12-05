<?php 
include 'baglanti.php';

if(isset($_POST['urunKaydet'])){

	$kaydet = $baglanti->prepare('INSERT INTO urun SET 
		baslik=:baslik,
		aciklama=:aciklama,
		sira=:sira,
		fiyat=:fiyat
		');
	$insert = $kaydet->execute(array(
		'baslik'=>$_POST['ad'],
		'aciklama'=>$_POST['aciklama'],
		'sira'=>$_POST['sira'],
		'fiyat'=>$_POST['fiyat']
	));

	if($insert){
		echo 'Başarılı bir şekilde veritabanına yüklendi.';
	}else{
		echo 'Bir sorunla karşılaştık!';
	}
}





?>