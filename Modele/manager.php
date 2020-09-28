<?php


/**
 * manager class
 */
class manager
{

    /**
     * connexion a la base de données
     *
     * retourne un objet ou false en cas d'echec
     * @return object
     */
    public function connexion()
    {
        $base = new \PDO("mysql:host = 127.0.0.1;dbname=_test", "kisse", "AF+%y)PhAb.r7.s");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "connexion reussie <br>";
        return $base;
    }

    /**
     * hydrate permet d'initialiser toutes la variables de mon objet
     *
     * @param  mixed $tableau
     * @return void
     */
}