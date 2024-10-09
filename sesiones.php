<?php
//incluyo las funciones creadas
include_once 'funciones.php';
// echo "hoola";
/*cuando se pulse el botón iniciar sesion saltarán las funciones 
    -getUser validará que sea el usuario que queremos 
    -estaLogueado mira si el usuario esta logueado
        -si esta logueado se le muestra ya el listado y se utilizará   
        datosSesion para guardar sus datos 
    -logIn logueará al usuario si este no lo está
        -mostramos el listado 
*/
//inicio la sesion 
iniciaSesion();
/**Guardo la clave user */
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = $_POST['nombre'];
    $contrasenia = $_POST['contrasenia'];
}

// logueo al usuario
// logIn($user);

if(estaLogueado($user)){
    //muestro la lista
    header('location: listado.php');
}else{
    echo "Debes registrarte";
    logIn($user);
}


// $_SESSION['user'] = "David";
?>

