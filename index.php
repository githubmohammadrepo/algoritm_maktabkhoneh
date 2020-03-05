<?php
$row = 10;
$col = 10;

$a=Array();
for($i=0;$i<$row;$i++){
    for($j=0;$j<($col);$j++){
        if($j==0 || $i==$col-1){
            $a[$i][$j]=1;
        }else{
            $a[$i][$j]=null;
        }
    }
}


// $a = Array(
//     Array(1,null,null,null,null,null,null),
//     Array(1,null,null,null,null,null,null),
//     Array(1,null,null,null,null,null,null),
//     Array(1,null,null,null,null,null,null),
//     Array(1,null,null,null,null,null,null),
//     Array(1,null,null,null,null,null,null),
//     Array(1,1,1,1,1,1,1),   
    
// );
$a[1][4]=0;
$a[2][2]=0;
$a[2][5]=0;
$a[4][2]=0;
$a[5][4]=0;

for($i=count($a)-2;$i>=0; $i--){
    for($j=1;$j<=count($a)-1; $j++){
        
        if(!(isset($a[$i][$j]))){
            $a[$i][$j]=$a[$i+1][$j]+$a[$i][$j-1];
        }else{
        }       
    }
    echo '<br>';    
}


echo '<hr>';
echo "<table>";
foreach ($a as $key => $value) {
    if($key==0){
        echo '<tr>';
        echo '<td>'.show('#').'</td>';
        foreach ($value as $k => $v) {
                show($k);
        }
        echo '</tr>';
    }
    echo '<tr>';
    echo "<th><b>".show($key)."</b></th>";
    foreach ($value as $k => $v) {
        
        if($v==0){
            show('*');
            
        }else{
            show($v);
        }
    }
    echo '</tr>';
}
echo "</table>";

function show($v,$l=14){
    $a = strlen((string)$v);
    $a=$l-$a;
    $d= floor($a/2);
    echo "<td>";
    for($i=0;$i<$d; $i++){
        echo "&nbsp;";
    }
    if(is_numeric($v))
        echo number_format((float)$v,0);
    else
        echo $v;
    for($i=0;$i<$d; $i++){
        echo "&nbsp;";
    }
    if($d*2 != $a){
        echo "&nbsp;";
    }
    echo "</td>";
}

?>

<style>
table{
    margin:auto;
    border:1px solid orange;
    margin-bottom: 100px;
}
    table tr td{
        border: 1px solid blue;
        padding:0;
        margin: 0;
    }
</style>