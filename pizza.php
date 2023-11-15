<?php
class Pizza extends Articulo{
    public $ingredients;

    public function __construct($name, $cost, $price, $count, $ingredients){
        parent::__construct($name,$cost, $price, $count);
        $this->ingredients = $ingredients;
    }

    public function getIngredients(){
        return $this->ingredients;
    }
    public function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }
    public function __toString(){
        return parent::__toString() . "Ingredientes: " . $this->ingredients;
    }
}







?>