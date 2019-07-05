<?php
    class CarDistance{
        public $consumption = 2.5;

        public function calculate($gas,$distance){
            $total_consumption = $this->consumption*$distance;
            echo "You have a total of".$gas."L.You need to travel".$distance."km"; 
            if($gas >= $total_consumption){
                $remaining = $gas - $total_consumption;
                $this->display($total_consumption,$remaining);
            }elseif($gas < $total_consumption){
                $refuel_gas = $total_consumption -$gas;
                $this->refuel($refuel_gas,$distance,$gas);
            }

        }public function refuel();

    }

