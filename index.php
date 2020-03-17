<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <title>TITRE</title>
    <?php include("head.php"); ?>
</head>
<body>
    <?php include("header.php"); ?>

    <main class="wrapper">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/media/img/Home2.svg"/><br />
                    <div class="cat-legende">
                        <span class="cat-periode">Exposition</span><br />
                        <span class="legende">Histoire de l’art cherche personnages …</span><br />
                        <span class="cat-periode">20 juin 2019 - 22 mars 2020</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="assets/media/img/Home.svg"/><br />
                    <div class="cat-legende">
                        <span class="cat-periode">Visite</span><br />
                        <span class="legende">Visite Flash</span><br />
                        <span class="cat-periode">25 fev. 2020 - 06 mars 2020</span>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <div id="collections">
            <img src="assets/media/img/grille-collections.svg" class="grille" />
            <img src="assets/media/img/collections.svg" class="coll-img" />
            <div class="card">
                <div class="titre">
                    <H1>Collections</H1>
                    
                </div>
            </div>
		</div>
    </main>


    <?php include("footer.php"); ?>

    <!--IMPORTS JS-->
    <?php include("script.php"); ?>
    <!--/IMPORTS JS-->

    <!-- Swiper JS -->
    <script src="assets/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
        },
    });
    </script>
</body>
</html>