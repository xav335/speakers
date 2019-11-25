<?php 
	$societe="asso";
	$classMenuBackgroung[1]='';$classMenuBackgroung[2]='';$classMenuBackgroung[3]='';$classMenuBackgroung[4]='';$classMenuBackgroung[5]='';$classMenuBackgroung[6]='';$classMenuBackgroung[7]='menuTexteFondOn';
	$classMenuColor[1]='';$classMenuColor[2]='';$classMenuColor[3]='';$classMenuColor[4]='';$classMenuColor[5]='';$classMenuColor[6]='';$classMenuColor[7]='menuTexteOn';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Speakers Corner Language</title>
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
		<img id="logo" alt="logo" src="images/logo-asso.png"><br>
		<span id="titre-site">COURS ANGLAIS POUR TOUS</span>
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
				<div class="content-center-only">
					<div style="text-align: center;"><img alt="photo-groupe" src="images/photo-groupe.jpg" /></div>
					<span class="titre-bleu">Avec Speakers ’Corner vous pratiquerez l’anglais dont vous avez besoin !</span>
					
					Une langue s’écoute et se parle autant, si ce n’est plus, qu’elle se lit ou s’écrit.Les cours d’anglais et de FLE portent donc essentiellement sur la compréhension et l’expression orale ainsi que la prononciation. Il s’agit d’acquérir du vocabulaire, des structures syntaxiques et de 
					« l’oreille ».<br><br>
					
					Le travail en petits groupes permet d’apprendre à s’exprimer sans complexe, sans accent et avec plaisir.
					Speakers ‘Corner allie le plaisir et la rigueur de l’apprentissage. <br><br>
					
					D’un côté, vous développerez vos compétences langagières durant les cours et les ateliers grâce à une méthode dynamique,
					personnalisée et rigoureuse dans la lignée du Cambridge ESOL.<br><br>
					
					De l’autre vous vivrez véritablement la langue anglaise grâce aux nombreuses activités et sorties culturelles proposées à tous les adhérents : pièces de théâtre, rencontres avec des anglophones lors de diners en « Pub » traditionnel, séances de cinéma…
					
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
					<span class="titre1">Adèle</span><br>
					<span class="titre2">06 75 57 72 17</span><br>
					<span class="titre3">contact@speakerscornerlanguage.fr</span><br>
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