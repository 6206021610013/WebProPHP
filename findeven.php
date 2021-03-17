<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="GET">
        Num : <input type="text" name="num"><br>
        <input type="submit" name="submit" value="Check num">
    </form>
<?php
    if(isset($_GET["submit"])){
        $odd= 0;
        $even = 0;
        $zero = 0;
        $num = $_GET["num"];
        echo "<br>um = $num <br>" ;
    }    
?>
</body>
</html>