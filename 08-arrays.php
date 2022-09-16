<?php include 'includes/header.php';

// formas de arreglos
$carrito = [];
var_dump($carrito);

$carrito = array();
var_dump($carrito);

//elementos que existen en un arreglo
$carrito = ["Tablet", "Television", "Computador"];

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//acceder a un elemnto de array
echo $carrito[1];

// añade un elemento en el indice 3 del arreglo
$carrito[3] = "Nuevo Producto";

//añadir un elemento al final
array_push($carrito, "Audifonos");

//añadir elemento al principio
array_unshift($carrito,"Smartwatch");


//util para los contenidos del array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// ejemplos clientes

$clientes = array ("Cliente1", "Cliente2", "Cliente3");
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[0];

include 'includes/footer.php';