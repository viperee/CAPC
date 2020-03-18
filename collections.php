<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>Collections</title>
    <?php include("head.php"); ?>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/collections.css">
</head>
<body>
    <?php include("header.php"); ?>

    <main>
        <div class="coll-en-ligne wrapper">
            <div class="texte-coll">
                <H1>Collections</H1>
                <svg class="pastille-collections">
                    <ellipse rx="5.8045854568481445" ry="5.8045854568481445" cx="5.8045854568481445" cy="5.8045854568481445">
                    </ellipse>
                </svg>
                <p class="titre-intro">
                Musée contrôlé depuis 1984, puis labellisé « Musée de France » en 
                2003, le CAPC musée d’art contemporain a constitué une collection 
                de 1299 œuvres de 189 artistes comprenant d’une part des achats et 
                d’autre part des œuvres mises en dépôt par le MNAM (Musée National 
                d’Art Moderne, Centre Georges Pompidou), par le FNAC (Fonds National 
                d’Art Contemporain), auxquelles s’ajoutent ceux de la Caisse des Dépôts 
                et Consignations, des dépôts d’artistes et de collectionneurs. Ils 
                témoignent des rencontres et des échanges entre les artistes, le 
                lieu et les directeurs successifs du musée.
                </p>
                <button class="secondaire bouton" href="https://www.navigart.fr/capc/#/artworks">
                    Consulter la collection en ligne
                    <img src="assets/media/img/icons/fleche.svg" />
                </button>
            </div>
            <div class="image-coll">
                <img class="grille" src="assets/media/img/grille-page-coll.svg" />
                <img class="pres" src="assets/media/img/collection-pres.svg" />
            </div>
        </div>


        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <h2>Les oeuvres in situ</h2>
                    
                </div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        
    </main>


    <?php include("footer.php"); ?>

    <!--IMPORTS JS-->
    <?php include("script.php"); ?>
    <!--/IMPORTS JS-->

    <!-- Swiper JS -->
    <script src="assets/js/swiper.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
    });
  </script>
  </body>
</html>