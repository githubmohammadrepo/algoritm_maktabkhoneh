<!doctype html>
<?php
//start operation for task count
$taskCount=0;
if(isset($_POST['taskCount']))
    echo $taskCount = $_POST['taskCount'];


//end operation for task count
    

//end for sort logically    
?>
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
        <h1 class="text-center mt-1">Hello, world!</h1>

        <div class="row">
            
        <form action="#" method="post" class="col-sm-11 col-md-10 col-lg-8 m-auto">
            <div class="input-group ">
                    <div class="input-group-prepend ml-auto">
                        <span class="input-group-text">Task Numbers:</span>
                    </div>
                    <div class="input-group-prepend ">
                        <span class="input-group-text">
                            <select class="custom-select" name="taskCount" id="inputGroupSelect01">
                               
                                <?php
                                    for ($i=1;$i<15;$i++) {
                                        echo <<<option
                                        <option value="$i">$i</option>
                                        option;
                                    }
                                ?>
                                
                              </select>
                        </span>
                    </div>
                    <div class="input-group-append mr-auto">
                        <span class="input-group-text">
                            <input type="submit" class="form-control" value="Send">
                        </span>
                    </div>
                </div>
            </form>
        </div>

        <hr color="orange">




        <form action="doingTasks.php" method="post">
        <div class="row">
            
            <?php
                for ($i=0;$i<$taskCount;$i++) {
            ?>
        <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="card">
                    <div class="card-header text-center">
                        Task <?php echo $i+1; ?>
                    </div>
                    <div class="card-body">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">title</span>
                            </div>
                            <input type="text" class="form-control pl-2" name="title<?php echo $i;?>" placeholder="title" aria-label="title" aria-describedby="addon-wrapping">
                        </div>
                        <p class="card-text">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">start</span>
                            </div>
                            <input type="text" class="form-control pl-2" name="start<?php echo $i;?>" placeholder="start" aria-label="start" aria-describedby="addon-wrapping">
                        </div>
                        </p>

                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">finish</span>
                            </div>
                            <input type="text" class="form-control pl-2" name="finish<?php echo $i;?>" placeholder="finish" aria-label="finish" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>
            </div>
            


            <?php
                }
            ?>
        </div>
        <input type="submit" class="form-control" value="submit">
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>