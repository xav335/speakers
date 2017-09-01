<?php 
	$societe="asso";
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
					<span class="titre-blanc-gros">TARIFS A L’HEURE 2015 /2016</span>
				</div>
			</div>
			
			<div class="content-center-top">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					<div style="float: left; margin:22px 42px 22px 22px;"><img style="width: 180px;" alt="adele planteur" src="images/heathrow.jpg" /></div>
						<div id="table">
						   <div class="row">
						      <span class="cell2">FORMULES</span>
						      <span class="cell2">COURS MINI GROUPE</span>
						      <span class="cell2">COURS INDIVIDUELS</span>
						   </div>
						   <div class="row">
						      <span class="cell2">ENFANTS DES 3 ANS</span>
						      <span class="cell">12€</span>
						      <span class="cell">30€</span>
						   </div>
						   <div class="row">
						      <span class="cell2">SCOLAIRES/ ADULTES</span>
						      <span class="cell">12€</span>
						      <span class="cell">30€</span>
						   </div>
						    <div class="row">
						      <span class="cell2">TEA TIME</span>
						      <span class="cell">13€</span>
						      <span class="cell">-</span>
						   </div>
						    <div class="row">
						      <span class="cell2">PROFESSIONNELS</span>
						      <span class="cell">17€</span>
						      <span class="cell">40€</span>
						   </div>
						    <div class="row">
						      <span class="cell2">COURS BINÔME</span>
						      <span class="cell">20€ / étudiant</span>
						      <span class="cell">-</span>
						   </div>
						</div>
					
				</div>
			</div>
			
			
			<div class="content-center-top">
				<div class="content-center-only" style="text-align:center; border-top: 10px solid #9d9d9c;">
					<b>ADHESION ANNUELLE 25€ : accès illimité aux sorties culturelles</b><br><br>
                                    
						      Mini groupe enfants : 33 séances.
                                <br>
                                Mini Groupe adultes : 36	
                                <br><br>				
					<div id="table">
						   <div class="row">
						      <span class="cell">Forfait familial : <b style="color: red">-10%</b> pour le 2ème inscrit.
						      </span>
						   </div>
						</div>
					
					
						<div id="table3" style="margin-left: 540px;">
						   <div class="row3">
						      <span class="cell3"><img id="pdf" alt="pdf" style="width: 45px" src="images/pdficon-petit.png" /></span>
						      <span class="cell3"><a  href="images/ficheinscription2017.pdf" target="_blank">Télécharger le formulaire d'inscription</a></span>
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