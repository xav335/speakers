<?php
$societe="pro";
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
                    <span class="titre-blanc-gros">CPF : des formations en anglais 100 % personnalisées 100% financées</span>
                </div>
            </div>
            <div class="content-center-top">
                <div class="content-center-only" style="border-top: 10px solid #9d9d9c;">
                    <div style="margin-left: 32px; border: 0px solid white;" >
                        <div style="float: right; margin-right: 22px;"><img style="width: 85%;" alt="adele planteur" src="images/drapeauauvent.png" /></div>

                        <span class="titre-bleu">1 - DES FORMATIONS 100% FINANCEES.</span>
                        Agrée organisme de formation, les salariés en CDI/CDD et les demandeurs d’emploi peuvent bénéficier d’une formation en anglais
                        qui sera financée à 100% dans le cadre du CPF.<br><br>
                        <a href="contact-pro.php">Contactez notre responsable pour les démarches à entreprendre.</a>
                        <br><br><br>

                        <span class="titre-bleu">2 - DES FORMATIONS AJUSTEES A VOS BESOINS.</span>
                        Avec Speakers’ Corner PRO chacun peut choisir son programme de formation
                        <div style="margin-left: 10px; border: 0px solid white;" >
                            <ul class="list1">
                                <li class="pucePicto">en cours individuel, en binôme, en mini groupe</li>
                                <li class="pucePicto">en anglais général ou professionnel</li>
                                <li class="pucePicto">en formule intensive ou extensive.</li>
                            </ul>
                        </div>
                        <br>

                        <span class="titre-bleu">3 - DES FORMATIONS FACILES A VIVRE.</span>
                        Le formateur se déplace au sein de votre entreprise avec son matériel afin d’éviter au stagiaire les questions logistiques
                        et ainsi pouvoir se concentrer entièrement et seulement sur son apprentissage.<br>
                        Le calendrier de formation est établi avec le stagiaire en fonction de ses disponibilités.<br>
                        Les horaires sont flexibles pour intégrer le mieux possible la formation dans la vie professionnelle.
                        <br><br><br>
                        <div style="float: right; margin-right: 22px;"><img style="" alt="adele planteur" src="images/bigben.jpg" /></div>
                        <span class="titre-bleu">4 - DES FORMATIONS SUIVIES ET RIGOUREUSES.</span>
                        Toute formation est composée d’étapes précises et essentielles :
                        <div style="margin-left: 10px; border: 0px solid white;" >
                            <ul class="list1">
                                <li class="pucePicto">La rencontre permettant la définition des objectifs professionnels et pédagogiques</li>
                                <li class="pucePicto">Le test d’entrée pour évaluer le niveau du stagiaire</li>
                                <li class="pucePicto">Le test de mi-parcours.</li>
                                <li class="pucePicto">Le bilan pédagogique et les conseils de suivi de formation.</li>
                            </ul>
                        </div>
                    </div>
                    <div id="table3" style="margin-left: 540px;">
                        <div class="row3">
                            <span class="cell3"><img id="pdf" alt="pdf" style="width: 45px" src="images/pdficon-petit.png" /></span>
                            <span class="cell3"><a  href="images/ficheinscriptionpro2021.pdf" target="_blank">Télécharger le formulaire d'inscription</a></span>
                        </div>
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