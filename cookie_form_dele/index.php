<?php
session_start();
if ($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1><?php if(isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
    echo $nome;

}; ?> </h1>


<a href="apagar.php">Deletar Cookie</a>

<br><br>

<form method="GET" action="dados.php">

    <label for="">Nome
    <input type="text" name="nome" id="">
    </label>


    <br>
    <br>

    <label for="">Email
    <input type="text" name="email" id="">
    </label>


    <br>
    <br>


    <label for="">Idade
    <input type="text" name="idade" id="">
    </label>

        <input type="submit" value="Enviar">

</form>
    
</body>
</html>
