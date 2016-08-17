<?php 
	$societe="asso";
	$classMenuBackgroung[0]='';$classMenuBackgroung[1]='';$classMenuBackgroung[2]='menuTexteFondOn';$classMenuBackgroung[3]='';$classMenuBackgroung[4]='';$classMenuBackgroung[5]='';$classMenuBackgroung[6]='';$classMenuBackgroung[7]='';
	$classMenuColor[0]='';$classMenuColor[1]='';$classMenuColor[2]='menuTexteOn';$classMenuColor[3]='';$classMenuColor[4]='';$classMenuColor[5]='';$classMenuColor[6]='';$classMenuColor[7]='';
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
					<span class="titre-blanc-gros">ANGLAIS GENERAL</span>
				</div>
			</div>
			
			<div class="content-center-top" id="kids">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c; ">
					<img  alt="picto enfant" style="float: right; margin-right: 40px;" src="images/anglais-enfants.jpg" />
					<span class="titre-bleu-gros" ><b>- ENFANTS -</b></span><br>
					<span class="titre-bleu">MINI SCHOOL (3/4 ans)</span>
					Cet atelier d’éveil à l’anglais accueille les enfants âgés de 3 ans à 4 ans. 
					Ils  sont initiés à l’anglais par des activités ludiques orales adaptées à leur âge. 
					Au travers de comptines traditionnelles, de courts dessin- animés, de jeux, de flash cards,  
					ils découvrent le vocabulaire, la prononciation et l’intonation de l’anglais. 
					En effet c’est à cet âge qu’un enfant acquiert un accent parfait.<br><br>
					
					<span class="titre-bleu">KIDS 1 : (5/6ans).</span>
					Initiation à la langue anglaise  et apprentissage par les chansons, les jeux, les vidéos made in England.
					Les enfants apprennent avec plaisir des mots et des phrases courtes de la vie courante, ils acquièrent un bon accent anglais.<br><br> 
					
					<span class="titre-bleu">KIDS 2: (enfants niveau cours élémentaire)</span>
					Cet atelier d’une heure s’adresse aux enfants du CE et leur fait découvrir l’univers anglophone des 
					enfants britanniques de leur âge. Jeux de rôle, chansons à thème, développement de la compréhension 
					de l’oral pour habituer l’oreille aux sons de l’anglais.<br><br> 
					
					<span class="titre-bleu">KIDS 3 : (enfants niveau cours moyen)</span>
					Club dédié aux échanges et au travail par le jeu de rôle. Un objectif précis est donné 
					en début de séance et les enfants se déplacent, échangent, questionnent en anglais uniquement.
					Ils prennent conscience de la portée communicative concrète de la langue en alliant l’apprentissage, le jeu et le « fun ».<br><br> 
					<div id="table3" style="margin-left: 540px;">
					   <div class="row3">
					      <span class="cell3"><img id="pdf" alt="pdf" style="width: 45px" src="images/pdficon-petit.png" /></span>
					      <span class="cell3"><a  href="images/ficheinscription2016.pdf" target="_blank">Télécharger le formulaire d'inscription</a></span>
					   </div>
					</div>
				</div>
			</div>

			<div class="content-center-top" id="teens">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c; ">
					<img  alt="picto ados" style="float: right; margin-right: 40px;" src="images/anglais-ados.jpg" />
					<span class="titre-bleu-gros" ><b>- ADOS -</b></span><br>
					<span class="titre-bleu">TEENS : (Collège)</span>
					Les collégiens ont aussi leur club pour échanger et perfectionner leur anglais en
					 communicant sur des sujets qu’ils affectionnent (musique, films, sport). La compréhension 
					 orale est approfondie par l’écoute de documents audio/vidéo authentiques. L’expression orale est améliorée par un travail centré sur 
					l’accentuation, le rythme et la prononciation où la grammaire est toujours traitée en contexte.<br><br>
					
					<span class="titre-bleu" id="students">HIGH SCHOOL : (lycée)</span>
					Perfectionnement, enrichissement de la connaissance scolaire de l’anglais. (Re) mise en confiance et amélioration de l’accent et de la
					 compréhension orale. Méthodologie et préparations aux examens. <br><br> 
					
					<div style="text-align: center; background-color: #858584; margin: 10px 200px 30px 200px; padding: 30px 30px 30px 20px;"">
						<b>Formule PREPA-EXAMS</b> : 8h de révisons intensives préparatoires à un examen ou concours.<br><br>
						<span class="titre-bleu">STAGES INTENSIFS PENDANT TOUTES LES VACANCES SCOLAIRES</span>
					</div>
					
					<div id="table3" style="margin-left: 540px;">
					   <div class="row3">
					      <span class="cell3"><img id="pdf" alt="pdf" style="width: 45px" src="images/pdficon-petit.png" /></span>
					      <span class="cell3"><a  href="images/ficheinscription2016.pdf" target="_blank">Télécharger le formulaire d'inscription</a></span>
					   </div>
					</div>
					
				</div>
			</div>
			
			<div class="content-center-top" id="adultes">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					<div style="float: right; margin:22px 22px 22px 22px;"><img style="width: 180px;" alt="adele planteur" src="images/bigbeng.png" /></div>
					<span class="titre-bleu-gros" ><b>- ADULTES -</b></span><br>
					<span class="titre-bleu">Initiation, formation, remise à niveau, perfectionnement.</span>
					Spécialisé dans la formation des adultes Speakers’ Corner vous réconciliera avec l’anglais. Travail sur
					 la compréhension et la communication orale courante avec des supports authentiques. 
					(Conversations, extraits de journaux, vidéos, coursebooks…) dans une ambiance détendue par groupe de niveau. <br><br>
					
					<span class="titre-bleu">TEATIME :</span>
					Venez partager un moment de détente et de conversation en anglais autour d’un thé et de quelques shortbreads.  
					Atelier de conversation à bâtons rompus pour tous 
					ceux qui ont déjà de bonnes bases en anglais et qui souhaite juste « rafraîchir » leur oral.<br><br> 
					
					<div id="table3" style="margin-left: 540px;">
					   <div class="row3">
					      <span class="cell3"><img id="pdf" alt="pdf" style="width: 45px" src="images/pdficon-petit.png" /></span>
					      <span class="cell3"><a  href="images/ficheinscription2016.pdf" target="_blank">Télécharger le formulaire d'inscription</a></span>
					   </div>
					</div>
				</div>
			</div>
			<div class="content-center-top" id="binomes">
				<div class="content-center-only" style=" border-top: 10px solid #9d9d9c; background-color: #858584;">
					<span class="titre-blanc-gros" >COURS PARTICULIERS/ EN BINÔME</span>
				</div>
			</div>
			<div class="content-center-top">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					Cours individuels pour enfants et adultes en formation continue à l’année ou intensive. (10h minimum).<br><br> 
					Les cours en face à face avec un professeur permettent à l’étudiant de gagner en confiance, d’aller à son rythme
					 et de développer les compétences souhaitées. Un programme personnalisé est mis au point pour répondre à vos besoins
					  de façon précise et efficace.<br> 
					Les cours en binôme permettent aux enfants de la même famille de partager l’apprentissage de l’anglais tout en
					 ayant des objectifs différents en fonction de l’âge. La formule binôme permet au professeur d’utiliser une pédagogie 
					 différenciée et ainsi répondre aux besoins individuels des deux étudiants.<br><br>  
					Les adultes peuvent également profiter de cette formule et ainsi apprendre l’anglais avec un ami ou collègue.
					<br><br> 
					<div id="table3" style="margin-left: 540px;">
					   <div class="row3">
					      <span class="cell3"><img id="pdf" alt="pdf" style="width: 45px" src="images/pdficon-petit.png" /></span>
					      <span class="cell3"><a  href="images/ficheinscription2016.pdf" target="_blank">Télécharger le formulaire d'inscription</a></span>
					   </div>
					</div>
				</div>
			</div>
			
			<div class="content-center-top">
				<div class="content-center-only" style=" border-top: 10px solid #9d9d9c; background-color: #858584;">
					<span class="titre-blanc-gros" id="pap">PACKAGE : « Prêt à partir »</span>
				</div>
			</div>
			
			<div class="content-center-top">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					<div style="text-align: center;"><img alt="photo-groupe" src="images/photo-groupe.jpg" /></div><br>
					10h/20h/30h de cours préparatoires à un voyage ou un départ. 
					A l’issue de ce stage, vous serez capable de maîtriser les situations de la vie courante à l’étranger.
					<br><br>
					<div id="table3" style="margin-left: 540px;">
					   <div class="row3">
					      <span class="cell3"><img id="pdf" alt="pdf" style="width: 45px" src="images/pdficon-petit.png" /></span>
					      <span class="cell3"><a  href="images/ficheinscription2016.pdf" target="_blank">Télécharger le formulaire d'inscription</a></span>
					   </div>
					</div>
				</div>
			</div>
			<div class="content-center-top" id="stages">
				<div class="content-center-only" style=" border-top: 10px solid #9d9d9c; background-color: #858584;">
					<span class="titre-blanc-gros" id="pap">Stages 2014 / 2015 <br>... PRENEZ UNE LONGUEUR D'AVANCE!!!</span>
				</div>
			</div>
			
			<div class="content-center-top">
				<div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
					<div style="text-align: center; float:left; padding: 0px 30px 20px 10px; "><img alt="photo-stage" src="images/stages.jpg" /></div>
					Les stages d’anglais en petits groupes permettent de progresser significativement à l’oral comme à l’écrit en seulement quelques jours. 
					Ces stages intensifs organisés pendant les vacances scolaires permettent de réviser les leçons apprises pendant l’année, 
					de consolider son vocabulaire, de mettre en application les principales règles de grammaire et de progresser en expression 
					orale et écrite afin de poursuivre l’année scolaire dans les meilleures conditions.<br><br>
 
					Les petits groupes sont particulièrement propices à l’expression orale ce qui permet de gagner rapidement en confiance.<br><br>
					 
					Tout en bénéficiant de la dynamique d’un groupe, l’élève peut poser les questions plus facilement qu’en classe grâce
					 au petit nombre de participants  et à la relation privilégiée avec l’enseignant.<br><br>
					
					Ces stages s’adressent aux élèves de la sixième à la terminale et ont lieu à chaque période de vacances : 
					Toussaint, Février, Pâques et vacances d'été.<br><br>
					
					<div id="table3" style="margin-left: 540px;">
					   <div class="row3">
					      <span class="cell3"><img id="pdf" alt="pdf" style="width: 45px" src="images/picto-clock.png" /></span>
					      <span class="cell3"><a href="news.php?type=asso&id=23">Dates horaires et tarifs</a></span>
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