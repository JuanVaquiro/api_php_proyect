<?php
include_once "cors.php";
include_once "funciones.php";
$medalleria = obtenerMedalleriaORO();
echo json_encode($medalleria);
