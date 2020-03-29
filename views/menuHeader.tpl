  <!-- MENU -->
        <nav id="nav">
            <i class="fas fa-bars menu_resp" id="menu_resp"></i>
            <div class="menu_lien" id="menu_lien">
                <div class="menu_liens">
                    <i class="fas fa-times menu_resp_close" id="menu_resp_close"></i>
                    <a class="nav-link" href="/accueil">Accueil</a>
                    <a class="nav-link" href="/accueil">A propos</a>
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