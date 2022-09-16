<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado || $admin) {
    echo "usuario autenticado correctamente";
}else{
    echo "usuario no autenticado, inisia sesion";
}


// if anidados
$cliente = [
    "nombre" => "Aleja",
    "saldo" => 200,
    "infomacion" => [
        "tipo" => "premium"
    ]
];

if (!empty($cliente)){
    echo "el arreglo de cliente no esta vacio";
    
    if ($cliente ["saldo"] > 0) {
        echo "el saldo del cliente esta disponible";
    }else{
        echo "no hay saldo";
    }

}

// else if

if ($cliente["saldo"] > 0) {
    echo " el cliente tiene saldo";
}else if ($cliente ["informacion"] ["tipo"] === "premium") {
    echo " el cliente es premium";
}else {
    echo "no hay cliente definido";
}

//switch

$tecnologia = "HTML";

switch ($tecnologia) {
    case "PHP":
        echo "PHP, un excelente lenguaje";
        break;
    case "javascript":
        echo "genial el lenguaje de la web";
        break;
    case "HTML":
        echo "Aprendiendo";
        break;

    default;
        echo "Algun lenguaje que no se cual es";
        break;
}

include 'includes/footer.php';