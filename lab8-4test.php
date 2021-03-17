<?php
    function page_header($title, $bgcolor = "ffffff") {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>' . $title . '</title></head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
    }
    function page_footer($message = "ขอบคุณ") {
        echo '<hr>' . $message ;
        echo '</body></html>';
    }
    function Minimum($random,$min){
        if($random < $min){
            $min = $random;
        }
        return $min;
    }
    function Maximum($random,$max){
        if($random > $max){
            $max = $random;
        }
        return $max;
    }
    function Average($random){
        $total = 0 ;
        $total += $random ;
        return($total);
    }
    function randomm( $snum, $enum, $maxRow, $maxCol) {
            $mini = $enum ;
            $maxi = $snum ;
            $showavg = 0 ;
            echo '<table align="center" border="1" bgcolor="ffff99">' ;
            for($r = 1; $r <= $maxRow; $r++) {
                echo '<tr >';
                    for($c = 1; $c <= $maxCol; $c++) {
                        $random = rand($snum,$enum) ;
                        $showavg += Average($random);
                        $mini = Minimum($random,$mini);
                        $maxi = Maximum($random,$maxi);
                        $showavg = $showavg / ($maxRow * $maxCol) ;
                        echo "<td>".$random."</td>";
                    }
                echo '</tr>';
            }
            echo '</table>';
            echo "<center><h3>Maximum = $maxi<br>Minimum = $mini<br>Average = $showavg</h3>" ;
    }
        

    function show_form() {
        echo '<form method="get">';
        echo '<center><h2> Test </h2>';
        echo '<h3>Row : <input style="width: 150px; font-size: 20px;" type="number" name="row"></h3>';
        echo '<h3>Column : <input style="width: 150px; font-size: 20px;" type="number" name="column"></h3>';
        echo '<h3>Start number : <input style="width: 150px; font-size: 20px;" type="number" name="snum"></h3>';
        echo '<h3>End number : <input style="width: 150px; font-size: 20px;" type="number" name="enum"></h3>';
        echo '<input style="width: 50px; font-size: 20px;" type="submit" name="submit" value="OK"></center><br>';
        if (isset($_GET['submit'])){
            $snum = $_GET['snum'];
            $enum = $_GET['enum'];
            $maxRow = $_GET['row'];
            $maxCol = $_GET['column'];
            randomm($snum, $enum, $maxRow, $maxCol);
        }  
    }

    page_header("Example 8-4", "FFDDEE");
    show_form();
    page_footer("Thank You.");
?>