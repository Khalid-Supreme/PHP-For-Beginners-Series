<?php

class Car {

    public $brand;
    public $model;
    private $year ;

    public function start()
    {
        // return "$this->year said Vroom! Vroom!!";
        echo $this->year . " said Vroom! Vroom";
    }

    public function __construct($brand, $model, $year){  //constructor function is used here to set the values of the class variables by passing them as arguments
     
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
}


$carOne = new Car('Ford', 'Focus', 2020);

$carTwo = new Car('Hyundai', 'Accent', date("Y-m-d",));

echo $carOne->brand . '<br>';
echo $carOne->model . '<br>';
echo $carOne->start() . '<br>';

echo '<hr>';

echo $carTwo->brand . '<br>';
echo $carTwo->model . '<br>';
echo $carTwo->start() . '<br>';
echo $carTwo->year = 2025;





?>


<html lang="en">

<head>
    <title>PHP OOP</title>
</head>

<body>

</body>

</html>