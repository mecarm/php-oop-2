<?php

//Inludo il trait address.
include_once __DIR__ . '/../traits/address.php';

class User{
    public $name;
    public $email;
    public $eta;

    use Address;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }

    //Funzione per filtrare le informazioni in età e ritorno delle stringhe a schermo da far visualizzare all'utente.
    //Per fare questo utilizzo una funzione e THROW EXCEPTION inserito in condizioni.
    public function setEta( $_eta ){

        if( !is_int($_eta) ){
            throw new Exception("ATTENZIONE: $_eta non è un numero!");
        }
        elseif( $_eta < 0 ){
            throw new Exception("ATTENZIONE: $_eta è minore di zero!");
        }
        else{
            $this->eta = $_eta;
        }
    }
}

?>