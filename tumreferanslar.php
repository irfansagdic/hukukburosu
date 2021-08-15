<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Avukatlık Bürosu</title>
	<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

	<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

	<link href="css/styles.css" rel="stylesheet" />
	<!-- WhatsApp ekleme -->
	<script type="text/javascript">
		(function () {
			var options = {
					whatsapp: "+905458854288", // WhatsApp numaranızı buraya girin
					call_to_action: "Merhaba, nasıl yardımcı olabilirim?", // Görünecek metin
					position: "right", // Position may be 'right' or 'left'
				};
				var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
				var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
				s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
				var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
			})();
		</script>
		<!-- WhatsApp ekleme -->
	</head>
	<body id="page-top">


		<section class="page-section bg-light" id="portfolio"> 
			<div class="container">
				<div class="text-center">
					<h2 class="section-heading text-uppercase">Referanslar</h2>
					<h3 class="section-subheading text-muted">Başarıyla sonuçlandırdığımız bazı işlerimiz.</h3>
				</div>


				<div class="row">
					<div class="col-1"></div>

					<div class="col-10">
						<ul class="list-group">
								<?php 
								include("classes/class.php");
								$deneme = new clsAnasayfa();
								$referanslar=$deneme->referanslariYazdir();
								foreach($referanslar as $q)
									{
								?>
								<li class="list-group-item" style="border:none;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
								<div class="row">
									<div class="col">
										<?php echo $q["referansAdi"] ?>
									</div>
									<div class="col">
										<div class="float-right">
												<span class="badge text-secondary"><?php echo $q["referansTarih"] ?></span>
										</div>
									</div>
								</div>
							</li>
							<?php 
									}
							?>
						<!--	<li class="list-group-item" style="border:none;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
								<div class="row">
									<div class="col">
										DEneme başlık
									</div>
									<div class="col">
										<div class="float-right">
											<span class="badge text-secondary">12.02.2012</span>
										</div>
									</div>
								</div>
							</li>
							<li class="list-group-item" style="border:none;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
								<div class="row">
									<div class="col">
										DEneme başlık
									</div>
									<div class="col">
										<div class="float-right">
											<span class="badge text-secondary">12.02.2012</span>
										</div>
									</div>
								</div>
							</li>
							<li class="list-group-item" style="border:none;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
								<div class="row">
									<div class="col">
										DEneme başlık
									</div>
									<div class="col">
										<div class="float-right">
											<span class="badge text-secondary">12.02.2012</span>
										</div>
									</div>
								</div>
							</li>-->

						</ul>

						<div class="text-center mt-5">
							<a href="index.php#portfolio" class="btn btn-dark btn-lg">Anasayfaya Geri Dön</a>
						</div>
					</div>	

					<div class="col-1"></div>
				</div>
			</div>
		</section>

		




		

		
		

		


		<!-- Footer-->
		<footer class="footer py-4">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-4 text-lg-left">Copyright © Firma Adı 2020</div>
					<div class="col-lg-4 my-3 my-lg-0">
						<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
						<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
						<a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<div class="col-lg-4 text-lg-right font-weight-bold">
						Tel No : 0212 635 4565
					</div>
				</div>
			</div>
		</footer>
		





		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		<script src="assets/mail/jqBootstrapValidation.js"></script>
		<script src="assets/mail/contact_me.js"></script>
		<script src="js/scripts.js"></script>
	</body>
	</html>
