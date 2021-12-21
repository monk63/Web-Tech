<?php

//car class
class Car {

    //Properties
    private $car_name;
    private $color;
    private $transmission;

    //Constructors
    public function __construct($car_name,$color,$transmission)
    {
        $this->car_name = $car_name; 
        $this->color = $color; 
        $this->transmission = $transmission; 
    }



    //Methods setters
    public function setCar_name($car_name){
        $this->car_name = $car_name;
    }
    public function setColor($color){
        $this->color = $color;
    }
      public function setTransmission($transmisson){
        $this->transmisson = $transmisson;
    }

    //getter
    public function getCar_name()
    {
        return $this->car_name;
    }
    
    public function getColor()
    {
        return $this->color;
    } 
    
    public function getTransmission()
    {
        return $this->transmission;
    }

    //desctructor
    public function __destruct()
    {
        echo "<br> Vechicle Information Uploaded Sucessfully ";
    }


}
?>