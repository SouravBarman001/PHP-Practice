<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
</head>
<body>

<form action="Userinput.php" method="get">

Name: <input type="text" name = "username">
<input type="submit">
</form>
    <?php
    echo $_GET["username"];
    ?>
</body>
</html>