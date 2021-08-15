<?php 

	include("sistem/ayar.php");
	include("sistem/fonksiyon_bi.php");
	
	if(isset($_POST["action"]))
	{
		$action=$_POST["action"];
		
		if($action=="takimButon")
		{
			$sayfaNo=p("takimSayfano");
		
			$limit=3;
			$cek=($limit*$sayfaNo)-$limit;
			$sorgu="SELECT * FROM tblTakım ORDER BY takimId DESC LIMIT $cek,$limit";
			$ozkan=$baglan->query($sorgu,PDO::FETCH_ASSOC);
			foreach($ozkan as $q)
			{
				echo '<div class="col-lg-4">
						<div class="team-member">
							<img class="mx-auto rounded-circle" src="assets/img/team/'.$q["takimResim"].'" alt="" />
							<h4>'.$q["takimAd"].' </h4>
							<p class="text-muted">'.$q["takimGorev"].'</p>
						
						</div>
					</div>';
			}
		}
		if($action=="hizmetButon")
		{
			$sayfaNo=p("hizmetSayfano");
		
			$limit=3;
			$cek=($limit*$sayfaNo)-$limit;
			$sorgu="SELECT * FROM tblHizmetler ORDER BY hizmetId DESC LIMIT $cek,$limit";
			$ozkan=$baglan->query($sorgu,PDO::FETCH_ASSOC);
			foreach($ozkan as $q)
			{
				echo '<div class="col-md-4">
						<img  src="assets/img/hizmetler/'.$q["hizmetResim"].'" style="border-radius: 100%;width: 150px;height:150px;	" alt="">
						<h4 class="my-3">'.$q["hizmetAdi"].'</h4>
						<p class="text-muted">'.$q["hizmetAciklama"].'</p>
					</div>';
			}
		//	
		}
		if($action=="referansButon")
		{
			$sayfaNo=p("referansSayfano");
			$limit=10;
			
			$butonSayisi=ceil($butonSayisi/$limit);
			
	
			$cek=($limit*$sayfaNo)-$limit;
			$sorgu="SELECT * FROM tblReferanslar ORDER BY referansId DESC LIMIT $cek,$limit";
			$ozkan=$baglan->query($sorgu,PDO::FETCH_ASSOC);
			
			foreach($ozkan as $q)
			{
				echo '<li class="list-group-item" style="border:none;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
								<div class="row">
									<div class="col">
										'.$q["referansAdi"].' 
									</div>
									<div class="col">
										<div class="float-right">
											<span class="badge text-secondary">'.$q["referansTarih"].'</span>
										</div>
									</div>
								</div>
							</li>';
			}
			/*if($sayfaNo==1)
			{
				
				$sayfalar='<button class="btn btn-primary" onclick="referansButon("1")">1</button>
										<button class="btn btn-primary" onclick="referansButon("2")">2</button>
										<button class="btn btn-primary">...</button>
										
										<button class="btn btn-primary" onclick="referansButon("'.($butonSayisi-1).'")">'.($referansSayisi-1).'</button>										
										<button class="btn btn-primary" onclick="referansButon("'.$butonSayisi.')">'.$referansSayisi.'</button>';
			}
			if($sayfaNo==$butonSayisi)
			{
				$sayfalar='<button class="btn btn-primary" onclick="referansButon("1")">1</button>
										
										<button class="btn btn-primary">...</button>
										
										<button class="btn btn-primary" onclick="referansButon("'.($butonSayisi-1).'")">'.($referansSayisi-1).'</button>										
										<button class="btn btn-primary" onclick="referansButon("'.$butonSayisi.')">'.$referansSayisi.'</button>';
			}*/
			 //$array=array("referanslar"=>$referanslar,"sayfalar"=>$sayfalar);
			//echo json_encode($array);
		}
		if($action=="iletisim")
		{
			$adSoyad=p("adSoyad");
			$email=p("email");
			$tel=p("tel");
			$mesaj=p("mesaj");
			 
			$sutunlar=array("AdSoyad","TelNo","Email","Mesaj");
			$degerler=array($adSoyad,$email,$tel,$mesaj);
			$b=Insertdata("tbliletisim",$sutunlar,$degerler,$baglan);
			if($b)
			{
				include("mail/class.phpmailer.php");
				$mail = new PHPMailer();
										$mail->IsSMTP();
										//$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
										$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
										//$mail->SMTPSecure = 'tls'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
										$mail->Host = "premium1.webarisi.com"; // Mail sunucusunun adresi (IP de olabilir)
										$mail->Port = 587; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
										$mail->IsHTML(true);
										$mail->SetLanguage("tr", "phpmailer/language");
										$mail->CharSet  ="utf-8";
										$mail->Username = "iletisim@coskunerhukuk.net"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
										$mail->Password = "G2Mcb9mPHwAf2oA"; // Mail adresimizin sifresi
										$mail->SetFrom("iletisim@coskunerhukuk.net", "Çoşkuner Hukuk"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
										$mail->AddAddress($email); // Mailin gönderileceği alıcı adres
										
										$mail->Subject = "Çoşkuner Hukuk"; // Email konu başlığı
										$mail->Body = "Mesajınız Alınmıştır.En Kısa Sürede İletişime Geçilecektir. -Çoşkuner Hukuk"; // Mailin içeriği
										if(!$mail->Send()){
											echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
										} else {
											//echo '<script>alert("Email Gönderildi")</script>';
										}
										
										
										
										$mail2 = new PHPMailer();
										$mail2->IsSMTP();
										$mail2->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
										$mail2->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
										//$mail2->SMTPSecure = 'tls'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
										$mail2->Host = "premium1.webarisi.com"; // Mail sunucusunun adresi (IP de olabilir)
										$mail2->Port = 587; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
										$mail2->IsHTML(true);
										$mail2->SetLanguage("tr", "phpmailer/language");
										$mail2->CharSet  ="utf-8";
										$mail2->Username = "iletisim@coskunerhukuk.net"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
										$mail2->Password = "G2Mcb9mPHwAf2oA"; // Mail adresimizin sifresi
										$mail2->SetFrom("iletisim@coskunerhukuk.net", "Çoşkuner Hukuk"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
										$mail2->AddAddress("enginomercoskuner@gmail.com"); // Mailin gönderileceği alıcı adres
										
										$mail2->Subject = "Çoşkuner Hukuk"; // Email konu başlığı
										$mail2->Body = $adSoyad." web sitenizdeki iletişim formunu kullarak sizinle iletişime geçti."; // Mailin içeriği
										if(!$mail2->Send()){
											echo "Email Gönderim Hatasi: ".$mail2->ErrorInfo;
										} else {
										//	echo '<script>alert("Email Gönderildi")</script>';
										}
				
				
				echo true;
			}
			else{
				echo false;
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		}
	}
?>