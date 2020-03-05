<?php

$a = Array(
    [1,],
    [1,],
    [1,],
    [1,],
    [1,],
    [1,],
    [1,1,1,1,1,1,1],
);


for($i=count($a)-2;$i>=0; $i--){
    for($j=1;$j<count($a)-1; $j++){
        $a[$i][$j]=$a[$i+1][$j]+$a[$i][$j-1];
    }
    echo '<br>';    
}

foreach ($a as $key => $value) {
    
    foreach ($value as $k => $v) {
        echo $v.' ';
    }
    echo '<br>';
}