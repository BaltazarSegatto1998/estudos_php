<?php

// Método estatico, criamos dentro da classe, um método independente

class Matematatica{
    
    public static string $nome = 'Sidnei';
    public static function somar($x, $y) {
        return $x + $y;
    }


}

//Instanciar a classe (criar um objeto)

//Usamos a func somar sem criar um objeto = método estatico

echo Matematatica::somar(20,30)."<br>";

echo Matematatica::$nome;
