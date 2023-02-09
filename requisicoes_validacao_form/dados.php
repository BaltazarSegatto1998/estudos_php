<?php
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_GET, 'idade', FILTER_VALIDATE_INT);



if ($nome && $email && $idade) {
    echo 'NOME: ' . $nome . '<br/>';
    echo 'EMAIL: ' . $email . '<br/>';
    echo 'IDADE: ' . $idade . '<br/>';

} else {
    header("Location:index.php");
    exit;
}



?>
