<?php
  $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
  65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

  $sum = array_sum($numbers);
  $count = count($numbers);
  $average = $sum / $count;

  echo 'Gia tri trung binh cua mang la: '.$average.'<br>';

  foreach ($numbers as $arr ){
      if ($arr > $average){
          echo 'Cac so co gia tri lon hon gia tri trung binh la: '.$arr.'<br>';
      }
  }

  foreach ($numbers as $arr1 ){
      if ($arr1 <= $average){
          echo 'Cac so co gia tri nho hon hoac bang gia tri trung binh la: '.$arr1.'<br>';
      }
  }



?>