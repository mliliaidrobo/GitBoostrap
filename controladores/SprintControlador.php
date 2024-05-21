<?php
require_once('../modelos/SprintModelo.php');
class SprintControlador
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new SprintModelo();
    }

    //funcion para crear sprint
    public function manejarCreacionSprint()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnCrearSprint'])) {
            $nombreSprint = $_POST['nameNombreSprint'];
            $fechaInicioSprint = $_POST['namefechaInicioSprint'];
            $fechaFinSprint = $_POST['namefechafinSprint'];

            //llamamos al metodo de nuestro modelo
            $resultado = $this->modelo->crearSprint($nombreSprint, $fechaInicioSprint, $fechaFinSprint);

            // Verificamos si se creó correctamente y enviamos la respuesta adecuada
            if ($resultado) {
                /* echo '<div class="alert alert-success">Sprint creado correctamente</div>'; */
                echo '<div data-notify="container" class="col-11 col-md-4 alert alert-primary alert-with-icon" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1060; top: 100px; right: 20px;" bis_skin_checked="1"><button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 50%; margin-top: -13px; z-index: 1062;"><i class="bi bi-file-excel"></i></button><span data-notify="icon" class="bi bi-bell"></span> <span data-notify="title"></span> <span data-notify="message">Sprint creado correctamente.</span><a href="#" target="_blank" data-notify="url"></a></div>';
            } else {
                echo '<div class="alert alert-danger">Error al crear el sprint</div>';
            }
        }
    }

    //funcion para actualizar sprint
    public function actualizarSprint()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnActualizarSprint'])) {
            //traemos el id como campo oculto para enviarlo por POST
            $id = $_POST['editarId'];

            $nombreSprint = $_POST['nameNombreSprint'];
            $fechaInicioSprint = $_POST['namefechaInicioSprint'];
            $fechaFinSprint = $_POST['namefechafinSprint'];

            $resultado = $this->modelo->actualizarSprint($id, $nombreSprint, $fechaInicioSprint, $fechaFinSprint);

            // Verificamos si se actualizó correctamente y enviamos la respuesta adecuada
            if ($resultado) {
                echo '<div class="alert alert-success">Sprint actualizado correctamente</div>';
            } else {
                echo '<div class="alert alert-danger">Error al actualizar el sprint</div>';
            }
        }
    }

    //funcion para eliminar sprint

    public function eliminarSprint()
    {
        if (isset($_GET["eliminarId"])) {
            $id = $_GET["eliminarId"];
            $resultado = $this->modelo->eliminarSprint($id);
            // Verificamos si se eliminó correctamente y enviamos la respuesta adecuada
            if ($resultado) {
                echo '<div class="alert alert-success">Sprint eliminado correctamente</div>';
            } else {
                echo '<div class="alert alert-danger">Error al eliminar el sprint</div>';
            }
        }
    }

    //funcion para listar sprint
    public function obtenerSprints()
    {
        $sprints = $this->modelo->obtenerSprints();
        return $sprints;
    }
}
