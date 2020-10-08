<?php
class objet
{
    public function __construct($tableau)
    {
        $this->hydrate($tableau);
    }
    /**
     * hydrate donne une valeur definie a chaque attribut de ma classe
     *
     * @param  mixed $tableau
     * @return void
     */
    public function hydrate($tableau)
    {
        foreach ($tableau as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}