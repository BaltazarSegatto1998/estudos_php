<?php
$array = [
    'nome' => 'Sidnei',
    'idade' => 25,
    'empresa' => 'rosh',
    'profissao' => 'Desenvolvedor'

];

if (key_exists('idade', $array)) {
    $idade = $array['idade'];
    echo $idade . " anos";

} else {
    echo "Informação não encontrada";
}
