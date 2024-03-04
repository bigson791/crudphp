<?php
class database {

    private $hostname = "localhost";
    private $user = "root";
    private $password = "";  
    private $database = "almacen";
    private $charset = "utf8";

    public function conectar(){
        try{
            $conexion = "mysql:hostname=".$this->hostname.";dbname=".$this->database.
            ";charset=".$this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($conexion, $this->user, $this->password, $options );

            return $pdo;

        }catch(Exception $e){
            echo "Eror ".$e->getMessage();
        }
    }
}