<?php


require_once '../core/Controller.php';
require_once '../models/Vehicle.php';
require_once '../controllers/HomeController.php';

$controller = new HomeController();
$controller->index();
