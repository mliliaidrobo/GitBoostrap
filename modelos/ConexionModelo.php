<?php
class ConexionModelo{
    private $host ="localhost";
    private $usuario ="root";
    private $password ="";
    private $nombreBaseDatos ="appsprintbd";

    public $conn;

    // Constructor para la conexión a la base de datos
    public function __construct(){  
        $this->conn= new mysqli($this->host, $this->usuario, $this->password, $this->nombreBaseDatos);  

        if($this->conn->connect_error){
            die("Conexión fallida: " . $this->conn->connect_error);
        }
    }

    // Cerrar la conexión a la base de datos
    public function cerrarConexion() {
        $this->conn->close();
    }
}

