<?php include 'includes/header.php';


// conocer la extension de un string
$nombreCliente = "Aleja Monroy";
echo strlen($nombreCliente);    // muestra el numero de los caracteres
var_dump($nombreCliente);  // da el valor a la variables

// eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//convertir a mayusculas
echo strtoupper($nombreCliente);

//convertirlos a minusculas
echo strtolower($nombreCliente);

//ejemplo para mayuscula y minuscula
$email1 = "correo@correo.com";
$email2 = "Correo@correo.com";

var_dump($email1 == $email2); // el email 1 es igual al email 2 (falso)

var_dump(strtolower($email1) === strtolower($email2));

// reeplazar una cadena de texto
echo str_replace("Aleja", "A", $nombreCliente);

// revisar si un string existe o no
echo strpos($nombreCliente, "Sara");

$tipoCliente = "Premium";
echo "<br/>";
echo " El cliente " . $nombreCliente . " es " . $tipoCliente;  // concatenar (unir varios)


include 'includes/footer.php';