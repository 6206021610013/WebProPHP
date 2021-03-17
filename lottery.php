<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery</title>
</head>
<body style="background-color:powderblue;">
    <form action="result-lottery.php" method="POST">
        <center>
        <h1 style="color:#2F52B8">โปรแกรม ตรวจ เลขท้าย 2 ตัว</h1>
        <font color="red">
        <h2>รางวัล เมื่อถูกเลขท้าย 2 ตัว (ต่นทุนซื้อ x 60 เท่า)<br>เช่น ถ้าซื้อ 10 บาท ถูกรางวัล รับเงิน 600 บาท</h2>
        <h3>เลขเสี่ยงโชค [1-99] <input style="width: 150px; font-size: 20px;" type="number" name="num" min="1" max="99" required/></h3><br><br>

        <h2>* ซื้อได้ ตั้งแต่ 10-500 บาท เท่านั้น *</h2>
        <h3>จำนวนเงินที่คุณต้องการซื้อ [10-500 บาท] <input style="width: 150px; font-size: 20px;" type="number" name="money" min="10" max="500" required/></h3>
        </font>
        <?php
            session_start();
            $rd = rand(1, 99);
            $_SESSION["rd"] = $rd;
        ?>
        <input style="height:30px; width:6%; font-size: 20px;" type="submit" name="submit" value="ตรวจรางวัล">
        </center>
    </form>
</body>
</html>