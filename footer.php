<footer>
<div class="masthead4 d-flex">
	<div class="container-fluid  ">
		<div class="row minimge">
			<div class="col-md-8"><p class="liste footer-titre ">CONTACTEZ-NOUS</p>
				<!-- <form class="form-horizontal">
					<fieldset>
						<div class="form-group">
							<input name="textinput1" class="form-control input-md" id="textinput1" type="text" placeholder="Entrez votre e-mail">
							
						</div>
						<div class="form-group">
						  <textarea class="form-control" rows="4" cols="50" placeholder="Tapez votre message" ></textarea> 
						</div>
						
					</fieldset>
					<button type="button" class="btn btn-dark">ENVOYER</button>
				</form> -->
				
				
	<script src='https://www.google.com/recaptcha/api.js?hl=fr'></script>

		<?php
		
		require 'mailgun-php/vendor/autoload.php';
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
		// $name = $_POST['name'];
		$email = $_POST['email'];
		// $phone = $_POST['phone'];
		$message = $_POST['message'];
		$from = 'O-Toit website Contact Form'; 
		$to = 'lacri.contact@gmail.com'; 
		$subject = 'Message sur le site internet O-toit ';
		
		$body ="From: E-Mail: $email\n  Message:\n $message";
		// Check if name has been entered
		// if (!$_POST['name']) {
		//	$errName = 'svp saisissez votre nom';
		// }
		
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
	// We send email via Mailgun
	if ($mg->sendMessage($domain, array(
        'from'=>'postmaster@mail.o-toit.fr',
        'to' => $to ,
        'subject' => $subject,
        'text' => $body
            )
        )) {
	//if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Merci pour votre message, nous vous r&eacute;pondrons rapidement.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
	
	
	   else { $errMessage='<div class="alert alert-danger">SVP Veuillez cocher la case Je ne suis pas un robot</div>'; }}
?>
<!-- FIN CODE ENVOI MESSAGE FORMULAIRE -->
			
			<div id="contactform">	
						
				<form class="form-horizontal" role="form" method="post" action="index.php#contactform">
				<div class="form-group">
					<div class="col-sm-10 ">
						<?php echo $result; ?>	
					</div> 
				</div>
			
			<div class="form-group">
				
				
					<input type="email" class="form-control" id="email" name="email" placeholder="votre adresse e-mail" value="<?php echo htmlspecialchars($_POST['email']); ?>">
					<?php echo "<p class='text-danger'>$errEmail</p>";?>
				
			</div>
			
			<div class="form-group">
					
					
					<textarea class="form-control" placeholder="votre message" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
					<br/>
						
				
					
					
					<?php echo "<p class='text-danger'>$errMessage</p>";?>
				
			</div>
			
		
			
			
			
			
			
			<div class="form-group">
					
						<div class="g-recaptcha " data-sitekey="6LeDl1cUAAAAAJWB7yxeYWrY8hBUxc8e8owb10dg"></div>
					<input id="submit" name="submit" type="submit" value="Envoyez" class="btn btn-dark ">
				
			</div>	
			</form>			
				
		</div>
				
				
				
				
				
				
				
				
				
				
				
				
			</div>
		
			
			
			<div class="col-md-4"><p class="liste footer-titre">SUIVEZ-NOUS</p>
				
				<div class="">
				<a href="https://www.facebook.com/OToit-Bergerac-2119632094728793/" target="_blank"><img src="assets/picto/Picto-facebook2.png" class="reduite60" alt="test"></a>&ensp;	<a href="https://twitter.com/mvtlucioles" target="_blank"><img src="assets/img/twitter2.png " class="reduite60" alt="test"></a>&ensp;<a href="https://www.instagram.com/mouvementlucioles/" target="_blank"><img src="assets/img/Instagram2.png" class="reduite60" alt="test"></a>
				</div>
				
			</div>
			<div class="col-md-2 "></div>
		</div>
		
	
		<div class="row footup minimge">
			<div class="col-md-9">
				<a class="lienfooter " href="https://o-toit.fr/bergerac/index.php?route=information/information&information_id=12" >CGV</a>
				<!-- <a class="lienfooter " href="">Politique de retour</a>
				<a class="lienfooter " href="" >Engagement</a>
				<a class="lienfooter " href="" >Ecologique</a>
				<a class="lienfooter " href="" >FAQ</a> -->
				<a class="lienfooter " href="fournisseur.php" >Espace Fournisseurs</a>
				<a class="lienfooter " href="presse.php" >Espace PRESSE</a>
				<a class="lienfooter " href="partenaire.php" >Espace Partenaires </a>
			</div>
<div class="col-md-3 text-right lienfooter">© 2018 O’toit - mentions légales - crédits</div>			
			</div>
</div></div>
</footer>	
