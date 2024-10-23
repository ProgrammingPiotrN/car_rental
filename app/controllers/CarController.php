<?php


class CarController extends Controller
{
    public function index()
    {
        $modelCar = $this->model('Car');
        $cars = $modelCar->getAllCars();

        $this->view('car/index', ['cars' => $cars]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $brand = $_POST['brand'];
            $year = $_POST['year'];
            $price = $_POST['price'];

            $image = $_FILES['image'];
            $imagePath = 'uploads/' . basename($image['name']);

            if (move_uploaded_file($image['tmp_name'], $imagePath)) {
                $modelCar = $this->model('Car');
                $modelCar->createCar($name, $brand, $year, $price, $imagePath);

                header('Location: /car/index');
            } else {
                echo "Wystąpił błąd podczas przesyłania pliku.";
            }
        } else {
            $this->view('car/add');
        }
    }
}
