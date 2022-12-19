<?php

include_once __DIR__ . '/prodotto.php';

class Giocattoli extends Prodotto{
    public $caratteristiche;
    public $dimensioni;

    public function __construct(
        String $name,
        String $immagine,
        Category $category,
        Float $prezzo,
        
        Int $caratteristiche,
        String $dimensioni
    ) {
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
        parent::__construct($name, $immagine, $category, $prezzo);
    }
}

?>