<?php
session_start();
require '../Modelo/clsConexion.php';

$username = filter_input(INPUT_POST,"username");
$password = filter_input(INPUT_POST,"password");
$con = new clsConexcion();
$validacion = $con->validarUsuario($username, $password);
if($validacion == 1){
    //$usuario = $con->getUsuario($username);
    //echo $_SESSION['usuario'] = $usuario;
    //echo $_SESSION['contraseña'] = $password;

    header ("location: ../Vista/paginaUsuarios.php ");
}else{
    //echo "Cometio algun error al ingresar los datos, por favor vuelva a intentarlo.";
    header ("location: ../Vista/salir.php ");
    
}



