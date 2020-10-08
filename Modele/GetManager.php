<?php

require_once("./Modele/manager.php");

class GetManager extends manager
{
    /**
     * getAllArticles permet de recupérer tous les articles dans la base de données
     *
     * @param  object $base, objet retourné par fonction connexion de manger
     * @return object
     */
    public function getAllArticles($base)
    {
        $sql = "SELECT * FROM billet ORDER BY date_creation DESC, Id_billet DESC";
        $resultat = $base->query($sql);
        return $resultat;
    }

    /**
     * getFirstArticles recupere 5 derniers articles de la bd
     *
     * @param  object $base, objet retourné par fonction connexion de manger
     * @return object
     */
    public function getFirstArticles($base)
    {
        $sql = "SELECT * FROM billet ORDER BY date_creation DESC, Id_billet DESC LIMIT 4";
        $resultat = $base->query($sql);
        return $resultat;
    }

    /**
     * getArticle recupere un article specifique de la bd
     *
     * @param  int $Id_billet
     * @param  object $base
     * @return object
     */
    public function getArticle($Id_billet, $base)
    {
        $sql = "SELECT * FROM billet WHERE Id_billet = ?";
        $resultat = $base->prepare($sql);
        $resultat->execute(array($Id_billet));
        return $resultat->fetch();
    }

    /**
     * setArticle permet d'ajouter un article à la base de donnée
     *
     * @param  arclicle.class $article
     * @param  object $base
     * @return void
     */
    public function setArticle($article, $base)
    {
        $sql = "INSERT INTO billet(titre, contenu, auteur, img) VALUES(:titre, :contenu, :auteur, :img)";
        $resultat = $base->prepare($sql);
        $resultat->bindValue(':titre', $article->getTitre());
        $resultat->bindValue(':contenu', $article->getContenu());
        $resultat->bindValue(':auteur', $article->getAuteur());
        $resultat->bindValue(':img', $article->getImg());
        $resultat->execute();
    }
}