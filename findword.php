<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Ascii</title>
</head>
<body>
    <form method="GET">
        <center>
        <h1>HW2-2 : Find Ascii</h1>
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

            foreach ($strArray as $key=>$value){
                if(($key > 64 && $key < 91) ||($key > 96 && $key < 123)){
                    echo chr($key)." : Ascii = $key<br>" ;
                }
            }
        }
    ?>
</body>
</html>