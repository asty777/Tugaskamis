<?php

class favorite{
    public $taylor;
    private $album;
    protected $song;

    public function setArtist($taylor){
        $this->taylor=$taylor;
    
    }

   public function setAlbum($album){
        $this->album=$album;
    }
    
    public function setSong($song){
        $this->song=$song;
    }

    public function getArtist(){
        return $this->taylor;
    }

    public function getAlbum(){
        return $this->album;
    }

    public function getSong(){
        return $this->song;
    }

}
$favorite = new favorite;
$favorite->setArtist("Taylor Swift");
$favorite->setAlbum("Lover");
$favorite->setSong("Daylight");

echo "My Favorite Artist is "  . $favorite->getArtist();
echo "<br>";
echo "My favorite album from her is " . $favorite->getAlbum();
echo "<br>";
echo "And my favorite song from this album is " . $favorite->getSong();






?>