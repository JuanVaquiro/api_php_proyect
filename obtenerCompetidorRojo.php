<?php
include_once "cors.php";
include_once "funciones.php";
$competidor = obtenerCompetidorRojo();
echo json_encode($competidor);