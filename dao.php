<?php
require_once "conexion.php";

class DAO
{
    private $conn;

    public function __construct()
    {
        session_start();
        $this->conn = null;
    }

    //funcion para logeo
    public function login($post, $user, $pass)
    {
        try {
            $this->conn = conexion::getconexion();
            if ($post) {
                $this->conn = conexion::getconexion();
                $script = "SELECT * FROM usuarios WHERE user=:user AND password=:pass";
                $querry = $this->conn->prepare($script);
                $querry->bindParam(':user', $user);
                $querry->bindParam(':pass', $pass);
                $querry->execute();
                $datos = $querry->fetch(PDO::FETCH_ASSOC);

                if ($datos) {
                    $_SESSION["user"] = $datos["user"];
                    header("LOCATION:administracion.php");
                } else {
                    $_SESSION["error"] = "ERROr";
                    header("LOCATION:login.php");
                }
            }
        } catch (Exception $e) {
            echo "ERROR" . $e;
        } finally {
            $this->conn = null;
        }
    }

    //funcion para solicitar inscripcion (CREATE)
    public function solicitarInscripcion($post, $nombreAlumno, $priAp, $segAp, $fdn, $curp, $estado, $grado, $numeroContacto, $correoContacto, $inscrito)
    {
        //excepaciones
        try {
            if ($post) {
                $this->conn = conexion::getconexion();
                //consulta a base de datos
                $script = "INSERT INTO alumnos (nombreAlumno, priAp, segAp, fdn, curp, estado, grado, numeroContacto, correoContacto inscrito) VALUES(:nombreAlumno, :priAp, :segAp, :fdn, :curp, :estado, :grado, :numeroContacto,:correoContacto, :inscrito);";
                //preparando la consulta
                $querry = $this->conn->prepare($script);

                //Pasando parametros a la querry
                $querry->bindParam(':nombreAlumno', $nombreAlumno);
                $querry->bindParam(':priAp', $priAp);
                $querry->bindParam(':segAp', $segAp);
                $querry->bindParam(':fdn', $fdn);
                $querry->bindParam(':curp', $curp);
                $querry->bindParam(':estado', $estado);
                $querry->bindParam(':grado', $grado);
                $querry->bindParam(':numeroContacto', $numeroContacto);
                $querry->bindParam(':correoContacto', $correoContacto);
                $querry->bindParam(':inscrito', $inscrito);

                //ejecutando la consulta
                $querry->execute();
                $result = $querry->rowCount();
                if ($result > 0) {
                    return true;
                } else {
                    return false;
                }
            }
        } catch (Exception $e) {
            echo "ERROR" . $e;
        } finally {
            $this->conn = null; //cerrando la conexion 
        }
    }

    // Función para verificar el estado del alumno 
    public function verificarInscrito($curp)
    {
        try {
            $this->conn = conexion::getconexion();
            $script = "SELECT * FROM alumnos WHERE curp=:curp;";
            $querry = $this->conn->prepare($script);
            $querry->bindParam(":curp", $curp);
            //ejecutando la consulta
            $querry->execute();
            $data = $querry->fetch(PDO::FETCH_ASSOC);
            //validacion 
            if ($data) {
                //si la consulta contiene datos el alumno esta registrado

                return true;
            } else {
                return false;
            } //no hay resultados en la consulta, entonces no esta inscrito

        } catch (Exception $e) {
            echo "ERROR" . $e;
        } //catchando errores en la conexion
        finally {
            $this->conn = null; //cerrando la conexion
        }
    }

    //funcion para borrar alumno de la base de datos (DELETE)
    public function borrarAlumno($id)
    {
        try {
            $this->conn = conexion::getconexion();
            $script = "DELETE FROM alumnos WHERE idAlumno=:$id;";
            $querry = $this->conn->prepare($script);
            //agregando los paramentros
            $querry->bindParam(":id", $id);
            //ejecutando consulta
            $resultado = $querry->execute();

            //validando proceso de borrado
            if ($resultado === true) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Error:" . $e;
        } finally {
            $this->conn = null; //cerrando la conexion
        }
    }

    //funcion para recuperar los datos del alumno (READ)
    public function verAlumno($id)
    {
        try {
            $this->conn = conexion::getconexion();
            $script = "SELECT * FROM alumnos WHERE idAlumno=:$id;";
            //prearando consulta
            $querry = $this->conn->prepare($script);
            //agregando los parametros
            $querry->bindParam(':id', $id);
            //ejecutando la consulta
            $querry->execute();
            //retrayendo el objeto 
            $data = $querry->fetchAll(PDO::FETCH_OBJ);

            //validando resultados
            if ($data) {
                return $data;
            } else {
                return 0;
            } //no hubo resultados

        } catch (Exception $e) {
            echo "Error" . $e;
        } finally {
            $this->conn = null; //cerrando la conexion
        }
    }

    //funcion para update
    public function updateAlumno($nombreAlumno, $priAp, $segAp, $fdn, $curp, $estado, $grado, $numeroContacto, $correoContacto, $inscrito, $idAlumno)
    {
        try {
            $this->conn = conexion::getconexion();
            $script = "UPDATE alumnos SET nombreAlumno = :nombreAlumno, priAp=:priAp, segAp=:segAp, fdn=:fdn, curp=:curp, estado=:estado, grado=:grado, numeroContacto=:numeroContacto, correoContacto=:correoContacto, inscrito=:inscrito, idAlumno=:idAlumno;";
            //preparando la consulta
            $querry = $this->conn->prepare($script);
            //creando array que contendra los resultados y asignando los valores
            $datos = array(
                ':nombreAlumno' => $nombreAlumno, ':priAp' => $priAp, ':segAp' => $segAp, ':fdn' => $fdn, ':curp' => $curp, ':estado' => $estado, ':grado' => $grado, ':numeroContacto' => $numeroContacto,
                ':correoContacto' => $correoContacto, ':inscrito' => $inscrito, ':idAlumno' => $idAlumno
            );
            //asignacion a resultado
            $resultado = $querry->execute($datos);
            //validando resultados
            if ($resultado === true) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Error" . $e;
        } finally {
            $this->conn = null;
        }
    }
}
