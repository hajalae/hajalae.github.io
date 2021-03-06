<?php 

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['objet'];
    $message = $_POST['message'];
    
    $recipient = "contact@mister-alae.com";

    $mail_Data = "";
    $mail_Data .= "$message\n\n";
    $mail_Data .= "-------------\n\n";
    $mail_Data .= "Nom : $name\n";
    $mail_Data .= "Email : $email";

    $headers = "From: $email  \n";

    mail($recipient, $subject, $mail_Data, $headers) or die("Error!");


    $mail_Data2 = "";
    $mail_Data2 .= "Bonjour $name,\n\n";
    $mail_Data2 .= "Merci de m'avoir contacté, je vous recontacterai dans les plus brefs délais pour répondre à votre demande.\n\n";
    $mail_Data2 .= "A bientôt,\n\n";
    $mail_Data2 .= "Mister Alae\n";
    $mail_Data2 .= "http://www.mister-alae.com\n\n";
    $mail_Data2 .= "-------------\n\n";
    $mail_Data2 .= "Récapitulatif du message : \n";
    $mail_Data2 .= $message;

    $headers2 = "From: $recipient \n";

    mail($email, "Mister Alae - $subject", $mail_Data2, $headers2) or die("Error!");
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8">
	<title>Contact - Mister Alae</title>

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

	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148590438-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-148590438-1');
	</script>
</head>


<body class="about single-page">
	<!-- <div id="preloader"></div> -->

    <?php include("header.php") ?>
    
    <section id="about-me" class="pt50">

			<div class="container pt50">
				<div class="row">
					<div class="col-sm-12 text-center">
                        <h3>Merci pour votre email. Je vous répondrai dans les plus brefs délais</h3>
                        <br>
                        <a href="index.php">Retour à la page d'accueil</a>
					</div>
				</div>
			</div>
		</section>

	<?php include("footer.php") ?>

	<!--  Js Library -->
	<script src="assets/js/jquery-2.1.4.min.js"></script>
	<!-- Include  for bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Include  for wow.js -->
	<script src="assets/js/wow.min.js"></script>
	<script>new WOW().init();</script>
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
</body>

</html>