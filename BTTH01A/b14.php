<?php
    $array1 = [
        [77,87],
        [23, 45],
    ];

    $array2 = [
        'gia tri 1', 'gia tri 2'
    ];

    $mergedArray = [];


    foreach ($array1 as $key => $value) {
    $mergedArray[$key] = array_merge([$array2[$key]], $value);

}
    echo '<pre>';
    print_r ($mergedArray);
    echo '</pre>';

?>