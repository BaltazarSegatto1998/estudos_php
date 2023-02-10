<?php
print_r($_FILES);

$permidos = ['image/jpeg', 'image/jpg', 'image/png'];

if(in_array($_FILES['arquivo']['type'], $permitidos)) {
    $nome = md5(time() . rand(0, 10000)).'.jpg';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);
    echo 'Arquivo salvo';
} else {
    echo 'Arquivo não permitido!';
}


