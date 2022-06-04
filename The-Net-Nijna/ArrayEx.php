<?php
// (3) types of array in php
// 1.indexed array
// 2.associative array
// 3.multidimensional array
/*
Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays
*/
//********************** */
// 1.indexed array
// $peopleOne = ['shaun','crystal','sourav'];

// for($i = 0 ; $i<3 ; $i++){
//    echo $peopleOne[$i],"<br>";
// }

/**************************************/
//2.associative array
// $cars = array("Volvo", "BMW", "Toyota");
// //echo count($cars);

// for($i = 0 ; $i<count($cars) ; $i++){
//    echo $cars[$i],"<br>";
// }

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
//   echo "<br>";
// }

foreach($age as $p => $p_val)
{
    echo $p . "=".$p_val;
    echo "<br>";
}
print_r($age);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>