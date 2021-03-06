<title>Lesson12</title>
<?php
/** */
/** */



class Salamlama {
    public function Salam($ad){
        echo "Salam ". $ad. "<br>";
    } 
}

class English extends Salamlama{
    public function Salam($ad){
        echo "Hello ". $ad."<br>"; 

    }
}


class Espanola extends Salamlama{
    public function Salam($ad){
        echo "!Hola ".$ad."<br>"; 

    }
}



class Turkce extends Salamlama{
    public function Salam($ad){
        echo "Merhaba ".$ad."<br>"; 

    }
}


$azerbaycanca = new Salamlama();
$azerbaycanca->Salam("Eldar");

$english = new English();
$english->Salam("Eldar");

$espanola = new Espanola();
$espanola->Salam("Eldar");

$turkce = new Turkce();
$turkce->Salam("Eldar");
?>