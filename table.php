<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, th, td {
  border: 2px solid brown;
  border-collapse: collapse;
}
th, td {
  padding: 10px;
  text-align: left;    
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td rowspan = "3">1</td>
            <td colspan = "2">2</td>
            <!--<td>3</td>-->
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <!--<td>6</td>-->
        </tr>
        <tr>
            <td colspan = "2">7</td>
            <!--<td>8</td>
            <td>9</td>-->
        </tr>
        <tr>
            <td>10</td>
            <td>11</td>
            <td>12</td>
        </tr>
    </table>
</body>
</html>