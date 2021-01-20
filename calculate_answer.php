<html>
<body>
    Answer :
    <?php
        echo $x = $_GET["x"];
        echo " ",$operator = $_GET["operator"];
        echo " ",$y = $_GET["y"];
        switch($operator){
            case "+":
                echo " = " ,$x + $y ;
                break;
            case "-":
                echo " = " ,$x - $y ;
                break;
            case "*":
                echo " = " ,$x * $y ;
                break;
            case "/":
                echo " = " ,$x / $y ;
                break;
        }
    ?>
    <br>
    <a href="calculate.php">ย้อนกลับ</a>
</body>
</html>