<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<title>Ürün Ekleme</title>
</head>
<body>

<div class="container">
	<form action="urun-ekle-islem.php" method="post">

		<div class="form-group">
			<label for="sira">Ürün Sırası:</label>
			<input type="text" name="sira" class="form-control" id="aciklama" placeholder="Ürün Sırası">	
		</div>
		<br>

		<div class="form-group">
			<label for="ad">Ürün Adı:</label>
			<input type="text" name="ad" class="form-control" id="baslik" placeholder="Ürün Adı">	
		</div>
		<br>
		
		<div class="form-group">
			<label for="aciklama">Ürün Açıklaması:</label>
			<input type="text" name="aciklama" class="form-control" id="aciklama" placeholder="Ürün Açıklaması">	
		</div>
		<br>
		
		<div class="form-group">
			<label for="fiyat">Ürün Fiyatı:</label>
			<input type="text" name="fiyat" class="form-control" id="fiyat" placeholder="Ürün Fiyatı">	
		</div>
		<br>
		
		<button name="urunKaydet" type="submit" class="btn btn-primary">Kaydet</button>

	</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>