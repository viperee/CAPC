<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>TITRE</title>
    <?php include("head.php"); ?>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
</head>
<body>
    <?php include("header.php"); ?>

    <main>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="assets/media/img/Home.svg"/></div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
            <div class="swiper-slide">Slide 10</div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
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