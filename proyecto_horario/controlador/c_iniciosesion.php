<?php
require './modelo/iniciosesion.php';
class c_iniciosesion{
    public $vista;
    public function iniciosesion(){
        $sesion= new iniciosesion;
        $usuario = $_POST["usuario"];
        $password = $_POST["pw"];
        $sesion->validar_usuario($usuario, $password);
        if($sesion != null){
            header('Location=./index.php?controlador=c_iniciosesion&metodo=inicio');
        }
        $this->vista="./vista/v-inicio_sesion.php";
    }
    public function inicio(){
        $this->vista="./vista/v-inicio_sesion.php";
    }
}
?>