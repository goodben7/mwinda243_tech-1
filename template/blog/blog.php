<?php $title = "Blog - MWINDA243 TECH"; ?>

<?php ob_start(); ?>

<?php $current_nav = "blog"; ?>

<?php include("F:/mwinda243 tech/prototype/mwinda243_tech-1/template/header.php") ?>

<!-- Fin de l'En-tête -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../">Accueil</a></li>
        </ol>
        <h2>Blog</h2>

      </div>
    </section><!-- End Breadcrumbs -->

<!-- ======= Rubrique Blog ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-4 entries">
            <article class="entry">

              <div class="entry-img">
                <img src="../template/assets/img/blog/mwinda243_tech-1.PNG" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="../blog/mwinda243_tech">Présentation de MWINDA<span style="color : #FFA500; font-family: sans-serif;">243</span> TECH</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> 
                  <a href="../blog/mwinda243_tech">Rédaction MWINDA243 TECH</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> 
                  <a href="../blog/mwinda243_tech"><time datetime="2020-01-01">20 Janvier 2023</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Propose des solutions informatiques  en vue d'automatiser et de rendre plus simple les quotidiens des entreprises et particuliers.
                </p>
                <div class="read-more">
                  <a href="../blog/mwinda243_tech">Lire la suite</a>
                </div>
              </div>
            </article><!-- End blog entry -->
            
          </div><!-- End blog entries list -->

        </div>

      </div>
    </section>
    <!-- Fin de la section du blog --> 

  </main>
<!-- Fin de #main -->


<?php require("F:/mwinda243 tech/prototype/mwinda243_tech-1/template/footer.php") ?>

<?php $content = ob_get_clean(); ?>

<?php require("F:/mwinda243 tech/prototype/mwinda243_tech-1/template/layout.php") ?>