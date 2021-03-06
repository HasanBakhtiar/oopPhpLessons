<?php

class insan {
    public $boy;
    public $kilo;
    public $yas;
    public $ad = "Azer";

    function __construct(){
        echo "Salam ".$this->ad."<br>";
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

$azer = new insan();
$azer->qacmaq();


?>