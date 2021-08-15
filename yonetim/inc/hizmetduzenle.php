
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Coşkuner Hukuk - Yönetim Paneli</title>
</head>
<body class="bg-light">
	<div class="container">
		<div class="row mt-5">
			<div class="col bg-white p-3">
				<?php
				include("../../sistem/ayar.php");
				include("../../sistem/fonksiyon_bi.php");
				if($_SESSION["admin"]!="ok")
				{
					go("../../index.php",1);
				}
				else{
					$hizmetid=$_GET["hizmetid"];
					$Bilgi = SelectFetch("tblHizmetler","hizmetId",$hizmetid,$baglan);



					?>
					
					<h3>Hizmetleri Düzenleyin</h3>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInputEmail1">Hizmet Fotoğrafı Güncelleyin</label><br>
							<input type="file" name="file"><br>
							<span style="color:red; font-size:11px;">Fotoğraf Kısmını Boş Bırakırsanız Fotoğraf Değişmez</span>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Hizmet Adını Güncelleyin</label>
							<input type="text" class="form-control" value="<?php echo $Bilgi["hizmetAdi"] ?>" name="hizmetadi">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Hizmet Açıklamasını Güncelleyin</label>
						<!--	<input type="text" class="form-control" value="<?php echo $Bilgi["hizmetAciklama"] ?>" name="hizmetaciklama">-->
							<textarea cols="3" rows="5" class="form-control" name="hizmetaciklama"><?php echo $Bilgi["hizmetAciklama"] ?></textarea>
						</div>
						<button type="submit" name="KatGuncelle" class="btn btn-primary">Güncelle</button>
						<button  class="btn btn-success"><a style="color:white;" href="https://coskunerhukuk.net/yonetim/admin.php?do=hizmetler">Admin Panele Dönmek İçin Tıklayın</a></button>
					</form>
					<?php 



					if(isset($_POST["KatGuncelle"]))
					{
						$file=$_FILES["file"]["name"];

						if(empty($file))
						{

							$hizmetadi=p("hizmetadi");
							$hizmetaciklama=p("hizmetaciklama");
							$guncelle=$baglan->query("UPDATE tblHizmetler SET hizmetAdi='$hizmetadi',hizmetAciklama='$hizmetaciklama' WHERE hizmetId=$hizmetid ");
							echo "Başarıyla Güncellendi";
							header("Refresh:1;url=hizmetduzenle.php?hizmetid=".$hizmetid);

						}
						else{

							$hizmetadi=p("hizmetadi");
							$hizmetaciklama=p("hizmetaciklama");
							unlink("../../assets/img/hizmetler/".$Bilgi["hizmetResim"]);
							$a=image_upload("file","../../assets/img/hizmetler");


							$guncelle=$baglan->query("UPDATE tblHizmetler SET hizmetAdi='$hizmetadi',hizmetAciklama='$hizmetaciklama',hizmetResim='$a' WHERE hizmetId=$hizmetid ");
							echo "Başarıyla Güncellendi";
							header("Refresh:1;url=hizmetduzenle.php?hizmetid=".$hizmetid);

						}









					}
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>
