<?php
require_once('./Modele/objet.class.php');
class article extends objet
{

    private $Id_billet;
    private $auteur;
    private $titre;
    private $contenu;
    private $date_creation;
    private $img;

    public function getId_billet()
    {
        return $this->Id_billet;
    }
    public function getAuteur()
    {
        return $this->auteur;
    }
    public function getTitre()
    {
        return $this->titre;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function getDate_creation()
    {
        return $this->date_creation;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setId_billet($Id_billet)
    {
        $Id_billet = (int) $Id_billet;
        if ($Id_billet > 0) {
            $this->Id_billet = $Id_billet;
        }
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setAuteur($auteur)
    {
        (string) $auteur;
        $this->auteur = htmlspecialchars($auteur);
    }

    public function setContenu($contenu)
    {
        $this->contenu = htmlspecialchars($contenu);
    }

    public function setDate_creation($date_creation)
    {
        $this->date_creation = htmlspecialchars($date_creation);
    }

    public function setImg($img)
    {
        $this->img = htmlspecialchars($img);
    }
}