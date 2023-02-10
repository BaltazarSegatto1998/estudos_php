<?php

$nomes = file_get_contents('texto.txt');
$nomes = explode("\n", $nomes);

$addNovoNome = filter_input(INPUT_GET, 'novonome', FILTER_SANITIZE_SPECIAL_CHARS);



$addNovoNomeCharacter = strlen($addNovoNome); 

if ($addNovoNomeCharacter > 0) {
    $addNaLista = file_get_contents('texto.txt');
    $addNaLista .= "\n $addNovoNome";
    file_put_contents('texto.txt', $addNaLista);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivos</title>
</head>
<body>

<form action="">
<label for="">
    Novo Nome
    <input name="novonome"  type="text">
    <button type="submit">Adicionar</button>
</label>
</form>

<br><br>


<h1>Lista de Nomes </h1>

<?php 
foreach($nomes as $nome) {

    echo "<li>" . $nome . "</li>";

};

?>
    
</body>
</html>


