<title>Lesson13</title>
<?php
/** */
/** */

    function __autoload($class){
        require_once $class.".php";
    }

    
    $class1 = new class1();
    $class2 = new class2();
    $class1->test1();
 
?>