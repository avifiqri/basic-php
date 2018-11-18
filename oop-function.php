<?php 

    class car {
        var $model;
        var $year;
        var $price;
        

        function __construct($model, $year, $price){
            $this->model = $model;
            $this->year = $year;
            $this->price = $price;

        }
        function hasModels(){
            if($this->price >= 100000000 || $this->year >=2010 ){
                return $this->model ;
            }
                return "mobil anda tua";
        }
    }

    $car1 = new Car("Avanza", 2016, 120000000);
    $car2 = new Car("kijang capsul", 2008, 80000000);
    $car3 = new Car("kijang inova", 2015, 300000000);
    echo $car2->hasModels();

?>