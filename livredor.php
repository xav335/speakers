<?php 
	if ($_GET["type"]=='pro') {
		$societe="pro";
	}else {
		$societe="asso";
	}
	$classMenuBackgroung[0]='';$classMenuBackgroung[1]='';$classMenuBackgroung[2]='';$classMenuBackgroung[3]='';$classMenuBackgroung[4]='';$classMenuBackgroung[5]='';$classMenuBackgroung[6]='menuTexteFondOn';$classMenuBackgroung[7]='';
	$classMenuColor[0]='';$classMenuColor[1]='';$classMenuColor[2]='';$classMenuColor[3]='';$classMenuColor[4]='';$classMenuColor[5]='';$classMenuColor[6]='menuTexteOn';$classMenuColor[7]='';
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
		
		//$_to = "aplanteur@gmail.com";
		$_to = "fjavi.gonzalez@gmail.com";
		$sujet = "Speakers Corner language - Nv message Livre d'or";
		//echo "Envoi du message à " . $_to . "<br>";
		
		$entete = "From:SpeakersCorner <contact@speakerscornerlanguage.com>\n";
		$entete .= "MIME-version: 1.0\n";
		$entete .= "Content-type: text/html; charset= iso-8859-1\n";
		//$entete .= "Bcc: fjavi.gonzalez@gmail.com\n";
		
		$corps = "";
		$corps .= "Bonjour,<br><br>";
		$corps .= "Nv message pour le livre d'or de :<br><b>" . $_POST["nom"] . " " . "</b> (" . $_POST["email"] . ")<br>";
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
				<div class="content-center-right-news">
					<div class="content-center-right-top">
							<span style="display:block; text-align: center;"><img  alt="photo-groupe" src="images/fb-crown.png"/></span>
							<span class="titre-blanc">Livre d'or</span>
					</div>
					<div class="content-center-right-bottom">
						<div><span class="titre-blanc-gros">Signez le livre d'or !</span></div>
						<div style="width: 100%; border-bottom : 4px ridge white; padding-bottom: 20px;">
							<div style=" overflow:hidden; border: 0px solid red;">
								<div class="formulaire">
									<form id="contacte" name="contacte" method="post" action="livredor.php?type=<?php echo $societe; ?>">
										<input type="hidden" value="envoyer" id="mon_action" name="mon_action">
										<input type="hidden" value="" id="as" name="as">
										
										<div style="text-align:center; border: 1px solid #FFF; padding: 13px; margin-bottom: 5px; display:<?=$affichage_envoi_ok?>">
											<div class="description">
												<h3>Merci,</h3>
												<p>Votre message nous a bien été envoyé.</p>
												<p>Merci pour votre confiance</p>
											</div>
										</div>
										<input type="text" id="nom" name="nom"  placeholder="Votre nom" required><br>
										<input type="email" id="email" name="email" placeholder="Votre email" required><br>
										<textarea id="msg" name="msg" placeholder="Votre message" required></textarea><br>
										<input type="submit" class="submit" value="PUBLIER" style="color: #FFF;">
									</form>
								</div>
							</div>	
						</div>
						<div style="text-align: center; height: 120px;"><img alt="adele planteur" src="images/bridge.png" /></div>
					</div>
						
				</div>	 
				<?php if ($societe=='asso') { ?>
				<div class="content-center-left-news" >
					<div style=" border-bottom : 4px ridge white; padding:20px 20px 20px 20px; border: 1px solid white;">
						<span class="texte-gris" >
						  	Merci pour cette formation en anglais de 10 heures. J’ai de nouveau confiance en moi et j’ai réussi à me
						  	 débrouiller en Cornouailles pendant mes vacances.<br><br>
							Je reviendrai sans hésiter l’été prochain pour rafraîchir de nouveau mes connaissances en anglais.<br><br>
							Merci été bon été.<br><br>
							<b>Virginie.B (Tresses)</b>
						</span>
					</div>
				</div> 
				<div class="content-center-left-news" >
					<div style=" border-bottom : 4px ridge white; padding:20px 20px 20px 20px; border: 1px solid white;">
						<span class="texte-gris" >
						  	Grand merci pour cette année de remise à niveau en anglais. J’ai réussi mon épreuve écrite et orale au
						  	 BAC avec de super notes et c’est vraiment grâce à ma formatrice.<br><br>
							Je recommande à tous ceux désireux d’apprendre l’anglais ou de se perfectionner d’aller chez Speakers’ Corner, vous ne serez pas déçus!<br><br>
							<b>Tiffany.P (Bordeaux Bastide)</b>
						</span>
					</div>
				</div> 
				<div class="content-center-left-news" >
					<div style=" border-bottom : 4px ridge white; padding:20px 20px 20px 20px; border: 1px solid white;">
						<span class="texte-gris" >
						  	Mon fils a suivi les ateliers d’anglais avec Speakers’ Corner et depuis il adore parler et chanter en anglais à la maison. Il reviendra sans hésiter au mois de septembre pour poursuivre son apprentissage.
							<br><br>
 							<b>Patricia, maman d’Alexandre 6 ans. (Latresne)</b>
						</span>
					</div>
				</div> 
				<div class="content-center-left-news" >
					<div style=" border-bottom : 4px ridge white; padding:20px 20px 20px 20px; border: 1px solid white;">
						<span class="texte-gris" >
						  	Depuis 1 an mon fils de 6 ans suit les cours d’anglais après la classe avec Didier tous les jeudis, il est ravi de ce moment ludique et qui le sensibilise énormement à la langue Anglaise.<br>
						  	Je l'ai réinscrit cette année à sa demande!   
							<br><br>
 							<b>Xavier Gonzalez (Latresne)</b>
						</span>
					</div>
				</div> 
				<?php }else{ ?>
				<div class="content-center-left-news" >
					<div style=" border-bottom : 4px ridge white; padding:20px 20px 20px 20px; border: 1px solid white;">
						<span class="texte-gris" >
						  	Merci à Speakers’ Corner pour leur professionnalisme ! Après une formation de 40 heures en anglais des affaires  
						  	j’ai finalement réussi mes entretiens d’embauche et ai décroché une place que je ne n’aurais pas pu espérer sans cette
						  	 remise à niveau en anglais qui m’a redonné confiance.<br><br>
 							<b>Pascal.T (Carignan de Bordeaux)</b>

						</span>
					</div>
				</div> 
				<div class="content-center-left-news" >
					<div style=" border-bottom : 4px ridge white; padding:20px 20px 20px 20px; border: 1px solid white;">
						<span class="texte-gris" >
						  	Un grand merci à la formatrice Adele qui a su parfaitement diagnostiquer mes besoins et me faire progresser. 
						  	Je peux maintenant partir en conférence à l'étranger et comprendre tout ce qui est dit et ainsi prendre part aux conversations 
						  	et donner mon opinion sur les décisions collégiales. Bonne continuation et beaucoup de succès!<br><br>
 							<b>Elodie Barreau ( Bouliac)</b>

						</span>
					</div>
				</div> 
				<?php } ?>
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
