<?php
require_once("./Modele/objet.class.php");
class comment extends objet
{
    private $Id_billet;
    private $auteur;
    private $commentaire;
    private $date_creation;

    public function getId_billet()
    {
        return $this->Id_billet;
    }
    public function getAuteur()
    {
        return $this->auteur;
    }

    public function getCommentaire()
    {
        return $this->commentaire;
    }

    public function getDate_creation()
    {
        return $this->date_creation;
    }

    public function setAuteur($auteur)
    {
        (string) $auteur;
        $this->auteur = htmlspecialchars($auteur);
    }

    public function setCommentaire($commentaire)
    {
        $this->commentaire = htmlspecialchars($commentaire);
    }

    public function setDate_creation($date_creation)
    {
        $this->date_creation = htmlspecialchars($date_creation);
    }
}