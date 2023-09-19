<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $arrs = array_map('strlen', $array);
    echo "Chuỗi lớn nhất là "   .$max($arrs);

?>