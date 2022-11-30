<?php
class Validacion
{

    //validar curp
    public function validarCurp($curp)
    {

        try {
            if (!strlen($curp) == 18) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo 'error' . $e;
        }
    }

    //validando edad  menor a 6
    public function validarFDN($fdn)
    {

        try {
            $fechaNa = new DateTime($fdn);
            $current = new DateTime();
            $diff = $current->diff($fechaNa);
            $anio = (int)$diff->y;
            if ($anio < 6) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo 'error' . $e;
        }
    }

    // validando si el grado est en el rango entre 1 y 6
    public function validarGrado($grado)
    {

        try {
            if ($grado < 1 || $grado > 6) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Error:" . $e;
        }
    }
}
