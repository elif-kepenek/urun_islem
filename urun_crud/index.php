<?php 
  include 'baglanti.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Ürünler</title>
</head>
<body>
	<div class="container">

	<table class="table">
		<a href="urun-ekle.php"><button type="submit" class="btn btn-info">Ürün Ekle</button></a>
  <thead>
    <tr>
      <th scope="col">Sıra</th>
      <th scope="col">Ürün Adı</th>
      <th scope="col">Açıklama</th>
      <th scope="col">Fiyat</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>

<?php 

  $urunSorgulama = $baglanti->prepare("SELECT * FROM urun");
  $urunSorgulama->execute();
  while ($urunListe = $urunSorgulama->fetch(PDO::FETCH_ASSOC)) {  

?>

    <tr>
      <td><?php echo $urunListe['sira'] ?></td>
      <td><?php echo $urunListe['baslik'] ?></td>
      <td><?php echo $urunListe['aciklama'] ?></td>
      <td><?php echo $urunListe['fiyat'] ?></td>
      <td><a href="urun-duzenle.php?id=<?php echo $urunListe['id'] ?>"><button type="submit" class="btn btn-success">Düzenle</button></a></td>
      <td><a href="islem.php?urunsil"><button type="submit" class="btn btn-danger">Sil</button></a></td>
    </tr>


  <?php } ?>
  </tbody>
	</table>
	</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>