<?php 
	$societe="pro";
	$classMenuBackgroung[1]='';$classMenuBackgroung[2]='';$classMenuBackgroung[3]='';$classMenuBackgroung[4]='';$classMenuBackgroung[5]='';$classMenuBackgroung[6]='';$classMenuBackgroung[7]='menuTexteFondOn';
	$classMenuColor[1]='';$classMenuColor[2]='';$classMenuColor[3]='';$classMenuColor[4]='';$classMenuColor[5]='';$classMenuColor[6]='';$classMenuColor[7]='menuTexteOn';
?>
<?
	// Récupération des informations passées en paramètres
	$mon_action = $_POST["mon_action"];
	$anti_spam = $_POST["as"];
	
	//echo "--- mon_action : " . $mon_action . "<br>";
	//echo "--- anti_spam : " . $anti_spam . "<br>";
	
	//print_r( $_POST );
	//echo "<br>------------------<br>";
	
	$affichage_envoi_ok = "none";
	
	if ( ( $mon_action == "envoyer" ) && ( $anti_spam == "" ) ) {
		//echo "Envoyer...<br>";
		
		$_to = "aplanteur@gmail.com";
		//$_to = "fjavi.gonzalez@gmail.com";
		$sujet = "Speakers Corner language - Contact";
		//echo "Envoi du message à " . $_to . "<br>";
		
		$entete = "From:SpeakersCornerPro <aplanteur@gmail.com>\n";
		$entete .= "MIME-version: 1.0\n";
		$entete .= "Content-type: text/html; charset= iso-8859-1\n";
		$entete .= "Bcc: fjavi.gonzalez@gmail.com\n";
		
		$corps = "";
		$corps .= "Bonjour,<br><br>";
		$corps .= "Vous avez un message de :<br><b>" . $_POST["nom"] . " " . $_POST["prenom"] . "</b> (" . $_POST["email"] . ")<br>";
		$corps .= $_POST["adresse"] . ", " . $_POST["cp"] . " " . $_POST["ville"] . "<br><br>";
		$corps .= "Tel :".  $_POST["tel"] ."<br>";
		$corps .= "<b>Sujet :</b><br>";
		$corps .= $_POST["sujet"] . "<br><br>";
		$corps .= "<b>Message :</b><br>";
		$corps .= $_POST["msg"] . "<br><br>";
		$corps = utf8_decode( $corps );
		//echo $corps . "<br>";
		
		// Envoi des identifiants par mail
		mail($_to, $sujet, stripslashes($corps), $entete);
		
		$affichage_envoi_ok = "block";
		$affichage_formulaire = "none";
	}
	
	$menu_contact = "active";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<? 
				
	include_once("./include-meta.php"); 
	
	?> 
<!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
			
	<script type="text/javascript" src="js/script.js"></script>	
	<script type="text/javascript" language="javascript" src="js/jquery-latest.min.js"></script>
	<link rel="stylesheet" href="../css/styles.css" type="text/css" charset="utf-8" />
</head>
<body>

<div class="main">
	<div class="header">
		<? 
				
		include_once("./include-logo.php"); 
				
		?> 
	</div>
	<div class="content">
		<div class="content-top">
			<div class="content-top-base">
				<? 
				
				include_once("./include-menu-$societe.php");

				?> 
			</div>
		</div>
		<div class="content-center">
			<div class="content-center-top">
				<div class="content-center-left">
					<div style="float: left; padding: 0px 15px 10px 0px; text-align:center; margin-left: 45px;" >
						<span class="titre-bleu">Contactez nous !</span>
					
						<img style="padding-bottom: 20px; " alt="photo-groupe" src="images/hands.jpg" /><br>
						<span class="texte-gris" style="text-align: left;">
							Adèle Planteur : <br><br>
							Tel : 06 75 57 72 77<br><br>
							Email: aplanteur@gmail.com<br><br>
							ORGANISME DE FORMATION AGRÉÉ CIF/DIF.<br>
							SIRET : 539 317 222 000 39<br>
							N° DECLARATION ACTIVITE : 723 308 573 33
							<br><br>
						</span>
					</div>
				</div>
				<div class="content-center-right">
					<div class="content-center-right-top">
						<span style="display:block; text-align: center;"><img  alt="photo-groupe" src="images/fb-crown.png"/></span>
						<span class="titre-blanc">
							<a href="#" target="_blank">
								Formulaire de Contact
							</a>
						</span>
					</div>
					<div class="content-center-right-bottom">
						
						<div style=" overflow:hidden; border: 0px solid red;">
							<div class="formulaire">
								<form id="contacte" name="contacte" method="post" action="contact-asso.php">
									<input type="hidden" value="envoyer" id="mon_action" name="mon_action">
									<input type="hidden" value="" id="as" name="as">
									
									<div style="text-align:center; border: 1px solid #FFF; padding: 13px; margin-bottom: 5px; display:<?=$affichage_envoi_ok?>">
										<div class="description">
											<h3>Merci,</h3>
											<p>Votre message nous a bien été envoyé.</p>
											<p>Nous vous répondrons dans les plus brefs délais.</p>
										</div>
									</div>
									<input type="text" id="nom" name="nom"  placeholder="Votre nom" required><br>
									<input type="text"  id="prenom" name="prenom" placeholder="Votre prénom"><br>
									<input type="text"  id="adresse" name="adresse" placeholder="Votre adresse"><br>
									<input type="text"  id="cp" name="cp" placeholder="Votre cp"><br>
									<input type="text"  id="ville" name="ville"  placeholder="Votre ville"><br>
									<input type="tel"   id="tel" name="tel"  placeholder="Mon tel" required><br>
									<input type="email" id="email" name="email" placeholder="Votre email" required><br>
									<input type="text"  id="sujet" name="sujet" placeholder="Sujet du message" required><br>
									<textarea id="msg" name="msg" placeholder="Votre message" required></textarea><br>
									<input type="submit" class="submit" value="ENVOYER" style="color: #FFF">
								</form>
							</div>
						</div>
						
					</div>
					
				</div>	  
			</div>
			<img id="soldat" alt="soldat" src="images/soldat.png" />
			
			
		</div>
		<div class="content-center-bas">
			<div class="content-center-bas-droite">
				<div class="cabine-tel">
					<img  alt="cabine telephone" src="images/cabine-tel.png" />
				</div>	
				<div class="info-adele">
					<? 
		
					include_once("./include-cartouche-$societe.php");

					?>
				</div>
			</div>	
		</div>
		
	</div>	
	<div class="footer">
		<? 
		
		include_once("./include-footer-$societe.php");

		?>
	</div>
</div>
</body>
</html>