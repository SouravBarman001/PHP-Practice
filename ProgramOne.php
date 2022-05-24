<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php

//  $a = 4;
//  $b = 6;
//  $c = 10;
//  $d = 12;
//  $e = 11;
//  $f = 12;
//  $g = 9;
//  $h = 3;
//  $i = 7;
//  $j = 5;
//  $avg = ($a + $b + $c + $d + $e + $f + $g + $h + $i + $j) / 10;

 $numbers = array( 4,5,3,7,5,12,3,9,5,15);
 $sum = 0;
 for ($i = 0; $i < 10; $i++) {
      $sum = $sum + $numbers[$i];
 }
  echo "Sum:",$sum;
  $avg = $sum / 10;
  echo "<br>";
  echo "Average:",$avg;
  echo "<br>";
  for ($i = 0; $i < 10; $i++) {
      if($numbers[$i] > $avg){
          echo $numbers[$i];
          echo "<br>";
      }
  }
 
 ?>

</body>
</html>