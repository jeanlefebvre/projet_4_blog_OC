<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8"/>
        <title><?= $title ?? 'blog de Jean Forteroche' ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--googlefont-->
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <!-- bulma.io -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
        <link rel="stylesheet" href="css/main.css">


    </head>
    <body>
    {header}
    {banner}
    

    
    <!-- CONTENU -->
    <?= $content ?>

    <!-- PIED DE PAGE -->

   
    </body>
</html>