<?php
include_once "cors.php";
include_once "funciones.php";
$puntaje = obtenerPuntajeGeneral();
echo json_encode($puntaje);