<?php 
////
//Enrique Fernandez - Campoamor Fernandez
// Github: https://github.com/Kikenvt/-DWES_t2_examen.git
////
require 'articulo.php';
require 'pizza.php';
require 'bebida.php';

// solicitar los archivos "articulo.php", "bebida.php", "pizza.php";

// Inicialización de los artículos
$articulos = [
    new Articulo("Lasagna", 3.50, 7.00, 20),
    new Articulo("Pan de ajo y mozzarella", 2.00, 4.50, 15),
    new Pizza("Pizza Margarita", 4.00, 8.00, 30, ["Tomate", "Mozzarella", "Albahaca"]),
    new Pizza("Pizza Pepperoni", 5.00, 10.00, 25, ["Tomate", "Mozzarella", "Pepperoni"]),
    new Pizza("Pizza Vegetal", 4.50, 9.00, 18, ["Tomate", "Mozzarella", "Verduras Variadas"]),
    new Pizza("Pizza 4 quesos", 5.50, 11.00, 20, ["Mozzarella", "Gorgonzola", "Parmesano", "Fontina"]),
    new Bebida("Refresco", 1.00, 2.00, 50, false),
    new Bebida("Cerveza", 1.50, 3.00, 40, true)
];

// Ejemplo de uso


mostrarMenu($articulos);
mostrarMasVendidos($articulos);
mostrarMasLucrativos($articulos);

function mostrarMenu($articulos) {
    echo "<h1>Nuestro Menú</h1>";
    echo "<h2>Pizzas</h2>";
    foreach ($articulos as $pizzas) {
        if ($pizzas instanceof Pizza) {
            echo $pizzas->getName() . "<br>";
        }
    }
    echo "<h2>Bebidas</h2>";
    foreach ($articulos as $bebida) {
        if ($bebida instanceof Bebida) {
            echo $bebida->getName(). "<br>";
        }
    }
    echo "<h2>Otros</h2>";
    foreach ($articulos as $otros) {
        if(!($otros instanceof Pizza) and !($otros instanceof Bebida)) {
            echo $otros->getName(). "<br>";
        }
    }
}

function mostrarMasVendidos($articulos) {
    echo "<h2>Los más vendidos</h2>";

    usort($articulos, function($a, $b) {
        return $b->getCount() - $a->getCount();
    });
    
    for($i=0; $i<3; $i++) {

        echo $articulos[$i]->getName() . ", Vendidos: " . $articulos[$i]->getCount() . "<br>";
    }

}

function mostrarMasLucrativos($articulos) {
    echo "<h2>Los más lucrativos</h2>";

    usort($articulos, function ($a, $b) {
        $benefit1 = ($a->getPrice() - $a->getCost()) * $a->getCount();
        $benefit2 = ($b->getPrice() - $b->getCost()) * $b->getCount();
 
        return $benefit2 - $benefit1;
    });
 
    foreach ($articulos as $articulo) {
        $benefit = ($articulo->getPrice() - $articulo->getCost()) * $articulo->getCount();
        echo $articulo->getName() . " - Beneficio: {$benefit} €<br>";
    }

}

