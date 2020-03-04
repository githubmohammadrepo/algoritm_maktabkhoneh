<?php
$nums = [5,3,-7,2,4,6,-10,1,8];
$max=0;
$sum=0;
$j=count($nums);
$counter =0;
for ($i=0; $i < $j; $i++) { 
    if($sum < $sum+$nums[$i]){
        $sum += $nums[$i];
    }
    ++$counter;

    echo 'count:'.$counter;
    echo 'j'.$j.'<br>';
    if($counter==$j){
        
        if($max<$sum){
            $max = $sum;
        }
        $sum=0;
    }
}

echo $sum;