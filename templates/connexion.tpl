<section class="connexion">
  
  <div class="containerConnexion">
    <h4 class="title is-4">Formulaire de connexion</h4>
    <form class="commentForm" action="/connexion" method="post">
        <div class="field">
            <label class="label">Login</label>
            <div class="control">
              <input class="input" type="text" name="user" placeholder="Login" required>
            </div>
          </div>

           <div class="field">
            <label class="label">Mot de passe</label>
            <div class="control">
              <input class="input" type="password" name="password" placeholder="password" required>
            </div>
          </div>
                   
          <div class="field is-grouped">
            <div class="control">
              <input class="button is-info" name="submitConnexion" type="submit" value="Valider">
            </div>
    </form>
  </div>
</section>