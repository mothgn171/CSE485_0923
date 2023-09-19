<?php
    $array = array(
        '0' => "int 1",
        '1' => "int 2",
        '2' => "int 3",
        '3' => "int 4",
        '4' => "int 5",

    );
    unset($array['3']);
    echo '<pre>';
    print_r(($array));
    echo '<pre>';
?>