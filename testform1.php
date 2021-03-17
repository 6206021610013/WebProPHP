<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="success.php">
    DB NAME :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dbname" require><br/>
    TABLE NAME :<input type="text" name="tbname" require><br/>
    NAME :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" require><br/>
    LAST-NAME :&nbsp;&nbsp;&nbsp;<input type="text" name="lastname" require><br/>
    E-MAIL :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" require><br/>
    <input type="submit" name="submit" value="ตกลง">
    <form><br/>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        
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