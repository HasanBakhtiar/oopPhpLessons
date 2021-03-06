<?php

class insan {
    public $boy;
    public $kilo;
    public $yas;
    public $ad = "Azer";

    public function qacmaq(){
        echo $this->ad.' qacar <br>';
    }

    public function gezmek(){
        echo $this->ad.' gezer <br>';
    }

    public function surmek(){
        echo $this->ad.' surer <br>';
    }
}

$azer = new insan();
$azer->qacmaq();
$azer->gezmek();
$azer->surmek();

?>