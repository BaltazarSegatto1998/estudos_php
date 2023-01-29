<?php 
if(isset($_POST['nome'])) {
    echo "<p>Bem vindo " . $_POST['nome'] . "</p>";
    $vencimento = time() + (30 * 24 * 60 * 60); // 30 dias
    setcookie("nome", $_POST['nome'], $vencimento );
    header("Location:boasvindas.php");
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

    <form action="" method="POST">
        <p>Qual é o seu nome?</p>
        <input type="text" name="nome">
        <button type="submit">Salvar</button>
    </form>
  

</body>
</html>
