<section class="commentDisplay">
    <div class="containerCommentDisplay">
        <h4 class="title is-4 titleChapter">Commentaire</h4>
        <article class="comment">
            <div class="comment-content">
                <div class="content">
                    <p>
                    de <strong>{userComment}</strong>
                    du <strong>{dateTimeComment}</strong>
                    <br>
                    {contentComment}
                    </p>
                </div>
            </div>
            <form action="/report" method="post">
            <input type="hidden" name="idComment" value="{idComment}">
            <input type="hidden" name="idChapter" value="{idChapter}">
            <input class="button is-danger is-ligth" name="reportComment" type="submit" value="Signaler">
            </form>
        </article>
        
    </div>
</section>