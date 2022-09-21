<?php

function getOro(){
    $queryOro = "SELECT DISTINCT pn.cod AS COD, p.cant_piramide AS CANT_DEPORTISTAS, pn.nombre_piramide AS PIRAMIDE, d.nombres AS Oro, del.nombre as delacion_oro 
    FROM piramides_numero pn, piramides p, deportista d, delegaciones del, inscripcion i 
    where pn.cod_campeonato = 1 and p.cod_piramide = pn.cod and d.documento = pn.oro and i.delegacion = del.cod and i.doc_deportista = d.documento order by pn.nombre_piramide asc";

    return $queryOro;
}

function getPlata(){
    $queryPlata = "SELECT DISTINCT pn.cod AS COD, pn.nombre_piramide AS PIRAMIDE, d.nombres AS Plata, del.nombre as delacion_plata 
    FROM piramides_numero pn, piramides p, deportista d, delegaciones del, inscripcion i 
    where pn.cod_campeonato = 1 and p.cod_piramide = pn.cod and d.documento = pn.plata and i.delegacion = del.cod and i.doc_deportista = d.documento 
    order by pn.nombre_piramide asc";

    return $queryPlata;
}

function getBronce1(){
    $queryBronce1 = "SELECT DISTINCT pn.cod AS COD, pn.nombre_piramide AS PIRAMIDE, d.nombres AS Bronce1, del.nombre as delacion_bronce1 
    FROM piramides_numero pn, piramides p, deportista d, delegaciones del, inscripcion i 
    where pn.cod_campeonato = 1 and p.cod_piramide = pn.cod and d.documento = pn.bronce1 and i.delegacion = del.cod and i.doc_deportista = d.documento 
    order by pn.nombre_piramide asc";

    return $queryBronce1;  
}

function getBronce2(){
    $queryBronce2 = "SELECT DISTINCT pn.cod AS COD, pn.nombre_piramide AS PIRAMIDE, d.nombres AS Bronce2, del.nombre as delacion_bronce2 
    FROM piramides_numero pn, piramides p, deportista d, delegaciones del, inscripcion i 
    where pn.cod_campeonato = 1 and p.cod_piramide = pn.cod and d.documento = pn.bronce2 and i.delegacion = del.cod and i.doc_deportista = d.documento 
    order by pn.nombre_piramide asc";

    return $queryBronce2;
}

function getCompetidorAzul(){
    $queryCompetidorAzul = "SELECT DISTINCT c.num as no, pn.nombre_piramide as categoria, d.nombre as delegacion, dep.nombres as azul FROM deportista dep, piramides_numero pn, combates_proximos c, delegaciones d, inscripcion i where c.cod_piramide = pn.cod and d.cod= i.delegacion and i.doc_deportista = c.doc_azul and c.doc_azul=dep.documento 
    order by num asc";

    return $queryCompetidorAzul;
}

function getCompetidorRojo(){
    $queryCompetidorRojo = "SELECT DISTINCT c.num, d.nombre as delegacion, dep.nombres as rojo
    FROM deportista dep, combates_proximos c, delegaciones d, inscripcion i where d.cod= i.delegacion and i.doc_deportista = c.doc_rojo and c.doc_rojo = dep.documento order by num asc";

    return $queryCompetidorRojo;
}

function getPuntajeGeneral(){
    $queryPuntaje = 'SELECT del.cod as cod_del, del.nombre AS DELEGACION, ((oro*7)+(plata*3)+(bronce*1))+ pg.puntos AS PUNTOS_GENERAL, ((oro*7)+(plata*3)+(bronce*1)) AS PUNTUACION_MEDALLAS, pg.oro AS ORO, pg.plata AS PLATA, pg.bronce AS BRONCE 
    FROM puntuacion_general pg, delegaciones del WHERE del.cod != 15 and del.cod = pg.cod_delegacion and pg.cod_campeonato = 1 order by ORO DESC, PLATA DESC, BRONCE DESC';

    return $queryPuntaje;
}

function getTitulo(){
    $queryTitulo = 'SELECT nombre FROM campeonatos WHERE cod = 1';

    return $queryTitulo;
}