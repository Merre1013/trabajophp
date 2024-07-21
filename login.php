<?php
session_start();
require_once __DIR__."/../controllers/paginalogin.php";
require_once __DIR__."/../database/Conexion.php";
$controller = new paginaloginController(new Conexion());
$controller->loadView();