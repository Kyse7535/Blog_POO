<?php
require("./Modele/modele.php");
$base = connexion();


function CtlBlog()
{
    $resultat1 = getAllArticles($GLOBALS['base']);
    $resultat2 = getFirstArticles($GLOBALS['base']);
    if ($resultat1 == false || $resultat2 == false) {
        throw new Exception("Impossible d'afficher la page");
    } else {
        function _50_premier_mot($chaine)
        {
            $contenu = $chaine;
            $tab_contenu = explode(" ", $contenu);
            $debut_contenu = implode(",", array_slice($tab_contenu, 0, 50)) . " ...";
            return $debut_contenu;
        }
        require("./Vue/blog.php");
    }
}

function CtlAccueil()
{
    $resultat = getFirstArticles($GLOBALS['base']);
    if ($resultat == false) {
        throw new Exception("Impossible d'afficher la page");
    } else {
        require("./Vue/accueil.php");
    }
}

function CtlArticle($Id_billet)
{
    $Id_billet = intval($Id_billet);
    $article = getArticle($Id_billet, $GLOBALS['base']);
    $nbcomment = getRowNumber($GLOBALS['base'], $Id_billet);
    $resultat1 = getFirstArticles($GLOBALS['base']);
    $commentaires = getFirstComments($Id_billet, $GLOBALS['base']);
    if ($resultat1 == false || $commentaires == false || $nbcomment == false || $article == false) {
        throw new Exception("Impossible d'afficher la page");
    } else {
        require("./Vue/article.php");
    }
}

function CtlSetComment($auteur, $comment, $Id_billet)
{
    setComment($auteur, $comment, $Id_billet, $GLOBALS['base']);
}

function CtlA_propos()
{
    require("./Vue/a_propos.php");
}

function CtlContact()
{
    require('./Vue/contact.php');
}