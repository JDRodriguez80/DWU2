<?php
require('dao.php');
require('js/script.js');

$querry = new DAO();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreAlumno = $_POST['nombres'];
    $primAp = $_POST['primAp'];
    $segAp = $_POST['segAp'];
    $curp = $_POST['curp'];
    $fdn = $_POST['fdn'];
    $estado = $_POST['estado'];
    $grado = $_POST['grado'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $fechaInsc = $_POST['fechaIn'];

    //asignando la fecha del registro de la solicitud de inscripcion
    $fechaRegistro = new DateTime();

    $validar = new validacion();

    //validando si el alumno esta inscrito o no 
    $verIns = $querry->verificarInscrito($curp);
    if ($verIns == true) {
        $_SESSION["alumno"] = "Existe";
        header('LOCATION:inscripciones.php');
    }
    //verificando edad

    $verEdad = $validar->validarFDN($fdn);
    if ($verEdad == true) {
        $_SESSION["edad"] = "error";
        header('LOCATION:inscripciones.php');
    }
    //verificando grado
    $verGrado = $validar->validarGrado($grado);
    if ($verGrado == true) {
        $_SESSION["grado"] = "error";
    }
    //verificando curp
    $vercurp = $validar->validarCurp($curp);
    if ($vercurp == true) {
        //some code here
    }
}
