<?php 

try{
	$baglanti = new PDO("mysql:host=localhost; dbname=urunler", "elif", "123456");
	//echo 'Veritabanına bağlandın.';
}catch(Exception $e){
	echo $e->getMessage();
}

?>