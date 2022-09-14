<?php

include_once "crearConexion.php";

function obtenerMedalleriaORO()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query('SELECT DISTINCT pn.cod AS COD, p.cant_piramide AS CANT_DEPORTISTAS, pn.nombre_piramide AS PIRAMIDE, d.nombres AS Oro, del.nombre as delacion_oro  FROM piramides_numero pn, piramides p, deportista d, delegaciones del, inscripcion i where pn.cod_campeonato = 1 and p.cod_piramide = pn.cod and d.documento = pn.oro and i.delegacion = del.cod and i.doc_deportista = d.documento order by pn.nombre_piramide asc');
    return $sentencia->fetchAll();
}

function obtenerMedalleriaPLATA()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query('SELECT DISTINCT pn.nombre_piramide AS PIRAMIDE, d.nombres AS Plata, del.nombre as delacion_plata FROM piramides_numero pn, piramides p, deportista d, delegaciones del, inscripcion i  where pn.cod_campeonato = 1 and p.cod_piramide = pn.cod and d.documento = pn.plata and i.delegacion = del.cod and i.doc_deportista = d.documento 
    order by pn.nombre_piramide asc');
    return $sentencia->fetchAll();
}

function obtenerMedalleriaBRONCE1()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query('SELECT DISTINCT pn.nombre_piramide AS PIRAMIDE, d.nombres AS Bronce1, del.nombre as delacion_bronce1 FROM piramides_numero pn, piramides p, deportista d, delegaciones del, inscripcion i where pn.cod_campeonato = 1 and p.cod_piramide = pn.cod and d.documento = pn.bronce1 and i.delegacion = del.cod and i.doc_deportista = d.documento order by pn.nombre_piramide asc');
    return $sentencia->fetchAll();
}

function obtenerMedalleriaBRONCE2()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query('SELECT DISTINCT pn.nombre_piramide AS PIRAMIDE, d.nombres AS Bronce2, del.nombre as delacion_bronce2 FROM piramides_numero pn, piramides p, deportista d, delegaciones del, inscripcion i where pn.cod_campeonato = 1 and p.cod_piramide = pn.cod and d.documento = pn.bronce2 and i.delegacion = del.cod and i.doc_deportista = d.documento order by pn.nombre_piramide asc');
    return $sentencia->fetchAll();
}


