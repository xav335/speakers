<?php 
require 'admin/classes/News.php';
require 'admin/classes/utils.php';
session_start();
?>
<?php 
	if ($_GET["type"]=='pro') {
		$societe="pro";
	}else {
		$societe="asso";
	}
	$classMenuBackgroung[0]='';$classMenuBackgroung[1]='';$classMenuBackgroung[2]='';$classMenuBackgroung[3]='';$classMenuBackgroung[4]='';$classMenuBackgroung[5]='menuTexteFondOn';$classMenuBackgroung[6]='';$classMenuBackgroung[7]='';
	$classMenuColor[0]='';$classMenuColor[1]='';$classMenuColor[2]='';$classMenuColor[3]='';$classMenuColor[4]='';$classMenuColor[5]='menuTexteOn';$classMenuColor[6]='';$classMenuColor[7]='';

	// Tableau news pour partie gauche
	$news = new News();
	$result = $news->newsGet($societe);
	//print_r($result);
	if (empty($result)) {
		$message = 'Aucun enregistrements';
	} else {
		$message = '';
	}	
	
	
	
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
						<?php 
							if (!empty($result)) { 
								$i=0;
								$id_defauft = $result['0']['id_news'];
								foreach ($result as $value) {
									//if ($i==2) break;  // 2 actus affichée Max
									$i++;
									?>
									<div style="width: 100%; border-bottom : 4px ridge white; padding-bottom: 20px;">
										<span class="titre-blanc" style="text-align: left;">
											<a href="news.php?type=<?php echo $societe ?>&id=<?php echo $value['id_news'] ?>"><?php echo $value['titre'] ?></a>
										</span>
										 <span style="text-align: left;" class="texte-gris">
											<?php echo $value['accroche'] ?>
										 </span><br>
										<div  style="text-align: right;">
											<a href="news.php?type=<?php echo $societe ?>&id=<?php echo $value['id_news'] ?>">Détails </a>
										</div>
									</div>
							<?php } ?>	
						<?php } ?>
					</div>
				</div>	
				
				<?php 
					// Tableau news pour detail actu
					if (isset($id_defauft)) {
						if (isset($_GET['id'])){ //Modif
							$id_defauft = $_GET['id'];
						}	
						$result2 = $news->newsGet($id_defauft);
						$news=null;
						//print_r($result);
						if (empty($result2)) {
							$message = 'Aucun enregistrements';
						} else {
							$type=  		$result2[0]['type'];
							$titre=  		$result2[0]['titre'];
							$date_news= 	traitement_datetime_affiche($result2[0]['date_news']);
							$accroche= 		$result2[0]['accroche'];
							$contenu= 	$result2[0]['contenu'];
						}
					} else { //pas de news
						$type=  		null;
						$titre=  		null;
						$date_news= 	null;
						$accroche= 		null;
						$contenu= 	null;
					}
				?>
				
				<div class="content-center-left-news">
					<?php if (isset($titre)) { ?>
						<span class="titre-bleu"><?php echo $titre ?></span><br>
						<span class="texte-gris"><b><?php echo $accroche ?></b><br><br>
						  	<?php echo $contenu ?>
						</span>
						
						
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