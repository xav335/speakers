<?php 
	$societe="pro";
	$classMenuBackgroung[0]='';$classMenuBackgroung[1]='';$classMenuBackgroung[2]='';$classMenuBackgroung[3]='';$classMenuBackgroung[4]='menuTexteFondOn';$classMenuBackgroung[5]='';$classMenuBackgroung[6]='';$classMenuBackgroung[7]='';
	$classMenuColor[0]='';$classMenuColor[1]='';$classMenuColor[2]='';$classMenuColor[3]='';$classMenuColor[4]='menuTexteOn';$classMenuColor[5]='';$classMenuColor[6]='';$classMenuColor[7]='';
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
					<span class="titre-blanc-gros">TARIFS PROFESSIONNELS</span>
				</div>
			</div>
			
			<div class="content-center-top">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					<div style="text-align: center;">	
						<img style="padding: 20px 30px 20px 30px; float: left; width: 180px;" alt="photo-groupe" src="images/underground.jpg" />
						<br><br><br>
						<div id="table">
						   <div class="row">
						      <span class="cell2">MINI GROUPE</span>
						      <span class="cell">15€/h</span>
						      <span class="cell">Cours en mini groupe de 4 participants minimum et 8 maximum de même niveau</span>
						   </div>
						   <div class="row">
						      <span class="cell2">COURS PARTICULIER</span>
						      <span class="cell">50€/h</span>
						      <span class="cell">Cours en face à face avec la formatrice.</span>
						   </div>
						   <div class="row">
						      <span class="cell2">COURS BINÔME</span>
						      <span class="cell">60€/h</span>
						      <span class="cell">Cours entre 2 élèves (collègues, collaborateurs…) et la formatrice.</span>
						   </div>
						   
						</div>
					</div>	
					
					<div id="table3" style="margin-left: 540px;">
						   <div class="row3">
						      <span class="cell3"><img id="pdf" alt="pdf" style="width: 45px" src="images/pdficon-petit.png" /></span>
						      <span class="cell3"><a  href="images/ficheinscriptionpro2021.pdf" target="_blank">Télécharger le formulaire d'inscription</a></span>
						   </div>
						</div>
					
				</div>
				
				
			</div>
			
			<div class="content-center-top">
				<div class="content-center-only" style="text-align:center; border-top: 10px solid #9d9d9c;">
					<b>Les cours ont lieu soit dans notre salle de formation à Latresne ou dans les locaux de l’entreprise.</b><br><br>

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