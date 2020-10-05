<!DOCTYPE html>

<html lang="en">

<head>
 <title>Login</title>

 <meta charset = "utf-8">
</head>

<body>

    <center>

        <h1>Login de Usuarios</h1>
        <hr />

        <form action="Controlador/gestionUsuarios.php" method="POST" >

            <label>Nombre Usuario:</label><br>
            <input name="username" type="text" id="username" required>
            <br><br>

            <label>Password:</label><br>
            <input name="password" type="password" id="password" required>
            <br><br>

            <input type="submit" name="Submit" value="LOGIN">

        </form>
        <hr />

    </center>

 </body>
</html>