<?php

class conexion
{

    public static function getconexion()
    {
        $conexion = null;

        //Control de excepciones
        try {
            $conexion = new PDO("mysql:localhost;dbname=escuela", 'root', '');

            //Consulta preparada
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Caracteres utf8
            $conexion->exec("SET CHARACTER SET utf8");
        } catch (PDOException $ex) {
            echo 'Error en conexión: ' . $ex->getMessage();
        }
        return $conexion;
    }
}
