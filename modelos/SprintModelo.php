<?php
require_once('ConexionModelo.php');

class SprintModelo{
    private $conexion;

    public function __construct(){ 
        $this->conexion = new ConexionModelo();    
    }

    // Crear un nuevo sprint
    public function crearSprint($nombreSprint, $fechaInicioSprint, $fechaFinSprint){
        $sql="INSERT INTO tb_sprint(nombre_sprint, fecha_inicio_sprint, fecha_fin_sprint)
            VALUES('$nombreSprint', '$fechaInicioSprint', '$fechaFinSprint')";
        return $this->conexion->conn->query($sql);  
    }
    
    //listar sprints
    public function obtenerSprints(){
        $sql="SELECT * FROM tb_sprint";
        $result= $this->conexion->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Actualizar un sprint
    public function actualizarSprint($id, $nombreSprint, $fechaInicioSprint, $fechaFinSprint){
        $sql="UPDATE tb_sprint SET nombre_sprint='$nombreSprint', fecha_inicio_sprint='$fechaInicioSprint',
            fecha_fin_sprint='$fechaFinSprint' WHERE id_sprint='$id'";
        return $this->conexion->conn->query($sql);  
    }

    // Eliminar un sprint
    public function eliminarSprint($id){
        $sql= "DELETE FROM tb_sprint WHERE id_sprint=$id";
        return $this->conexion->conn->query($sql); 
    }
}