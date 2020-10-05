<?php
session_start();
echo "Se ha producido un error al momento de ingresar el usuario y contraseña.";
session_destroy();
header ("location: ../Vista/inicioSesion.php ");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

