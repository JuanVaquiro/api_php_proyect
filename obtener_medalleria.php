<?php
include_once "cors.php";
include_once "funciones.php";
$medalleria = obtenerMedalleria();
echo json_encode($medalleria);
