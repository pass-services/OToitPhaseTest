<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>O'Toit, Espace Fournisseurs </title>
<!-- Bootstrap Core CSS -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="assets/css/stylish-portfolio.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link rel="icon" href="assets/img/favicon.png" />

<!-- DEBUT CODE ENVOI MESSAGE FORMULAIRE -->

	<script src='https://www.google.com/recaptcha/api.js?hl=fr'></script>

		<?php
		require '../mailgun-php/vendor/autoload.php';
		use Mailgun\Mailgun;
		//Your credentials
		$mg = new Mailgun("key-b76f09ac4b0e2ae15e02463afdd36b4b");
		$domain = "mail.o-toit.fr";

		// grab recaptcha library
require_once "recaptchalib.php";

// your secret key
$secret = "6LeDl1cUAAAAAG78J7Rrjc4Je5SCuuO9hQ5ohiPS";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);

		
  
  
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$from = 'Demo Contact Form'; 
		//$to = 'lacri.contact@gmail.com';
		//$to = 'cyril.kezzar@gmail.com';
		$to = 'yannick.thebault@numen.fr';
		$subject = 'Message sur le site internet O-Toit ';
		
		$body ="From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'svp saisissez votre nom';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'svp, veuillez entrer une adresse mail valide';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'scp, veuillez entrer votre message';
		}
	

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

  if ($response != null && $response->success) {
	
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	/*
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Merci pour votre message, nous vous r&eacute;pondrons rapidement.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
	*/

	//Customise the email - self explanatory
	///*
	if (
	$mg->sendMessage($domain, array(
	'from'=>'postmaster@mail.o-toit.fr',
	'to' => $to ,
	'subject' => $subject,
	'text' => $body
	    )
	)) {
		$result='<div class="alert alert-success">Merci pour votre message, nous vous r&eacute;pondrons rapidement.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
	//*/

	}
	}
	
	
	   else { $errMessage='<div class="alert alert-danger">SVP Veuillez cocher la case Je ne suis pas un robot</div>'; }
}
?>
<!-- FIN CODE ENVOI MESSAGE FORMULAIRE -->



</head>
<body id="page-top">
<!-- Header -->
<header>
<!-- Image and text -->
	<nav class="navbar  fixed-top  navbar-light " style="background-color: #e6e8ea;">
		<a class="navbar-brand" href="index.php"><img src="assets/img/logo-top.png" alt="test" class="img-fluid cbp-af-header"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse  navbar-collapse" id="navbarNav">
			<ul class="navbar-nav menu">
			  <li class="nav-item"><a class="nav-link" href="#">adhérez <span class="sr-only">(current)</span></a></li>
			  <li class="nav-item"><a class="nav-link" href="index.php#luciole">devenez une luciole</a> </li>
			  <li class="nav-item"><a class="nav-link " href="fournisseur.html">devenez  fournisseur</a></li>
			  <li class="nav-item"><a class="nav-link" href="#">trouver un toit</a></li>
			  <li class="nav-item"><a class="nav-link " href="#">agenda</a></li>
			  
			 			</ul>
		</div>
	</nav>
</header>
	<div class="icon-bar ">
		   <a href="e-shop.php"><img src="assets/img/case.png" class="img-fluid" alt="test"></a> 
		  <a href="https://www.facebook.com/OToit-Bergerac-2119632094728793/" target="_blank"><img src="assets/img/fb.png" class="img-fluid" target="_blank" alt="test"></a> 
		  <a href="https://twitter.com/mvtlucioles" target="_blank"><img src="assets/img/twi.png" class="img-fluid" target="_blank" alt="test"></a> 
		  <a href="e-shop.php"><img src="assets/img/env.png" class="img-fluid" alt="test"></a> 
		  
	
	</div>
	<div class="masthead3 d-flex jaunehaut miniH2">
		<div class="container-fluid minimge ">
			<div class="row">
					<div class="col-md-12 text-center"><h1 class="introtitre">Espace Partenaires </h1></div>
			</div>	
			<br><br><br><br>
			<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="intro2light">Merci à nos partenaires</h2>
														
					</div></div>
			<div class="row">		
					<div class="col-md-12 text-center">
					<a href="https://dordogne.cci.fr/" target="_blank"><img class="img-fluid" src="assets/img/logo/cci.png"><br><br>
					<a href="http://www.artisanat24.com/" target="_blank"><img class="img-fluid" src="assets/img/logo/logo_cma-6.jpg"><br><br>
					<a href="https://www.ca-charente-perigord.fr/particuliers.html" target="_blank"><img class="img-fluid" src="assets/img/logo/logo_creditagricole_V16.png"></a><br><br>
					
					
					
					</div>
					
					
					
			</div>		<br><br><br><br><br><br>
			
			
		</div>	 <br><br><br><br><br><br> 
	</div>
	
	
	<div  id="contactus"><hr/></div>
		<div class="container">
			<div class="row" >
				<div  id="contactform" class="col-md-12 col-xs-12 col-sm-12 entry-content">
				<h2>Nous Contacter</h2>	
					<div class="section-content">
						
						
					
					</div>
				<form class="form-horizontal" role="form" method="post" action="testmail2.php#contactform">
				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<?php echo $result; ?>	
					</div>
				</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Nom</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="name" name="name" placeholder="Nom & Prénom" value="<?php echo htmlspecialchars($_POST['name']); ?>">
					<?php echo "<p class='text-danger'>$errName</p>";?>
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">E-mail</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" name="email" placeholder="votre adresse e-mail" value="<?php echo htmlspecialchars($_POST['email']); ?>">
					<?php echo "<p class='text-danger'>$errEmail</p>";?>
				</div>
			</div>
			<div class="form-group">
				<label for="phone" class="col-sm-2 control-label">Téléphone</label>
				<div class="col-sm-10">
					<input type="phone" class="form-control" id="phone" name="phone" placeholder="numéro de téléphone" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
					
					
				</div>
			</div>	
			<div class="form-group">
					<label for="message" class="col-sm-2 control-label">Message</label>
					<div class="col-sm-10">
					<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
					<br/>
						
				
					
					
					<?php echo "<p class='text-danger'>$errMessage</p>";?>
					</div>
			</div>
			
		
			
			
			
			
			
			<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2 ">
						<div class="g-recaptcha " data-sitekey="6LeDl1cUAAAAAJWB7yxeYWrY8hBUxc8e8owb10dg"></div>
					<input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary pull-right">
					</div>
			</div>	
			</form>
			</div>
			</div>
			</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
<footer>
<div class="masthead4 d-flex">
	<div class="container-fluid  ">
		<div class="row minimge">
			<div class="col-md-4 "><p class="liste footer-titre ">CONTACTER NOUS</p>
				<form class="form-horizontal">
					<fieldset>
						<div class="form-group">
							<input name="textinput" class="form-control input-md" id="textinput" type="text" placeholder="Entrez votre e-mail">
							
						</div>
						<div class="form-group">
						  <textarea class="form-control" rows="4" cols="50" placeholder="Tapez votre message" ></textarea> 
						</div>
						
					</fieldset>
					<button type="button" class="btn btn-dark">ENVOYER</button>
				</form>
			</div>
			<div class="col-md-4 "><p class="liste footer-titre">RECEVEZ LA NEWSLETTER</p>
					<div class="row">
						<div class="col-md-6">			
							<div class="form-group">
											<input name="textinput" class="form-control input-md" id="textinput" type="text" placeholder="Entrez votre e-mail">
											
										</div>
										
										<button type="button" class="btn btn-dark">S'INSCRIRE</button>
						</div>
						<div class="col-md-8">	</div>
			</div>
			</div>
			
			
			<div class="col-md-4"><p class="liste footer-titre">SUIVEZ NOUS</p>
				<div class="">
					<img src="assets/img/Vimeo.png" alt="test" >&ensp;<img src="assets/img/Pinterest.png" alt="test">&ensp;<img src="assets/img/Youube.png" alt="test">
				</div>
				<br>
				<div class="">
					<img src="assets/img/twitter2.png " alt="test">&ensp;<img src="assets/img/Google+.png" alt="test">&ensp;<img src="assets/img/Instagram2.png" alt="test">
				</div>
				
			</div>
			<div class="col-md-2 "></div>
		</div>
		
	
		<div class="row footup minimge">
			<div class="col-md-9">
				<a class="lienfooter " href="" >CGV</a>
				<a class="lienfooter " href="" >CGU</a>
				<a class="lienfooter " href="">Politique de retour</a>
				<a class="lienfooter " href="" >Engagement</a>
				<a class="lienfooter " href="" >Ecologique</a>
				<a class="lienfooter " href="" >FAQ</a>
				<a class="lienfooter " href="fournisseur.html" >Espace Fournisseurs</a>
				<a class="lienfooter " href="presse.html" >Espace PRESSE</a>
				<a class="lienfooter " href="partenaire.html" >Espace Partenaires </a>
			</div>
<div class="col-md-3 text-right lienfooter">© 2018 O’toit - mentions légales - crédits</div>			
			</div>
</div></div>
</footer>	
<!-- FIN FOOTER -->	
	<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
				<i class="fa fa-angle-up"></i>
			</a>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="assets/js/stylish-portfolio.min.js"></script>
	<script src="assets/js/monscript.js"></script>
</body>
</html>
