<nav class="navbar navbar-expand-lg scl-navbar">
  <div class="container-fluid scl-navbar-inner">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navAsso" aria-controls="navAsso" aria-expanded="false" aria-label="Menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navAsso">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[0]) ? ' active' : '' ?>" href="home-asso.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[1]) ? ' active' : '' ?>" href="qsn-asso.php">Qui sommes-nous</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle<?= !empty($classMenuBackgroung[2]) ? ' active' : '' ?>" href="formules-asso.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Formules
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="formules-asso.php#kids">Anglais général</a></li>
            <li><a class="dropdown-item" href="formules-asso.php#binomes">Particuliers / Binômes</a></li>
            <li><a class="dropdown-item" href="formules-asso.php#pap">"Prêt à partir"</a></li>
            <li><a class="dropdown-item" href="formules-asso.php#skype">Atelier Skype</a></li>
            <li><a class="dropdown-item" href="formules-asso.php#stages">Stages</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[3]) ? ' active' : '' ?>" href="tarifs-asso.php">Tarifs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[4]) ? ' active' : '' ?>" href="horaires-asso.php">Horaires</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[5]) ? ' active' : '' ?>" href="news.php?type=asso">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[6]) ? ' active' : '' ?>" href="livredor.php?type=asso">Livre d'or</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[7]) ? ' active' : '' ?>" href="contact-asso.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scl-nav-pro" href="home-pro.php">Professionnels</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
