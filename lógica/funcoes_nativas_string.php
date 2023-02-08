<?php

$nomeSujo = '          Sidnei        baltazar  ';
$nomeLimpo = trim($nomeSujo);
$nomeAlterado = str_replace('Baltazar', 'Junior', $nomeSujo);
$nomeApenasUmaParte = substr($nomeLimpo, 0, 5);
$posicao = strpos($nomeLimpo, 'b');
$nomes = explode(' ', $nomeLimpo);
$numero = 14982.12;





echo "Nome Sujo: ". strlen($nomeSujo). "<br/>";
echo "Nome Limpo: ". strlen($nomeLimpo). "<br/>";
echo "Nome Limpo Lower: ". strtolower($nomeLimpo). "<br/>";
echo "Nome Limpo Upper: ". strtoupper($nomeLimpo). "<br/>";
echo "Nome Alterado: ". strtoupper($nomeAlterado). "<br/>";
echo "Apenas uma parte do nome: ". $nomeApenasUmaParte. "<br/>";
echo "Apenas a posição da letra: ". $posicao. "<br/>";
echo "Apenas a primeira maiúscula : ". ucfirst($nomeLimpo). "<br/>";
echo "Apenas as primeira maiúscula : ". ucwords($nomeLimpo). "<br/>";
echo "Separar em arrays: " .print_r($nomes) . "<br/>";
echo "Formatar numero R$: " .number_format($numero, 2, ',', '.') . "<br/>";




if($posicao > -1) {
	echo "Achou";
} else {
	echo "Não achou";
}
