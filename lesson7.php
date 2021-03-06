<?php

class varlik {
    public $boy;
    public $kilo;
    public $yas;
    public $ad = "Tedy" ;

    function __construct(){
      //  echo "Salam ".$this->ad."<br>";
    }
    public function qacmaq(){
        echo $this->ad.' qacar <br>';
    }

    public function gezmek(){
        echo $this->ad.' gezer <br>';
    }

    public function surmek(){
        echo $this->ad.' surer <br>';
    }

    public function __destruct(){
        echo "Saq ol";
    }
}

class Hayvanlar extends varlik
{
           public function yemekyeme(){
               echo $this->ad." yermek yiyer<br>";
           }
           public function qacmaq(){
            echo $this->ad.' suretli qacar <br>';
        }

}
$varlik1 = new varlik();
$varlik1->qacmaq();

$varlik = new Hayvanlar();
$varlik->yemekyeme();
$varlik->qacmaq();



?>