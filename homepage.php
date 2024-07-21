<?php
session_start();
require_once __DIR__."/../controllers/index.php";
require_once __DIR__."/../database/Conexion.php";
$controller = new homepageController(new Conexion());
$controller->homepage();