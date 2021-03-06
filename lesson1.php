<?php

class insan {
    public $boy;
    public $kilo;
    public $yas;

    public function qacmaq(){
        echo 'Insan qacar <br>';
    }

    public function gezmek(){
        echo 'Insan gezer <br>';
    }

    public function surmek(){
        echo 'Insan surer <br>';
    }
}

$azer = new insan();
$azer->qacmaq();
$azer->gezmek();
$azer->surmek();

?>