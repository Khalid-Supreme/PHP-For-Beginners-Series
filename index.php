<?php

class Car {

    public $brand;
    public $model;
    public $year ;

    public function start()
    {
        // return "$this->year said Vroom! Vroom!!";
        echo $this->year . " said Vroom! Vroom";
    }

    public function __construct($brand, $model, $year){  //constructor function is used here to set the values of the class variables by passing them as arguments
        // $this->brand = "Honda"; 
        // $this->model = "Civic";
        // $this->year = date("Y");
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
}


$carOne = new Car('Ford', 'Focus', 2020);

$carTwo = new Car('Hyundai', 'Accent', 1999);

echo $carOne->brand . '<br>';
echo $carOne->model . '<br>';
echo $carTwo->start() . '<br>';

echo '<hr>';
$carTwo->brand;
$carTwo->model;
$carTwo->year ;

echo $carTwo->brand . '<br>';
echo $carTwo->model . '<br>';
echo $carTwo->start() . '<br>';



// get_class($carOne);
// echo "I love " . get_class($carTwo);


// print_r(get_class_methods(get_class($carOne)));

// print_r( get_class_vars('Car'));

?>


<html lang="en">

<head>
    <title>PHP OOP</title>
</head>

<body>

</body>

</html>