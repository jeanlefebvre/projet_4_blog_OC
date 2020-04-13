<section class="AdminChapterForm">
    <div class="containerChapterForm">
      
        <h3 class="title is-3 titleChapter has-text-centered">Création d'un nouveau chapitre</h3>
        <form class="commentForm" action="/admin/chapitre/cree"  method="post" enctype="multipart/form-data">
        <!-- enctype="multipart/form-data = envoie de fichier -->
            <div class="field">
                <label class="label">Titre du chapitre</label>
                <div class="control">
                  <input class="input" type="text" name="title" placeholder="Votre titre" required>
                </div>
              </div>
              
              <div class="field">
                <label class="label">Image du chapitre</label>
                <div class="control">
                  <input class="input" type="file" name="image" placeholder="Exemple : media/nom_de_l'image.jpg" required>
                </div>
              </div>

              <div class="field">
                <label class="label">Contenu du chapitre</label>
                <div class="control">
                  <textarea id="textarea" class="textarea" name="chapterContent" placeholder="Votre contenu"></textarea>
                </div>
              </div>
              
              <div class="field is-grouped">
                <div class="control">
                  <input class="button is-primary has-text-black has-text-weight-semibold is-size-6" name="submitChapterForm" type="submit" value="Valider">
                </div>
                <button class="button is-info has-text-black">
                  <a class="has-text-black has-text-weight-semibold is-size-6" href="/admin/chapitre">Annuler</a>
                </button>
              </div>
        </form>
    </div>
</section>