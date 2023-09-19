<?php
    $arr = ['B','C','E'];
     
    for($i = 0; $i <count($arr); $i++){
        $arr[$i] = strtolower($arr[$i]);
    }
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
?>