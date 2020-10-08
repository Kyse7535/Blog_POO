<?php
//require("./Modele/modele.php");
require_once("./Modele/CommentManager.php");
require_once('./Modele/GetManager.php');
require_once("./Modele/comment.class.php");
require_once("./Modele/article.class.php");


/**
 * CtlBlog
 *
 * @return void
 */
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

/**
 * CtlAccueil se connecte premierement a la base de donnees. ensuite recupere les premiers articles de la 
 * base de donnees, enfin inclus le fichier accueil.php pour afficher la page.
 *
 * @return void
 */
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

/**
 * CtlArticle
 *
 * @param  mixed $Id_billet
 * @return void
 */
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
    if ($resultat1 == false || $commentaires == false || $article == false) {
        throw new Exception("Impossible d'afficher la page");
    } else {
        require("./Vue/article.php");
    }
}

/**
 * CtlSetComment
 *
 * @param  string $auteur
 * @param  string $comment
 * @param  string $Id_billet
 * @return void
 */
function CtlSetComment($auteur, $comment, $Id_billet)
{
    $mycomment = new CommentManager;
    $base = $mycomment->connexion();
    $mycomment->setComment($auteur, $comment, $Id_billet, $base);
}

/**
 * CtlA_propos
 *
 * @return void
 */
function CtlA_propos()
{
    require("./Vue/a_propos.php");
}

/**
 * CtlContact
 *
 * @return void
 */
function CtlContact()
{
    require('./Vue/contact.php');
}

/**
 * CtlAddarticle affiche la page ajouter_article.php
 *
 * @return void
 */
function CtlgetAddarticle()
{
    require("./Vue/ajouter_article.php");
}

/**
 * Ctlimage verifie si l'image n'a pas d'erreur et le transfert du dossier temporaire vers le dossier fichiers
 *
 * @return string
 */
function Ctlimage()
{

    if ($_FILES['photo']['error']) {
        switch ($_FILES['photo']['error']) {
            case 1: //UPLOAD_ERR_INI_SIZE
                echo "La taille du fichier est plus grande que la limite autorisée par le serveur";
                break;
            case 2: // UPLOAD_ERR_FORM_SIZE
                echo "La taille du fichier est plus grande que la limite autorisée par le formulaire";
                break;
            case 3: //UPLOAD_ERR_PARTIAL
                echo "L'envoi du fichier a été interrompu pendant le transfert";
                break;
            case 4:
                echo "La taille du fichier que vous avez envoyé est nulle";
                break;
        }
    } else {
        //s'il n'y a pas d'erreur alors $_FILES['nom_du_fichier']['error'] vaut 0
        //echo "Aucune erreur dans l'upload du fichier. <br>";
        if ((isset($_FILES['photo']['name']) && ($_FILES['photo']['error'] == UPLOAD_ERR_OK))) {

            $filename = basename($_FILES['photo']['name']);
            $tempname = $_FILES['photo']['tmp_name'];
            $chemin_destination = "fichiers/" . $filename;

            //deplacement du fichier du repertoire temporaire (stocké par defaut) dans le rep de destination avec la fonction
            if (move_uploaded_file($tempname, $chemin_destination)) {
                //echo "Le fichier " . $filename . " a ete copie dans le repertoire fichiers";
            }
            return $filename;
        } else {
            echo "Le fichier n'a pas pu être copié dans le repertoire fichiers.";
        }
    }
}

/**
 * CtlSetArticle
 *
 * @param  string $auteur
 * @param  string $titre
 * @param  string $contenu
 * @param  string $img
 * @return void
 */
function CtlSetArticle($auteur, $titre, $contenu, $img)
{
    $myarticlemanager = new GetManager();
    $base = $myarticlemanager->connexion();
    $tableau = array("auteur" => $auteur, "titre" => $titre, "contenu" => $contenu, "img" => $img);
    $myarticle = new article($tableau);
    $myarticlemanager->setArticle($myarticle, $base);
    header('Location: index.php?action=blog');
}