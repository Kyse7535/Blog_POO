<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="icon" href="Vue/CSS/volks.png" type="image/gif" sizes="16x16">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Vue/CSS/index.css">
    <link rel="stylesheet" href="Vue/CSS/blog.css">
</head>

<body>
    <?php require("header.php"); ?>
    <main>
        <div class="container">
            <!-- debut list des articles-->
            <div class="row ligne">
                <?php
                while ($article = $resultat1->fetch()) {
                ?>
                <div class="col-9 text-right py-5 article">
                    <h2><?= $article['titre'] ?></h2>
                    <div class="date_auteur">
                        <p><?= $article['date_creation'] ?> | <?= $article['auteur'] ?></p>
                        <p><?= getRowNumber($GLOBALS['base'], $article['Id_billet']) ?> commentaire(s)</p>
                    </div>
                    <figure>
                        <img src="Vue/CSS/blue-hour.jpg" alt="" class="img-fluid">
                        <figcaption><?= _50_premier_mot($article['contenu']) ?></figcaption>
                    </figure>
                    <a href="index.php?action=article&Id=<?= $article['Id_billet'] ?>">Lire la suite</a>
                </div>
                <?php
                }
                ?>
                <!--fin list des articles -->


                <!-- ce code affiche le bloc article recent -->
                <div class="col-3 latest_article">
                    <h2 class="text-center py-1">Articles recents</h2>
                    <div class="latest_article_list">
                        <?php

                        while ($donnees = $resultat2->fetch()) {
                        ?>
                        <div class="item">
                            <figure>
                                <img class="img-fluid" src="Vue/CSS/blue-hour.jpg" alt="article">
                                <figcaption class="py-2"><a
                                        href="index.php?action=article&Id=<?= $donnees['Id_billet']; ?>">
                                        <b><?= $donnees['titre']; ?></b> , <?= $donnees['date_creation']; ?>
                                    </a>

                                </figcaption>
                            </figure>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 offset-md-2 text-center publish my-3">
                <a href="#">Publier un article <i class="fas fa-plus"></i></a>
            </div>
        </div>
    </main>
    <?php require("footer.php"); ?>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
</body>

</html>