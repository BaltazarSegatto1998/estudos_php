<?php
//tenta incluir se não for possivél mostra um aviso, mas continua executando o index.
include("teste.php");

//caso o arquivo não exista, ele não executa o index.
require("teste1.php");


//requere apenas uma vez.
require_once("teste.php");


?>
