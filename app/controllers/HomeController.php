<?php

require_once '../core/Controller.php';
require_once '../models/Vehicle.php';


class HomeController extends Controller
{
    public function index()
    {
        $vehicleModel = new Vehicle();
        $vehicles = $vehicleModel->getAllVehicles();
        $this->view('home', ['vehicles' => $vehicles]);
    }
}
