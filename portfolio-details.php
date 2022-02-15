<?php
$title="Portfolio-Detail";
include_once("./includes/layoutHead.php");
include_once("./includes/Navbar.php");
?>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Détail du Portfolio</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Détail du Portfolio</li>
                </ol>
            </div>

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
                                <img src="assets/img/portfolio/portfolio-details-1.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Projet E-commerce</h3>
                        <ul>
                            <li><strong>Catégorie</strong>: Web design</li>
                            <li><strong>Client</strong>: TahitiWebStorea</li>
                            <li><strong>Date du projet</strong>: 15 Février 2022</li>
                            <li><strong>URL projet</strong>: <a href="#">www.tahitiwebstore.pf</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Exemple Portfolio Détail</h2>
                        <p>
                            Ceci est un exemple d'affichage des détail d'un projet.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section --> ?>
</main>
<?php include_once("./includes/layoutFoot.php");?>