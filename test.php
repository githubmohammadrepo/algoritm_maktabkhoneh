<?php

$tasks = Array(
    Array(
        'title'=>'one',
        'start'=> 1,
        'finish'=>2
    ),
    Array(
        'title'=>'two',
        'start'=> 1,
        'finish'=>3,
    ),
    Array(
        'title'=>'three',
        'start'=> 3,
        'finish'=>6,
    ),
    Array(
        'title'=>'four',
        'start'=> 5,
        'finish'=>8,
    ),
    Array(
        'title'=>'five',
        'start'=> 7,
        'finish'=>9,
    ),
    Array(
        'title'=>'six',
        'start'=> 10,
        'finish'=>12,
    ),
    
);

//add length 
foreach ($tasks as $key => $value) {
    $value['length']=$value['finish'] - $value['start'];

   $tasks[$key] = $value;
}

echo '<pre>';
// print_r($tasks); 

//sort data
// print_r(array_sort($tasks, 'finish'));

//function for sort associative array by sepicefic key
function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

$selected =Array();

array_push($selected);
$t=0;
foreach ($tasks as $key => $value) {
    if($t < $value['start']){
        array_push($selected,$tasks[$key]);
        $t=$value['finish'];
    }
    
}


print_r($tasks);

echo '<hr>';

print_r($selected);