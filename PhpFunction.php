<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>
<body>

<?php
    function myFun(){
        echo "This is a function";
    }

    myfun();

    echo "<h3>Using parameter </h3>";
    echo "</br>";

    function myFunOne($a,$b){
         return $a + $b;
    }

   $sum = myFunOne(5,4);
   echo "Sum:",$sum;


?>

</body>
</html>