<title>Lesson13</title>
<?php
/** */
/** */

    function __autoload($class){
        require_once $class.".php";
    }

  if (class_exists("class2")) {
      $sinif = new class2();
      $sinif->test2();
  }else{
      echo "yox";
  }
?>