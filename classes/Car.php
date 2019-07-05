<?php
        class Car{
        //property
        public $color = "blue";
        public $transmission = "automatic";
        //Lower camelcase
        public $sunRoofColor = "black";
        public $comp;
        
        //methods
        public function get_speed($speed){
            return $speed;
        }
        public function get_details(){
            echo $this->color;
            echo "<br>";
            echo $this->transmission;
            echo "<br>";
            echo $this->sunRoofColor;
        }
    }
?>

