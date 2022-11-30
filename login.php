<?php
session_start();

$error = "";

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    header('LOCATION:adminstracion.php');
}

?>
<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Acceso</title>
</head>

<body>
    <?php
    include "includes/header.php";
    if (isset($_SESSION["error"])) {
        unset($_SESSION["error"]);
        $error = "Error de credenciales ";
    }
    ?>
    <section id="container">
        <form id="log-in" action="" method="post">

            <img src="img/logo.png" alt="LogIn">
            <h3>Login</h3>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="Usuario">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
            <div class="alerta"><?php echo $alert ?? '';  ?></div>
            <input class="" type="submit" value="INGRESAR" />


        </form>
    </section>

</body>
<footer>
    <?php
    include "includes/footer.php";
    ?></footer>

</html>