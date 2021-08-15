<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<table   class="table">
	 <thead>
					<tr>
					  <th scope="col">Takım Arkadaşı Resmi</th>
					  <th scope="col">Takım Arkadaşı Adı</th>
					  
					  <th scope="col">Takım Arkadaşı Görev</th>
					 
					  <th scope="col">Düzenle</th>
					  <th scope="col">Sil</th>
					  
					</tr>
				  </thead>
				    <tbody>
<?php
	
	$KategoriBilgileri = SelectAll("tblTakım",$baglan);
	 
	 
	 foreach($KategoriBilgileri as $q)
	 {
		 
	?><tr>
		<th><img style="width:50px; height:50px;" src="../assets/img/team/<?php echo $q["takimResim"]; ?>"> </th>
		<th><?php echo $q["takimAd"] ?> </th>
		<th><?php echo $q["takimGorev"] ?> </th>
		
		<th><a href="inc/takimduzenle.php?takimid=<?php echo $q["takimId"] ?>">Düzenle</a> </th>
		<th><a href="admin.php?do=takimlar&takimid=<?php echo $q["takimId"] ?>">Sil</a> </th>
	</tr>
	<?php
	 }
	 
	 
 ?>
 </tbody></table>
 <?php 
	if($_GET["takimid"])
	{
		$id=$_GET["takimid"];
		$a = SelectFetch("tblTakım","takimId",$id,$baglan);
		unlink("../assets/img/team/".$a["takimResim"]);
		del('tblTakım','takimId',$id,$baglan);
		echo "Başarıyla silindi";
		go("admin.php?do=takimlar",1);
	}
 ?>