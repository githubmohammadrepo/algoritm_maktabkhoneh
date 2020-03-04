<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
<?php

//start for sort logically    
if(isset($_POST)){
    $taskCount = count($_POST)/3;
    

    //start get and format information
    $tasks=Array();
    $v=Array();
    $i=1;
    foreach ($_POST as $key => $value) {
        if($i==1){
            $v['title'] = $value;
        }elseif ($i==2) {
            $v['start'] = $value;
        }else{
            $v['finish'] = $value;
        }
        
        if($i==3){
            $i=0;
            array_push($tasks,$v);
            $v=[];
        }
        $i++;
    }
    //endget and format information
    

    
    //start add length 
    foreach ($tasks as $key => $value) {
        $value['length']=$value['finish'] - $value['start'];

         $tasks[$key] = $value;
    }
    //end add length 

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


    //compute diffrent betwin selected and unselected
    $remained = Array();

    foreach ($tasks as $key => $value) {
        if(isset($selected[$key])){
            $result = array_diff_assoc($value, $selected[$key]);
        }else{
            array_push($remained,$tasks[$key]);
        }
        if(count($result)){
            array_push($remained,$result);
        }
    }

?>

<h2 class="mt-3 text-primary text-center">Your List For Doing</h2>
<hr color="orange">
    <form action="#" method="post">
        <div class="row">
            <?php
               foreach ($selected as $key => $value) {
               
            ?>
        <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="card bg-info">
                    <div class="card-header text-center">
                        Task <?php echo $i+1; ?>
                    </div>
                    <div class="card-body">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">title</span>
                            </div>
                            <input type="text" class="form-control pl-2" name="title<?php echo $i;?>" placeholder="<?php echo $value['title'] ?>" aria-label="title" readonly aria-describedby="addon-wrapping">
                        </div>
                        <p class="card-text">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">start</span>
                            </div>
                            <input type="text" class="form-control pl-2" name="start<?php echo $i;?>" placeholder="<?php echo $value['start'] ?>" aria-label="start" readonly aria-describedby="addon-wrapping">
                        </div>
                        </p>

                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">finish</span>
                            </div>
                            <input type="text" class="form-control pl-2" name="finish<?php echo $i;?>" placeholder="<?php echo $value['finish'] ?>" readonly aria-label="finish" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>
            </div>
            


            <?php
                }
            ?>
        </div>
        </form>

        <br>
        <hr>


        <h2 class="mt-3 text-primary text-center">Removed Tasks</h2>
<hr color="orange">
    <form action="#" method="post">
        <div class="row">
            <?php
               foreach ($remained as $key => $value) {
               
            ?>
        <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="card bg-danger">
                    <div class="card-header text-center">
                        Task <?php echo $i+1; ?>
                    </div>
                    <div class="card-body">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">title</span>
                            </div>
                            <input type="text" class="form-control pl-2" name="title<?php echo $i;?>" placeholder="<?php echo $value['title'] ?>" aria-label="title" readonly aria-describedby="addon-wrapping">
                        </div>
                        <p class="card-text">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">start</span>
                            </div>
                            <input type="text" class="form-control pl-2" name="start<?php echo $i;?>" placeholder="<?php echo $value['start'] ?>" aria-label="start" readonly aria-describedby="addon-wrapping">
                        </div>
                        </p>

                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">finish</span>
                            </div>
                            <input type="text" class="form-control pl-2" name="finish<?php echo $i;?>" placeholder="<?php echo $value['finish'] ?>" readonly aria-label="finish" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>
            </div>
            


            <?php
                }
            ?>
        </div>
        </form>
    </div>

    </body>

</html>
<?php
} ?>
