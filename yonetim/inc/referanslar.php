<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<table   class="table">
	 <thead>
					<tr>
					  
					  <th scope="col">Referans Adı</th>
					  
					  <th scope="col">Referans Tarihi</th>
					 
					  <th scope="col">Düzenle</th>
					  <th scope="col">Sil</th>
					  
					</tr>
				  </thead>
				    <tbody>
<?php
	
	$KategoriBilgileri = SelectAll("tblReferanslar",$baglan);
	 
	 
	 foreach($KategoriBilgileri as $q)
	 {
		 
	?><tr>
		
		<th><?php echo $q["referansAdi"] ?> </th>
		<th><?php echo $q["referansTarih"] ?> </th>
		
		<th><a href="inc/referansduzenle.php?referansid=<?php echo $q["referansId"] ?>">Düzenle</a> </th>
		<th><a href="admin.php?do=referanslar&referansid=<?php echo $q["referansId"] ?>">Sil</a> </th>
	</tr>
	<?php
	 }
	 
	 
 ?>
 </tbody></table>
 <?php 
	if($_GET["referansid"])
	{
		$id=$_GET["referansid"];
		del('tblReferanslar','referansId',$id,$baglan);
		echo "Başarıyla silindi";
		go("admin.php?do=referanslar",1);
	}
 ?>