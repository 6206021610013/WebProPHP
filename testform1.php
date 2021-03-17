<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
    <br/>
    <form method="POST">
    DB NAME :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="dbname" require><br/>
    TABLE NAME :<input type="text" name="tbname" ><br/>
    NAME :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" ><br/>
    LAST-NAME :&nbsp;&nbsp;&nbsp;<input type="text" name="lastname" ><br/>
    E-MAIL :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" ><br/>
    <input type="submit" name="submit" value="ตกลง">
    <form><br/>
    <?php
    
    if (isset($_POST["submit"])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = $_POST["dbname"];
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $tbname = $_POST["tbname"];
        $name = $_POST["name"];
        $lname = $_POST["lastname"];
        $email = $_POST["email"];
        $sql = "INSERT INTO $tbname (id, fname, lastname, email)
        VALUES ('', '$name', '$lname', '$email')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>