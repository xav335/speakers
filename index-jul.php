<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Speakers'corner | Cours anglais Latresne</title>
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	
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
		h1 {color:#fff;font-weight:normal;text-transform:uppercase;text-align:center;font-size:24px;border-bottom:1px solid #fff;width:325px; margin:0 auto;padding-top:20px;}
		h2 {color:#fff;font-weight:normal;text-transform:uppercase;text-align:center;font-size:18px;}
		.logo {position:absolute;z-index:10;top:50%;left:50%;margin-left:-194px;margin-top:-150px;}
		.bt-part, .bt-pro {position:absolute;z-index:10;background:url('img/bg-particulier.png') top no-repeat;width:169px;height:29px;padding:5px 0 0 20px;display:block;font-size:18px;text-transform:uppercase;color:#fff;text-decoration:none;}
		.bt-part {top:50%;right:50%;margin-top:-275px;margin-right:-151px;}
		.bt-pro {top:50%;left:50%;margin-top:-240px;margin-left:110px;width:196px;padding-left:30px;background:url('img/bg-professionnel.png') left top no-repeat;}
		.bt-part:hover, .bt-pro:hover {background-position:left bottom;}
		.bt-part:hover {color:#be202f;}
		.bt-pro:hover {color:#000;}
		
		/* Décorations */
		.bigben, .garde, .bus, .bridge-1, .bridge-2, .telephone, .palais, .city, .obus, .drapeau, .gentleman {-webkit-transition:all .6s ease;-moz-transition:all .6s ease;-o-transition:all .6s ease;transition:all .6s ease;}
		.bigben {position:absolute;z-index:2;top:50%;left:50%;margin-top:-430px;margin-left:-260px;transform:rotate(-39.44deg);-ms-transform:rotate(-39.44deg);-webkit-transform:rotate(-39.44deg);}		
		.bigben.on {-webkit-transform: scale(1.2) rotate(-39.44deg);-moz-transform: scale(1.2) rotate(-39.44deg);-o-transform: scale(1.2);transform: scale(1.2) rotate(-39.44deg);}		
		.garde {position:absolute;z-index:3;top:50%;left:50%;margin-top:-240px;margin-left:-225px;transform:rotate(-58.77deg);-ms-transform:rotate(-58.77deg);-webkit-transform:rotate(-58.77deg);}
		.garde.on {-webkit-transform: scale(1.2) rotate(-58.77deg);-moz-transform: scale(1.2) rotate(-58.77deg);-o-transform: scale(1.2);transform: scale(1.2) rotate(-58.77deg);}
		.bus {position:absolute;z-index:3;top:50%;left:50%;margin-top:-220px;margin-left:-30px;transform:rotate(7.34deg);-ms-transform:rotate(7.34deg);-webkit-transform:rotate(7.34deg);}
		.bus.on {-webkit-transform: scale(1.2) rotate(7.34deg);-moz-transform: scale(1.2) rotate(7.34deg);-o-transform: scale(1.2);transform: scale(1.2) rotate(7.34deg);}
		.bridge-1 {position:absolute;z-index:1;top:50%;left:50%;margin-top:-227px;margin-left:-110px;}
		.bridge-1.on {-webkit-transform: scale(1.2);-moz-transform: scale(1.2);-o-transform: scale(1.2);transform: scale(1.2);}
		.bridge-2 {position:absolute;z-index:1;top:50%;left:50%;margin-top:-100px;margin-left:-245px;}
		.bridge-2.on {-webkit-transform: scale(1.2);-moz-transform: scale(1.2);-o-transform: scale(1.2);transform: scale(1.2);}
		.telephone {position:absolute;z-index:3;top:50%;left:50%;margin-top:23px;margin-left:-215px;transform:rotate(-118.48deg);-ms-transform:rotate(-118.48deg);-webkit-transform:rotate(-118.48deg);}
		.telephone.on {-webkit-transform: scale(1.2) rotate(-118.48deg);-moz-transform: scale(1.2) rotate(-118.48deg);-o-transform: scale(1.2);transform: scale(1.2) rotate(-118.48deg);}
		.palais {position:absolute;z-index:3;top:50%;left:50%;margin-top:-135px;margin-left:83px;transform:rotate(98.74deg);-ms-transform:rotate(98.74deg);-webkit-transform:rotate(98.74deg);}
		.palais.on {-webkit-transform: scale(1.2) rotate(98.74deg);-moz-transform: scale(1.2) rotate(98.74deg);-o-transform: scale(1.2);transform: scale(1.2) rotate(98.74deg);}
		.city {position:absolute;z-index:1;top:50%;left:50%;margin-top:-15px;margin-left:-90px;}
		.city.on {-webkit-transform: scale(1.2);-moz-transform: scale(1.2);-o-transform: scale(1.2);transform: scale(1.2);}
		.obus {position:absolute;z-index:3;top:50%;left:50%;margin-top:10px;margin-left:115px;}
		.obus.on {-webkit-transform: scale(1.2);-moz-transform: scale(1.2);-o-transform: scale(1.2);transform: scale(1.2);}
		.drapeau {position:absolute;z-index:2;top:50%;left:50%;margin-top:80px;margin-left:100px;}
		.drapeau.on {-webkit-transform: scale(1.2);-moz-transform: scale(1.2);-o-transform: scale(1.2);transform: scale(1.2);}
		.gentleman {position:absolute;z-index:3;top:50%;left:50%;margin-top:115px;margin-left:45px;transform:rotate(161.63deg);-ms-transform:rotate(161.63deg);-webkit-transform:rotate(161.63deg);}
		.gentleman.on {-webkit-transform: scale(1.2) rotate(161.63deg);-moz-transform: scale(1.2) rotate(161.63deg);-o-transform: scale(1.2);transform: scale(1.2) rotate(161.63deg);}
		.avion {position:absolute;z-index:1;top:50%;left:50%;margin-top:0;margin-left:100px;transform-origin:-100px 0;-ms-transform-origin:-100px 0;-webkit-transform-origin:-100px 0;-webkit-transition:all 3s ease;-moz-transition:all 3s ease;-o-transition:all 3s ease;transition:all 3s ease;}
		.avion.on {-webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);-o-transform: rotate(360deg);transform: rotate(360deg);}
		
		/* Actualité */
		.actualite {background:url('img/bg-actualite.png') no-repeat center 30px;position:absolute;top:50%;margin-top:290px;left:50%;margin-left:-313px;width:626px;height:145px;color:#fff;text-align:center;}
		.actualite p {font-size:18px;padding-top:15px;}
		.actualite p span {font-family: "HelveticaNeueLTStd-Roman";font-size:11px;display:block;padding-top:10px;}
		.actualite a {font-family:"HelveticaNeueLTStd-Roman";text-decoration:none;color:#fff;text-transform:uppercase;font-size:11px;}
		.actualite a:before {content:url('img/plus.png');padding-right:5px;vertical-align:-6px;}
	</style>
	
</head>
<body>
	<h1>Cours anglais Latresne</h1>
	<a href="home-asso.php" class="bt-part">Particuliers</a>
	<a href="home-pro.php" class="bt-pro">Professionnels</a>
	
	
	<!-- Décoration -->
	<img src="img/logo.png" alt="Speakers'Corner" title="Speakers'Corner" class="logo" />
	<img src="img/big-ben.png" alt="" class="bigben" />
	<img src="img/garde.png" alt="" class="garde" />
	<img src="img/bus.png" alt="" class="bus" />
	<img src="img/bridge-1.png" alt="" class="bridge-1" />
	<img src="img/bridge-2.png" alt="" class="bridge-2" />
	<img src="img/telephone.png" alt="" class="telephone" />
	<img src="img/palais.png" alt="" class="palais" />
	<img src="img/city.png" alt="" class="city" />
	<img src="img/obus.png" alt="" class="obus" />
	<img src="img/drapeau.png" alt="" class="drapeau" />
	<img src="img/gentleman.png" alt="" class="gentleman" />
	<img src="img/avion.png" alt="" class="avion" />
	<!-- Fin Décoration -->
	
	<div class="actualite">
		<h2>Actualité</h2>
		<p>
			Stages d'anglais pré-rentrée ! Inscrivez vous !
			<span>26, 27, 28, 29  août 2014 COLLÈGE ET LYCÉE LATRESNE</span>
		</p>
		<a href="news.php" title="+ de détails">de détails</a>
	</div>
	
	<script>
		$(document).ready(function() {
			$('.bt-part').hover(function() {
				$('.logo').attr({src:'img/logo-part.png'});
				$('.bigben, .garde, .bus, .bridge-1, .bridge-2, .telephone').addClass('on');
			});
			$('.bt-pro').hover(function() {
				$('.logo').attr({src:'img/logo-pro.png'});
				$('.palais, .city, .obus, .drapeau, .gentleman, .avion').addClass('on');
			});
			$('.bt-part, .bt-pro').mouseout(function() {
				$('.logo').attr({src:'img/logo.png'});
				$('.bigben, .garde, .bus, .bridge-1, .bridge-2, .telephone, .palais, .city, .obus, .drapeau, .gentleman, .avion').removeClass('on');
			});
		});
	</script>
	
</body>
</html>