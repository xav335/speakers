<!doctype html>
<html lang="en">
<head>
	<? 
				
	include_once("./include-meta.php"); 
	
	?> 
	
	<script src="js/jquery-1.3.1.min.js"></script>
	
	<style>
		@font-face {
	    font-family: "HelveticaNeueLTStd-Roman";
	    src: url("fonts/HelveticaNeueLTStd-Roman.eot");
	    src: local("☺"),
	    	url("fonts/HelveticaNeueLTStd-Roman.otf") format("opentype"),
	    	url("fonts/HelveticaNeueLTStd-Roman.woff") format("woff"),
	    	url("fonts/HelveticaNeueLTStd-Roman.svg") format("svg")
	    }
		@import url(http://fonts.googleapis.com/css?family=Bentham);
		
		* {padding:0;margin:0;border:0;}
		html {width:100%;height:100%;background:url('img/bg-intro.jpg') no-repeat center center #0e112a;}
		body {width:100%;height:100%;background:url('img/bg-incline.png') no-repeat center center transparent;font-family: 'Bentham', serif;}
		h1 {color:#fff;font-weight:normal;text-transform:uppercase;text-align:center;font-size:34px;border-bottom:1px solid #fff;
					width:485px; margin:0 auto;padding-top:20px;}
		h2 {color:#fff;font-weight:normal;text-transform:uppercase;text-align:center;font-size:18px;}
		
		.logo {position:absolute;z-index:10;top:50%;left:53%;margin-left:-194px;margin-top:-190px;}
		
		.bt-part, .bt-pro {position:absolute;z-index:10;background:#be202f;width:170px;height:29px;
				padding:5px 0px 0 20px;display:block;font-size:22px;text-transform:uppercase;color:#fff;text-decoration:none;}
		.bt-part {top:50%;right:50%;margin-top:-235px;margin-right:120px;}
		.bt-pro {top:50%;left:50%;margin-top:-235px;margin-left:120px;width:196px;padding-left:10px;background:#000;}
		
		.bt-part:hover, .bt-pro:hover {background-position:left bottom;}
		.bt-part:hover {color:#be202f; background:#FFF;}
		.bt-pro:hover {color:#000;background:#FFF;}
		
		
		/* Actualité */
		.actualite {background:url('img/bg-actualite.png') no-repeat center 30px;position:absolute;
				top:50%;margin-top:190px;left:50%;margin-left:-313px;width:626px;height:145px;color:#fff;text-align:center;}
		.actualite p {font-size:18px;padding-top:15px;}
		.actualite p span {font-family: "HelveticaNeueLTStd-Roman";font-size:11px;display:block;padding-top:10px;}
		.actualite a {font-family:"HelveticaNeueLTStd-Roman";text-decoration:none;color:#fff;text-transform:uppercase;font-size:11px;}
		.actualite a:before {content:url('img/plus.png');padding-right:5px;vertical-align:-6px;}
	</style>
	
</head>
<body>
	<h1>Cours d'anglais Latresne</h1>
	<a href="home-asso.php" class="bt-part">Particuliers</a>
	<a href="home-pro.php" class="bt-pro">Professionnels</a>
	
	
	<!-- Décoration -->
	<img src="images/logo-home.png" alt="Speakers'Corner" title="Speakers'Corner" class="logo" />
	
	<!-- Fin Décoration -->
	
	<div class="actualite">
		<h2>Actualité</h2>
		<p>
			Stages d'anglais Toussaint ! Inscrivez vous !
			<span style="padding-bottom: 8px;">22, 23, 24 octobre 2014 COLLÈGE ET LYCÉE LATRESNE</span>
		</p>
		<a href="news.php?type=asso&id=25" title="+ de détails">de détails</a>
		<p>
			Nouveauté !
			<span style="padding-bottom: 8px;">Cours à Bouliac mardi et jeudi 18h pour les primaires !</span>
		</p>
		<a href="news.php?type=asso&id=24" title="+ de détails">de détails</a>
	</div>
	
	
	<script>
		$(document).ready(function() {
			$('.bt-part').hover(function() {
				$('.logo').attr({src:'images/logo-part-home.png'});
			});
			$('.bt-pro').hover(function() {
				$('.logo').attr({src:'images/logo-pro-home.png'});
			});
			$('.bt-part, .bt-pro').mouseout(function() {
				$('.logo').attr({src:'images/logo-home.png'});
			});
		});
	</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11864990-13', 'auto');
  ga('send', 'pageview');

</script>	
</body>
</html>