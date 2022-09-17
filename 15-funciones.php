<?php 
declare(strict_types=1);
include 'includes/header.php';



function sumar(int $numero1 = 0, int $numero2 = 0) {
    echo $numero1 + $numero2;
}

sumar(10, 20);
echo "<br/>";
sumar(5, 25);
echo "<br/>";
sumar(8, 28);
echo "<br/>";
sumar(9, 29);
echo "<br/>";






include 'includes/footer.php';