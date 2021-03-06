<?php
/**
 * public -> heryerden erisim
 * protected -> kendi sınıfın(class) və miras sınıf(class) erişim
 * provate -> kendi sinifi içinde erişim
 * 
 **/

class varlik {
    public $boy;
    public $kilo;
    public $yas;
    public $ad = "Tedy" ;

    function __construct(){
      //  echo "Salam ".$this->ad."<br>";
    }
    protected function qacmaq(){
        echo $this->ad.' qacar <br>';
    }

    public function gezmek(){
        echo $this->ad.' gezer <br>';
    }

    private function surmek(){
        echo $this->ad.' surer <br>';
    }

    public function __destruct(){
        $this->surmek();
      //  echo "Saq ol";
    }
}

class Hayvanlar extends varlik
{
           public function yemekyeme(){
            //    $this->surmek();
               echo $this->ad." yermek yiyer<br>";
           }
           public function qacmaq(){
            echo $this->ad.' suretli qacar <br>';
        }

}
$varlik1 = new varlik();
// $varlik1->surmek();

$varlik = new Hayvanlar();
$varlik->yemekyeme();
$varlik->qacmaq();



?>