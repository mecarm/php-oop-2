<?php
// Includo la classe padre prodotto 
include_once __DIR__ . '/prodotto.php';

//Creo la classe Cibo che è un estensione di Prodotto e quindi eredita le instanze contenute all'interno della classe prodotto.
class Cibo extends Prodotto{
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
    public function displayProjectCard() {
        echo '<div class="card mt-4 col-4">
                <div class="card-body">
                    <img class="img-fluid" src="'. $this->immagine .'">
                    <h5 class="card-title">' . $this->name . '</h5>
                    <p class="card-text">' . $this->category->name . $this->category->icon . '</p>
                    <ul class="list-unstyled">
                        <li>Prezzo: ' . $this->prezzo . '€</li>
                        <li>Peso: ' . $this->peso . 'g</li>
                        <li>Ingredienti: ' . $this->ingredienti . '</li>
                    </ul>
                </div>
            </div>';
    }
}

?>