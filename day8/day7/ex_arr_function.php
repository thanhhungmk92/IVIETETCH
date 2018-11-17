<?php 
    $arr = array(9,12,3,6,8,2,16,20,50,30);
    //Define function print all value of arrays
    function print_arr($arr){
        $result="";
        for($i=0; $i<10; $i++){
            $result.= $arr[$i]."  ";
        }
        return $result;
    }

    //define function find a vule in array
    function search_value($arr,$n){
        $result_search="";
            $result_search="Value is not found";
            for($i=0; $i<10; $i++){
                if ($n==$arr[$i]){
                    $result_search ="Value found in $i position";
                    break;
                }
            }
        return $result_search;
    }

// define function find a vule max in array
function max_value($arr){
  $max = $arr[0];
    for($i=1; $i<10; $i++){
        if ($max <$arr[$i]){
            $max = $arr[$i];
        }
    }
    $result_max = "Max Value is ".$max;
    return   $result_max;
}

    // Find a value in array
    $action=filter_input(INPUT_POST,"action");
    $n = filter_input(INPUT_POST,"n");
    
    //Find Max value in array    
    //Calculate sum of all elements of array
    function sum_arr($arr){
        $sum=0;
        foreach ($arr as $key => $value) {
             $sum+=$value;
         } 
        $result_sum="Sum  is  ".$sum;
        return $result_sum;
    }
    
    // Sort by descending
    function sort_arr(&$arr){
        for($i=0;$i<9;$i++){
            for ($j=$i+1; $j<10; $j++){
                if ($arr[$i]<$arr[$j]){
                    $t=$arr[$i];
                    $arr[$i]=$arr[$j];
                    $arr[$j]=$t;
                }
            }
        }
    }
    function print_sort($arr){
        $result_sort="Sort array :";
        foreach ($arr as $key => $value) {
         $result_sort = $result_sort.$value." ";
        } 
        return $result_sort;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">   

    <title>Example Array</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

      <form class="form-signin" action="ex_arr_function.php" method="POST">
        <h2 class="form-signin-heading">Search Number</h2>
        <label for="inputEmail" class="sr-only">Enter a number</label>
        <input name ="n" type="text" id="inputEmail" class="form-control" placeholder="Enter string" required autofocus>
        <input type="hidden" name="action" value="search_number">
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Search</button>
        <br>       
        <label >
            <?php
                $result=print_arr($arr);
                echo $result; 
            ?>
        </label>
        <br>       
        <label >
            <?php
                $result_search=search_value($arr,$n);
                echo $result_search; 
            ?>
        </label>
        <br>
        <label >
            <?php
                $result_max=max_value($arr);
                echo $result_max; 
            ?>
        </label>
        <br>
        <label >
            <?php
                $result_sum=sum_arr($arr);
                echo $result_sum; 
            ?>
        </label>
        <br>
        <label >
            <?php
                sort_arr($arr);
                $result_sort=print_sort($arr);
                echo $result_sort; 
            ?>
        </label>
        <br>          
      </form>
      
    </div> <!-- /container -->
  </body>
</html>
