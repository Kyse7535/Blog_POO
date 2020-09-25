<?php

function connexion()
{
    $base = new PDO("mysql:host = 127.0.0.1;dbname=_test", "kisse", "AF+%y)PhAb.r7.s");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion reussie <br>";
    return $base;
}

function getAllArticles($base)
{
    $sql = "SELECT * FROM billet ORDER BY date_creation, Id_billet DESC";
    $resultat = $base->query($sql);
    return $resultat;
}

function getRowNumber($base, $Id_billet)
{
    $sql = "SELECT * FROM commentaire WHERE Id_billet = ?";
    $resultat = $base->prepare($sql);
    $resultat->execute(array($Id_billet));
    return $resultat->rowCount();
}

function getFirstArticles($base)
{
    $sql = "SELECT * FROM billet ORDER BY date_creation, Id_billet DESC LIMIT 4";
    $resultat = $base->query($sql);
    return $resultat;
}

function getArticle($Id_billet, $base)
{
    $sql = "SELECt * FROM billet WHERE Id_billet = ?";
    $resultat = $base->prepare($sql);
    $resultat->execute(array($Id_billet));
    return $resultat->fetch();
}

function getFirstComments($Id_billet, $base)
{
    $sql = "SELECT * FROM commentaire WHERE Id_billet = ? ORDER BY date_creation DESC, Id_commentaire DESC LIMIT 5";
    $resultat = $base->prepare($sql);
    $resultat->execute(array($Id_billet));
    return $resultat;
}

function setComment($auteur, $comment, $Id_billet, $base)
{
    $sql = "INSERT INTO commentaire(Id_billet, auteur, commentaire) VALUES(?, ?, ?)";
    $resultat = $base->prepare($sql);
    $resultat->execute(array($Id_billet, $auteur, $comment));
}