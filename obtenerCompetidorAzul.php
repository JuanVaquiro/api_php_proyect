<?php
include_once "cors.php";
include_once "funciones.php";
$competidor = obtenerCompetidorAzul();
echo json_encode($competidor);