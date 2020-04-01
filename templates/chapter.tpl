<section class="finalChapter">
    <div class="containerChapitre">
        <!--import du titre du chapitre correspondant dans la bdd-->
        <h4 class="title is-4">{titleChapitre}</h4>
        <article class="media">
            <figure class="media-left">
                <p class="image is-128x128">
                    <!--import d'image du chapitre correspondant dans la bdd-->
                    <img src="{media}">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                    <strong>par Jean Forteroche</strong>
                    <!--import de la date du chapitre correspondant dans la bdd-->
                    <strong>{dateTimeChapitre}</strong>
                    <br>
                    <!--import du text du chapitre correspondant dans la bdd-->
                    {contentChapitre}
                    </p>
                </div>
            </div>
        </article>
    </div>
</section>