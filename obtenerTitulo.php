<?php
include_once "cors.php";
include_once "funciones.php";
$titulo = obtenerTitulo();
echo json_encode($titulo);