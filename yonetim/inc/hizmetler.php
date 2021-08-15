<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<table   class="table">
	 <thead>
					<tr>
					  <th scope="col">Hizmet Resim </th>
					  <th scope="col">Hizmet Adı</th>
					  
					  <th scope="col">Hizmet Aciklama</th>
					 
					  <th scope="col">Düzenle</th>
					  <th scope="col">Sil</th>
					  
					</tr>
				  </thead>
				    <tbody>
<?php
	
	$KategoriBilgileri = SelectAll("tblHizmetler",$baglan);
	 
	 
	 foreach($KategoriBilgileri as $q)
	 {
		 
	?><tr>
		<th><img style="width:50px; height:50px;" src="../assets/img/hizmetler/<?php echo $q["hizmetResim"]; ?>"> </th>
		<th><?php echo $q["hizmetAdi"] ?> </th>
		<th><?php echo $q["hizmetAciklama"] ?> </th>
		
		<th><a href="inc/hizmetduzenle.php?hizmetid=<?php echo $q["hizmetId"] ?>">Düzenle</a> </th>
		<th><a href="admin.php?do=hizmetler&hizmetid=<?php echo $q["hizmetId"] ?>">Sil</a> </th>
	</tr>
	<?php
	 }
	 
	 
 ?>
 </tbody></table>
 <?php 
	if($_GET["hizmetid"])
	{
		$id=$_GET["hizmetid"];
		$a = SelectFetch("tblHizmetler","hizmetId",$id,$baglan);
		unlink("../assets/img/hizmetler/".$a["hizmetResim"]);
		del('tblHizmetler','hizmetId',$id,$baglan);
		echo "Başarıyla silindi";
		go("admin.php?do=hizmetler",1);
	}
 ?>