<?php

class Car {

    public $brand;

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
    public function setEmail($email){ //
        if(strpos($email, '@') > -1){
            $this->email = $email;
        }
        
    }


    
}

class Supercar extends Car{

    public $cylinder;
    
    public function __construct($brand, $email, $cylinder){
        $this->cylinder = $cylinder;
        parent::__construct($brand, $email);
    }

}


$carOne = new Car('Ford', 'fordmotors@supeme.com');


$carTwo = new Car('Hyundai','hyundaigroup@supreme.com' );

$carAlpha = new Supercar('Alfa-Romeo', 'alfa@supeme.com', 'v16');



echo $carAlpha->brand;

echo '<hr>';
echo $carAlpha->getEmail();
echo '<hr>';
echo $carAlpha->cylinder;





?>


<html lang="en">

<head>
    <title>PHP OOP</title>
</head>

<body>

</body>

</html>