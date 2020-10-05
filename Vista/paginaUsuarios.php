<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <table>
            <tbody>
                <?php
                session_start();
                    //$user = $_SESSION['usuario'];
                    //$contra = $_SESSION['contraseña'];
                    echo "<h1> bienvenido </h1>";
                   
                    //print_r($_SESSION['usuario']);
                    echo $_SESSION['id'];
                    echo $_SESSION['nombre'];
                ?>
            </tbody>
        </table>
    </center>
    </body>
</html>
