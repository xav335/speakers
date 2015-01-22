<?php 
	require 'admin/classes/Goldbook.php';
	require 'admin/classes/Contact.php';
	require 'admin/classes/Goldbookpro.php';
	session_start();
	
	if ($_GET["type"]=='pro') {
		$societe="pro";
	}else {
		$societe="asso";
	}
	$classMenuBackgroung[0]='';$classMenuBackgroung[1]='';$classMenuBackgroung[2]='';$classMenuBackgroung[3]='';$classMenuBackgroung[4]='';$classMenuBackgroung[5]='';$classMenuBackgroung[6]='menuTexteFondOn';$classMenuBackgroung[7]='';
	$classMenuColor[0]='';$classMenuColor[1]='';$classMenuColor[2]='';$classMenuColor[3]='';$classMenuColor[4]='';$classMenuColor[5]='';$classMenuColor[6]='menuTexteOn';$classMenuColor[7]='';

	
	function captcha()
	{
		$liste = array('cheval', 'oiseau', 'chien', 'chat');
		$_SESSION['captcha'] = $liste[array_rand($liste)];
		return $_SESSION['captcha'];
	}
	
?>
<?php 
	$goldbook = new Goldbook();
	$goldbookpro = new Goldbookpro();
	
	if ($societe=="asso") {
		$result = $goldbook->goldbookValidGet(null);
	} else {
		$result = $goldbookpro->goldbookproValidGet(null);
	}
	//print_r($result);
	if (empty($result)) {
		$message = 'Aucun enregistrements';
	} else {
		$message = '';
	}

?>
<?
	
	$affichage_envoi_ok = "none";
	if (isset( $_POST["mon_action"])){
		
		$_SESSION['nom'] = $_POST["name"] ;
		$_SESSION['email'] = $_POST["email"] ;
		$_SESSION['message'] = $_POST["message"];
		
		if ( ( $_POST["mon_action"] == "envoyer" ) && ( $_POST['captcha'] == $_SESSION['captcha']) ) {
			//echo "Envoyer...<br>";
			$_to = "aplanteur@gmail.com";
			//$_to = "fjavi.gonzalez@gmail.com";
			$sujet = "Speakers Corner language - Nv message Livre d'or ". $societe;
			//echo "Envoi du message à " . $_to . "<br>";
			
			$entete = "From:SpeakersCorner <contact@speakerscornerlanguage.com>\n";
			$entete .= "MIME-version: 1.0\n";
			$entete .= "Content-type: text/html; charset= iso-8859-1\n";
			$entete .= "Bcc: fjavi.gonzalez@gmail.com\n";
			
			$corps = "";
			$corps .= "Bonjour,<br><br>";
			$corps .= "Nv message pour le livre d'or ". $societe ." de :<br><b>" . $_POST["name"] . " " . "</b> (" . $_POST["email"] . ")<br>";
			$corps .= "<b>Message :</b><br>";
			$corps .= $_POST["message"] . "<br><br>";
			$corps = utf8_decode( $corps );
			//echo $corps . "<br>";
			
			// Envoi des identifiants par mail
			mail($_to, $sujet, stripslashes($corps), $entete);
			
			if ($societe=="asso") {
				$goldbook->goldbookAdd($_POST);
			} else {
				$goldbookpro->goldbookproAdd($_POST);
			}
			
			//stockage dans contact
			$contact = new Contact();
			$_POST['fromgoldbook']='on';
			$_POST['newsletter']='';
			$_POST['firstname']='';
			$_POST['fromcontact']='';
			$contact->contactAdd($_POST);
			$contact=null;
			
			$affichage_envoi_ok = "ok";
			$_SESSION['nom'] ='';
			$_SESSION['email']='';
			$_SESSION['message'] ='';
		} else {
			$affichage_envoi_ok = "captchaKO";;
		}
	} else {
		$_SESSION['nom'] ='';
		$_SESSION['email']='';
		$_SESSION['message'] ='';
	}
	
	
	$goldbook = null;	
	$goldbookpro = null;
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
										<input type="hidden" name="datepicker"  value="<?php echo date('d/m/Y')?>" >
										<input type="hidden" name="online"  value="0" >
										
										<div style="text-align:center; border: 1px solid #FFF; padding: 13px; margin-bottom: 5px; display:<?=$affichage_envoi_ok?>">
											<div class="description">
												<?php if($affichage_envoi_ok == 'ok') {?>
												<h3>Merci,</h3>
												<p>Votre message nous a bien été envoyé.</p>
												<p>Merci pour votre confiance</p>
												<?php } else { ?>
												<h3>Contrôle AntiSpam,</h3>
												<p>Le mot à recopier n'est pas correct</p>
												<p>Merci de recommencer</p>
												<?php }?>
											</div>
										</div>
										<input type="text" id="nom" name="name"  placeholder="Votre nom" required value="<?php echo $_SESSION['nom'] ?>"><br>
										<input type="email" id="email" name="email" placeholder="Votre email" required value="<?php echo $_SESSION['email'] ?>"><br>
										<textarea id="msg" name="message" placeholder="Votre message" required><?php echo $_SESSION['message'] ?></textarea><br>
										<label for="captcha">Antispam, recopiez le mot : <strong><?php echo captcha(); ?></strong></label>
            							<input type="text" name="captcha" id="captcha" required /><br>
										<input type="submit" class="submit" value="PUBLIER" style="color: #FFF;">
									</form>
								</div>
							</div>	
						</div>
						<div style="text-align: center; height: 120px;"><img alt="adele planteur" src="images/bridge.png" /></div>
					</div>
						
				</div>	 
				<?php 
					if (!empty($result)) { 
						$i=0;
						foreach ($result as $value) {
							$i++;
							?>
						<div class="content-center-left-news" >
							<div style=" border-bottom : 4px ridge white; padding:20px 20px 20px 20px; border: 1px solid white;">
								<span class="texte-gris" >
								  	<?php echo $value['message'] ?><br><br>
									<b><?php echo $value['nom'] ?></b>
								</span>
							</div>
						</div> 
						<?php } ?>
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