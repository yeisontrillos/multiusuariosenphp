<?php

class conexion {

    private $servidor="bq0blsp5cjqgnsb6of7v-mysql.services.clever-cloud.com";
    private $usuario="uhxjobwzbkzkkimo";
    private $contrasenia="b392blez1n8d9gzyXV4p";
    private $conexion;

    public function __construct() {

        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=bq0blsp5cjqgnsb6of7v", $this->usuario, $this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            return "Falla de conexión".$e;
        }

    }

    public function ejecutar($sql) {

        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();

    }

    public function consultar ($sql) {

        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();

    }

}

?>