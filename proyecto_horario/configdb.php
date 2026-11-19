<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'rayuela');
if (!defined('CONTROLADOR_DEF')) {
    define('CONTROLADOR_DEF', 'c_iniciosesion');
}
if (!defined('METODO_DEF')) {
    define('METODO_DEF', 'inicio');
}
?>