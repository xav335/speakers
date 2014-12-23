<?php 
	if ($_GET["type"]=='pro') {
		$societe="pro";
	}else {
		$societe="asso";
	}
	$classMenuBackgroung[0]='';$classMenuBackgroung[1]='';$classMenuBackgroung[2]='';$classMenuBackgroung[3]='';$classMenuBackgroung[4]='';$classMenuBackgroung[5]='menuTexteFondOn';$classMenuBackgroung[6]='';$classMenuBackgroung[7]='';
	$classMenuColor[0]='';$classMenuColor[1]='';$classMenuColor[2]='';$classMenuColor[3]='';$classMenuColor[4]='';$classMenuColor[5]='menuTexteOn';$classMenuColor[6]='';$classMenuColor[7]='';
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
							<span class="titre-blanc">Actualités</span>
					</div>
					<div class="content-center-right-bottom">
						<?php if ($societe=='asso') { ?>
						<div style="width: 100%; border-bottom : 4px ridge white; padding-bottom: 20px;">
							<span class="titre-blanc" style="text-align: left;">
								<a href="<?php echo "news.php?type=$societe&id=25" ?>">Stages d'anglais Toussaint ! Inscrivez vous ! </a>
							</span>
							 <span style="text-align: left;" class="texte-gris">
								22, 23, 24 octobre 2014 COLLÈGE ET LYCÉE LATRESNE
							 </span><br>
							<div  style="text-align: right;">
								<a href="<?php echo "news.php?type=$societe&id=25" ?>">Détails </a>
							</div>
						</div>
						<div style="width: 100%; border-bottom : 4px ridge white; padding-bottom: 20px;">
							<span class="titre-blanc" style="text-align: left;">
								<a href="<?php echo "news.php?type=$societe&id=24" ?>">NOUVEAUTE !</a>
							</span>
							 <span style="text-align: left;" class="texte-gris">
								Cours à Bouliac mardi et jeudi 18h pour les primaires!
							 </span><br>
							<div  style="text-align: right;">
								<a href="<?php echo "news.php?type=$societe&id=24" ?>">Détails </a>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>	
				<div class="content-center-left-news">
					<?php if ($societe=='asso') { ?>
						<?php if ($_GET["id"]==''){$_GET["id"]=25;} ?>
						<?php if ($_GET["id"] == '25') { ?>
						<span class="titre-bleu">STAGE D’ANGLAIS TOUSSAINT ! Inscrivez vous !</span><br>
						<div style="float: left; padding: 0px 15px 10px 0px; text-align:center;" >
							<img style="padding-bottom: 4px;" alt="drapeau anglais" src="images/drapeautrans.png" />
						</div>
						<span class="texte-gris"><b>22, 23, 24 octobre 2014 COLLÈGE ET LYCÉE LATRESNE</b><br><br>
						  	9 heures de stage pour développer les compétences orales de l’anglais et revoir les points essentiels des programmes :<br><br>
	
							Un test de niveau déterminera le groupe dans lequel l’élève travaillera.<br>
							<br>
							<ul class="list1">
							   <li class="pucePicto">L’EXPRESSION ORALE : jeux de rôle, débats, animations.</li>
							   <li class="pucePicto">LA COMPREHENSION ORALE : podcasts & vidéos.</li>
							   <li class="pucePicto">GRAMMAIRE : manipulations des temps….en contexte.</li>
							</ul>
								<b>HORAIRES :</b>    <br>  
								<ul class="list1">
								   <li class="pucePicto">Collège 10h/13h</li>
								   <li class="pucePicto">Lycée 14h/16h</li>
								</ul>
								
								<b>INSCRIPTIONS ET RENSEIGNEMENTS </b>: au  06 75 57 72 77<br><br>
								
								<b>TARIF </b>: 13€/h par étudiant<br><br>
						</span>
						<?php }?>
						<?php 
						if ($_GET["id"] == '24') { ?>
						<span class="titre-bleu">NOUVEAUTÉ !</span><br>
						
						<span class="texte-gris">
							Cours à Bouliac mardi et jeudi 18h pour les primaires!
						</span>
						<?php }?>
						
					<?php }else{ ?>
						<span style="text-align: center;" class="titre-bleu"><br><br>Pas de News en ce moment.</span><br><br><br>
					<?php } ?>
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