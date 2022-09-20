<?php

include_once "crearConexion.php";
include_once "constantes.php";

function obtenerMedalleriaORO()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query(getOro());
    return $sentencia->fetchAll();
}

function obtenerMedalleriaPLATA()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query(getPlata());
    return $sentencia->fetchAll();
}

function obtenerMedalleriaBRONCE1()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query(getBronce1());
    return $sentencia->fetchAll();
}

function obtenerMedalleriaBRONCE2()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query(getBronce2());
    return $sentencia->fetchAll();
}

function obtenerCompetidorAzul()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query(getCompetidorAzul());
    return $sentencia->fetchAll();
}

function obtenerCompetidorRojo()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query(getCompetidorRojo());
    return $sentencia->fetchAll();
}

function obtenerPuntajeGeneral()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query(getPuntajeGeneral());
    return $sentencia->fetchAll();
}

function obtenerTitulo()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query(getTitulo());
    return $sentencia->fetchAll();
}
