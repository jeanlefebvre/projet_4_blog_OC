  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item nav-link has-text-black" href="/">
          Accueil
        </a>
  
        <a class="navbar-item nav-link has-text-black" href="/apropos">
          A propos
        </a>
  
        <a class="navbar-item nav-link has-text-black" href="/roman">
          Roman
        </a>
  
        <div class="navbar-item has-dropdown is-hoverable" href="/chapitres">
          <a class="navbar-link">
            Chapitres
          </a>
  
          <div class="navbar-dropdown">
            <a class="navbar-item nav-link has-text-black" href="/chapitres">
              Tous Chapitres 
            </a>
            <a class="navbar-item nav-link has-text-black" href="/chapitre?id=1">
              Chapitre 1
            </a>
            <a class="navbar-item nav-link has-text-black" href="/chapitre?id=2">
              Chapitre 2
            </a>
            <a class="navbar-item nav-link has-text-black" href="/chapitre?id=3">
              Chapitre 3
            </a>
             <a class="navbar-item nav-link has-text-black" href="/chapitre?id=4">
              Chapitre 4
            </a>
           
          </div>     
        </div>

        <a class="navbar-item nav-link has-text-black" href="/contact">
        Contact
        </a>

        <a class="navbar-item nav-link has-text-black" href="/Admin">
          Administrer
        </a>
  
      </div>
  
      <div class="navbar-end">
        <div class="buttons navbar-item">
          <form class="commentForm" action="/deconnexion" method="post">
            <input class="button is-light" name="disconnectBtn" type="submit" value="Déconnexion">
          </form>
        </div>
      </div>
    </div>
  </nav>
</section>
