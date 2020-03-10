<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>TITRE</title>
    <?php include("head.php"); ?>
</head>
<body>
    <?php include("header.php"); ?>
    
    
    <main>
    
    </main>
    
    
    <?php include("footer.php"); ?>

    <!--    A deplacer dans un fichier sidebar.js avec jquery-->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "753px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
<!--IMPORTS JS-->
<?php include("script.php"); ?>
<!--/IMPORTS JS-->
</body>
</html>