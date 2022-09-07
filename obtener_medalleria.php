<?php
include_once "cors.php";
include_once "funciones.php";
$videojuegos = obtenerMedalleria();
echo json_encode($videojuegos);
