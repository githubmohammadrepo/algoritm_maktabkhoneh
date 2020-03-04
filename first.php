<?php
$nums = [5,3,-7,2,4,6,-10,1,8];

//show original arrays
foreach ($nums as $key => $value) {
    echo $value.', ';
}
echo '<hr>Result: ';
$max =[];
for ($i=0; $i <(count($nums)) ; $i++) { 
    $sum = [];
    $out = $nums[$i];
    for ($j=$i+1; $j <((count($nums)-1)) ; $j++) { 
        $out= $out+$nums[$j];
        array_push($sum ,$out);
         
    }
    

    array_push($max,((count($sum)>0) ? max($sum) : null));
}

echo max($max);


echo <<<demo
    <style>
    *{
        font-size:1.4rem;
        color:purple;
    }
    </style>
demo;