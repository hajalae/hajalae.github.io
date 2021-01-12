<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8">
	<title>Contact - Mister Alae</title>


	<meta name="description" content="Contact form for Mister Alae">

	<meta name="author" content="Alaeddine Hajjem">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css-include -->

	<!-- boorstrap -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- themify-icon.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<!-- light-box -->
	<link rel="stylesheet" type="text/css" href="assets/css/lightbox.css">
	<!-- video css -->
	<link rel="stylesheet" type="text/css" href="assets/css/video.min.css">
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- responsive.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>


<body class="about single-page">

	<?php include("header.php") ?>


	<section id="about-me" class="pt50">

		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="contact.php">Contact</a></li>
			</ol>
			<div class="row">
				<div class="col-sm-2">
					<h2>About Me</h2>
				</div>
				<div class="col-sm-5">
					<img src="assets/img/about/about-me.jpg" alt="about me" />
				</div>
				<div class="col-sm-5 text-justify">
					<p>Créer, sublimer et faire émerger le beau sont les raisons pour lesquelles j'aime la photographie. A l'instar d'un écrivain devant sa feuille blanche, il est excitant de partir de rien pour arriver à une oeuvre aboutie.</p>
					<p>Photographe depuis près de 10 ans, j'ai eu la chance de perfectionner mon art à l'aide de différentes rencontres et des différents projets que j'ai pu mener aux quatre coins du monde.</p>
					<p>Jamais rien ne remplacera vos yeux. La photographie n'est rien de plus qu'un assistant qui vous permettra de capturer les innombrables souvenirs que vous vous faites.</p>
				</div>
			</div>
		</div>
	</section>

	<hr>

	<!-- Start of contact us section
		============================================= -->
	<section id="contact" class="contact-us-section pt50">
		<div class="container">
			<div class="row ">
				<div class="contact-us-contact">

					<div class="contact-area-form text-center">
						<div class="row">
							<div class="col">
								<div class="contact-adress-form">
									<h4>Une question ? Une demande de prestation ? N'hésitez pas à m'envoyer un message à
										<br /><a href="mailto:contact@mister-alae.com">contact@mister-alae.com</a>
										<br />je vous répondrai dans les plus brefs délais.</h4>
								</div>
							</div>
							<!-- //.col-sm-9 -->
						</div>
					</div>
					<!-- //.contact-area-form -->
				</div>
				<!-- //.contact-us-contact -->
			</div><!--  /.row-->
		</div><!--  /.container -->
	</section>
	<!-- End of contact us section
		============================================= -->

	<?php include("footer.php") ?>



	<!--  Js Library -->
	<script src="assets/js/jquery-2.1.4.min.js"></script>
	<!-- Include  for bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Include isotope Js -->
	<script src="assets/js/jquery.isotope.min.js"></script>
	<!-- Include lightbox -->
	<script src="assets/js/lightbox.js"></script>
	<!-- Include circle-effect.js -->
	<script src="assets/js/circle-effect.js"></script>
	<!-- Include Video js -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Include Owl-carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Include Counter up -->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>





	<!-- Include script.js -->
	<script src="assets/js/script.js"></script>


	<!-- Google Maps Script  -->
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>
	<script src="assets/js/gmap3.min.js"></script>
	<script>
		function isMobile() {
			return ('ontouchstart' in document.documentElement);
		}

		function init_gmap() {
			if (typeof google == 'undefined') return;
			var options = {
				center: [23.7806286, 90.2793692],
				zoom: 14,
				styles: [{
						elementType: 'geometry',
						stylers: [{
							color: '#eeeeee'
						}]
					},
					{
						elementType: 'labels.text.stroke',
						stylers: [{
							color: '#eeeeee'
						}]
					},
					{
						elementType: 'labels.text.fill',
						stylers: [{
							color: '#eeeeee'
						}]
					},
					{
						featureType: 'administrative.locality',
						elementType: 'labels.text.fill',
						stylers: [{
							color: '#cdc9c2'
						}]
					},
					{
						featureType: 'poi',
						elementType: 'labels.text.fill',
						stylers: [{
							color: '#cdc9c2'
						}]
					},
					{
						featureType: 'poi.park',
						elementType: 'geometry',
						stylers: [{
							color: '#cdc9c2'
						}]
					},
					{
						featureType: 'poi.park',
						elementType: 'labels.text.fill',
						stylers: [{
							color: '#c6c9c3'
						}]
					},
					{
						featureType: 'road',
						elementType: 'geometry',
						stylers: [{
							color: '#c6c9c3'
						}]
					},
					{
						featureType: 'road',
						elementType: 'geometry.stroke',
						stylers: [{
							color: '#cdc9c2'
						}]
					},
					{
						featureType: 'road',
						elementType: 'labels.text.fill',
						stylers: [{
							color: '#cdc9c2'
						}]
					},
					{
						featureType: 'road.highway',
						elementType: 'geometry',
						stylers: [{
							color: '#cdc9c2'
						}]
					},
					{
						featureType: 'road.highway',
						elementType: 'geometry.stroke',
						stylers: [{
							color: '#cdc9c2'
						}]
					},
					{
						featureType: 'road.highway',
						elementType: 'labels.text.fill',
						stylers: [{
							color: '#cdc9c2'
						}]
					},
					{
						featureType: 'transit',
						elementType: 'geometry',
						stylers: [{
							color: '#e4e4e3'
						}]
					},
					{
						featureType: 'transit.station',
						elementType: 'labels.text.fill',
						stylers: [{
							color: '#e4e4e3'
						}]
					},
					{
						featureType: 'water',
						elementType: 'geometry',
						stylers: [{
							color: '#c3c7cc'
						}]
					},
					{
						featureType: 'water',
						elementType: 'labels.text.fill',
						stylers: [{
							color: '#c3c7cc'
						}]
					},
					{
						featureType: 'water',
						elementType: 'labels.text.stroke',
						stylers: [{
							color: '#c3c7cc'
						}]
					}
				],
				mapTypeControl: true,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
				},
				navigationControl: true,
				scrollwheel: false,
				streetViewControl: true,
			}

			if (isMobile()) {
				options.draggable = false;
			}

			$('#googleMaps').gmap3({
				map: {
					options: options
				},
				marker: {
					latLng: [23.7806286, 90.2793692],

				}
			});
		}
		init_gmap();
	</script>


</body>

</html>