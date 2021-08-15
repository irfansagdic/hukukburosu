<h2>Takım Arkadaşı Ekle</h2>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
	 <label for="exampleInputEmail1">Takım Arkadaşınızın Fotoğrafını Ekleyin</label><br>
	 <input type="file" name="file"><br>
	</div>
   <div class="form-group">
    <label for="exampleInputEmail1">Takım Arkadaşınızın Adı</label>
    <input type="text" class="form-control" name="takimadi">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Takım Arkadaşınızın Görevi</label>
  <input type="text" class="form-control" name="takimgorev">
  </div>
  


  <button type="submit" name="anakategori" class="btn btn-primary">Ekle</button>
</form>
<?php 
	if(isset($_POST["anakategori"]))
	{
		
		$takimadi=p("takimadi");
		$takimgorev=p("takimgorev");
	
		$a=image_upload("file","../assets/img/team");
			
		 
		 
		 
		$sutunlar=array("takimResim","takimAd","takimGorev");
		$degerler=array($a,$takimadi,$takimgorev);
		$b=Insertdata("tblTakım",$sutunlar,$degerler,$baglan);
		if($b)
		{
			echo "Hizmet Eklendi";
			go("admin.php?do=takimekle",1);
		}
		else{
			echo "Hata";
		}
		
		
	
		
		
		
		
		/*$kategori=p("anakat");
		$sorgu1 = $baglan->prepare("SELECT COUNT(*) FROM tblkategoriler WHERE Kategori='$kategori' ");
		$sorgu1->execute();
		$uzunluk1 = $sorgu1->fetchColumn();
		
		if($uzunluk1==0)
		{
		
		$sutunlar=array("Kategori");
		$degerler=array($kategori);
		Insertdata("tblkategoriler",$sutunlar,$degerler,$baglan);
		echo "Ana Kategori eklendi";
		go("admin.php?do=KategoriEkle");
		}
		else{
			echo "Böyle Bir Kategori Eklenmiş";
		}*/
	}
?>