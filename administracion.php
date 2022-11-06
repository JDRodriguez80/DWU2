<?php
    session_start();

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
    <div class="container">
        <table class="content-table">
            <caption> <h1>Lista de alumnos</h1></caption>
            <thead>
            <tr>
                <th>Nombre del alumno</th>
                <th>Correo</th>
                <th>Fecha de inscripción</th>
                <th>Grado</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Benito Bodoque García</td>
                <td>benitoBodoque@gmail.com</td>
                <td>20/09/2022</td>
                <td>6°</td>
                <td>Morelos</td>
                <td>
                    <a class="view" href=""><i class="fa-solid fa-eye fa-2x"> </i> VER</a>
                    <br>
                    <a class="edit" href=""><i class="fa-solid fa-user-pen fa-2x"> </i> EDITAR</a>
                    <br>
                    <a class="delete" href=""><i class="fa-solid fa-2x fa-user-xmark"></i> BORRAR</a>

                </td>
            </tr>
            <tr>
                <td>Juan Morales Nieto</td>
                <td>juanitoNieto@gmail.com</td>
                <td>10/09/2022</td>
                <td>3°</td>
                <td>Tamaulipas</td>
                <td>
                    <a class="view" href=""><i class="fa-solid fa-eye fa-2x"> </i> VER</a>
                    <br>
                    <a class="edit" href=""><i class="fa-solid fa-user-pen fa-2x"> </i> EDITAR</a>
                    <br>
                    <a class="delete" href=""><i class="fa-solid fa-2x fa-user-xmark"></i> BORRAR</a>

                </td>
            </tr>

            </tbody>
        </table>
    </div>
</body>
<footer>
    <?php
    include "includes/footer.php";
    ?></footer>
</html>