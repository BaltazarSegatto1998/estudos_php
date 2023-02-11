<?php

// Classe define as propriedades(caracteristica) de um objeto
// Classes possuem dois itens, métodos e propriedades

class Post {
    public $likes = 0;
    public $coments = [];
    public $author;

    public function aumentarLike() {
        $this->likes++;
    }
}

// Objeto é um item real criado a partir de uma modelo(classe).
$post1 = new Post();
$post1->aumentarLike();


$post2 = new Post();
$post2->aumentarLike();


//Propriedades são as caracteristicas que uma classe irá ter

//Métodos são funções executadas dentro do objeto 

echo "POST 1: ".$post1->likes."<br>";

echo "POST 2: ".$post2->likes."<br>";

