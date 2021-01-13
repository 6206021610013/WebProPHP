<html>
<head><title>การกำหนดค่าตัวแปร</title></head>
<body>
    <?php
        $x = 100;
        $y = "200";
        $z = '300';
        $add = $x + $y;
        $sub = $z - $x;
        $dou = $y * $z;
        $mod = $dou / $z;
        $message = "Hello World";
        echo $x; echo "<br />";
        echo $y; echo "<br />";
        echo $z; echo "<br />";
        echo "ผลบวก " .$x. " + " .$y. " = " .$add; echo "<br />";
        echo "ผลลบ " .$z. " - " .$x. " = " .$sub; echo "<br />";
        echo "ผลคูณ " .$y. " x " .$z. " = " .$dou; echo "<br />";
        echo "ผลหาร " .$dou. " / " .$z. " = " .$mod; echo "<br />";
        echo $message; echo "<br />";
    ?>
    <a href="testFor.php">Back to testFor.html</a>
</body>
</html>