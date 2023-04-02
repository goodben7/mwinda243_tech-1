<!-- ======= Barre du haut ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:services@mwinda243-tech.com">services@mwinda243-tech.com</a>  &nbsp;
        <a href="https://twitter.com/mwinda243_tech" target="_bank" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://web.facebook.com/profile.php?id=100090505093388" target="_bank" class="facebook">
          <i class="bx bxl-facebook"></i>
        </a>
        <a href="https://www.instagram.com/mwinda243_tech/" target="_bank" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/mwinda243-tech/" target="_bank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Entête ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="../">MWINDA<span style="color : #FFA500; font-family: sans-serif;">243</span> TECH</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/hero-bg.jpg" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php if ($current_nav == "index")  { echo 'active'; } ?>" href="../">Accueil</a></li>
          <li><a class="nav-link scrollto" href="../#about">À Propos</a></li>
          <li><a class="nav-link scrollto" href="../#services">Services</a></li>
          <li><a class="nav-link scrollto <?php if ($current_nav == "portfolio")  { echo 'active'; } ?>" href="../#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto <?php if ($current_nav == "team")  { echo 'active'; } ?>" href="../team">Equipes</a></li>
          <li><a class="<?php if ($current_nav == "blog")  { echo 'active'; } ?>" href="../blog">Blog</a></li>
          <li><a class="nav-link scrollto" href="../#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
<!-- Fin de l'En-tête -->