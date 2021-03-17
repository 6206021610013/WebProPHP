<?php
$servername = "localhost";
$username = "root";
$password = "";
//ShOW DB
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
//END SHOW DB
echo "<form method='POST'>
ชื่อ ฐานข้อมูล <input type='text' name='namedb'>
<input type='submit' name='submit' value='สร้าง'>
<input type='submit' name='delete' value='ลบ'>
<form><br />";

if(isset($_POST['submit']) && isset($_POST['namedb'])){
    $namedb = $_POST['namedb'];
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    // Create database
    $sql = "CREATE DATABASE $namedb";
    if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . mysqli_error($conn);
    }
    mysqli_close($conn); 
}
if(isset($_POST['delete']) && isset($_POST['namedb'])){
    $namedb = $_POST['namedb'];
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    // Create database
    $sql = "DROP DATABASE $namedb";
    if (mysqli_query($conn, $sql)) {
    echo "Database delete successfully";
    } else {
    echo "Error delete database: " . mysqli_error($conn);
    }
    mysqli_close($conn); 
}
?>