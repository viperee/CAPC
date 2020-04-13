<header class="container">
    <nav class="navbar xLarge-12 large-12 medium-12 small-12">

        <?php
        switch ($page) {
            case "index":
                echo "<img src=\"assets/media/img/Desktop/Header/Logo/accueil.svg\">";
                break;
            case "programmation":
                echo "<img src=\"assets/media/img/Desktop/Header/Logo/programmation.svg\">";
                break;
            case "collections":
                echo "<img src=\"assets/media/img/Desktop/Header/Logo/collections.svg\">";
                break;
            case "musee":
                echo "<img src=\"assets/media/img/Desktop/Header/Logo/musee.svg\">";
                break;
            case "infos-pratiques":
                echo "<img src=\"assets/media/img/Desktop/Header/Logo/infos-pratiques.svg\">";
                break;
        }
        ?>
        <img id="open-sidenav-btn" src="assets/media/img/Desktop/Header/Icones/Menu.svg">
    </nav>
    <?php include("sidenav.php"); ?>
</header>