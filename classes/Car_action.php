<?php  

    require_once "Car.php";
    //class Child extend Parent - Inheritance
    class CarDistance{
        
        public $consumption = 2.5;

        public function __construct($name){
            //global variable -anywhere within the class
            $this->x=100;
            //local variable - only inside this function
            echo "Hello $name";
            echo "<br>";
            echo $this->get_speed(1000);
        }

        public function calculate($gas, $distance){
            $total_consumption = $this->consumption * $distance;
            echo "You have a total of " . $gas . "L. You need to travel " . $distance . "km";
            if($gas >= $total_consumption) {
                $remaining = $gas - $total_consumption;
                $this->display($total_consumption, $remaining);
            } 
            elseif($gas < $total_consumption) {
                $refuel_gas = $total_consumption - $gas;
                $this->refuel($refuel_gas, $distance, $gas);
            }
        }
    
        public function refuel($refuel_gas, $distance, $gas){
            $distance_left = $distance / $refuel_gas;
            $total_gas = $gas + $refuel_gas;
            echo "<br>";
            echo "You ran out of gas! You have " . $distance_left . "km left.";
            echo "<br>";
            echo "Refueling...";
            echo "<br>";
            echo "You arrived to your destination!! You consumed " . $total_gas . "L";
            
        }
    
        public function display($total_gas){
            echo "<br>";
            echo "You arrived to your destination!! You consumed " . $total_gas . "L";
        }
    }
    