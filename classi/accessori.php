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
        
        String $materiale,
        String $dimensioni
    ) {
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
        parent::__construct($name, $immagine, $category, $prezzo);
    }

    public function displayProjectCard() {
        echo '<div class="card mt-4 col-4" >
                <div class="card-body">
                    <img class="img-fluid" src="'. $this->immagine .'">
                    <h5 class="card-title">' . $this->name . '</h5>
                    <p class="card-text">' . $this->category->name . $this->category->icon . '</p>
                    <ul class="list-unstyled">
                        <li>Prezzo: ' . $this->prezzo . '€</li>
                        <li>Materiale: ' . $this->materiale . '</li>
                        <li>Dimensioni: ' . $this->dimensioni . '</li>
                    </ul>
                </div>
            </div>';
    }
}

?>