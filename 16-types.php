<?php include 'includes/header.php';

// function usuarioAutenticado() : string {
//     return " El usuario esta atenticado";
// }
// $usuario = usuarioAutenticado();
// echo $usuario;

// function usuarioAutenticado(bool $autenticado) : void {
//     if($autenticado) {
//         echo "El usuario esta atenticado";
//     }else{
//         echo "no autenticado";
//     }
// }
// $usuario = usuarioAutenticado(true);
// echo $usuario;

function usuarioAutenticado(bool $autenticado) : string|int {
    if($autenticado) {
        return "El usuario esta atenticado";
    }else{
        return 20;
    }
}
$usuario = usuarioAutenticado(true);
echo $usuario;




include 'includes/footer.php';