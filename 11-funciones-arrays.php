<?php include 'includes/header.php';

//in array buscar elementos en un arreglo
$carrito = ["tablet", "computador", "televisor"];

var_dump(in_array("tablet", $carrito));
var_dump(in_array("Audifonos", $carrito));

// ordenar elementos de un arreglo
$numeros = array(1,3,4,5,1,2);
sort($numeros); // ordenar de menor a mayor
rsort($numeros); // ordenar de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//ordenar arreglo asociativo
$cliente = array(
    "saldo" => 200,
    "tipo" => "premium",
    "nombre" => "Aleja"
);

asort($cliente); // ordena por valores y alfabetico
arsort($cliente); // ordena por  valores (z primero) alfabeto  y luego numeros
ksort($cliente); //ordena por ordena por llaves orden alfabetico
krsort($cliente); //ordena por ordena por llaves orden alfabetico de la Z a la A


echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';