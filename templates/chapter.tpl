<section class="finalChapter">
    <div class="containerChapter">
        <!--import du titre du chapitre correspondant dans la bdd-->
        <h4 class="title is-4 titleChapter">Chapitre {idChapter} : {titleChapter}</h4>
        <article class="media">
            <figure class="media-left">
                <p class="image is-128x128">
                    <!--import d'image du chapitre correspondant dans la bdd-->
                    <img class="image" src="{mediaChapter}">
                </p>
            </figure>    
            <div class="media-content">
                <div class="content">
                    <p>
                    <strong>par Jean Forteroche</strong>
                    <!--import de la date du chapitre correspondant dans la bdd-->
                    <strong>{dateTimeChapter}</strong>
                    
                    <br>
                    <!--import du text du chapitre correspondant dans la bdd-->
                    {contentChapter}
                        <a href="/chapitre?id={idChapter}">voir le chapitre</a>
                    </p>
                </div>
            </div>
        </article>
        
    </div>
</section>