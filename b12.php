<?php
    $numbers = array(
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    );
    
    echo 'Phan tu dau tien cua mang: '.reset($numbers).'<br>';
    echo 'Phan tu cuoi cung cua mang: '.end($numbers).'<br>';
    echo 'Phan tu lon nhat cua mang: '.max($numbers).'<br>';
    echo 'Phan tu nho nhat cua mang: '.min($numbers).'<br>';
    echo 'Tong cac gia tri cua mang: '.array_sum($numbers).'<br>';
    asort($numbers);
    foreach($numbers as $s_value){
        echo 'Sap xep theo chieu tang cua mang theo gia tri: '.$s_value.'<br>';
        
    }
    ksort($numbers);
    foreach($numbers as $s){
        echo 'Sap xep theo chieu tang cua mang theo khoa: '.$s.'<br>';
        
    }
    arsort($numbers);
    foreach($numbers as $s_value){
        echo 'Sap xep theo chieu giam cua mang theo gia tri: '.$s_value.'<br>';
        
    }
    krsort($numbers);
    foreach($numbers as $s){
        echo 'Sap xep theo chieu giam cua mang theo khoa: '.$s.'<br>';
        
    }
 
?>