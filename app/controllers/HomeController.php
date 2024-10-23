<?php


class HomeController extends Controller
{
    public function index()
    {
        $modelCar = $this->model('Car');
        $cars = $modelCar->getAllCars();

        $this->view('home/index', ['cars' => $cars]);
    }
}
