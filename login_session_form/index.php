<?php
session_start();
if (isset($_SESSION['nome'])) {
    echo "Seu Nome é: " . $_SESSION['nome'] . " seja bem vindo(a)!"."<br>";
    echo "<a href='deslogar.php'>Clique aqui para deslogar <a/>";
}  else {
    header("Location:login.php");
    exit();
}

?>



