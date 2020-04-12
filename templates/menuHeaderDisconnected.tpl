<section class="menu">
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
      </a>
    </div>
  
    <div id="navbarBasic" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item nav-link has-text-black has-text-weight-semibold" href="/">
          Accueil
        </a>
  
        <a class="navbar-item nav-link has-text-black" href="/apropos">
          A propos
        </a>
  
        <a class="navbar-item nav-link has-text-black" href="/roman">
          Roman
        </a>
  
        <div class="navbar-item has-dropdown is-hoverable" href="/chapitres">
          <a class="navbar-link has-text-black">
            Chapitres
          </a>
  
          <div class="navbar-dropdown">
            <a class="navbar-item nav-link has-text-black" href="/chapitres">
              Tous Chapitres
            </a>
            <ul>
              {chapterMenu}
            </ul>
          </div>
        </div>
  
          <a class="navbar-item nav-link has-text-black" href="/contact">
          Contact
          </a>
  
      </div>
  
      <div class="navbar-end">
        <div class="buttons navbar-item">
         
            <a class="button is-light nav-link has-text-black has-text-weight-semibold" href="/connexion">
              Connexion
            </a>
        </div>
      </div>
    </div>
  </nav>
</section>
