<h2>Referans Ekle</h2>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<form action="" method="post" enctype="multipart/form-data">
 
   <div class="form-group">
    <label for="exampleInputEmail1">Referans</label>
    <input type="text" class="form-control" name="referans" required>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Referans Tarih</label>
 <input type="text" class="form-control" name="tarih" required>
  </div>
  


  <button type="submit" name="anakategori" class="btn btn-primary">Referansı Ekle</button>
</form>
<?php 
	if(isset($_POST["anakategori"]))
	{
		
		$referans=p("referans");
		$tarih=p("tarih");
		
		$sutunlar=array("referansAdi","referansTarih");
		$degerler=array($referans,$tarih);
		$b=Insertdata("tblReferanslar",$sutunlar,$degerler,$baglan);
		if($b)
		{
			echo "Referans Eklendi";
			go("admin.php?do=referansekle",1);
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