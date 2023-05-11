<?php
class tempatPensil{
    public $merk = "merk",
           $warna = "warna",
           $motif = "motif";

    public function inputDataTempat($merk, $warna, $motif){
        $this->merk=$merk;
        $this->warna=$warna;
        $this->motif=$motif;
   }
   public function getcetak(){
        echo "Merk tempat pensil : ".$this->merk;
        echo "<br>";
        echo "Warna tempat pensil :" .$this->warna;
        echo "<br>";
        echo "Motif tempat pensil :" .$this->motif;
        echo "<br>";
        echo "===================";
        echo "<br>";
   }
}
$tempatPensil = new tempatPensil();
$tempatPensil->inputDataTempat("Miniso", "Merah", "Marvel");
$tempatPensil->getcetak();

?>