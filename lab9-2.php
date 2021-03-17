<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-2 </title>
</head>
<body>
<form method="POST">
<center>
    จำนวนนักเรียน : <input type="number" name="stdnum">
    <input type="submit" name="submit" value="accept">
    </center>
</form> 
<?php
    if (isset($_POST["submit"])){
        $num = $_POST["stdnum"] ;
        $score = array();
        $SUM=[];
        for($n = 0 ; $n < $num; $n++) {
            $score[$n] = rand(0, 100);
        }
        for ($i=0; $i<$num ; $i++) { 
            $SUM[]=$score[$i];
        }
        $min = min($SUM);
        $max = max($SUM);

        echo '<center><font size="4" color="blue"> Grade Report </font></center>';
        echo '<table style="width:30%;" border="1" align="center">';
        echo '<tr><td align="center" width="90">Student No.</td>';
        echo '<td align="center" width="90">Score</td>' ;
        echo '<td align="center" width="90">Grade</td></tr>';
        for($n = 0 ; $n < $num; $n++) {
            echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
            echo '<td align="center" width="90">' . $score[$n] . '</td>' ;
            echo '<td align="center" width="90">' . checkgrade($score[$n]) . '</td></tr>';
        }
        echo '<tr><td colspan="3" align="center"> Average Score : ';
        echo average( $score, $num);
        echo '</td></tr>' ;

        echo '<tr><td colspan="3" align="center"> Maximum : ';
        echo $max ;
        echo '</td></tr>' ;

        echo '<tr><td colspan="3" align="center"> Minimum : ';
        echo $min ;
        echo '</td></tr>' ;

        echo '</table>';

        
    }
    function average($data, $num) {
        $total = 0;
        for($n = 0 ; $n < $num; $n++) {
            $total += $data[$n];
        }
        return( $total / $num );
    }
    function checkgrade($score){
        if($score >= 80){
            return "A" ;
        }
        else if($score >= 70){
            return "B" ;
        }
        else if($score >= 60){
            return "C" ;
        }
        else if($score >= 50){
            return "D" ;
        }
        else return "F" ;
    }
?>
</body>
</html>