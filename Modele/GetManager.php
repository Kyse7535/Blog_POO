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
        $sql = "SELECT * FROM billet ORDER BY date_creation, Id_billet DESC";
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
        $sql = "SELECT * FROM billet ORDER BY date_creation, Id_billet DESC LIMIT 4";
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
        $sql = "SELECt * FROM billet WHERE Id_billet = ?";
        $resultat = $base->prepare($sql);
        $resultat->execute(array($Id_billet));
        return $resultat->fetch();
    }
}