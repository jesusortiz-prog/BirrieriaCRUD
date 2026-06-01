<?php
// En este archivo solo se hace la conexion a birrieria y en los models se hace una clase por cada tabla/entidad

class Database{
    // private $driver = "mysql";
    private $host = "localhost";
    private $user = "root";
    private $password = "root";
    private $db_name = "birrieria"; 
    private $charset = "utf8mb4";

    private $conexion = null; //
    
    public function conectar(){
        if($this->conexion === null){
            //dsn Data Source Name (Informacion escencial para la conexion con PDO)
            try{
                //Le decimos que usamos el motor de mysql, le damos el nombre de la DB y la configuracion de los caracteres
                $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}";
                //Se crea la conexion
                $this->conexion = new PDO(
                    $dsn,
                    $this->user,
                    $this->password
                );
                $this->conexion->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );
                $this->conexion->setAttribute(
                    PDO::ATTR_DEFAULT_FETCH_MODE,
                    PDO::FETCH_ASSOC
                );
                echo "Conexion exitosa";
            }catch(PDOException $e){
                die("Error de conexion: " . $e->getMessage());
            }
            return($this->conexion);
        }
    }
}

?>