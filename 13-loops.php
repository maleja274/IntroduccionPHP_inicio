<?php include 'includes/header.php';

//while recorre resultados de una base de datos

$i = 0; //inicializador
while($i < 10) {
    echo $i . "<br/>";
    $i++; // incremento
}
echo "<br/>";


//Do while
 $i = 0;
 do{
    echo $i . "<br/>";

    $i++;
 }while($i < 10);



/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 Imprimir FIZZ BUZZ
 */

 echo "<br/>";

 //for loop
for($i = 0; $i < 10; $i++) {
    echo $i . "<br/>";
}

for($i = 1; $i < 100; $i++) {
    if($i % 15 === 0){
        echo $i . "-FIZZ BUZZ  <br/>";
    }
    elseif($i % 3 === 0) {          // que numero son multiplos de 3
        echo $i . "-Fizz  <br/>";
    }
    elseif($i % 5 === 0) {          // que numero son multiplos de 5
        echo $i . "-Buzz  <br/>";
    }
    else {
        echo $i . "<br/>";
    }
}

// for each
$clientes = array ("pedro", "juan", "karen");
foreach( $clientes as $cliente ) {
    echo $cliente . "<br/>";
}

$cliente = [
    "nombre" => "juan",
    "saldo" => 200,
    "tipo" => "premium"
];

foreach ($cliente as $key => $valor):
    echo $key . " - " . $valor . "<br/>";
endforeach;

    

include 'includes/footer.php';