<?php include 'includes/header.php';

$cliente = [
    "nombre" => "Aleja",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "premium",
        "disponible" => 100
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente["nombre"];
echo $cliente["saldo"];
echo $cliente["informacion"] ["tipo"];



// nuevos datos 
$cliente["codigo"] = 1098738309;

echo "<pre>";
var_dump($cliente);
echo "</pre>";




include 'includes/footer.php';