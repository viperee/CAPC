<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'programmation'; ?>
<head>
    <title>Programmation</title>
    <?php include("head.php"); ?>
    <link rel="stylesheet" href="assets/css/programmation.css">
    <link rel="stylesheet" href="assets/css/theme1.css">
</head>
<body>
<?php include("header.php"); ?>

<main class="wrapper">
    <div>
        <h1 class="dot-dark-pastel-green-after">Programmation</h1>
    </div>
    <div class="flex-space-between">
        <div class="flex-auto">
            <div class="card-programmation">
                <div class="inline-block img-programmation">
                    <img src="assets/media/img/programmation.svg">
                </div>
                <div class="inline-block text-programmation">
                    <p class="titre-intro">28 mars 2020 - 10h</p>
                    <h3>Gouter Signature</h3>
                    <p>Irene de Santa Ana a répondu à l’invitation de la Boutique du CAPC et présente à cette occasion Je suis au pays avec ma mère, un livre né de sa
                        collaboration…</p>
                    <p class="titre-intro">Rencontre</p>
                </div>
            </div>
            <div class="card-programmation">
                <div class="inline-block img-programmation">
                    <img src="assets/media/img/programmation.svg">
                </div>
                <div class="inline-block text-programmation">
                    <p class="titre-intro">10 avril 2020 - 16h</p>
                    <h3>Gouter Signature</h3>
                    <p>Irene de Santa Ana a répondu à l’invitation de la Boutique du CAPC et présente à cette occasion Je suis au pays avec ma mère, un livre né de sa
                        collaboration…</p>
                    <p class="titre-intro">Rencontre</p>
                </div>
            </div>
        </div>
        <div id="caleandar" class="flex-auto">
        </div>
    </div>
</main>

<?php include("footer.php"); ?>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<script src="assets/js/caleandar.js"></script>
<script src="assets/js/programmation.js"></script>
<!--/IMPORTS JS-->

</body>
</html>