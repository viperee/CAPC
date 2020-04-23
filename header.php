<header class="container">
    <nav class="navbar xLarge-12 large-12 medium-12 small-12">

        <?php
        switch ($page) {
            case "index":
                echo "<a href=\"index.php\"><img src=\"assets/media/img/Desktop/Header/Logo/accueil.svg\"></a>";
                break;
            case "programmation":
                echo "<a href=\"index.php\"><img src=\"assets/media/img/Desktop/Header/Logo/programmation.svg\"></a>";
                break;
            case "collections":
                echo "<a href=\"index.php\"><img src=\"assets/media/img/Desktop/Header/Logo/collections.svg\"></a>";
                break;
            case "musee":
                echo "<a href=\"index.php\"><img src=\"assets/media/img/Desktop/Header/Logo/musee.svg\"></a>";
                break;
            case "infos-pratiques":
                echo "<a href=\"index.php\"><img src=\"assets/media/img/Desktop/Header/Logo/infos-pratiques.svg\"></a>";
                break;
        }
        ?>
        <img id="open-sidenav-btn" src="assets/media/img/Desktop/Header/Icones/Menu.svg">
    </nav>
    <?php include("sidenav.php"); ?>
</header>