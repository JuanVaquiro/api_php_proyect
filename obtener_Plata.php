<?php
include_once "cors.php";
include_once "funciones.php";
$medalleria = obtenerMedalleriaPLATA();
echo json_encode($medalleria);
