<?php 
	$mail = new PHPMailer();
										$mail->IsSMTP();
										$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
										$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
										//$mail->SMTPSecure = 'tls'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
										$mail->Host = ""; // Mail sunucusunun adresi (IP de olabilir)
										$mail->Port = 587; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
										$mail->IsHTML(true);
										$mail->SetLanguage("tr", "phpmailer/language");
										$mail->CharSet  ="utf-8";
										$mail->Username = ""; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
										$mail->Password = ""; // Mail adresimizin sifresi
										$mail->SetFrom("", ""); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
										$mail->AddAddress(); // Mailin gönderileceği alıcı adres
										$mail->Subject = ""; // Email konu başlığı
										$mail->Body = $mesaj; // Mailin içeriği
										if(!$mail->Send()){
											echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
										} else {
											echo '<script>alert("Email Gönderildi")</script>';
										}
?>