<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
 <?php
    // function writeMsg(){
    //     echo "this is function";
    // }
    
    // writeMsg();

        function writeMsg1($n1,$n2){
         $mul = $n1*$n2;
         return $mul;
    }
    
    $mul = writeMsg1(4,5);
    echo "multiplication is:",$mul;

 
 ?>

</body>
</html>