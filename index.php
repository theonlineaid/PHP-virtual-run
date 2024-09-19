<?php
    $x = 5;
    $y = 10;


    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    
    echo "--------------------------\n";
    // echo($GLOBALS['y']);

    echo cars[0];
    echo "\n";

    echo "--------------------------\n";



    define("greeting", "Welcome to W3Schools.com!");
    function myTest() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        echo greeting;
        echo "\n";
    } 

    myTest();
    
    echo "Hello, Docker PHP! \n";


    class MyClass {
        const MY_CONST = 'constant value';
        public static $myStaticProperty = 'static value';
    }
    
    
    echo MyClass::MY_CONST;
    echo "\n";
    echo MyClass::$myStaticProperty; 

    echo "--------------------------\n";


    echo __DIR__;


    echo "--------------------------\n";

    $i = 0;
    while ($i < 6) {
        $i++;
        if ($i == 3) continue;
        echo $i;
    }

    echo("hi there\n");


    $colors = array("red", "green", "blue", "yellow"); 

    foreach ($colors as $x) {
        echo "$x \n";
    }
?>