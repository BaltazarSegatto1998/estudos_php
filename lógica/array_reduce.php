<?php

$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'Beltrano', 'sexo' => 'F', 'nota' => 10],
    ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
    ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9],

];

function contar_m($subtotal, $item ) {
    if($item['sexo'] === 'M') {
        $subtotal++;
    }

    return $subtotal;
}


$total_m = array_reduce($pessoas, 'contar_m');

function soma_m($subtotal, $item) {
    if($item['sexo'] === 'M') {
        $subtotal += $item['nota'];
    }

    return $subtotal;

}


$soma_m = array_reduce($pessoas, 'soma_m');


$media_m = $soma_m / $total_m;

echo "Total de homens na turma: " . $total_m . "<br>";

echo "Nota total de homens: " . $soma_m . "<br>";

echo "Media de homens: " . $media_m . "<br>";
