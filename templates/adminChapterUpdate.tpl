<section class="adminChapterUpdate">
    <div class="containerAdmin">
        <div class="card">
            <header class="card-header">
                <figure class="media-left">
                    <p class="image is-128x128">
                        <img class="image" src="{mediaChapter}">
                    </p>
                </figure> 
                <h4 class="card-header-title title is-4 titleChapter">Chapitre {idChapter} :</h4><br/>
                <h4 class="card-header-title title is-4 titleChapter">{titleChapter}</h4><br/>
                <time>{dateTimeChapter}<br></time>
            </header>
            <div class="card-content">
              <div class="content">
                {contentChapter}
                <br>
              </div>
            </div>
            <footer class="card-footer">
              <a href="#" class="card-footer-item">Save</a>
              <a href="#" class="card-footer-item">Edit</a>
              <a href="#" class="card-footer-item">Delete</a>
            </footer>
          </div>
    </div>
</section>