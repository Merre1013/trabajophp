<?php
require_once __DIR__ . "/Controllers/TiendaController.php";
$controlador = new TiendaController();

$datosFormulario = $_REQUEST;

$controlador->crearTienda($datosFormulario);