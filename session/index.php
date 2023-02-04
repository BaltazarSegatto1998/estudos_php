<?php 
  include('conexao.php');
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['usuario'])) {
    die('Você não esta logado. <a href="login.php">Clique aqui</a> para logar');
}


if(isset($_POST['email'])) {
  

    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $mysqli->query("INSERT INTO senhas (email,senha) VALUES ('$email','$senha') ");
}

$id = $_SESSION['usuario'];
$sql_query = $mysqli->query("SELECT * FROM senhas WHERE id = '$id'") or die($mysqli->error);
$usuario = $sql_query->fetch_assoc();

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
    <p>Bem Vindo <?php echo $usuario['nome']  ?></p>
    <h1>Cadastro de Usuários</h1>
    <form action="" method="post">
        <input placeholder="Email" type="text" name="email" id="">
        <input placeholder="Senha" type="text" name="senha" id="">
        <button type="submit">Cadastrar senha</button>
    </form>
    <p><a href="logout.php">Sair</a></p>
    
</body>
</html>
