<h2>Slogan ve Banner Ekleme/Düzenleme</h2>
<?php 
	$bilgi=SelectFetch("tblAnasayfa","id",1,$baglan);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<form action="" method="post" enctype="multipart/form-data">
   <div class="form-group">
	 <label for="exampleInputEmail1"><b>Banner Değiştirme</b></label><br>
	 <span class="font-weight-bold" style="color:red">Resmi Boş Bırakırsanız Fotoğraf Değişmez.Lütfen tercihen 1920x1080 çözünürlüğünde resim ekleyin.</span>
	 <br><br>
     <input type="file" name="dosya[]" multiple>
	</div>
   <div class="form-group">
    <label for="exampleInputEmail1">Slogan</label>
    <input type="text" class="form-control" value="<?php echo $bilgi["bannerSlogan"] ?>" name="slogan">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Yazı</label>
    <input type="text" class="form-control" value="<?php echo $bilgi["bannerYazi"] ?>" name="yazi">
  </div>


  <button type="submit" name="faaliyet" class="btn btn-primary">Ekle</button>
</form>

<h4>Slider'a Eklediğiniz Resimler</h4>
<?php 
	include("../classes/class.php");
	$slider=$baglan->query("SELECT * FROM anasayfaSlider ORDER BY sliderId DESC",PDO::FETCH_ASSOC);
	foreach($slider as $q)
	{
?>
	<img style="width:150px; height:150px;" src="../assets/img/banner/<?php echo $q["sliderResim"] ?>">
	<a class="badge badge-danger" href="admin.php?do=slogan&resimid=<?php echo $q["sliderId"] ?>">Sil</a>
<?php
	}
?>


<?php 
	if($_GET["resimid"])
	{
		
		$resimid=$_GET["resimid"];
		$a = SelectFetch("anasayfaSlider","sliderId",$resimid,$baglan);
		del("anasayfaSlider","sliderId",$resimid,$baglan);
		
		unlink("../assets/img/banner/".$a["sliderResim"]);
	go("admin.php?do=slogan");
		echo "Başarıyla Silindi";
		
	}
	if(isset($_POST["faaliyet"]))
	{
		$gir=0;
		
		if($_FILES["dosya"]["name"][0]=="")
		{
			$gir=1;
		}
		
		if($gir==1)
		{
			$slogan=p("slogan");
			$yazi=p("yazi");
			$update=$baglan->query("UPDATE tblAnasayfa SET bannerSlogan='$slogan',bannerYazi='$yazi' WHERE id=1");
			if($update)
			{
				echo "Başarıyla Güncellendi";
				go("admin.php?do=slogan",1);
			}
			else{
				echo "hata";
				go("admin.php?do=slogan",1);
			}
		}
		else{
			$dosyasayisi=count($_FILES["dosya"]["name"]);
			$slogan=p("slogan");
				$yazi=p("yazi");
			$update=$baglan->query("UPDATE tblAnasayfa SET bannerSlogan='$slogan',bannerYazi='$yazi' WHERE id=1");
			for($i=0;$i<$dosyasayisi;$i++)
			{
				$dosyaisim=$_FILES["dosya"]["name"][$i];
				$duzgunisim=rand(1,100000000)."_".isimDuzelt($dosyaisim);
				
				$dosyatur=pathinfo($_FILES["dosya"]["name"][$i],PATHINFO_EXTENSION);
				$dosya_konum=$_FILES["dosya"]["tmp_name"][$i];
				move_uploaded_file($dosya_konum,"../assets/img/banner/".$duzgunisim);
				$sutunlar2=array("sliderResim","anasayfaid");
				$degerler2=array($duzgunisim,1);
				$b=Insertdata("anasayfaSlider",$sutunlar2,$degerler2,$baglan);
			}
			
			
			
			if($update)
			{
				echo "Başarıyla Güncellendi";
				go("admin.php?do=slogan",1);
			}
			else{
				echo "hata";
				go("admin.php?do=slogan",1);
			}
			
		}
		
		
	

	}
?>
