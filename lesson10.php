<title>Lesson10</title>
<?php
/** */
/** */

class masin 
{
    public static $reng = "beyaz";
    public static $il = "2020";
    public static function beyaz(){
            echo "Beyaz masin";
           echo self::$reng;
          echo self::$il;
    }
    public function qara(){

    }
}
class neqliyyat extends masin{
    public function Qirmizi(){
      echo  parent::$reng;
    }
}

masin::beyaz();
neqliyyat::Qirmizi();

?>