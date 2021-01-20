<?php
    $x = 100;
    $y = 10;
    $operator = "+";
    if ($operator == "+"){
        plus();
    }
    else if ($operator == "-"){
        sub();
    }
    else if ($operator == "*"){
        mul();
    }
    else if ($operator == "/"){
        div();
    }
    function plus()
        {
            echo "x + y = ".$GLOBALS['x'] + $GLOBALS['y']; ;
        }
    function sub()
        {
            echo "x - y = ".$GLOBALS['x'] - $GLOBALS['y']; ;
        }
    function mul()
        {
            echo "x * y = ".$GLOBALS['x'] * $GLOBALS['y']; ;
        }
    function div()
        {
            echo "x / y = ".$GLOBALS['x'] / $GLOBALS['y']; ;
        }
    /*plus();
    echo "<br>" ;

    sub();
    echo "<br>" ;

    mul();
    echo "<br>" ;

    div();*/
?>