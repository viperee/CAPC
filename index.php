<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'index'; ?>
<head>

    <title>Accueil</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
<?php include("header.php"); ?>

<main class="wrapper">
    <!-- Swiper -->
    <div id="main-swiper-container" class="main-header swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="assets/media/img/Home2.svg" style="width: inherit;"/><br/>
                <div class="cat-legende">
                    <span class="cat-periode">Exposition</span><br/>
                    <span class="legende">Histoire de l’art cherche personnages …</span><br/>
                    <span class="cat-periode">20 juin 2019 - 22 mars 2020</span>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="assets/media/img/Home.svg" style="width: inherit;"/><br/>
                <div class="cat-legende">
                    <span class="cat-periode">Visite</span><br/>
                    <span class="legende">Visite Flash</span><br/>
                    <span class="cat-periode">25 fev. 2020 - 06 mars 2020</span>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div class="infos-pratiques-block">
        <div class="inline-block">
            <h1 class="dot-cinnabar-after no-margin">Infos pratiques</h1>
        </div>
        <div class="card">
            <div class="card-content">
                <div class="title-content">
                    <h3 class="color-cinnabar no-margin">CAPC Musée d’Art<br>Contemporain de Bordeaux</h3>
                </div>
                <div class="flex-space-between">
                    <div>
                        <h4 class="no-margin">Horaires</h4>
                        <p>11h - 18h<br>Du Mardi au Dimanche</p>
                    </div>
                    <div>
                        <h4 class="no-margin">Tarifs</h4>
                        <p>Tarif plein : 7 €<br>
                            Tarif réduit : 4 €</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.6879076696687!2d-0.5743516842482941!3d44.8482887823483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527d81e072f85%3A0x21b210f33fe22835!2sCAPC%20Mus%C3%A9e%20d&#39;Art%20Contemporain%20de%20Bordeaux!5e0!3m2!1sfr!2sfr!4v1585407482035!5m2!1sfr!2sfr"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="lien-infos-block">
            <a class="bouton lien-infos" href="infos-pratiques.php">
                Accéder aux infos
                <img src="assets/media/img/icons/fleche-orange.svg"/>
            </a>
        </div>

    </div>

    <div class="programmation-block">
        <div class="flex flex-baseline">
            <div class="xLarge-11 large-10 medium-10">
                <h1 class="dot-dark-pastel-green-after">Programmation</h1>
            </div>
            <div class="xLarge-1 large-2 medium-2">
                <div id="programmation-swiper-button-prev" class="swiper-button-prev"></div>
                <div id="programmation-swiper-button-next" class="swiper-button-next"></div>
            </div>
        </div>
        <div id="programmation-swiper-container" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-content">
                            <div class="inline-block text-programmation">
                                <p class="titre-intro">02 fevr. 2020 - 15h</p>
                                <h3>Gouter Signature</h3>
                                <p>Irene de Santa Ana a répondu à l’invitation de la Boutique du CAPC et présente à cette occasion Je suis au pays avec ma mère, un livre né de sa
                                    collaboration…</p>
                                <p class="titre-intro no-margin inline-block">Rencontre</p>
                                <a href="programmation.php"><img class="fleche-verte" src="assets/media/img/icons/fleche-verte.svg"/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-content">
                            <div class="inline-block text-programmation">
                                <p class="titre-intro">02 fevr. 2020 - 15h</p>
                                <h3>Gouter Signature</h3>
                                <p>Irene de Santa Ana a répondu à l’invitation de la Boutique du CAPC et présente à cette occasion Je suis au pays avec ma mère, un livre né de sa
                                    collaboration…</p>
                                <p class="titre-intro no-margin inline-block">Rencontre</p>
                                <a href="programmation.php"><img class="fleche-verte" src="assets/media/img/icons/fleche-verte.svg"/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-content">
                            <div class="inline-block text-programmation">
                                <p class="titre-intro">02 fevr. 2020 - 15h</p>
                                <h3>Gouter Signature</h3>
                                <p>Irene de Santa Ana a répondu à l’invitation de la Boutique du CAPC et présente à cette occasion Je suis au pays avec ma mère, un livre né de sa
                                    collaboration…</p>
                                <p class="titre-intro no-margin inline-block">Rencontre</p>
                                <a href="programmation.php"><img class="fleche-verte" src="assets/media/img/icons/fleche-verte.svg"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="musee">
        <div id="img-musee">
            <div class="card">
                <div class="titre">
                    <H1>Le Musée</H1>
                    <svg class="pastille-musee">
                        <ellipse rx="5.8045854568481445" ry="5.8045854568481445" cx="5.8045854568481445"
                                 cy="5.8045854568481445">
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
                <div class="carre">
                    <div class="primaire"></div>
                    <div class="texte-bouton bouton">Découvrir le musée</div>
                </div>
            </div>
        </div>
    </div>

    <div id="collections">
        <div id="img-collections">
            <div class="card">
                <div class="titre">
                    <H1>Collections</H1>
                    <svg class="pastille-collections">
                        <ellipse rx="5.8045854568481445" ry="5.8045854568481445" cx="5.8045854568481445"
                                 cy="5.8045854568481445">
                        </ellipse>
                    </svg>
                </div>
                <p class="titre-intro">
                    Dans l’histoire des expositions du CAPC, un grand nombre d’artistes ont réalisé des œuvres, sur
                    place, pour le site et en particulier pour la nef de l’Entrepôt.
                </p>
                <div class="carre">
                    <div class="primaire"></div>
                    <div class="texte-bouton bouton">Parcourir les collections</div>
                </div>
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