<?php
session_start();

class clsConexcion {
    private $conexion;
    
    public function __construct() {
        $this->conexion = new mysqli('localhost','root','','bdprueba');
    }
    
    public function getUsuario($user){
        $consulta = $this->conexion->query("SELECT * FROM usuarios where usuario = '$user'");
        $listadoUsuarios =[];
        
        $i = 0;
        while($fila = $consulta->fetch_assoc()){
            $listadoUsuarios[$i] = $fila;
            $i++;
        }
        return $listadoUsuarios;
    }
    
    public function validarUsuario($user,$pas){
        $r=0;
        $sql = "SELECT Nombre, id FROM usuarios WHERE usuario = '$user' and clave = '$pas'" ;        
        $result = mysqli_query($this->conexion,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($row != NULL){
             $_SESSION['nombre']=$row["Nombre"];
             $_SESSION['id']=  $row["id"];
             $r=1;
        }
       
         return $r;
    }
}   
