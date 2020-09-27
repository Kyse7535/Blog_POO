<?php $content = "Blog"; ?>
<?php ob_start(); ?>
<?php require("header.php"); ?>
<?php $title = "Blog accueil"; ?>
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
<?php $content = ob_get_clean(); ?>
<?php require("Vue/template.php"); ?>