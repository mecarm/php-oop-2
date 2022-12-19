<?php

include_once __DIR__ . '/prodotto.php';

class Accessori extends Prodotto{
    public $materiale;
    public $dimensioni;

    public function __construct(
        String $name,
        String $immagine,
        Category $category,
        Float $prezzo,
        
        Int $materiale,
        String $dimensioni
    ) {
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
        parent::__construct($name, $immagine, $category, $prezzo);
    }
}

?>