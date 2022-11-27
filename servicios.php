<?php
?>
<!doctype html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Servicios</title>
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <br>
    <br>
    <table class="content-table">
        <caption>
            <h1>Servicios Ofrecidos</h1>
        </caption>
        <thead>
            <tr>
                <th>Servicio</th>
                <th>Descripción</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pre-Escolar</td>
                <td>Servicio de Kindergarden para infantes desde 3 años, con ingles inicial</td>
                <td><img src="img/KG.png" alt=""></td>
            </tr>
            <tr>
                <td>Primaria</td>
                <td>Educación primaria para los 6 grados que la conforman,
                    ingles en todos los grados,<br> actividades extracurriculares
                    club de tae-kwan-do, Ajedrez, equipos deportivos en diferentes disciplinas
                </td>
                <td><img src="img/ES.png" alt=""></td>
            </tr>
            <tr>
                <td>Secundaria</td>
                <td>ducación secundaria para los 3 grados que la conforman,
                    ingles en todos los grados,<br> actividades extracurriculares
                    club de tae-kwan-do, Ajedrez, equipos deportivos en diferentes disciplinas</td>
                <td><img src="img/ms.png" alt=""></td>
            </tr>
            <tr>
                <td>Clubes</td>
                <td>Clubes deportivos y de actividades extrea curriculares en todos los grados</td>
                <td><img src="img/sports.png" alt=""></td>
            </tr>
            <tr>
                <td>Taller de computo</td>
                <td>Avanzado taller de computo con instructores altamente calificados</td>
                <td><img src="img/comp.png" alt=""></td>
            </tr>
            <tr>
                <td>English prep</td>
                <td>Ingles en todos los grados, preparando a los alumnos para el examen SAT y Toefl</td>
                <td><img src="img/english.png" alt=""></td>
            </tr>
        </tbody>
    </table>

</body>
<footer>
    <?php
    include "includes/footer.php";
    ?></footer>

</html>