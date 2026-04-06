<?php
require 'admin/classes/News.php';
require 'admin/classes/utils.php';
session_start();

$news = new News();
$result = $news->newsGet(null);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include_once("./include-meta.php"); ?>
  <title>Speakers'Corner | Cours d'anglais | Latresne Bordeaux</title>
  <style>
    @font-face {
      font-family: "HelveticaNeueLTStd-Roman";
      src: url("fonts/HelveticaNeueLTStd-Roman.eot");
      src: local("☺"),
           url("fonts/HelveticaNeueLTStd-Roman.otf") format("opentype"),
           url("fonts/HelveticaNeueLTStd-Roman.woff") format("woff"),
           url("fonts/HelveticaNeueLTStd-Roman.svg") format("svg");
    }
    html, body { margin: 0; padding: 0; height: 100%; }
    body {
      background: url('img/bg-intro.jpg') no-repeat center center #0e112a;
      background-size: cover;
      background-attachment: fixed;
      font-family: 'Bentham', serif;
    }
    @import url(https://fonts.googleapis.com/css?family=Bentham);
  </style>
</head>
<body>

<div class="scl-landing">

  <img src="images/logo-home.png" alt="Speakers'Corner" class="scl-landing-logo">

  <h1>Cours d'anglais Latresne</h1>
  <h2>Bordeaux &amp; Gironde</h2>

  <div class="scl-landing-buttons">
    <a href="home-asso.php" class="scl-btn-part">Particuliers</a>
    <a href="home-pro.php" class="scl-btn-pro">Professionnels</a>
  </div>

  <div class="scl-landing-badges">
    <a href="images/certif-qualopi.pdf" target="_blank" style="background:#fff; padding:8px 12px; border-radius:6px; display:inline-block;">
      <img src="images/Qualiopi1.png" alt="Certification Qualiopi" style="width:150px; height:auto;">
    </a>
    <img src="images/TOEIC2.png" alt="TOEIC">
  </div>

  <?php if (!empty($result)) { ?>
  <div class="scl-landing-news">
    <p style="font-size:18px; margin-bottom:8px;"><strong>Actualité</strong></p>
    <?php
      $i = 0;
      foreach ($result as $value) {
        if ($i == 2) break;
        $i++;
        $type = ($value['type'] == 1) ? 'pro' : 'asso';
    ?>
    <p>
      <?php echo htmlspecialchars($value['titre']); ?>
      <span style="font-family:'HelveticaNeueLTStd-Roman'; font-size:11px; display:block; padding-top:6px;">
        <?php echo htmlspecialchars($value['accroche']); ?>
      </span>
    </p>
    <a href="news.php?type=<?php echo $type; ?>&id=<?php echo $value['id_news']; ?>" title="Plus de détails">
      &rsaquo; Lire la suite
    </a>
    <?php } ?>
  </div>
  <?php } ?>

</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include_once("./analyticstracking.php"); ?>
</body>
</html>
