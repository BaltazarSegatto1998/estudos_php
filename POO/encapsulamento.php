<?php

// Classe define as propriedades(caracteristica) de um objeto
// Classes possuem dois itens, métodos e propriedades



class Post {
    public int $id;
    public int $likes = 0;
    public array $coments = [];
    private string $author;


    // ele executa toda vez que um objeto novo é criado (primeiro método executado)
    public function __construct($postId) {
        $this->id = $postId;
        $this->likes = 12 * $postId;
    }

    public function aumentarLike() {
        $this->likes++;
    }

    public function setAuthor($nome) {
       if(strlen($nome) > 2) {
        $this->author = ucfirst($nome);  
       }
    }

    public function getAuthor() {
        return $this->author ?? 'Visitante';
    }
}

// Objeto é um item real criado a partir de uma modelo(classe).
$post1 = new Post(1);
$post1->setAuthor('sidnei');

$post2 = new Post(2);
$post2->setAuthor('elaine');



//Propriedades são as caracteristicas que uma classe irá ter

//Métodos são funções executadas dentro do objeto 

//Encapsulamento nos permite proteger as propriedades, e manipular os dados via métodos.

echo "POST 1: ".$post1->likes. " likes "." -author ".$post1->getAuthor()."<br>";

echo "POST 2: ".$post2->likes. " likes "." -author ".$post2->getAuthor()."<br>";

