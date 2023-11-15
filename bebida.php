<?php
class Bebida extends Articulo{
    public $alcohol;

    public function __construct($name, $cost, $price, $count, $alcohol){
        parent::__construct($name,$cost, $price, $count);
        $this->alcohol = $alcohol;
    }

    public function getIngredients(){
        return $this->alcohol;
    }
    public function setIngredients($alcohol){
        $this->alcohol = $alcohol;
    }
    public function __toString(){
        return parent::__toString() . "Alcohílica: " . ($this->alcohol ? "Sí":"No");
    }
}


?>