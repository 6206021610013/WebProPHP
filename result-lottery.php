<?php
        $num = $_POST["num"];
        $money = $_POST["money"];
        session_start();
            if($num == $_SESSION["rd"]){
                $money *= 60 ;
                echo "<font color='green'><h2>ยินดีด้วยคุณถูกรางวัล<br>คุณได้รับเงินรางวัล $money บาท</h2></font>" ;
            }
            else echo "<font color='red'><h2>เสียใจด้วยคุณไม่ถูกรางวัล<br></h2></font>" ;
            echo "<form action ='lottery.php' method ='POST'>
            <input type ='submit' value = 'ย้อนกลับ'>
            </form>" ;
            echo "<h3>รางวัล เลขที่ออก คือ : " .$_SESSION["rd"]."</h3>" ;
?>