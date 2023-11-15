<?php

class Articulo {
    private $name;
    public $cost;
    public $price;
    public $count;

    public function __construct($name, $cost, $price, $count) {
        $this->name = $name;
        $this->cost = $cost;
        $this->price = $price;
        $this->count = $count;
    }

    public function getName() {
        return $this->name;
    }
    public function getCost() {
        return $this->cost;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getCount() {
        return $this->count;
    }
    public function setName( $name ) {
        $this->name = $name;
    }
    public function setCost( $cost ) {
        $this->cost = $cost;
    }
    public function setPrice( $price ) {
        $this->price = $price;
    }
    public function setCount( $count ) {
        $this->count = $count;
    }

    public function __toString() {
        return "Nombre: ". $this->name ."Coste :". $this->cost . "Precio: ". $this->price ."Contador: " . $this->count;
    }
}

?>