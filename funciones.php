<?php
function iniciaSesion(){
    session_start(); //arranco la sesión 
}

function logOut(){
    session_unset();//libera las variables de sesión
    session_destroy(); //destruyo la sesión

}

function logIn($user){
    /*abro la sesion y creo la variable user con el valor de la 
    persona que se loguea si no existe es pirque no esta logueado*/
    $_SESSION['user'] = $user;
}

function estaLogueado($user){//true o false
    /*coho los datos del formulario u miro si existen si existen true y si no false*/
    return $_SESSION['user'] = $user;
}

/*Será una función explícita de este programa de forma que solo entrará 
el usuario David*/
function getUser($user){
    $nomUSu = $_SESSION['user'];
    if($nomUsu == "David"){
        logIn($user);
    }else{
        echo "No puedes entrar";
    }
}
function datosSesion($clave,$valor){//clave valor
    /*creaos un array que meteremos en $session hará que no se guarden los datos
    del mismo usuario*/
    //creo el array 
    $infoUser = []; 
    //metemos la clae valor en el array
    $infoUser[$clave] = $valor;
}

//utilizaré el include para incluir las funciones en mis php
?>