<nav class="navbar navbar-expand-lg scl-navbar scl-navbar-pro">
  <div class="container-fluid scl-navbar-inner">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navPro" aria-controls="navPro" aria-expanded="false" aria-label="Menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navPro">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[0]) ? ' active' : '' ?>" href="home-pro.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[1]) ? ' active' : '' ?>" href="qsn-pro.php">Qui sommes-nous</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle<?= !empty($classMenuBackgroung[2]) ? ' active' : '' ?>" href="dif.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CPF
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cpf-catalogue.php">Catalogue CPF</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[3]) ? ' active' : '' ?>" href="toeic.php">TOEIC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[4]) ? ' active' : '' ?>" href="tarifs-pro.php">Tarifs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[5]) ? ' active' : '' ?>" href="news.php?type=pro">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[6]) ? ' active' : '' ?>" href="livredor.php?type=pro">Livre d'or</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= !empty($classMenuBackgroung[7]) ? ' active' : '' ?>" href="contact-pro.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scl-nav-asso" href="home-asso.php">Particuliers</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
