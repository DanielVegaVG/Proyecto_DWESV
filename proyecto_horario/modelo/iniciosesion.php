<?php
class iniciosesion{
    private $conexion;
    public function __construct(){
        require './configdb.php';
        $this->conexion = $conexion;
    }
    function validar_usuario($usuario, $password){
        $consulta = "SELECT usuario FROM usuarios where usuario= ".$usuario." AND pw=".$password;
        $resultado = $this->conexion->query($consulta);
        return $resultado;
    }
}
?>