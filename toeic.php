<?php 
	$societe="pro";
	$classMenuBackgroung[0]='';$classMenuBackgroung[1]='';$classMenuBackgroung[2]='';$classMenuBackgroung[3]='menuTexteFondOn';$classMenuBackgroung[4]='';$classMenuBackgroung[5]='';$classMenuBackgroung[6]='';$classMenuBackgroung[7]='';
	$classMenuColor[0]='';$classMenuColor[1]='';$classMenuColor[2]='';$classMenuColor[3]='menuTexteOn';$classMenuColor[4]='';$classMenuColor[5]='';$classMenuColor[6]='';$classMenuColor[7]='';
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
				<div class="content-center-only" style="background-color: #858584;">
					
					<div style="text-align: center;">
					<span class="titre-blanc">FORMATION / PREPARATION</span> 
					<img  alt="toeic" src="images/logo_TOEIC1.png" /></div>
				</div>
			</div>
			<div class="content-center-top">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					<div style="float: right; margin:22px 0px 22px 22px;"><img style="width: 75%;" alt="adele planteur" src="images/gerkin.jpg" /></div>
					<div style="margin-left: 32px; border: 0px solid white;" >
						<span class="titre-bleu">Objectifs:</span>	
						
							<ul class="list1">
							   <li class="pucePicto">Acquérir et maîtriser les techniques qui vous permettront de répondre correctement aux questions des divers types d'exercices que comprend l'examen TOEIC®.</li>
							   <li class="pucePicto">Rafraîchir et approfondir vos connaissances générales en anglais (lexique, grammaire...)</li>
							   <li class="pucePicto">Vous permettre de vous sentir en mesure de répondre aux exigences professionnelles en matière de communication.</li>
							</ul>
						<br>
						<span class="titre-bleu">Programme de la formation</span>	
						
						Evaluation du niveau du stagiaire et révisions.<br>
						Examen des connaissances actuelles, des points forts et des axes d'amélioration.<br>
						<b>Consolidation au niveau des structures grammaticales fondamentales</b><br><br>
						<b>Travail intensif sur la compréhension orale de la langue :</b><br>
					
						<ul class="list1">
						   <li class="pucePicto">Ecoute et reconstitution de monologues,  dialogues enregistrés entre plusieurs personnes en situation professionnelle.</li>
						   <li class="pucePicto">Comprendre le récit d'un fait d'actualité ou d'un fait divers : savoir en tirer les éléments principaux (date, lieu, actions, motivations…) </li>
						</ul>
						<b>Perfectionnement à la compréhension écrite :</b><br>
						<ul class="list1">
						   <li class="pucePicto">Travail d'enrichissement du vocabulaire professionnel et commercial.</li>
						   <li class="pucePicto">Savoir lire et analyser les documents utilisés en situation professionnelle an anglais : emails, synthèses, comptes-rendus, notices, documentations…</li>
						</ul>
						<b>Test blanc final  :</b><br>
						<ul class="list1">
						   <li class="pucePicto">Mise en situation d'examen avec un équivalent du score du TOEIC pour évaluer et valider votre progression  </li>
						</ul>
						<br>
						<span class="titre-bleu">Durée  de la formation</span>	
						Durée de la formation : 25 heures  (en fonction du niveau de départ B1).
						<br><br><br>
						<span class="titre-bleu">Organisation de la formation</span>	
						Notre Responsable pédagogique est à votre disposition pour vous proposer, en fonction de votre niveau 
						initial et de vos objectifs, la formule la plus adaptée.  <br><br>
						Classes de 2 heures par semaine en individuel i.e. face à face avec le professeur.
						<br><br>
					</div>
					
						<div id="table3" style="margin-left: 540px;">
						   <div class="row3">
						      <span class="cell3"></span>
						      <span class="cell3"><a  href="contact-pro.php">Pour tout renseignement contactez nous !</a></span>
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