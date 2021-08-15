<?php 
	$Bilgiler=SelectFetch("tblFooter","footerId",1,$baglan);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<form   action="" method="post">
	
		Adres : <textarea class="form-control" name="adres" rows="5" value="" required col="20"><?php echo $Bilgiler["adres"] ?></textarea><br>
		Telefon : <input type="text" class="form-control" required value="<?php echo $Bilgiler["footerTel"] ?>" name="tel" ><br>
		Telefon : <input type="text" class="form-control" required value="<?php echo $Bilgiler["mail"] ?>" name="mail" ><br>
		Twitter : <input type="text" class="form-control" value="<?php echo $Bilgiler["footerTwitter"] ?>" required name="twitter" ><br>
		Facebook : <input type="text" class="form-control" value="<?php echo $Bilgiler["footerFacebook"] ?>" required name="facebook" ><br>
		Instagram : <input type="text" class="form-control" value="<?php echo $Bilgiler["footerInsta"] ?>" required name="instagram" ><br><br><br>
		
		<button class="btn btn-primary btn-lg" name="footerduzenle" type="submit">Düzenle </button>
		
	
	</form>
	<?php 
		if(isset($_POST["footerduzenle"]))
		{
			$adres=p("adres");
			$tel=p("tel");
			$mail=p("mail");
		
		
		
			$twitter=$_POST["twitter"];
			$facebook=$_POST["facebook"];
			$instagram=$_POST["instagram"];
			
			
			$query=$baglan->query("UPDATE tblFooter SET
						adres='$adres',
						mail='$mail',
						footerTel='$tel',
						footerTwitter='$twitter',
						footerFacebook='$facebook',
						footerInsta='$instagram'
						WHERE footerId=1
			");
			
			
			if($query)
			{
				echo "Güncellendi";
				header("Refresh:1");
			}
		}
	?>

