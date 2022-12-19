<?php

include_once __DIR__ . '/category.php';

class Prodotto{
    public $name;
    public $immagine;
    public $category;
    public $prezzo;

    public function __construct(
        String $name,
        String $immagine,
        Category $category,
        Float $prezzo
    ) {
        $this->name = $name;
        $this->immagine = $immagine;
        $this->category = $category;
        $this->prezzo = $prezzo;
    }
}
?>
