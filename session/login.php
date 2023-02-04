<?php 
if(isset($_POST['email'])) {

    include("conexao.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code = "SELECT * FROM senhas where email = '$email' LIMIT 1";
    $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);

    $usuario = $sql_exec->fetch_assoc();

    if (password_verify($senha, $usuario['senha'])) {
        if(!isset($_SESSION)) {
            session_start();
            $_SESSION['usuario'] = $usuario['id'];
            header("Location:index.php");
        }
    } else {
        echo "Falha ao logar!";
    }

   

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
        <h1>Login</h1>
        <p>
            <label for="">E-mail</label>
        <input type="text" name="email"
        </p>
        <p>
        <label for="">Senha</label>
        <input type="text" name="senha" id=""> <br>
        </p>
        <button type="submit">Logar</button>
    </form>
</body>
</html>

