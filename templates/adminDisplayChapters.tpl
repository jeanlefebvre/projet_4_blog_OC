<section class="adminChapter">
    <div class="containerChapter">
        <h4 class="title is-4 titleChapter">Chapitre {idChapter} : {titleChapter}</h4>
        <article class="media">
            <figure class="media-left">
                <span class="image is-128x128">
                    <img class="image" src="{mediaChapter}">
                </span>
            </figure>  
            <div class="media-content">
                <div class="content">
                    <p>
                    <strong>par Jean Forteroche</strong>
                    <strong>{dateTimeChapter}</strong><br>
                    {contentChapter}
                    </p>
                </div>
            </div>
        </article>
        <button class="btn button is-warning is-inline-block">
            <a class="has-text-black has-text-weight-semibold is-size-6" href="/admin/chapitre/edition?id={idChapter}">Éditer</a>
        </button>
        <form class="btn deleteChapterForm is-inline-block" action="/admin/chapitre/supprime?id={idChapter}" method="post">
            <div class="field">
                <div class="control">
                    <input type="hidden" name="idChapter" value="{idChapter}">
                    <input class="button has-text-black has-text-weight-semibold is-size-6 is-danger" name="deleteChapterBtn" type="submit" value="Supprimer">
                </div>
            </div>
        </form>
        
    </div>
  
</section>