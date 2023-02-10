<?php
$array = [
    'nome' => 'Sidnei',
    'idade' => 25,
    'empresa' => 'rosh',
    'profissao' => 'Desenvolvedor'

];

$chaves = array_keys($array);

$valores = array_values($array);

?>

<table border="1">
    <?php foreach($array as $chave => $valor): ?>
        <tr>
            <td><?php echo $chave; ?></td>
            <td><?php echo $valor; ?></td>
        </tr>

    <?php endforeach;?>
</table>
