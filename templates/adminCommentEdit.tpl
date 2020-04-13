<section class="AdminCommentForm">
  <div class="containerCommentForm">

    <h3 class="title is-3 titleComment has-text-centered">Edition du commentaire n° {idComment}</h3>
    <form class="commentForm" action="/admin/commentaire/edited"  method="post">
      <input type="hidden" name="idComment" value="{idComment}">

      <div class="field">
        <label class="label">Contenu du commentaire</label>
        <div class="control">
          <textarea id="textarea" class="textarea" name="commentContent">{contentComment}</textarea>
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <input class="button is-primary has-text-black has-text-weight-semibold is-size-6" name="submitEditCommentForm" type="submit" value="Valider">
        </div>

        <button class="button is-info has-text-black">
          <a class="has-text-black has-text-weight-semibold is-size-6" href="/admin/commentaire">Annuler</a>
        </button>
      </div>
    </form>
  </div>
</section>