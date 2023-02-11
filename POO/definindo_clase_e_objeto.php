<?php

// Classe define as propriedades(caracteristica) de um objeto

class Post {
    public $likes = 0;
    public $coments = [];
    public $author;
}


$post1 = new Post();
$post1->likes = 3;

$post2 = new Post();
$post2-> likes = 10;



echo "POST 1: ".$post1->likes."<br>";

echo "POST 2: ".$post2->likes."<br>";

