<?php 
include("classes/class.php");
$url="https://coskunerhukuk.net/";
$ozkan=1;
if($ozkan==0)
{
	
}
else{
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>COŞKUNER HUKUK BÜROSU</title>
	<link rel="icon" type="image/x-icon" href="assets/img/logo.png" />

	<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

	<link href="css/styles.css" rel="stylesheet" />
	<!-- WhatsApp ekleme -->
	<script type="text/javascript">
		(function () {
			var options = {
					whatsapp: "+905319759310", // WhatsApp numaranızı buraya girin
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


		<style>
			#logok{
				max-width: 100px;
				height: auto;
			}
			#logok img{
				width: 100%;
				height: auto;
			}
			.carousel #baslik{
				font-size: 60px;
			}
			.carousel #slogan{
				font-size: 50px;
			}
			@media (min-width:577px ) and(max-width:1366px ){
				#logok{
					max-width: 100px;
					height: auto;
				}
				#logok img{
					width: 100%;
					height: auto;
				}
				#yazi{
					font-size: 1rem;
					color:#FED136
					}
			}
			@media (max-width:576px ){
				#logok{
					max-width: 40px;
					height: auto;
				}
				#logok img{
					width: 100%;
					height: auto;
				}
				.carousel{
					margin-top: 65px;
				}
				.carousel #baslik{
					font-size: 20px;
				}
				.carousel #slogan{
					font-size: 20px;
				}
				.carousel .carousel-caption{
				margin-bottom:-160px;
				}
				.navbar{
					width:auto;
				}
				#yazi{
					font-size:13px;
				}
				#takim{
					font-size:30px;
				}
				
			}

		</style>
	</head>
	<body id="page-top">
		<!-- Navigation-->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
			<div class="container-fluid">
				<div id="logok">
					<img id="logo" src="<?php echo $url ?>assets/img/logo.png">
				</div>
				<a href="" id="yazi" class="navbar-brand" style="">COŞKUNER HUKUK BÜROSU</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

					<i class="fas fa-bars ml-1"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav text-uppercase ml-auto">
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">hizmetlerimiz</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">referanslar</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">hakkımızda</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">takım</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">iletişim</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Header-->
		<!--
		<header class="masthead" style="background-image: url(assets/img/header-bg.jpg);">
			<div class="container">
				<div class="masthead-heading font-weight-bold font-italic">COŞKUNER HUKUK BÜROSU</div>
				<div class="masthead-subheading">
					<?php 
					$deneme = new clsAnasayfa();
					$deneme->sloganYazdir();
					?>
				</div>
				<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Daha Fazla</a>
			</div>
		</header>
	-->



	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		
		<div class="carousel-inner">

			<?php 
			$malibu=0;
			$slider=$deneme->sliderResimleri();
			foreach($slider as $q)
			{
				if($malibu==0)
				{
					?>


					<div class="carousel-item active">
						<img src="assets/img/banner/<?php echo $q["sliderResim"] ?>" class="w-100" alt="...">
						<div class="carousel-caption">
							<h1 class="text-uppercase font-weight-bold" id="baslik"><?php echo $deneme->yaziYazdir(); ?></h1>
							<h2 id="slogan"><?php echo $deneme->sloganYazdir(); ?></h2>
						</div>
					</div>
					<?php 
					$malibu++;
				}
				else{
					?>
					<div class="carousel-item ">
						<img src="assets/img/banner/<?php echo $q["sliderResim"] ?>" class="w-100" alt="...">
						<div class="carousel-caption">
							<h1 class="text-uppercase font-weight-bold" id="baslik"><?php echo $deneme->yaziYazdir(); ?></h1>
							<h2 id="slogan"><?php echo $deneme->sloganYazdir(); ?></h2>
						</div>
					</div>
					<?php	

				}
			}
			?>

			<!--<div class="carousel-item">
				<img src="assets/img/banner/<?php echo $q["sliderResim"] ?>" class="d-block w-100" alt="...">
				<div class="carousel-caption">
					<h1 class="text-uppercase font-weight-bold" id="baslik"><?php echo $deneme->yaziYazdir(); ?></h1>
					<h2 id="slogan">Av. Engin Ömer COŞKUNER</h2>
				</div>
			</div>-->
			
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>



<!--
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
			  </ol>
			  <div class="carousel-inner">
					
							<?php /*
								$malibu=0;
								$slider=$deneme->sliderResimleri();
								foreach($slider as $q)
								{
									if($malibu==0)
									{
							?>
									<div class="carousel-item active">
									  <img style="" src="assets/img/banner/<?php echo $q["sliderResim"] ?>" class="d-block w-100" alt="...">
									  <div class="carousel-caption">
										<div style=" width:100%;height: auto;">
											<h1 class="font-weight-bold font-italic mb-4" style="font-size: 80px" id="s1"><?php echo $deneme->yaziYazdir(); ?></h1>
										<h1 class="font-italic s2" id="s2"><?php echo $deneme->sloganYazdir(); ?></h1>
										</div>
									  </div>
									</div>
							<?php
										$malibu++;
									}
									else{
							?>
										<div class="carousel-item">
											  <img style="" src="assets/img/banner/<?php echo $q["sliderResim"] ?>" class="d-block w-100" alt="...">
											  <div class="carousel-caption">
													<div style="width:100%;height: auto; padding-bottom: 150px;">
														<h1 class="font-weight-bold font-italic mb-4" style="font-size: 80px" id="s3"><?php echo $deneme->yaziYazdir(); ?></h1>
													<h1 class="font-italic" id="s4"><?php echo $deneme->sloganYazdir(); ?></h1>
													</div>
											  </div>
											</div>
							<?php
									}
								}
							*/?>
					
					
				
				</div>
			  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>	
		-->

		<!-- Hizmetlerimiz-->
		<section class="page-section" id="services">
			<div class="container">
				<div class="text-center">
					<h2 class="section-heading text-uppercase">Hizmetlerimiz</h2>
					<h3 class="section-subheading text-muted">Hizmet verdiğimiz alanlar aşağıda listelenmiştir</h3>
				</div>
				<div id="hizmet" class="row text-center">
					<?php 
					$hizmetler=$deneme->ilkUcHizmet();
					foreach($hizmetler as $q)
					{
						?>
						<div class="col-md-4">
							<img src="assets/img/hizmetler/<?php echo $q["hizmetResim"] ?>" style="border-radius: 100%;width: 150px;height: 150px" alt="">
							<h4 class="my-3"><?php echo $q["hizmetAdi"] ?></h4>
							<p class="text-muted"><?php echo $q["hizmetAciklama"] ?></p>
						</div>
						<?php	
					}
					
					?>
				</div>
				<div class="row">
					<div class="col">
						<div class="text-center mt-4">
							<?php 
							$hizmetSayi = $deneme->hizmetSayisi();
							$hizmetSayi=ceil($hizmetSayi/3);
							for($i=1;$i<=$hizmetSayi;$i++)
							{
								?>


								<button class="btn btn-primary" onclick="hizmetButon('<?php echo $i ?>')"><?php echo $i?></button>


								<?php
							}
							?>
						</div>
					</div>
				</div>
				<script>
					function hizmetButon(sayfaNo)
					{
						$.ajax({
							url:"https://coskunerhukuk.net/ajax.php",
							type:"POST",
							data:"action=hizmetButon&hizmetSayfano="+sayfaNo,
							success:function(data)
							{
								var deger=document.getElementById("hizmet").innerHTML;
								document.getElementById("hizmet").innerHTML=data;
							//	document.getElementById("takim").innerHTML+=deger;

						}
					});
					}
				</script>
			</div>
		</section>

		



		<!-- Referanslar -->
		<section class="page-section bg-light" id="portfolio"> 
			<div class="container">
				<div class="text-center">
					<h2 class="section-heading text-uppercase">Referanslar</h2>
					<h3 class="section-subheading text-muted">Başarıyla sonuçlandırdığımız bazı işlerimiz.</h3>
				</div>


				<div class="row">
					<div class="col-1"></div>

					<div class="col-10">
						<ul id="referans" class="list-group">
							
							<?php 
							$referanslar=$deneme->ilkBesReferans();
							foreach($referanslar as $q)
							{
								?>
								<li  class="list-group-item" style="border:none;border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
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


						</ul>
						<div class="row">
							<div class="col">
								<div class="text-center mt-4">
									<?php 
									$limit=10;
									$referansSayisi = $deneme->referansSayisi();
									$referansSayisi=ceil($referansSayisi/$limit);
									
									for($i=1;$i<=$referansSayisi;$i++)
									{
										?>
										<button class="btn btn-primary" onclick="referansButon('<?php echo $i ?>')"><?php echo $i ?></button>
										<?php
									}
									
									
									?>
									
									
								</div>
							</div>
						</div>
						<script>
							function referansButon(sayfaNo)
							{
								$.ajax({
									url:"https://coskunerhukuk.net/ajax.php",
									type:"POST",
									
									data:"action=referansButon&referansSayfano="+sayfaNo,
									success:function(data)
									{
									//	var result=$.parseJSON(data);
									 //  alert(result[0]);
									// alert(result.referanslar);
										//alert(data.referanslar);
										
										//var result=$.parseJSON(data);
										//alert(data[0]);
									//	alert(data["referanslar"]);


										//dizi=json_decode(data);
										//var deger=document.getElementById("referans").innerHTML;
										// $("#referans").html(data.referanslar);
										 //$("#sayfaNo").html(data.sayfalar);
										 document.getElementById("referans").innerHTML=data;
										//document.getElementById("sayfaNo").innerHTML=result[1];


									}
								});
							}
						</script>

						
					</div>	

					<div class="col-1"></div>
				</div>
			</div>
		</section>

		

		
		

		<!-- Hakkımızda -->
		<section class="page-section" id="about">
			<div class="container">
				<div class="text-center">
					<h2 class="section-heading text-uppercase">Hakkımızda</h2>
					<h3 class="section-subheading text-muted">Vizyon , Misyon , Çalışma Şeklimiz</h3>
				</div>
				<div class="row">
					<div class="col-6">
						<h4>Vizyonumuz</h4>
						<p class="text-muted">Adalete ve hukuka olan saygı ve inancın artmasına katkıda bulunmak, müvekkillerimizin hak ve özgürlüklerini, karşılıklı saygı ve iş kuralları çerçevesinde, profesyonel olarak savunarak, kendilerine kaliteli hizmet vermek, hukuk sistemimizdeki tüm gelişme ve değişmeleri yakından takip ederek temsil edilen müvekkiller adına uygulamak; Saygın dürüst, güvenilir, çağdaş, atılımcı, başarılı bir vizyonla adaletin gerçekleşmesi için çalışmaktır.</p>

						<h4>Misyonumuz</h4>
						<p class="text-muted">Müvekkili temsil ve danışmanlık hizmeti faaliyetlerini ifa ederken; evrensel ahlaki, hukuki değerler, avukatlık mesleğinin temel ilkeleri ve yükümlülükleri çerçevesinde (Bağımsızlık, Özgürlük, Sır Saklama, Müvekkile Sadakat, Adil Olma, Hakkaniyet, Öz Denetim, Hukukun üstünlüğüne ve yargının adil yönetimine saygı, Avukatlık mesleğinin itibar ve onuru ile avukatın kişisel dürüstlük ve saygınlığı, Özen, Sürekli öğrenme, Yenilik ve teknoloji, Paylaşım, Öncülük, Bilimsellik, Değer yaratma, Üretme, Süreklilik v.b.) hareket etmek.</p>
					</div>
					<div class="col-6">
						<h4>Nasıl çalışıyoruz ?</h4>
						<p class="text-muted">Müvekkillerimizin ticari sırları bizim için en üst düzey önem taşımaktadır. Bu beyanda, herhangi bir “menfaat çatışması” olduğunda, durumu hem mevcut hem de potansiyel müvekkillerimize bildirmeyi temel görevimiz olarak görüyoruz. Davranışlarımızda ve müvekkillerimizle iş ilişkisi kurarken Avukatlık Meslek İlkeleri’ne, Türkiye Barolar Birliği’nce hazırlanan Reklam Yasağı Yönetmeliği’ne ve Avrupa Birliği Avukatlık Meslek Kurallarına uygun olarak hareket etmek ana prensibimizdir.

							Gizlilik; müvekkilin Coşkuner Hukuk Bürosu’na sağladığı ve kamuya açık olmayan her türlü bilgi uygulanabilir kurallar ve profesyonel gizlilik ve sorumluluk esaslarına uygun olarak gizli tutulacaktır. Avukat -müvekkil ilişkisi çerçevesinde edinilen ve müvekkilin işleri ile ilgili her türlü bilgiyi sıkı bir şekilde gizli tutmakla yükümlüyüz.

						Hukuk kuralları ve Kanunlar ile zorunlu kılınmadıkça veya müvekkillerimiz tarafından açıkça yetkilendirilmedikçe edinilen bilgiler asla ifşa edilmeyecektir.</p>
					</div>
				</div>	
			</div>
		</section>



		<!-- Team-->
		<section class="page-section bg-light" id="team">
			<div class="container">
				<div class="text-center">
					<h2 id="takim" class="section-heading text-uppercase">Takım Arkadaşlarımız</h2>
					<h3 class="section-subheading text-muted">Alanında uzman avukatlar.</h3>
				</div>
				<div id="takimn" class="row ">
					<?php 
					$takim=$deneme->ilkUcTakim();
					foreach($takim as $q)
					{
						?>
						<div class="col-lg-4">
							<div class="team-member">
								<img class="mx-auto rounded-circle" src="assets/img/team/<?php echo $q["takimResim"] ?>" alt="" />
								<h4><?php echo $q["takimAd"] ?></h4>
								<p class="text-muted"><?php echo $q["takimGorev"] ?></p>

							</div>
						</div>
						<?php
					}
					echo '</div>';
					$takimUye = $deneme->takimUyeSayisi();
					$takimUye=ceil($takimUye/3);
					?>
					<div class="row">
						<div class="col">
							<div class="text-center mt-4">
								<?php
								for($i=1;$i<=$takimUye;$i++)
								{
									?>
									<button class="btn btn-primary" onclick="takimButon('<?php echo $i ?>')"><?php echo $i ?></button>
									<?php
								}
								?>
							</div>
						</div>
					</div>
					
					<script>
						function takimButon(sayfaNo)
						{
							$.ajax({
								url:"https://coskunerhukuk.net/ajax.php",
								type:"POST",
								data:"action=takimButon&takimSayfano="+sayfaNo,
								success:function(data)
								{
									
									document.getElementById("takimn").innerHTML=data;
							//	document.getElementById("takim").innerHTML+=deger;

						}
					});
						}
					</script>
					
					
					

				</div>
			</section>



			
			<!-- Contact-->
			<section class="page-section" id="contact">
				<?php 
				include("sistem/ayar.php");
				include("sistem/fonksiyon_bi.php");
				$footer=SelectFetch("tblFooter","footerId",1,$baglan);
				?>
				<div class="container">
					<div class="row">

						<div class="col">

							<div class="text-center">
								<h2 class="section-heading text-uppercase">Bize Ulaşın</h2>
								<p class="font-weight-bold text-light">Tel No : <a href="tel://<?php echo $footer["footerTel"]; ?>"><?php echo $footer["footerTel"]; ?></a></p>
								<p class="font-weight-bold text-light">Mail : <?php echo $footer["mail"]; ?> </p>
							</div>
							<form id="contactForm" name="sentMessage" novalidate="novalidate">
								<div class="row align-items-stretch mb-5">
									<div class="col">
										<div class="form-group">
											<input class="form-control" id="name" type="text" placeholder="Ad-Soyad *" required="required" data-validation-required-message="Lütfen bir isim girin." />
											<p class="help-block text-danger"></p>
										</div>
										<div class="form-group">
											<input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Lütfen bir email adresi girin." />
											<p class="help-block text-danger"></p>
										</div>
										<div class="form-group mb-md-0">
											<input class="form-control" id="phone" type="tel" placeholder="Tel No *" required="required" data-validation-required-message="Lütfen bir telefon numarası girin." />
											<p class="help-block text-danger"></p>
										</div>
										<div class="form-group mb-md-0 mt-4">
											<textarea class="form-control" id="message" placeholder="Mesajın *" required="required" data-validation-required-message="Lütfen bir metin girin."></textarea>
											<p class="help-block text-danger"></p>
										</div>

									</div>



								</div>
								<div class="text-center">
									<div id="success"></div>
									<button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" onclick="iletisim()" type="submit">Gönder</button>
								</div>
							</form>
							<script>
								function iletisim()
								{
									var adSoyad=document.getElementById("name").value;
									var email=document.getElementById("email").value;
									var tel=document.getElementById("phone").value;
									var mesaj=document.getElementById("message").value;
									$.ajax({
										url:"https://coskunerhukuk.net/ajax.php",
										type:"POST",
										data:"action=iletisim&adSoyad="+adSoyad+"&email="+email+"&tel="+tel+"&mesaj="+mesaj,
										success:function(data)
										{
											
											if(data==true)
											{
												alert("Mesajınız Alındı");
											}
											else{
												alert("Hata");
											}
										}
									});
								}
							</script>
						</div>
						

						<div class="col">
							<div class="text-center">
								<h2 class="section-heading text-uppercase">Adres Bilgilerimiz</h2>
								<p class="font-weight-bold text-light">Adres : <?php echo $footer["adres"]; ?> </p>
								
							</div>
							
							<iframe style="margin-top:18px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d325.41963531388507!2d28.639565318033416!3d41.07346886024678!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x29153466b704b253!2sCO%C5%9EKUNER%20HUKUK%20B%C3%9CROSU!5e0!3m2!1str!2str!4v1605273058063!5m2!1str!2str" width="100%" height="360" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

							<div class="text-center mt-4">
								

								<a target="_blank" class="text-white" href="https://www.google.com/maps?ll=41.073628,28.639955&z=13&t=m&hl=tr&gl=TR&mapclient=embed&daddr=COŞKUNER+HUKUK+BÜROSU+AKÇABURGAZ+MAH.ALKOP+SANAYİ+SİTESİ+A11+BLOK+NO:+21+34522+Esenyurt@41.0736545,28.6398516"><button class="btn btn-primary btn-xl text-uppercase text-white" id="sendMessageButton">YOL TARİFİ AL	        </button></a>



							</div>	
						</div>

					</div>
				</div>
			</section>



			<!-- Footer-->

			<footer class="footer py-4">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-4 text-lg-left">Copyright 2020 © Coşkuner Hukuk </div>
						<div class="col-lg-4 my-3 my-lg-0">
							<a target="_blank" class="btn btn-dark btn-social mx-2" href="<?php echo $footer["footerTwitter"]; ?>"><i class="fab fa-twitter"></i></a>
							<a target="_blank" class="btn btn-dark btn-social mx-2" href="<?php echo $footer["footerFacebook"]; ?>"><i class="fab fa-facebook-f"></i></a>
							<a target="_blank" class="btn btn-dark btn-social mx-2" href="<?php echo $footer["footerInsta"]; ?>"><i class="fab fa-linkedin-in"></i></a>
						</div>
						<div class="col-lg-4 text-lg-right font-weight-bold">
							
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
<?php }?>
