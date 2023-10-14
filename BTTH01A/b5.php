<?php 
    $a = ['a' => ['b' => 0,'c' => 1],'b' => ['e' => 2,'o' => ['b' => 3]]];
    echo "Giá trị = 3 trong mảng là:  " .$a['b']['o']['b']. "";
    echo "Giá trị = 1 trong mảng là:  " .$a['a']['c']. "".'<br/>';
    echo "Giá trị = a trong mảng là:  " .$a.['a'] . "".'<br/>';
    print_r(($a['a']));


?>