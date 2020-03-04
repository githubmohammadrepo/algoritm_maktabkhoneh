<?php
$nums = [5,3,-7,2,4,6,-10,1,8];

$max=0;

for ($i=0; $i < count($nums); $i++) { 
    $sum=0;
    for ($j=$i; $j < count($nums)-1; $j++) { 
        $sum += $nums[$j]; 
        if($sum > $max){
            $max = $sum;
        }
    }
}

echo $max;