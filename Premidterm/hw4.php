<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hw4</title>
</head>
<body>
    <form method="get">
        <center><h2> Test </h2>
        <h3>ต่าเริ่มต้น : <input style="width: 150px; font-size: 20px;" type="number" name="snum"></h3>
        <h3>ค่าสุดท้าย : <input style="width: 150px; font-size: 20px;" type="number" name="enum"></h3>
        <h3>ตัวเลขที่นำไปหาร : <input style="width: 150px; font-size: 20px;" type="number" name="modnum"></h3>
        <input style="width: 150px; font-size: 20px;" type="submit" name="submit" value="Check Num"></center><br>
    </form>

        <?php
            if (isset($_GET['submit'])){
                $snum = $_GET['snum'];
                $enum = $_GET['enum'];
                $modnum = $_GET['modnum'];
                echo "<center><h2>" ;
                checkNum($snum,$enum,$modnum);
                echo "<br>" ;
                countNum($snum,$enum,$modnum);
                echo "<br>" ;
                sumNum($snum,$enum,$modnum);
                
            }
            function checkNum($snum,$enum,$modnum){
                for($i = $snum ; $snum <= $enum ; $i++){
                    $snum++ ;
                    if($snum % $modnum == 0){
                        echo "$snum, " ;
                    }
                }  
            }

            function countNum($snum,$enum,$modnum){
                $resualt = 0 ;
                for($i = $snum ; $snum <= $enum ; $i++){
                    $snum++ ;
                    if($snum % $modnum == 0){
                        $resualt += 1 ;
                    }
                }
                echo "จำนวนที่หารลงตัว = $resualt" ;
            }

            function sumNum($snum,$enum,$modnum){
                $total = 0 ;
                for($i = $snum ; $snum <= $enum ; $i++){
                    $snum++ ;
                    if($snum % $modnum == 0){
                        $total += $snum ;
                    }
                }
                echo "ผลรวมของตัวเลขที่หารลงตัว = $total" ;
            }
        ?>
</body>
</html>