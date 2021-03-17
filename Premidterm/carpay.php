<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 6px;
}
</style>
</head>
<body>
<table style="width:40%; text-align:center;">
  <caption><h2>รถยนต์</h2></caption>
  <tr style="background-color: #f18973;">
    <th style="width:50%">รุ่นรถยนต์</th>
    <th style="width:50%">ราคารถยนต์ (บาท)</th>
  </tr>
  <tr>
    <td>Accord</td>
    <td>1,799,000</td>
  </tr>
  <tr>
    <td>Civic</td>
    <td>1,149,000</td>
  </tr>
  <tr>
    <td>Jazz</td>
    <td>849,000</td>
  </tr>
  <tr>
    <td>City</td>
    <td>749,000</td>
  </tr>
</table>
<br><br><br>
<center>
    <form action="carsell.php" method="POST">
        <table>
            <tr>
                <td>ชื่อ นาทสกุล ลูกค้า :</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td>จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวด :</td>
                <td><input type="number" name="money"></td>
            </tr>

            <tr>
                <td>จำนวนงวด ที่ต้องการ :</td>
                <td><select name="ism" id="ism">
                    <option value=36>36</option>
                    <option value=48>48</option>
                    <option value=60>60</option>
                    <option value=72>72</option>
                    </select>
                </td>
            </tr>

            <tr>
            <th colspan="2"><input style="height:30px;" type="submit" name="submit" value="ซื้อรถ"></th>
            </tr>

        </table>
    </form>
</body>
</html>
