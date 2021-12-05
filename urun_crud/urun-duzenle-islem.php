<?php 
include 'baglanti.php';

if(isset($_POST['urunDuzenle'])){
	$duzenle = $baglanti->prepare("UPDATE urun SET
		baslik=:baslik,
		aciklama=:aciklama,
		sira=:sira,
		fiyat=:fiyat
		WHERE id={$_POST['id']}
		");

	$update = $duzenle->execute(array(
		'baslik'=>$_POST['ad'],
		'aciklama'=>$_POST['aciklama'],
		'sira'=>$_POST['sira'],
		'fiyat'=>$_POST['fiyat']
	));

	if($update){
		echo 'Başarılı bir şekilde veritabanında düzenlendi.';
	}else{
		echo 'Bir sorunla karşılaştık!';
	}

}


?>