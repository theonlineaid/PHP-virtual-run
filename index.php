<?php
    $x = 5;
    $y = 10;

    echo  $GLOBALS['y'];

    echo "--------------------------";


    function myTest() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    } 

    myTest();
    echo $y;
    echo "Hello, Docker PHP!";
?>

