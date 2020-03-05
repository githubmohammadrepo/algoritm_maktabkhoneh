<?php

class Knapsack {

    private $VOnWeight = Array();
    public function __construct(Array $weight,Array $value)
    {
        //row array
        $maxCount=0;
        if(count($weight) < count($value)){ 
            $nums = count($value) - count($weight);
            for($i=0; $i<$nums;$i++){
                array_push($weight,1);
            }
        }elseif (count($weight) == count($value))    {
            # code...
        }else{
            $nums = count($weight) - count($value);
            for($i=0; $i<$nums;$i++){
                array_push($value,0);
            }
        }

        foreach ($weight as $key => $v) {
           array_push( $this->VOnWeight, $value[$key] / $v );
        }
        sort($this->VOnWeight);
        
    }

    public function show(){
        return $this->VOnWeight;
    }

}