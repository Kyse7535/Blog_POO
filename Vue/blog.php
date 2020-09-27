<?php $title = "Blog"; ?>
<?php ob_start(); ?>
<?php require("header.php"); ?>
<main>
    <style>
    <?php require('./Vue/CSS/blog.css');
    ?>
    </style>
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
                    <p><?= $mycomment->getRowNumber($base, $article['Id_billet']); ?> commentaire(s)</p>
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
<?php $content = ob_get_clean(); ?>
<?php require("./Vue/template.php"); ?>