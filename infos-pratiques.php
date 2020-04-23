<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'infos-pratiques'; ?>
<head>
    <title>Infos Pratiques</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" href="assets/css/infos-pratiques.css">
</head>
<body>
<?php include("header.php"); ?>

<main class="wrapper">
    <div>
        <h1 class="dot-cinnabar-after">Informations pratiques</h1>
        <div id="horaire">
            <div class="flex flex-baseline">
                <div class="xLarge-11 large-10 medium-10">
                    <h2>Horaires</h2>
                </div>
                <div class="xLarge-1 large-2 medium-2">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="title-content">
                                    <h1 class="color-cinnabar">CAPC</h1>
                                </div>
                                <div>
                                    <p class="titre-intro">11 h – 18 h<br>Fermeture tardive le 2e mercredi de chaque mois, jusqu’à 20 h<br>
                                        Fermé les lundis et jours fériés<br><br>
                                        L’entrée dans le musée est suspendue 30 minutes avant la fermeture.<br>
                                        Les visiteurs sont invités à regagner la sortie 10 minutes avant la fermeture du bâtiment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="title-content">
                                    <h1 class="color-cinnabar">Arc en rêve</h1>
                                </div>
                                <div>
                                    <p class="titre-intro">Centre d’architecture<br>
                                        11 h – 18 h<br>
                                        Fermeture tardive le 2e mercredi de chaque mois, jusqu’à 20h<br>
                                        Fermé les lundis et jours fériés<br><br>

                                        E-mail info@arcenreve.com<br>
                                        www.arcenreve.com<br>
                                        Tél. +33 (0)5 56 52 78 36</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="title-content">
                                    <h1 class="color-cinnabar">Café du musée</h1>
                                </div>
                                <div>
                                    <p class="titre-intro">Restaurant<br>
                                        Contact et Réservations :<br>
                                        T. 05 56 06 35 70</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-content">
                                <div class="title-content">
                                    <h1 class="color-cinnabar">Bibliothèque</h1>
                                </div>
                                <div>
                                    <p class="titre-intro">Consultation du fonds sur place et sur rendez-vous exclusivement,<br>
                                        Tél. 05 56 00 81 58</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="plan">
            <h2>Plan</h2>
            <div class="flex flex-center">
                <div class="xLarge-4">
                    <div data-level="0" class="level level-active"><p class="level-content">Niveau 0</p></div>
                    <div data-level="1" class="level"><p class="level-content">Niveau 1</p></div>
                    <div data-level="2" class="level"><p class="level-content">Niveau 2</p></div>
                </div>
                <div class="xLarge-8">
                    <img data-level="0" src="assets/media/img/plan-niveau-1.svg">
                    <img data-level="1" src="assets/media/img/plan-niveau-2.svg">
                    <img data-level="2" src="assets/media/img/plan-niveau-3.svg">
                </div>
            </div>
        </div>
        <div id="Acces">
            <h2>Accès</h2>
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.6879076696687!2d-0.5743516842482941!3d44.8482887823483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527d81e072f85%3A0x21b210f33fe22835!2sCAPC%20Mus%C3%A9e%20d&#39;Art%20Contemporain%20de%20Bordeaux!5e0!3m2!1sfr!2sfr!4v1585407482035!5m2!1sfr!2sfr"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="flex">
                <div class="infos-acces">
                    <div><h3>TRAM</h3></div>
                    <div><p>Ligne B, arrêt CAPC<br>
                            Ligne C, arrêt Jardin Public (depuis la gare)</p></div>
                </div>
                <div class="infos-acces">
                    <div><h3>PARCS DE STATIONNEMENT</h3></div>
                    <div><p>Quinconces (allées de Chartres)<br>
                            Cité Mondiale (20 quai des Chartrons)<br>
                            Jean Jaurès (place Jean-Jaurès et quai du Maréchal Lyautey)</p></div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<script src="assets/js/infos-pratiques.js"></script>
<!--/IMPORTS JS-->
<script>

</script>

</body>
</html>