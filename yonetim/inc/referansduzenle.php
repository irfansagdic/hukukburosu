
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
					$referansid=$_GET["referansid"];
					$Bilgi = SelectFetch("tblReferanslar","referansId",$referansid,$baglan);



					?>

					<h3>Referansları Düzenleyin</h3>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInputEmail1">Referans Adını Güncelleyin</label>
							<input type="text" class="form-control" value="<?php echo $Bilgi["referansAdi"] ?>" name="adi">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Referans Tarihini Güncelleyin</label>
							<input type="text" class="form-control" value="<?php echo $Bilgi["referansTarih"] ?>" name="tarih">
						</div>
						<button type="submit" name="KatGuncelle" class="btn btn-primary">Güncelle</button>
						<button  class="btn btn-success"><a style="color:white;" href="https://coskunerhukuk.net/yonetim/admin.php?do=referanslar">Admin Panele Dönmek İçin Tıklayın</a></button>
					</form>
					<?php 



					if(isset($_POST["KatGuncelle"]))
					{



						$adi=p("adi");
						$tarih=p("tarih");
						$guncelle=$baglan->query("UPDATE tblReferanslar SET referansAdi='$adi',referansTarih='$tarih' WHERE referansId=$referansid ");
						if($guncelle)
						{
							echo "Başarıyla Güncellendi";
							header("Refresh:1;url=referansduzenle.php?referansid=".$referansid);
						}
						else{
							echo "Hata";
						}


					}










				}

				?>

			</div>
		</div>
	</div>
</body>
</html>




