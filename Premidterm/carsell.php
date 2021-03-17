<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 6px;
}
</style>
<?php
    if (isset($_POST["name"]) && isset($_POST["money"])){
        $name = $_POST["name"];
        $money = $_POST["money"];
        $total = 0 ;
        $msg = "" ;
        $ism = $_POST["ism"];
        $total = $money * $ism ;

        echo "<center><table style=width:40%;>
        <tr style=width:80%;>
            <td style=width:80%;>ชื่อลูกค้า :</td>
            <td>".$name."</td>
        </tr>

        <tr>
            <td>ผ่อนงวดละ :</td>
            <td>".number_format($money)."</td>
        </tr>
        <tr>
            <td>จำนวนงวด :</td>
            <td>".$ism."</td>
        </tr>
        <tr>
            <td>ยอดรวมเงิน :</td>
            <td>".number_format($total)."</td>
        </tr>";
        checkcar($total);
        echo "<tr>
                    <td colspan='2'><center><input type=button onClick='window.history.back()' value='Back to Home'></center></td>
                </tr></table></center>";
    }
    function checkCar($total){
        if($total >= 749000){
            $msg = "รถยนรุ่นที่ท่านสามารถเลือกซื้อได้" ;
        }
        else $msg = "ยอดเงินของท่าน ไม่เพียงพอ ที่จะซื้อรถยนได้" ;

        echo "<tr>
            <td colspan='2'>".$msg."</td>
            </tr>" ;

        if($total >= 1799000){
            echo"<tr>
            <td style=width:60%;><img src='img/Accord.png' alt='Accord' style='width:40%;'>
            <img src='img/logo-accord.png' alt='Accord' style='width:150px;'></td>
            <td>ราคา 1,799,000 บาท</td>
            </tr>" ;
        }
        if($total >= 1149000){
            echo"<tr>
            <td style=width:60%;><img src='img/Civic.png' alt='Cvic' style='width:40%;'>
            <img src='img/logo-civic.png' alt='Civic' style='width:150px;'></td>
            <td>ราคา 1,149,000 บาท</td>
            </tr>" ;
        }
        if($total >= 849000){
            echo"<tr>
            <td style=width:60%;><img src='img/Jazz.png' alt='Jazz' style='width:40%;'>
            <img src='img/logo-jazz.png' alt='Jazz' style='width:150px;'></td>
            <td>ราคา 849,000 บาท</td>
            </tr>" ;
        }
        if($total >= 749000){
            echo"<tr>
            <td style=width:60%;><img src='img/City.png' alt='City' style='width:40%;'>
            <img src='img/logo-city.png' alt='City' style='width:150px;'></td>
            <td>ราคา 749,000 บาท</td>
            </tr>" ;
        }
    }
?>