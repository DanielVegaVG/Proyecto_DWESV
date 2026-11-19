<?php
require_once 'configdb.php';
$controlador = $_GET["controlador"] ?? CONTROLADOR_DEF;
$metodo = $_GET["metodo"] ?? METODO_DEF;
require_once './controlador/'.$controlador.".php";
$controlador = new $controlador();
$datos = $controlador->$metodo();
include $controlador->vista;
?>