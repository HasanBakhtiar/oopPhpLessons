<title>Lesson11</title>
<?php
/** */
/** */


abstract class Salamlama{
    public function Salam($ad){
                echo "Salam". $ad;
    }
    public function sagol($ad){
                echo "Sağ ol". $ad;
    }
}

// $salamla = new Salamlama(); -> olmaz

class Salamlama2 extends Salamlama {



}

$salamla = new Salamlama2();
$salamla->Salam(" Eldar");
$salamla->sagol(" Eldar");




?>