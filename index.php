<?php
?>
<!doctype html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio</title>
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <div class="container">
        <img src="img/logo.png" alt="">
        <br>
        <div class="row">
                <div class="column">
                    <h1>Misión</h1>
                    <img src=img/niñosestudiando.jpg id="valor" onMouseOver="showText('Mision')" onMouseOut="hide();">
                    <p class="parrafo">Proveer servicios <strong>educativos de calidad</strong> para la comunidad escolar, con un <strong>sentido de servicio y valores</strong> , que permitan formar <strong>futuros mexicanos de calidad</strong> tanto moral como de habilidades elevadas.</p>
            </div>
            <div class="column">
                <h1>Visión</h1>
                <img src="img/science.jpg" alt="" id="valor0">
                <p class="parrafo">Siempre <strong>estar a la vanguardia</strong> en los métodos de enseñanza, para proporcionar a nuestros alumnos los <strong>métodos mas avanzados</strong>, que es permitan obtener el conocimiento esperado más un extra</p>
            </div>
            <div class="column">
                <h1>Valores</h1>
                <img src="img/valores.png" alt="" id="valor">
                <ul>
                    <li>Aprendizaje</li>
                    <li>Excelencia</li>
                    <li>Desarrollo e inovación</li>
                </ul>
            </div>
            <br>
            <br>
        </div>
    </div>
    <script>
        function showText(text){
            document.getElementById("valor").innerHTML=text;
        }
        function hide(){
            document.getElementById("valor").innerHTML="";
        }
     </script>

</body>
<footer>
    <?php
    include "includes/footer.php";
    ?></footer>

</html>