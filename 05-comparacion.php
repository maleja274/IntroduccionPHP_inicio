<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br/>";

var_dump($numero1 < $numero2);
echo "<br/>";

var_dump($numero1 >= $numero2);
echo "<br/>";

var_dump($numero1 <= $numero2);
echo "<br/>";

var_dump($numero2 == $numero3);
echo "<br/>";

var_dump($numero2 === $numero4); // === revisa el tipo de dato
echo "<br/>";

var_dump($numero1 <=> $numero2); // int(-1) si izquierda es menor
echo "<br/>";

var_dump($numero2 <=> $numero3); // int(0) si es igual
echo "<br/>";

var_dump($numero2 <=> $numero1); // int(1) si izquierda es mayor
echo "<br/>";

include 'includes/footer.php';