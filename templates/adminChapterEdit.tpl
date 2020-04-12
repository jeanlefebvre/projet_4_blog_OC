<section class="AdminChapterForm">
    <div class="containerChapterForm">
      
        <h3 class="title is-3 titleChapter has-text-centered">Edition du chapitre {idChapter}</h3>
        <form class="commentForm" action="/chapitre?={idChapter}"  method="post" enctype="multipart/form-data">
        <!-- enctype="multipart/form-data = envoie de fichier -->
            <div class="field">
                <label class="label">Titre du chapitre</label>
                <div class="control">
                  <input class="input" type="text" name="title" value="{titleChapter}" required>
                </div>
              </div>
              
              <div class="field">
                <label class="label">Image du chapitre</label>
                <div class="control">
                  <input class="input" type="file" name="image">
                </div>
              </div>

              <div class="field">
                <label class="label">Contenu du chapitre</label>
                <div class="control">
                  <textarea id="textarea" class="textarea" name="chapterContent" placeholder="Votre contenu">{contentChapter}</textarea>
                </div>
              </div>
              
              <div class="field is-grouped">
                <div class="control">
                  <input class="button is-info" name="submitChapterForm" type="submit" value="Valider">
                </div>
        </form>
    </div>
</section>