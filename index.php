<?php

class Car {

    public $brand;
    public $year ;

    private $email;

    public function __construct($brand, $email){  //constructor function is used here to set the values of the class variables by passing them as arguments
    
        $this->email = $email;
        $this->brand = $brand;
    }
    
    // getters
    public function getEmail(){ 
        return $this->email;
    }

    //setters 
    public function setEmail($newemail){ //
        if(strpos($newemail, '@') > -1){
            $this->email = $newemail;
        }
        
    }


    
}


$carOne = new Car('Ford', 'fordmotors@su peme.com');


$carTwo = new Car('Hyundai','hyundaigroup@supreme.com' );



echo $carOne->getEmail() . '<br>';


echo '<hr>';


// echo $carTwo->getEmail() . '<br>';

$carTwo->setEmail('nothyundaigroup@supreme.com') . '<br>';

echo $carTwo->getEmail() . '<br>';




?>


<html lang="en">

<head>
    <title>PHP OOP</title>
</head>

<body>

</body>

</html>