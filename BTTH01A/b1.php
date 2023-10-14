<?php 
    function tinhTong($arr){
    $sum=0;
    for($i=0; $i<count($arr);$i++ ){
        $sum+=$arr[$i];
    }
    return $sum;
}
    function tinhHieu($arr){
        $sum=0;
        for($i=0; $i<count($arr);$i++ ){
            $sum-=$arr[$i];
        }
        return $sum;
    }
    function tinhNhan($arr){
        $sum=1;
        for($i=0; $i<count($arr);$i++ ){
            $sum*=$arr[$i];
        }
        return $sum;
    }
    function tinhChia($arr){
        $sum=$arr[0];
        for($i=1; $i<count($arr);$i++ ){
            $sum/=$arr[$i];
        }
        return $sum;
    }
$arrs = [2,5,6,9,2,5,6,12,5];
    
    echo "Tổng các phần tử  =  ".implode( ' + ', $arrs)." = "   . tinhTong($arrs). "<br/>";
    echo "Hiệu các phần tử = ".implode ( ' - ',$arrs). " = " .tinhHieu($arrs). "<br/>";
    echo "Tích các phần tử =  ".implode(' * ', $arrs). " = ".tinhNhan($arrs). "<br/>";
    echo "Thương các phần tử = ". implode(' / ',$arrs). " = ".tinhChia($arrs). "<br/>" 
    ?>
