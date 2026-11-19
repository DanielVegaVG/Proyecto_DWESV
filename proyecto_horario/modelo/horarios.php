<?php
class horarios{
private $conexion;
    public function __construct() {
        require './configdb.php';
        $this->conexion = $conexion;
    }
}
