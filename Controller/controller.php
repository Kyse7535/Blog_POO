<?php
//require("./Modele/modele.php");
require_once("./Modele/CommentManager.php");
require_once('./Modele/GetManager.php');


function CtlBlog()
{
    $myarticle = new GetManager();
    $base = $myarticle->connexion();
    $resultat1 = $myarticle->getAllArticles($base);
    $resultat2 = $myarticle->getFirstArticles($base);
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
        $mycomment = new CommentManager();
        require("./Vue/blog.php");
    }
}

function CtlAccueil()
{
    $myarticle = new GetManager();
    $base = $myarticle->connexion();
    $resultat = $myarticle->getFirstArticles($base);
    if ($resultat == false) {
        throw new Exception("Impossible d'afficher la page");
    } else {
        require("./Vue/accueil.php");
    }
}

function CtlArticle($Id_billet)
{
    $myarticle = new GetManager();
    $mycomment = new CommentManager();
    $base = $myarticle->connexion();
    $Id_billet = intval($Id_billet);
    $article = $myarticle->getArticle($Id_billet, $base);
    $nbcomment = $mycomment->getRowNumber($base, $Id_billet);
    $resultat1 = $myarticle->getFirstArticles($base);
    $commentaires = $mycomment->getFirstComments($Id_billet, $base);
    if ($resultat1 == false || $commentaires == false || $nbcomment == false || $article == false) {
        throw new Exception("Impossible d'afficher la page");
    } else {
        require("./Vue/article.php");
    }
}

function CtlSetComment($auteur, $comment, $Id_billet)
{
    $mycomment = new CommentManager;
    $base = $myarticle->connexion();
    $mycomment->setComment($auteur, $comment, $Id_billet, $base);
}

function CtlA_propos()
{
    require("./Vue/a_propos.php");
}

function CtlContact()
{
    require('./Vue/contact.php');
}