<?php

$lista = ['nome1', 'nome2', 'nome3', 'nome4'];

$alunos = ['pedro','paulo','joão','marcia','elen'];
$alunosAprovados = ['pedro','marcia','elen'];
$reprovados = array_diff($alunos,$alunosAprovados);
$numeros = [10,20,30,40,50,100,200,300];
$nomes = ['sidnei','baltazar','segatto'];


$filtrados = array_filter($numeros, function($item){
	if($item < 30) {
		return true;
	} else {
		return false;
	}
});



$dobrados = array_map(function($item){
	return $item * 2;
}, $numeros);


if(in_array('nome1', $lista)) {
		echo 'Exite';
} else {
	echo 'Não existe';
}


echo "Total de itens do array: " . count($lista). "</br>";
echo "Alunos reprovados " . print_r($reprovados). "</br>";
echo "Filtrados ".print_r($filtrados). "</br>";
echo "Map " . print_r($dobrados). "</br>";



array_pop($numeros);
array_shift($numeros);

echo "Remove o ultimo item " . print_r($numeros). "</br>";
echo "Remove o primeiro item " . print_r($numeros). "</br>";




$pos = array_search(200, $numeros);
echo "Posição do item no array " . $pos. "</br>";

sort($numeros);
echo "Ordena os numero em ordem crescente
do array " . print_r($numeros) . "</br>";

rsort($numeros);
echo "Ordena os numero em ordem decrescente
do array " . print_r($numeros) . "</br>";


asort($numeros);
echo "Ordena os numero em ordem crescente mantendo a chave (index)
do array " . print_r($numeros) . "</br>";

arsort($numeros);
echo "Ordena os numero em ordem decrescente mantendo a chave (index)
do array " . print_r($numeros) . "</br>";


$nome = implode(' ', $nomes);

echo $nome;
