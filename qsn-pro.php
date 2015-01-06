<?php 
	$societe="pro";
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
					<span class="titre-blanc-gros">Qui sommes nous</span>
				</div>
			</div>
			<div class="content-center-top">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					<div style="float: left; margin-right: 22px;"><img  alt="adele planteur" src="images/adele2.jpg" /></div>
					<span class="titre-bleu"><b>Adele PLANTEUR</b> : Teaching Manager and certified teacher</span><br>
					<span style="font-weight: bold;">Responsable pédagogique de toutes les formations en anglais.</span><br>
					<div style="margin-left: 232px; border: 0px solid white;" >
						<ul class="list1">
						   <li class="pucePicto">2011 : Diplômée du CELTA avec mention, le certificat international d’enseignement de l’anglais délivré par l’université de Cambridge. (ESOL)</li>
						   <li class="pucePicto">2003 : Maîtrise LLCE d’anglais à L’université Bordeaux III.</li>
						</ul>
					</div>
					<br>
					Adele  termine ses études d’anglais en Angleterre tout en enseignant pendant plusieurs années au sein d’établissements scolaires et 
					d’écoles spécialisées du Royaume Uni. Puis en France, elle enseigne pour l’éducation nationale pendant 5 ans. Aujourd’hui, elle dirige
					 l’organisme de formation Speakers’ Corner Pro et propose des formations en anglais des affaires aux salariés en DIF/CIF ainsi qu’aux chefs 
					 d’entreprise.
				</div>
			</div>
			<div class="content-center-top">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					<span class="titre-bleu"><b>Ils nous ont déjà fait confiance…</b></span><br>
					<div style="text-align: center;">	
					
						<div id="table5">
						   <div class="row">
						      <span class="cell5"><img style="" alt="" src="images/aerocampus.png" /></span>
						      <span class="cell5"><img style="" alt="" src="images/paul.jpg" /></span>
						      <span class="cell5"><img style="" alt="" src="images/cofely.jpg" /></span>
						   </div>
						   <div class="row">
						      <span class="cell5"><img style="" alt="" src="images/cofely.jpg" /></span>
						      <span class="cell5" ><img style="" alt="" src="images/leclerc.png" /></span>
						      <span class="cell5"><img style="" alt="" src="images/orange.png" /></span>
						   </div>
						   <div class="row">
						      <span class="cell5"><img style="" alt="" src="images/staugustin.png" /></span>
						      <span class="cell5"><img style="" alt="" src="images/pole.png" /></span>
						      <span class="cell5">TRANS SERVICE BASSENS</span>
						     
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