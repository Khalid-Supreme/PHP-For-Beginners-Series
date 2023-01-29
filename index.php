<?php

class Car {

    public $brand = 'Toyota';
    public $model = 'Prius';
    public $year = 2010;

    public function start()
    {
        // return "$this->year said Vroom! Vroom!!";
        echo $this->year . " said Vroom! Vroom";
    }

}

new Car();
$carOne = new Car();

$carTwo = new Car();

echo $carOne->brand . '<br>';
echo $carOne->model . '<br>';
echo $carTwo->start() . '<br>';

echo '<hr>';
$carTwo->brand = 'Honda';
$carTwo->model = 'Civic';
$carTwo->year = '1999';

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