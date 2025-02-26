<?php
include_once('modelo/enlaces.php');
include("modelo/conexion.php");
include("modelo/modelo.php");
include ('controlador/controlador.php');


Conexion::conectar();

$var = new Controlador(); //clase controlador
$var -> pagina(); //manda llamar llamar a pagina
