<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8"/>
        <title><?= $title ?? 'blog de Jean Forteroche' ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--googlefont-->
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <!-- bulma.io -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
        <link rel="stylesheet" href="css/main.css">


    </head>
    <body>
    <header>
        <!-- MENU -->
        <nav id="nav">
            <H1 class="title-is-1">Le livre blog de Jean Forteroche</H1>
            <i class="fas fa-bars menu_resp" id="menu_resp"></i>
            <div class="menu_lien" id="menu_lien">
                <div class="menu_liens">
                    <i class="fas fa-times menu_resp_close" id="menu_resp_close"></i>
                    <a class="nav-link" href="/accueil">Accueil</a>
                    <a class="nav-link" href="/chapitres">Chapitres</a>
                    <?php if ($_SESSION['connected'] === "yes") { ?>
                        <a class="nav-link" href="<?= $url ?>profil/edit/<?= $_SESSION['userId'] ?>">Profil</a>
                        <?php if ($_SESSION['permission'] === "1") { ?>
                            <a class="nav-link" href="<?= $url ?>panel">Panel</a>
                        <?php } ?>
                        <a class="nav-link conButton" href="<?= $url ?>connexion/deconnexion">Déconnexion</a>
                    <?php } else { ?>
                        <a class="nav-link conButton" href="<?= $url ?>connexion">Connexion</a>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </header>
    
    <!-- CONTENU -->
    <?= $content ?>

    <!-- PIED DE PAGE -->

    <footer>
        <div class="social">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"> <i class="fab fa-twitter-square"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="plan">
            <a href="<?= $url ?>Accueil">Accueil</a>
            <a href="<?= $url ?>Chapitres">Chapitres</a>
        </div>
    </footer>
    </body>
</html>