<section class="adminCommentDelete">
   

    <div class="containerAdminCommentDelete">
        <H4 class="title is-4 has-text-centered">Confirmez vous la suppression du commentaire n° {idComment}</H4>
        <form class="btn deletedChapterForm is-inline-block" action="/admin/commentaire/deleted" method="post">
            <div class="btnValidationCommentDelete field is-grouped">
                <div class="control">
                    <input type="hidden" name="idComment" value="{idComment}">
                    <input class="button has-text-black has-text-weight-semibold is-size-6 is-danger" name="deletedCommentBtn" type="submit" value="Supprimer">
                </div>
                <button class="button is-info is-inline-block">
                    <a class="has-text-black has-text-weight-semibold is-size-6" href="/admin/commentaire">Annuler</a>
                </button>
            </div>
        </form>
    </div>
</section>