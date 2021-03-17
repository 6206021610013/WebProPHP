<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $conn = mysqli_connect($servername, $username, $password);
     $show = "SHOW DATABASES";
     if(!($result=mysqli_query($conn, $show))){
         printf("Error : %s\n", mysqli_error($conn));
     }
     while($row = mysqli_fetch_row($result)){
         if (($row[0]!="information_schema") && ($row[0]!="mysql")){
             echo $row[0]. "\r<br>";
         }
     }
    ?>
    <br/>
    <form method="POST">
    DB NAME :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dbname" require><br/>
    TABLE NAME :<input type="text" name="tbname" require><br/>
    NAME :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" require><br/>
    LAST-NAME :&nbsp;&nbsp;&nbsp;<input type="text" name="lastname" require><br/>
    E-MAIL :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" require><br/>
    <input type="submit" name="submit" value="ตกลง">
    <form><br/>
    <?php
        if (isset($_POST["submit"])){
            $dbname = $_POST["dbname"];
            $tbname = $_POST["tbname"];
            $name = $_POST["name"];
            $lname = $_POST["lastname"];
            $email = $_POST["email"];
        }
    ?>
</body>
</html>