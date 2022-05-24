<html>
<head>
</head

<body> 

<?php
  
   $mysqli = new mysqli("localhost","sourav","1234","instructor");
   
   // Check connection
   if ($mysqli -> connect_errno) {
     echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
     exit();
   }
   else
   {
       echo "done";
   }


?>

</body>


</html>