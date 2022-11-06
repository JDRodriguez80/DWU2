<?php
?>
<!doctype html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Inscripciones</title>
</head>
<body>
<?php
include "includes/header.php";
?>
<br>
<br>
<br>
<div class="forma">
    <form action="" method="post">
        <h5>INSCRIPCIONES</h5>
        <ul>
            <li>
        <label for="nombres">Nombre del alumno:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombres">
            </li>
            <li>
        <label for="apPaterno">Primer Apellido:</label>
        <input type="text" name="primAp" id="primAp" placeholder="Primer Apellido">
            </li>
            <li>
        <label for="segAp">Segundo Apellido:</label>
        <input type="text" name="segAp" id="SegAp" placeholder="Segundo Apellido">
            </li>
            <li>
        <label for="curp">C.U.R.P.</label>
        <input type="text" name="curp" id="curp" placeholder="CURRP">
            </li>
            <li>
                <label for="fnd">Fecha de Nacimiento</label>
                <input type="date" name="fdn" id="fdn" >
            </li>
            <li>
                <label for="estado">Estado de la república</label>
                <select name="estado" id="estado" required>
                    <option value="1">Aguascalientes</option>
                    <option value="2">Baja California </option>
                    <option value="3">Baja California Sur</option>
                    <option value="4">Campeche</option>
                    <option value="5">Chiapas</option>
                    <option value="6">Chihuahua</option>
                    <option value="7">CDMX</option>
                    <option value="8">Coahuila</option>
                    <option value="9">Colima</option>
                    <option value="10">Durango</option>
                    <option value="11">Guanajuato</option>
                    <option value="12">Guerrero</option>
                    <option value="13">Hidalgo</option>
                    <option value="14">Jalisco</option>
                    <option value="15">México</option>
                    <option value="16">Michoacán</option>
                    <option value="17">Morelos</option>
                    <option value="18">Nayarit</option>
                    <option value="19">Nuevo León</option>
                    <option value="20">Oaxaca</option>
                    <option value="21">Puebla</option>
                    <option value="22">Querétaro</option>
                    <option value="23">Quintana Roo</option>
                    <option value="24">San Luis Potosí</option>
                    <option value="25">Sinaloa</option>
                    <option value="26">Sonora</option>
                    <option value="27">Tabasco</option>
                    <option value="28">Tamaulipas</option>
                    <option value="29">Tlaxcala</option>
                    <option value="30">Veracruz</option>
                    <option value="31">Yucatán</option>
                    <option value="32">Zacatecas</option>
                    
                </select>
            </li>
            <li>
            <label for="grado">Grado Escolar</label>
            <select name="grado" id="grado">
                <option value="1">1° PreEscolar</option>
                <option value="2">2° PreEscolar</option>
                <option value="3">3° PreEscolar</option>
                <option value="4">1° Primaria</option>
                <option value="5">2° Primaria</option>
                <option value="6">3° Primaria</option>
                <option value="7">4° Primaria</option>
                <option value="8">5° Primaria</option>
                <option value="9">6° Primaria</option>
                <option value="10">1° Secundaria</option>
                <option value="11">2° Secundaria</option>
                <option value="12">3° Secundaria</option>
            </select>
            </li>
            <li>
                <label for="telefono">Telefóno de contacto</label>
                <input type="text" name="telefono" id="telefono" placeholder="Teléfono">
            </li>
            <li>
                <label for="email">Correo Electónico</label>
                <input type="email" name="correo" id="correo" placeholder="Correo Electrónico">
            </li>
            <br>
            <br>
            <li>
                <input type="submit" value="Enviar" class="btn_Guardar">
            </li>

            <li>
                <input type="submit" value="cancelar" class="btn_Cancelar">
            </li>
        </ul>
    </form>
    <br>
    <br>
    
</div>
<div class="legal">
    <p> <stong>Atención</stong> Este formulario recopila informacion para considerar al prospecto de alumno en el proceso de inscripción</p>
    </div>
</body>
<footer>
    <?php
    include "includes/footer.php";
    ?></footer>
</html>
