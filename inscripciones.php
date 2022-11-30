<?php
$alert = "";
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//checando por post vacio
if (empty($_POST)) {
    $alert = "favor de llenar todos los campos";
} else {
    //declaracion de variables e igualacion a valores del post
    $nombre = $_POST['nombres'];
    $primAp = $_POST['primAp'];
    $segAp = $_POST['segAp'];
    $curp = $_POST['curp'];
    $fecha = $_POST['fdn'];
    $estado = $_POST['estado'];
    $grado = $_POST['grado'];
    $tel = $_POST['telefono'];
    $email = $_POST['email'];

    //validando que la curp contenga 18 caracteres
    if (strlen($curp ?? '') != 18) {
        $alert = "El CURP debe de contener 18 caracteres";
    } else {
        //validando que la edad del alumno sea mayor o igual a 6 años
        if (strtotime($fecha) < strtotime($fecha - 6)) {
            //Validando edad
            $alert = "La edad minima de inscripcion es de 6 años cumplidos";
        } else {
            //validando que el grado este dentro del rango de 1° a 6°
            $min = "";
            $max = "";
            //validando grado
            if ($grado < 1 || $grado > 6) {
                $alert = "Solo se aceptan valores entre 1 y 6";
            } else {
                //checando por duplicados
                include "conexion.php";
                $querry = mysqli_query($conn, "SELECT * FROM alumnos where curp='$curp'");
                $result = mysqli_fetch_array($querry);
                if ($result) {
                    $alert = "el alumno ya se ecuentra inscrito";
                } else {
                    //insertando en la base de datos 
                    $querry = mysqli_query($conn, "INSERT INTO `escuela`.`alumnos` (`nombreAlumno`, `priAp`, `segAp`, `fdn`, `curp`, `estado`, `grado`, `numeroContacto`, `correoContacto`, `inscrito`) VALUES ('$nombre', '$primAp', '$segAp', '$fecha', '$curp', '$estado', '$grado', '$tel', '$email', 0);");
                    //control
                    if ($querry) {
                        $alert = "insercion correcta";
                    } else {
                        $alert = "fallo en insercion";
                    }
                }
            }
        }
    }
}





?>
<!doctype html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Inscripciones</title>
</head>

<body>
    <?php
    include "includes/header.php";
    include "js/script.js";
    ?>
    <br>
    <br>
    <br>
    <div class="forma" id="FormaInsc">
        <form action="" method="post">
            <h5>INSCRIPCIONES</h5>
            <ul>
                <li>
                    <label for="nombres">Nombre del alumno:</label>
                    <input type="text" name="nombres" id="nombres" placeholder="Nombres" required>
                </li>
                <li>
                    <label for="primAp">Primer Apellido:</label>
                    <input type="text" name="primAp" id="primAp" placeholder="Primer Apellido" required>
                </li>
                <li>
                    <label for="segAp">Segundo Apellido:</label>
                    <input type="text" name="segAp" id="segAp" placeholder="Segundo Apellido">
                </li>
                <li>
                    <label for="curp">C.U.R.P.</label>
                    <input type="text" name="curp" id="curp" placeholder="CURRP" required>
                </li>
                <li>
                    <label for="fdn">Fecha de Nacimiento</label>
                    <input type="date" name="fdn" id="fdn" required>
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
                    <input type="number" name="grado" id="grado" placeholder="Grado" required min="1" max="6">
                </li>
                <li>
                    <label for="telefono">Telefóno de contacto</label>
                    <input type="number" name="telefono" id="telefono" placeholder="Teléfono" required>
                </li>
                <li>
                    <label for="email">Correo Electónico</label>
                    <input type="email" name="email" id="email" placeholder="Correo Electrónico" required>
                    <input type="hidden" name="fechaIn" id="fechaIn" value="">
                </li>
                <br>
                <div class="alerta"><?php echo $alert ?? '';  ?></div>
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
        <p> <strong>Atención</strong> Este formulario recopila informacion para considerar al prospecto de alumno en el proceso de inscripción</p>
    </div>
    <script>
        document.getElementById("fechaIn").value = feha();
    </script>
</body>
<footer>
    <?php
    include "includes/footer.php";
    ?></footer>

</html>