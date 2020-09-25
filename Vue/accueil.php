<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Accueil</title>
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
</head>

<body>
    <?php require("header.php"); ?>
    <main>
        <div class="container-fluid">
            <div class="row image text-center">
                <div class="col-12 text1">
                    <h2>SUIVEZ-moi dans MON aventure</h2>
                </div>
                <div class="col-12 text2">
                    <a href="index.php?action=blog">Lire le blog</a>
                </div>
                <div class="col-12 text3">
                    <a href="#">visionner sur youtube</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row link_social_network">
                <div class="col-12">
                    <h2>Retouvez moi sur</h2>
                </div>
                <div class="col-12 link">
                    <div class="twitter">
                        <div class="shadow">
                            <h5>
                                <a href="#">twitter</a>
                            </h5>
                        </div>
                    </div>
                    <div class="youtube">
                        <div class="shadow">
                            <h5>
                                <a href="#">youtube</a>
                            </h5>
                        </div>
                    </div>
                    <div class="instagram">
                        <div class="shadow">
                            <h5>
                                <a href="#">instagram</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 py-1">
                    <h2 class="text-center py-3">Articles recents</h2>
                    <div class="latest_article_list">
                        <?php

                        while ($donnees = $resultat->fetch()) {
                        ?>
                        <div class="item">
                            <figure class="py-1">
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
                <div class="col-12 col-md-8 a_propos px-5 py-4">
                    <h2 class="text-center py-1">A propos</h2>
                    <div class="content">
                        <img src="Vue/CSS/image2.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <p class="pt-4">
                                Ceci est un paragraphe. Survolez-moi avec votre souris d'ordinateur et cliquez une fois
                                pour que le menu s'affiche. Double-cliquez pour éditer directement le texte. Vous pouvez
                                aussi me déplacer n'importe où sur la page par la méthode du «Glisser et Déposer»
                            </p>
                            <p>
                                Ceci est un paragraphe. Survolez-moi avec votre souris d'ordinateur et cliquez une fois
                                pour que le menu s'affiche. Double-cliquez pour éditer directement le texte. Vous pouvez
                                aussi me déplacer n'importe où sur la page par la méthode du «Glisser et Déposer»
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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