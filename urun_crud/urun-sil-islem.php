<?php 

include 'baglanti.php';

if(isset($_GET['urunSil'])){
	$sil = $baglanti->prepare("DELETE FROM urun WHERE id=:id");

	$sil->execute(array(
		'id' => $_GET['id']
	));

		if($sil){
		header("Location:index.php?durum=true");
	}else{
		echo 'Bir sorunla karşılaştık!';
	}
}

?>