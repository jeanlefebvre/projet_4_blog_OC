<section class="adminChapterDelete">
   

    <div class="containerAdminChapterDelete">
        <H4 class="title is-4 has-text-centered">Confirmez vous la suppression du chapitre : {idChapter}</H4>
        <form class="btn deletedChapterForm is-inline-block" action="/admin/chapitre/deleted" method="post">
            <div class="btnValidationChapterDelete field is-grouped">
                <div class="control">
                    <input type="hidden" name="idChapter" value="{idChapter}">
                    <input class="button has-text-black has-text-weight-semibold is-size-6 is-danger" name="deletedChapterBtn" type="submit" value="Supprimer">
                </div>
                <button class="button is-info is-inline-block">
                    <a class="has-text-black has-text-weight-semibold is-size-6" href="/admin/chapitre">Annuler</a>
                </button>
            </div>
        </form>
    </div>
</section>