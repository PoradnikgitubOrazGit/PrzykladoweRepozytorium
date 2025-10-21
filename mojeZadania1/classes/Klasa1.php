<?php
class Klasa1{
    public $liczba;
    public function czyLiczbaPodzielna($liczbka){
        $this->liczba = $liczbka;
        if($this->liczba % 9 == 0){
            echo $this->liczba." jest podzielna przez 9";
        } else{
            echo $this->liczba." nie jest podzielna przez 9";
        }
    }
}
?>