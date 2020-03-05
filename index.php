<?php

require_once('./knapsack.php');

$weight = Array(2,5,8,16);
$values = Array(4,2,5,15);

$knapsack = new Knapsack($weight, $values);

$names = ['weight','values'];

foreach ($names as $key => $value) {
    echo $value.'<br>';
    foreach ($$value as $k => $v) {
        echo $v . ' - ';
    }

    echo '<hr>';
}

print_r($knapsack->show());