<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
table, th, td {
    padding-left:10px;
    padding-right:10px;
    text-align:center;
    border: 1px solid black;
    border-collapse: collapse;
}
fieldset{
    margin-left:450px;
    margin-right:450px;
    padding-top:20px;
}
</style>
</head>
<body>
<center>
    <img width="650px" src="images/header.jpg">
    <fieldset>
        <legend align="center">Car Model</legend>
        <form method="post" action="CalculateCar.php">
        เลือกรุ่นรถยนต์ <select name="car" id="car">
        <option value="Accord">Accord</option>
        <option value="Civic">Civic</option>
        <option value="Jazz">Jazz</option>
        <option value="City">City</option>
        </select>
        <input type="submit" name="submit" value="submit">
        </form>
        <br>
        <table>
            <tr>
                <th>ภาพรถยนต์</th>
                <th>รุ่นรถยนต์</th>
                <th>ราคารถยนต์<br>(บาท)</th>
                <th>อัตราดอกเบี้ยต่อปี<br>(ร้อยละ,%)</th>
            </tr>
            <tr>
                <td><img width="200px" src="images/Accord.png"></td>
                <td>Accord</td>
                <td>1,799,000</td>
                <td>2.00</td>
            </tr>
            <tr>
                <td><img width="200px" src="images/Civic.png"></td>
                <td>Civic</td>
                <td>1,145,000</td>
                <td>2.00</td>
            </tr> 
            <tr>
                <td><img width="200px" src="images/Jazz.png"></td>
                <td>Jazz</td>
                <td>754,000</td>
                <td>4.00</td>
            </tr> 
            <tr>
                <td><img width="200px" src="images/City.png"></td>
                <td>City</td>
                <td>749,000</td>
                <td>4.00</td>
            </tr>  
        </table>
    </fieldset>
</center>
</body>
</html>