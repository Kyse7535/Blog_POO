<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Article</title>
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
    <link rel="stylesheet" href="Vue/CSS/article.css">
</head>

<body>
    <?php require("header.php"); ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-9 text-right">
                    <h2><?= $article['titre'] ?></h2>
                    <div class="date_auteur">
                        <p><?= $article['date_creation'] ?> | Par <?= $article['auteur'] ?></p>
                        <p><?= $nbcomment ?> commentaire(s)</p>
                    </div>
                    <figure>
                        <img src="Vue/CSS/blue-hour.jpg" alt="" class="img-fluid">
                        <figcaption><?= $article['contenu'] ?></figcaption>
                    </figure>
                </div>
                <div class="col-2 offset-md-1">
                    <h2 class="text-center categorie py-3">Categories</h2>
                    <ul>
                        <li><a href="#">Categorie 1</a></li>
                        <li><a href="#">Categorie 2</a></li>
                    </ul>
                </div>
                <div class="col-8 link">
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i> Partager sur Facebook</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i> Partager sur Twitter</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin"></i>Partager sur linkedIn</a>
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                    <h2 class="text-center py-1">Articles recents</h2>
                    <div class="latest_article_list">
                        <?php

                        while ($donnees = $resultat1->fetch()) {
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
                <div class="col-8">
                    <h3>commentaires</h3>
                    <div class="commentaire">
                        <?php while ($comment = $commentaires->fetch()) {
                            $Id_billet = $comment['Id_billet'];
                        ?>

                        <h6><b><?= $comment['auteur'] ?></b>, le <?= $comment['date_creation'] ?></h6>
                        <p><?= $comment['commentaire'] ?></p>
                        <?php
                        } ?>

                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-9 mb-4">
                    <h3>Laisser un commentaire</h3>
                    <form action="index.php?action=post&Id=<?= $Id_billet ?>" method="POST">
                        <label for=""><input type="text" placeholder="Nom" name="nom" required> *</label>
                        <label for=""><input type="text" placeholder="Email" name="email"> *</label>
                        <label class="text" for=""><textarea name="comment" id="" cols="30" rows="4"
                                placeholder="commentaire" required></textarea>
                            <span>*</span></label><br>
                        <p>* champ obligatoire</p>

                        <input type="submit" value="Envoyer">
                    </form>
                </div>
                <div class="col-3"></div>
            </div>

        </div>
    </main>
    <?php require("footer.php"); ?>
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