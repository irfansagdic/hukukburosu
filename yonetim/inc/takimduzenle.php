
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
					$takimid=$_GET["takimid"];
					$Bilgi = SelectFetch("tblTakım","takimId",$takimid,$baglan);



					?>

					<h3>Takım Arkaşınızı Düzenleyin</h3>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInputEmail1">Takım Arkadaşınızın Fotoğrafını Güncelleyin</label><br>
							<input type="file" name="file"><br>
							<span style="color:red; font-size:11px;">Fotoğraf Kısmını Boş Bırakırsanız Fotoğraf Değişmez</span>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Takım Arkadaşınızın Adını Güncelleyin</label>
							<input type="text" class="form-control" value="<?php echo $Bilgi["takimAd"] ?>" name="takimAd">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Takım Arkadaşınızın Görevini Güncelleyin</label>
							<input type="text" class="form-control" value="<?php echo $Bilgi["takimGorev"] ?>" name="takimGorev">
						</div>
						<button type="submit" name="KatGuncelle" class="btn btn-primary">Güncelle</button>
						<button  class="btn btn-success"><a style="color:white;" href="https://coskunerhukuk.net/yonetim/admin.php?do=takimlar">Admin Panele Dönmek İçin Tıklayın</a></button>
					</form>
					<?php 



					if(isset($_POST["KatGuncelle"]))
					{
						$file=$_FILES["file"]["name"];

						if(empty($file))
						{

							$takimAd=p("takimAd");
							$takimGorev=p("takimGorev");
							$guncelle=$baglan->query("UPDATE tblTakım SET takimAd='$takimAd',takimGorev='$takimGorev' WHERE takimId=$takimid ");
							echo "Başarıyla Güncellendi";
							header("Refresh:1;url=takimduzenle.php?takimid=".$takimid);

						}
						else{

							$takimAd=p("takimAd");
							$takimGorev=p("takimGorev");
							unlink("../../assets/img/team/".$Bilgi["takimResim"]);
							$a=image_upload("file","../../assets/img/team");

							$guncelle=$baglan->query("UPDATE tblTakım SET takimAd='$takimAd',takimGorev='$takimGorev',takimResim='$a' WHERE takimId=$takimid ");
							echo "Başarıyla Güncellendi";
							header("Refresh:1;url=takimduzenle.php?takimid=".$takimid);

						}









					}
				}
				?>

			</div>
		</div>
	</div>
</body>
</html>





