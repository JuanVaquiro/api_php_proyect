<?php
include_once "cors.php";
include_once "funciones.php";
$medalleria = obtenerMedalleriaBRONCE2();
echo json_encode($medalleria);
