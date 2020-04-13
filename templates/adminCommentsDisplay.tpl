<section class="adminComment">
    <div class="adminContainerCommentDisplay">
        <h4 class="title is-4 titleChapter">Commentaire du chapitre {idChapter}</h4>
        <article class="comment">
            <div class="comment-content">
                <div class="content">
                    <p>
                    de <strong>{userComment}</strong>
                    du <strong>{dateTimeComment}</strong>
                        <span class="idComment">commentaire n° {idComment}</span><br/>
                        <span class="report">nombre de signalement : <strong>{report}</strong> </span>
                    <br>
                    {contentComment}
                    </p>
                </div>
            </div>
        </article>

        <button class="btn button is-warning is-inline-block">
            <a class="has-text-black has-text-weight-semibold is-size-6" href="/admin/commentaire/edition?id={idComment}">Éditer</a>
        </button>
        <form class="btn deleteChapterForm is-inline-block" action="/admin/commentaire/supprime?id={idComment}" method="post">
            <div class="field">
                <div class="control">
                    <input type="hidden" name="idChapter" value="{idComment}">
                    <input class="button has-text-black has-text-weight-semibold is-size-6 is-danger" name="deleteChapterBtn" type="submit" value="Supprimer">
                </div>
            </div>
        </form>
    </div>
</section>