<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Character</title>
</head>
<body>
    <form method="GET">
        <center>
        <h1>HW2-1 : Find Character</h1>
        Your Text: <input type="text" name="data" id="data"><br><br>  
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Clear">
        </center>
    </form>
    <?php
        if(isset($_GET["submit"])){
            echo "<center><h2>Count Char in Sentence</h2>" ;
            $data = $_GET["data"];
            $str = $data;
            $strArray = count_chars($str,1);

            foreach ($strArray as $key=>$value)
            {
                if($key == 32){
                    echo "Space = ".$value." , ";
                }
                else echo chr($key)." = $value, ";
                echo "<br>";
            }
        }
    ?>
</body>
</html>