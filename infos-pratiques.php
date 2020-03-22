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
        <div>
            <div class="flex flex-baseline">
                <div class="xLarge-11">
                    <h2>Horaires</h2>
                </div>
                <div class="xLarge-1">
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
        <div>
            <h2>Accès</h2>
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