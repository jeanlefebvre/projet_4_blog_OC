<section class="adminChapterDelete">
    <H4 class="title is-4 has-text-centered">Confirmez vous la suppression du chapitre : {idChapter}</H4>

    <div class="containerAdminChapterDelete columns">
        
        <button class="column is-1 is-offset-5 btn button is-info is-inline-block">
            <a class="has-text-black has-text-weight-semibold is-size-6" href="/admin/chapitre">Annuler</a>
        </button>
        <form class="column is-1 btn deletedChapterForm is-inline-block" action="/admin/chapitre/deleted" method="post">
            <div class="field">
                <div class="control">
                    <input type="hidden" name="idChapter" value="{idChapter}">
                    <input class="button has-text-black has-text-weight-semibold is-size-6 is-danger" name="deletedChapterBtn" type="submit" value="Supprimer">
                </div>
            </div>
        </form>
    </div>
</section>