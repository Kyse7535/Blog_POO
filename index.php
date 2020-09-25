<?php
require("./Controller/controller.php");

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "blog") {
            CtlBlog();
        } elseif ($_GET['action'] == "article") {
            if (isset($_GET['Id']) && $_GET['Id'] > 0) {
                CtlArticle(htmlspecialchars($_GET['Id']));
            } else {
                throw new Exception("Impossible d'afficher la page");
            }
        } elseif ($_GET['action'] == "accueil") {
            CtlAccueil();
        } elseif ($_GET['action'] == "post") {
            if (isset($_GET['Id']) && $_GET['Id'] > 0) {
                if (isset($_POST['nom']) && isset($_POST['comment'])) {
                    if (!empty($_POST['nom']) && !empty($_POST['comment'])) {
                        $auteur = htmlspecialchars($_POST['nom']);
                        $comment = htmlspecialchars($_POST['comment']);
                        $Id_billet = intval(htmlspecialchars($_GET['Id']));
                        CtlSetComment($auteur, $comment, $Id_billet);
                        CtlArticle($Id_billet);
                    }
                }
            }
        } elseif ($_GET['action'] == "a_propos") {
            CtlA_propos();
        } elseif ($_GET['action'] == "contact") {
            CtlContact();
        } else {
            throw new Exception("Impossible de charger la page");
        }
    } else {
        CtlAccueil();
    }
} catch (Exception $e) {
    die('Erreur' . $e->getMessage());
}