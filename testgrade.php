<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $score = 100 ;
        echo "<h2> Your Score is $score";
        if($score >= 80 && $score <= 100) echo "<h2>Your Grade is : A" ; 
        else if($score >= 75) echo "<h2>Your Grade is : B+" ;
        else if($score >= 70) echo "<h2>Your Grade is : B" ;
        else if($score >= 65) echo "<h2>Your Grade is : C+" ;
        else if($score >= 60) echo "<h2>Your Grade is : C" ;
        else if($score >= 55) echo "<h2>Your Grade is : D+" ;
        else if($score >= 50) echo "<h2>Your Grade is : D" ;
        else echo "<h2>Your Grade is : F" ;
?>
</body>
</html>