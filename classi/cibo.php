<?php

include_once __DIR__ . '/prodotto.php';

class Libro extends Prodotto{
    public $peso;
    public $ingredienti;

    public function __construct(
        String $name,
        String $immagine,
        Category $category,
        Float $prezzo,
        
        Int $peso,
        String $ingredienti
    ) {
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
        parent::__construct($name, $immagine, $category, $prezzo);
    }
}

?>