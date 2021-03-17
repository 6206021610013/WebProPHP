<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Min Max Average</title>
</head>
<body>
    
    <form action="findminmax.php" method="GET">
    <center><h1>HW1 : Find Min Max Average</h1>
    Num 1: <input type="text" name="n1"><br>
    Num 2: <input type="text" name="n2"><br>
    Num 3: <input type="text" name="n3"><br>
    
    <input type="radio" name="choice" value="minimum"> Minimum <br>
    <input type="radio" name="choice" value="maximum"> Maximum <br>
    <input type="radio" name="choice" value="avg"> Average <br>
    <input type="submit" name="submit" value="Submit"></center>
    </form>
    <center>
    <?php
    if(isset($_GET['submit'])){
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];
        $choice = $_GET["choice"];
        if ($choice == "minimum"){
            if ($n1 < $n2 && $n1 < $n3){
                echo "Minimum number = ",$n1 ;
            }
            else if ($n2 < $n1 && $n2 < $n3){
                echo "Minimum number = ",$n2 ;
            }
            else echo "Miniimum number = ",$n3 ;
        }
        if ($choice == "maximum"){
            if ($n1 > $n2 && $n1 > $n3){
                echo "Maximum number = ",$n1 ;
            }
            else if ($n2 > $n1 && $n2 > $n3){
                echo "Maximum number = ",$n2 ;
            }
            else echo "Maximum number = ",$n3 ;
        }
        if($choice == "avg"){
            echo "Average = ",($n1+$n2+$n3)/3 ;
        }
        
    }
    ?>

</body>
</html>