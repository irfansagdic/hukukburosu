<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<table   class="table">
	<thead>
		<tr>
			<th scope="col">Ad Soyad </th>
			<th scope="col">Email</th>
			<th scope="col">Telefon No</th>
			
			
			<th scope="col">Mesaj</th>
			
			<th scope="col">Sil</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
		
		$KategoriBilgileri = SelectAll("tbliletisim",$baglan);
		
		
		foreach($KategoriBilgileri as $q)
		{
			
			?><tr>
				
				<th><?php echo $q["AdSoyad"] ?> </th>
				<th><?php echo $q["TelNo"] ?> </th>
				<th><?php echo $q["Email"] ?> </th>
				<th><?php echo $q["Mesaj"] ?> </th>
				
				<th><a href="admin.php?do=gelenmesajlar&id=<?php echo $q["iletisimId"] ?>">Sil</a> </th>
			</tr>
			<?php
		}
		
		
		?>
	</tbody></table>
	<?php 
	if($_GET["id"])
	{
		$id=$_GET["id"];
		del('tbliletisim','iletisimId',$id,$baglan);
		echo "Başarıyla silindi";
		go("admin.php?do=gelenmesajlar",1);
	}
	?>