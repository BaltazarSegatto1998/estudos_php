<?php

// Classe define as propriedades(caracteristica) de um objeto
// Classes possuem dois itens, métodos e propriedades



class Post {
    public int $id;
    public int $likes = 0;
    public array $coments = [];
    public string $author;


    // ele executa toda vez que um objeto novo é criado (primeiro método executado)
    public function __construct($postId) {
        $this->id = $postId;
        $this->likes = 12 * $postId;
    }

    public function aumentarLike() {
        $this->likes++;
    }
}

// Objeto é um item real criado a partir de uma modelo(classe).
$post1 = new Post(1);

$post2 = new Post(2);



//Propriedades são as caracteristicas que uma classe irá ter

//Métodos são funções executadas dentro do objeto 

echo "POST 1: ".$post1->likes."<br>";

echo "POST 2: ".$post2->likes."<br>";

