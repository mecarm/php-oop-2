<?php

trait Address{
    public $street;
    public $zipCode;
    public $city;

    public function getAddress(){
        return "$this->street - $this->zipCode - $this->city";
    }
}

?>