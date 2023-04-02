<?php $title = "Portfolio Details - MWINDA243 Tech"; ?>

<?php ob_start(); ?>

<?php $current_nav = "portfolio"; ?>

<?php include("F:/mwinda243 tech/prototype/mwinda243_tech-1/template/header.php") ?>

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../">Accueil</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../template/assets/img/portfolio/MWINDA243_TECH-3.jpeg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../template/assets/img/portfolio/MWINDA243_TECH-2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../template/assets/img/portfolio/MWINDA243_TECH-1.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Information sur le projet</h3>
              <ul>
                <li><strong>Client</strong>: MWINDA243 Tech</li>
                <li><strong>Project date</strong>: 20/02/2023 </li>
                <li><strong>Project URL</strong>: <a href="https://mwinda243-tech.com" target="_bank">mwinda243-tech.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Detail</h2>
              <p>
                Nous sommes une entreprise informatique qui a pour mission de : 
                <ul>
                  <li>Initier les jeunes et les élèves aux métiers de l'informatique</li>
                  <li>Vulgariser l’informatique</li>
                  <li>Offrir des formations dans différents métiers de l’informatique</li>
                  <li>Proposer des solutions informatiques en vue d'automatiser et de rendre plus simple les quotidiens des entreprises et particuliers.</li>  
                </ul>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
</main><!-- End #main -->

<?php require("F:/mwinda243 tech/prototype/mwinda243_tech-1/template/footer.php") ?>

<?php $content = ob_get_clean(); ?>

<?php require("F:/mwinda243 tech/prototype/mwinda243_tech-1/template/layout.php") ?>