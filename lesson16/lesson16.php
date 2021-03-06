<title>Lesson13</title>
<?php
/** */
/** */

    function __autoload($class){
        require_once $class.".php";
    }

  if (class_exists("class2")) {



      $sinif = new class2();

    if (property_exists("class2", "ad")) {
        echo $sinif->ad;
    }else {
        echo "bele ozellik yox<br>";
    }



      if(method_exists("class2", "test2"))
      {
          $sinif->test2();
      }else{
          echo "Metod yoxdur!";
      }
  }else{
      echo "yox";
  }
?>