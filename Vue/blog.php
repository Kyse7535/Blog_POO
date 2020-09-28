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
                $monarticle = new article($article);
            ?>
            <div class="col-9 text-right py-5 article">
                <h2><?= $monarticle->getTitre() ?></h2>
                <div class="date_auteur">
                    <p><?= $monarticle->getDate_creation() ?> | <?= $monarticle->getAuteur() ?></p>
                    <p><?= $mycomment->getRowNumber($base, $monarticle->getId_billet()); ?> commentaire(s)</p>
                </div>
                <figure>
                    <img src="<?= "../fichiers/" . $monarticle->getImage() ?>" alt="" class="img-fluid">
                    <figcaption><?= _50_premier_mot($monarticle->getContenu()) ?></figcaption>
                </figure>
                <a href="index.php?action=article&Id=<?= $monarticle->getId_billet() ?>">Lire la suite</a>
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

                    while ($article = $resultat2->fetch()) {
                        $monarticle = new article($article);
                    ?>
                    <div class="item">
                        <figure>
                            <img class="img-fluid" src="Vue/CSS/blue-hour.jpg" alt="article">
                            <figcaption class="py-2"><a
                                    href="index.php?action=article&Id=<?= $monarticle->getId_billet() ?>">
                                    <b><?= $monarticle->getTitre(); ?></b> , <?= $monarticle->getDate_creation() ?>
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
            <a href="index.php?action=add">Publier un article <i class="fas fa-plus"></i></a>
        </div>
    </div>
</main>
<?php $content = ob_get_clean(); ?>
<?php require("./Vue/template.php"); ?>