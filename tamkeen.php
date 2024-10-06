

<?php
class Car {
    public $brand;
    public $model;
    public $color;
    const WHEELS = 5;

    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function getCarDetails() {
        return "This car is a {$this->color} {$this->brand} {$this->model} with " . self::WHEELS . " wheels.";
    }
}

// Create an instance of the Car class
$myCar = new Car("Toyota", "Corolla", "Red");
echo $myCar->getCarDetails();
?>