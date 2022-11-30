<?php
session_start();
include "conexion.php";
$querry = "SELECT * FROM alumnos";
$ejecutar = mysqli_query($conn, $querry) or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/5706e37f23.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Administración</title>
</head>

<body>
    <?php
    include "includes/header2.php";
    ?>

    <table class="content-table">
        <caption>
            <h1>Lista de alumnos</h1>
        </caption>
        <thead>
            <tr>
                <th>Nombre del alumno</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>FDN</th>
                <th>CURP</th>
                <th>Estado</th>
                <th>Grado</th>
                <th>Número de contacto</th>
                <th>Correo</th>
                <th>Inscrito</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <?php foreach ($ejecutar as $data) : ?>
            <tbody>
                <tr>
                    <td><?php echo $data['nombreAlumno'] ?></td>
                    <td><?php echo $data['priAp'] ?></td>
                    <td><?php echo $data['segAp'] ?></td>
                    <td><?php echo $data['fdn'] ?></td>
                    <td><?php echo $data['curp'] ?></td>
                    <td><?php echo $data['estado'] ?></td>
                    <td><?php echo $data['grado'] ?></td>
                    <td><?php echo $data['numeroContacto'] ?></td>
                    <td><?php echo $data['correoContacto'] ?></td>
                    <td><?php echo $data['inscrito'] ?></td>
                    <td>
                        <a class="view" href=""><i class="fa-solid fa-eye fa-2x"> </i> VER</a>
                        <br>
                        <a class="edit" href=""><i class="fa-solid fa-user-pen fa-2x"> </i> EDITAR</a>
                        <br>
                        <a class="delete" href=""><i class="fa-solid fa-2x fa-user-xmark"></i> BORRAR</a>

                    </td>
                </tr>


            </tbody>
        <?php endforeach; ?>
    </table>


</body>
<footer>
    <?php
    include "includes/footer.php";
    ?></footer>

</html>