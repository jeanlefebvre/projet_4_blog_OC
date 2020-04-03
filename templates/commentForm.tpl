<section class="commentChapter">
  
  <div class="commentChapterForm">
    <h4 class="title is-4">Laissez un commentaire</h4>
    <form class="commentForm" action="/addcomment?id={idChapter}" method="post">
        <div class="field">
            <label class="label">Pseudo</label>
            <div class="control">
              <input class="input" type="text" name="user" placeholder="Votre pseudo" required>
            </div>
          </div>
          
          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <textarea class="textarea" name="commentContent" placeholder="Votre message" minlength="10" required></textarea>
            </div>
          </div>
          
          <div class="field is-grouped">
            <div class="control">
              <input class="button is-info" name="submitCommentForm" type="submit" value="Valider">
            </div>
    </form>
  </div>
</section>