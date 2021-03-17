<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="GET">
        Start Num : <input type="text" name="snum"><br>
        End Num : <input type="text" name="enum"><br>
        Divide by : <input type="text" name="dnum"><br>
        <input type="submit" name="submit" value="Check num">
    </form>
<?php
    if(isset($_GET["submit"])){
        $snum = $_GET["snum"];
        $enum = $_GET["enum"];
        $dnum = $_GET["dnum"];
        $ans = 0;
        while ($snum < $enum){
            $snum++;
            if ($snum % $dnum == 0) {
                $ans = $snum." " ;
                echo $ans;
            }
        }
    }
?>
</body>
</html>