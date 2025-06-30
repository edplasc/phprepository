<?php
    //Creating an object
    class Car
    {
        public $make;
        public $model;
        public $year;
   
        public function drive()
        {
            echo "This $this->year $this->model $this->make goes very fast";
        }
    }

    $myCar = new Car();
    $myCar->year = "1930";
    $myCar->model = "T-model";
    $myCar->make = "Ford";
    $myCar->Drive();

?>