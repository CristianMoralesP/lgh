<?php

session_start();
if($_GET["lang"]){
    
$_SESSION['idiomas']=$_GET["lang"];    
    
}elseif(isset ($_SESSION["idiomas"])){
    $_SESSION["idiomas"]="es";
    
}

include ("lang/lang_".$_SESSION["idiomas"].".php");

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo TITULO;?></title>
	<meta name="description" content="Leticia's guest house">
	<meta name="author" content="Eracor - Jennifer Cabiativa">

    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>

	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
	<!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
</head>

<body>
	<div class="wrap-body" class="align-center">
		<div id='flagsOpt' class="flagsOpt" align="right">
                    <a href="index.php?lang=en"><img src="images/USA.png" alt="English"/></a>
                    <a href="index.php?lang=es"><img src="images/Colombia.png" alt="Español"/></a>
			<a href="#"><img src="images/France.png" alt="Français"/></a>
			<a href="#"><img src="images/Germany.png" alt="Deutsch"/></a>
		</div>
		<div id='cssmenu' class="align-center">
			<ul>
			   <li class="active"><a href='index.php'><span><?php echo MENU1; ?></span></a></li>
			   <li><a href='#Contenido'><span><?php echo MENU2; ?></span></a></li>
			   <li class='last'><a href=#Contacto><span><?php echo MENU3; ?></span></a></li>
			</ul>
		</div>
		<header class="">
			<div class="logo">
				<h1>ESPACIO PARA LOGO</h1>
				<a href="#"><img src="" /></a>
			</div>
			<div id="owl-slide" class="owl-carousel">
				<div class="item">
					<img src="images/slider-1.jpg" />
					<div class="carousel-caption">
						<div class="carousel-caption-inner">
							<p class="carousel-caption-title"><a href="#">Texto imagen 1</a></p>
							<p class="carousel-caption-category">Descripción imagen 1</a>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="images/slider-2.jpg" />
					<div class="carousel-caption">
						<div class="carousel-caption-inner">
							<p class="carousel-caption-title"><a href="#">Texto imagen 2</a></p>
							<p class="carousel-caption-category">Descripción imagen 2</a>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="images/slider-3.jpg" />
					<div class="carousel-caption">
						<div class="carousel-caption-inner">
							<p class="carousel-caption-title"><a href="#">Texto imagen 3</a></p>
							<p class="carousel-caption-category">Descripción imagen 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="images/slider-4.jpg" />
					<div class="carousel-caption">
						<div class="carousel-caption-inner">
							<p class="carousel-caption-title"><a href="#">Texto imagen 4</a></p>
							<p class="carousel-caption-category">Descripción imagen 4</a>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="images/slider-5.jpg" />
					<div class="carousel-caption">
						<div class="carousel-caption-inner">
							<p class="carousel-caption-title"><a href="#">Texto imagen 5</a></p>
							<p class="carousel-caption-category">Descripción imagen 5</a>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="images/slider-6.jpg" />
					<div class="carousel-caption">
						<div class="carousel-caption-inner">
							<p class="carousel-caption-title"><a href="#">Texto imagen 6</a></p>
							<p class="carousel-caption-category">Descripción imagen 6</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--////////////////////////////////////Container-->
		<div id="Contenido"></div>
		<section id="container">
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<article class="post zerogrid">
					<div class="row wrap-post"><!--Start Box-->
						<div class="entry-header">
							<span class="time">Octubre, 2016</span>
							<h2 class="entry-title"><a href="#">TITULO DE LA FOTO</a></h2>
							<span class="cat-links">Texto</span>
						</div>
						<div class="post-thumbnail-wrap">
							<img src="images/1.jpg">
						</div>
						<div class="entry-content">
							<p>Tenent mordicus. Et nemo nimium beatus est; Quorum altera prosunt, nocent altera. Sequitur disserendi ratio cognitioque naturae; Quod si ita se habeat, non possit beatam praestare vitam sapientia. Quamvis enim depravatae non sint, pravae tamen esse possunt. Nec vero alia sunt quaerenda contra Carneadeam illam sententiam. Scientiam pollicentur, quam non erat mirum sapientiae cupido patria esse cariorem. Pudebit te, inquam, illius tabulae, quam Cleanthes sane commode verbis depingere solebat. Ex eorum enim scriptis et institutis cum omnis doctrina liberalis, omnis historia. Duo Reges: constructio interrete….</p>
							<a href="single.html" >Detalles</a>
						</div>
					</div>
				</article>
				<div id="Contacto"></div>
				<section class="content-box zerogrid">
					<div class="row wrap-box"><!--Start Box-->
						<h3 class="t-center">Contáctenos</h3>
						<div id="contact_form">
							<form name="form1" id="ff" method="post" action="#">
								<label class="row">
									<div class="col-1-3">
										<div class="wrap-col">
											<input type="text" name="name" id="name" placeholder="Nombre" required="required" />
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<input type="email" name="email" id="email" placeholder="Correo electrónico" required="required" />
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<input type="text" name="subject" id="subject" placeholder="Asunto" required="required" />
										</div>
									</div>
								</label>
								<label class="row">
									<div class="wrap-col">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Mensaje"></textarea>
									</div>
								</label>
								<center><input class="sendButton" type="submit" name="Submit" value="Enviar"></center>
							</form>
						</div>
					</div>
				</section>
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="col-1-3 col-footer-1">
						<div class="wrap-col">
							<h3>Info</h3>
							<a href="index.html"><img src="images/avatar.jpg" /></a>
							<p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum gravida, metus elit vehicula dui.</p>
						</div>
					</div>
					<div class="col-1-3 col-footer-2">
						<div class="wrap-col">
							<h3>Artículos relacionados</h3>
							<ul>
								<li><a href="#">Artículo 1</a></li>
								<li><a href="#">Artículo 2</a></li>
								<li><a href="#">Artículo 3</a></li>
							</ul>
						</div>
					</div>
					<div class="col-1-3 col-footer-3">
						<div class="wrap-col">
							<h3>Localización</h3>
							<div class="wrap-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="200" frameborder="0" style="border:0"></iframe></div>
						</div>
					</div>

				</div>
			</div>
			<div class="zerogrid copyright">
				<div class="wrapper">
					Copyright @ - 2016 Designed by <a href="#" target="_blank" rel="nofollow">ERACOR</a>
					<ul class="quick-link f-right">
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
					</ul>
				</div>
			</div>
		</footer>
		<!-- carousel -->
		<script src="owl-carousel/owl.carousel.js"></script>
		<script>
		$(document).ready(function() {
		  $("#owl-slide").owlCarousel({
			autoPlay: 3000,
			items : 2,
			itemsDesktop : [1199,2],
			itemsDesktopSmall : [979,1],
			itemsTablet : [768, 1],
			itemsMobile : [479, 1],
			navigation: true,
			navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
			pagination: false
		  });
		});
		</script>
	</div>
</body>
</html>
