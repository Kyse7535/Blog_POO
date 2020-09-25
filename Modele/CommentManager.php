<?php

require_once('./Modele/manager.php');

class CommentManager extends manager
{
    /**
     * getRowNumber compte le nombre de ligne du resultat d'une requete definie
     *
     * @param  object $base
     * @param  int $Id_billet
     * @return int
     */
    public function getRowNumber($base, $Id_billet)
    {
        $sql = "SELECT * FROM commentaire WHERE Id_billet = ?";
        $resultat = $base->prepare($sql);
        $resultat->execute(array($Id_billet));
        return $resultat->rowCount();
    }

    /**
     * getFirstComments affiche les 5 premiers commentaires d'une article bien defini
     *
     * @param  int $Id_billet
     * @param  object $base
     * @return object
     */
    public function getFirstComments($Id_billet, $base)
    {
        $sql = "SELECT * FROM commentaire WHERE Id_billet = ? ORDER BY date_creation DESC, Id_commentaire DESC LIMIT 5";
        $resultat = $base->prepare($sql);
        $resultat->execute(array($Id_billet));
        return $resultat;
    }

    /**
     * setComment permet d'inserer un commentaire
     *
     * @param  string $auteur
     * @param  string $comment
     * @param  int $Id_billet
     * @param  object $base
     * @return object
     */
    public function setComment($auteur, $comment, $Id_billet, $base)
    {
        $sql = "INSERT INTO commentaire(Id_billet, auteur, commentaire) VALUES(?, ?, ?)";
        $resultat = $base->prepare($sql);
        $resultat->execute(array($Id_billet, $auteur, $comment));
    }
}