<?php

class Fibonacci{
    public $Final_numbers = [0,1];
    public $a = 1;

    public $adds = 0;
    public function exec(){
        while(true){
            $this->adds = $this->Final_numbers[$this->a - 1] + $this->Final_numbers[$this->a];
            $this->Final_numbers[] = $this->adds;
            $this->a++;
            if($this->Final_numbers[$this->a] > 10000){
                break;
            }
        }

        foreach($this->Final_numbers as $number){
            echo "{$number} \n";
        }
    }


}
$obj = new Fibonacci();
$obj->exec();
?>