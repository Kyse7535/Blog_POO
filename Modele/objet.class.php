<?php
class objet
{
    public function __construct($tableau)
    {
        $this->hydrate($tableau);
    }
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