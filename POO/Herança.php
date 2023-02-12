<?php
class Post {
    private int $id;
    private int $likes = 0;

    public function setId($i){
        $this->id = $i;
    }

    public function getId() {
        return $this->id;
    }

    public function setLikes($i) {
        $this->likes = $i;
    }

    public function getLikes() {
        return $this->likes;
    }

}


// A classe foto herda tudo que tem a classe Post

class Foto extends Post {
    private $url;



    public function __construct($id){
            $this->setId($id);
    }

    public function setUrl($u) {
        $this->url = $u;
    }

    public function getUrl() {
        return $this->url;
    }
}


$foto = new Foto(20);
$foto->setLikes(12);
$foto->setUrl('www.minhaurl.com');


echo "Foto: #".$foto->getId()." - ".$foto->getLikes()." likes -  ".$foto->getUrl();
