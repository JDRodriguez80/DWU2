<?php
error_reporting(E_ALL ^ E_WARNING);
$alert="";
    session_start();


    //temp login cambiarlo por lo de la base de datos

   $user=$_POST['usuario'];
   $pass=$_POST['password'];
   $userReal="resp_escolar";
   $passReal="unadm_responsable";
    if(empty($_POST['usuario'])){
        $alert="el usuario esta vacio";
    }elseif (empty($_POST['password']))
    {
        $alert="password vacio";
    }
    else{
        if($user!=$userReal || $pass!= $passReal){
            $alert="Credenciales invalidas";

        }else{
            $_SESSION['active']=true;
            $_SESSION['usuario']=$user;
            header("LOCATION:administracion.php");
        }


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
            <input class="" type="submit" value="INGRESAR"/>
           
            
        </form>
    </section>
    
</body>
<footer>
    <?php
    include "includes/footer.php";
    ?></footer>
</html>