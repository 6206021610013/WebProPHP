<?php
page_header("BINGGO GAME", "FFDDEE");
echo '<table align="center" border="1" text-align:center;>' ;
    $random = array();
    for($i = 0 ; $i < 25 ; $i++){
        $random[$i] = rand(0,99);
    }
    
    for($i = 0 ; $i < 25 ; $i++){
        if($i % 5 == 0){
            echo '<tr>';
        }
        echo '<td>' .$random[$i]. '</td>';
    }
echo '</table>';

echo '<br>
    <form method="get">
    <center><input style=" width: 150px; font-size: 20px;" 
    type="submit" name="submit" value="START GAME"></center>
    </form>';
    if (isset($_GET['submit'])){
        checkNum($random) ;
    }
    
page_footer("Thank You.");


    function page_header($title, $bgcolor = "ffffff") {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>' . $title . '</title></head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
    }

    function page_footer($message = "ขอบคุณ") {
        echo '<hr>' . $message ;
        echo '</body></html>';
    }
    function checkNum($random){
        $c = 1 ;
        $correct = 0 ;
        $incorrect = 0 ;
        do{
            
            $rcheck = rand(0,99);
            if ( in_array($rcheck,$random)){
                echo "<font color =#0CA208>ครั้งที่ " .$c. " = " .$rcheck. " => ยินดีด้วย คุณมีเลขนี้</font><br>" ;
                $correct++ ;
                $c++ ;
            }
            else{
                echo "ครั้งที่ " .$c. " = " .$rcheck. " => เสียใจด้วย คุณไม่มีเลขนี้<br>" ;
                $c++ ;
            }
        }while ($correct != 5);
        $c -= 1 ;
        echo "<center><font size=5 color = red >คุณจบ BINGO เกมนี้ ใน ครั้งที่ $c </font></center><br>";  
    }
     
?>