<?php 
	$societe="asso";
	$classMenuBackgroung[0]='';$classMenuBackgroung[1]='menuTexteFondOn';$classMenuBackgroung[2]='';$classMenuBackgroung[3]='';$classMenuBackgroung[4]='';$classMenuBackgroung[5]='';$classMenuBackgroung[6]='';$classMenuBackgroung[7]='';
	$classMenuColor[0]='';$classMenuColor[1]='menuTexteOn';$classMenuColor[2]='';$classMenuColor[3]='';$classMenuColor[4]='';$classMenuColor[5]='';$classMenuColor[6]='';$classMenuColor[7]='';
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
					<span class="titre-blanc-gros">NOTRE EQUIPE</span>
				</div>
			</div>
			<div class="content-center-top">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					<div style="float: left; margin-right: 22px;"><img style="width: 85%;" alt="adele planteur" src="images/adele2.jpg" /></div>
					<span class="titre-bleu"><b>Adele PLANTEUR</b> : Teaching Manager and certified teacher</span><br>
					<span style="font-weight: bold;">Responsable pédagogique de toutes les formations en anglais.</span><br>
					<div style="margin-left: 232px; border: 0px solid white;" >
						<ul class="list1">
						   <li class="pucePicto">2011 : Diplômée du CELTA avec mention, le certificat international d’enseignement de l’anglais délivré par l’université de Cambridge. (ESOL)</li>
						   <li class="pucePicto">2003 : Maîtrise LLCE d’anglais à L’université Bordeaux III.</li>
						</ul>
					</div>
					<br>
					Adele  termine ses études d’anglais en Angleterre tout en enseignant pendant plusieurs années au sein d’établissements scolaires et d’écoles spécialisées du Royaume Uni. Puis en France, elle enseigne pour l’éducation nationale pendant 5 ans. Aujourd’hui, elle dirige Speakers’ Corner en tant que responsable pédagogique où elle dispense également des cours d’anglais général et intervient dans les écoles.
				</div>
			</div>

			<div class="content-center-top">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					<div style="float: right; margin: 2px 2px 2px 42px;"><img style="width: 80%;" alt="Didier Laplace" src="images/didier.jpg" /></div>
					<div style="margin-left: 42px;">
						<span class="titre-bleu"><b>Didier DELPLACE</b> : English Trainer</span><br>
						<div style="margin-left: 8px; border: 0px solid white;" >
							<ul class="list1">
							   <li class="pucePicto">1995 : diplômé d’un MBA, Master of Business Administration à l’université de Birmingham.</li>
							</ul>
						</div>
						<br>
						Après plusieurs années à Birmingham en tant que formateur, Didier dispense depuis 2 ans  des cours d’anglais général à Speakers’ Corner et s’occupe des préparations aux TOEIC ET TOEFL.
					</div>
				</div>
			</div>
			
			<div class="content-center-top">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					<div style="margin-left: 42px;">
						<span class="titre-bleu"><b>PAUL WILSON</b> : English Teacher</span><br>
						Enseignant natif et diplômé du TEFLE, certificat d’enseignement de l’anglais.<br><br>
						Dispense des cours adultes en mini groupes à Speakers’ Corner.<br><br>
					</div>
				</div>
			</div>
			<div class="content-center-top">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					<span class="titre-bleu"><b>Articles de Presse</b></span><br>
					
					<div id="table5">
						   <div class="row">
						      <span class="cell5"><a href="images/article_bulletin_municipal.pdf" target="_blank"><img style="" alt="article pdf" src="images/pdfmairie.jpg" /></a></span>
						      <span class="cell5"><a href="images/sudouest.pdf" target="_blank"><img style="" alt="article journal" src="images/sudouestarticle.jpg" /></a></span>
						      <span class="cell5"><a href="images/article2014.pdf" target="_blank"><img style="" alt="article journal" src="images/article2014.jpg" /></a></span>
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