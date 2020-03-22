<!DOCTYPE html>
<html lang="fr-FR">
<head>

    <title>Accueil</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <?php include("header.php"); ?>

    <main class="wrapper">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/media/img/Home2.svg" style="width: inherit;"/><br />
                    <div class="cat-legende">
                        <span class="cat-periode">Exposition</span><br />
                        <span class="legende">Histoire de l’art cherche personnages …</span><br />
                        <span class="cat-periode">20 juin 2019 - 22 mars 2020</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="assets/media/img/Home.svg" style="width: inherit;"/><br />
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

        <div id="musee">
            <img src="assets/media/img/grille-collections.svg" class="grille" />
            <img src="assets/media/img/le-musee.svg" class="coll-img" />
            <div class="card">
                <div class="cat">
                    <div class="titre">
                        <H1>Le Musée</H1>
                        <svg class="pastille-musee">
                            <ellipse rx="5.8045854568481445" ry="5.8045854568481445" cx="5.8045854568481445" cy="5.8045854568481445">
                            </ellipse>
                        </svg>
                    </div>
                    <p class="titre-intro">
                        Depuis sa fondation en 1973, le CAPC – originellement 
                        Centre d’arts plastiques contemporains –, devenu en 
                        1984 le musée d’art contemporain de la ville de 
                        Bordeaux, et labellisé « Musée de France » en 2002, a 
                        toujours été un espace exceptionnel pour la création.
                    </p>
                    <button class="carre">
                        <div class="primaire"></div>
                        <div class="texte-bouton bouton">Découvrir le musée</div>
                    </button>

                </div>
            </div>
		</div>

        <div id="collections">
            <img src="assets/media/img/grille-collections.svg" class="grille" />
            <img src="assets/media/img/collections.svg" class="coll-img" />
            <div class="card">
                <div class="cat">
                    <div class="titre">
                        <H1>Collections</H1>
                        <svg class="pastille-collections">
                            <ellipse rx="5.8045854568481445" ry="5.8045854568481445" cx="5.8045854568481445" cy="5.8045854568481445">
                            </ellipse>
                        </svg>
                    </div>
                    <p class="titre-intro">
                        Dans l’histoire des expositions du CAPC, un grand nombre d’artistes ont réalisé des œuvres, sur place, pour le site et en particulier pour la nef de l’Entrepôt. 
                    </p>
                    <button class="carre">
                        <div class="primaire"></div>
                        <div class="texte-bouton bouton">Parcourir les collections</div>
                    </button>

                </div>
            </div>
		</div>
    </main>


    <?php include("footer.php"); ?>

    <!--IMPORTS JS-->
    <?php include("script.php"); ?>
    <!--/IMPORTS JS-->
    <script src="assets/js/index.js"></script>

</body>
</html>