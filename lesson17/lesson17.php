<title>Lesson17</title>
<?php
/** */
/** */

class masin {

    public $marka;
    public $model;
    public $renk;

    public function marka_yaz($marka){
        echo $marka;
    }
    public function model_yaz($model){
        echo $model;
    }

    public function renk_yaz($renk){
        echo $renk;
    }

    public function yaz(){
        return $this->marka.$this->model.$this->renk;
    }

}

$masin = new masin();
echo $masin->marka_yaz("Mercedes")->model_yaz("GLA 200 ")->renk_yaz("Beyaz")->yaz();
?>