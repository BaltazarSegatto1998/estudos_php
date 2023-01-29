<?php

//timestamp 

// echo time();



// echo strtotime("2020-02-21");

// echo (time() - strtotime("2021-01-25")) / 86400;


// echo date("d/m/Y", strtotime("1980-01-01"));


//Recursos utilizaveis em projetos diarios

//Mostrar a data atual em timestap

echo "<p>Mostrar a data atual em timestap:" . time() . "</p>";

//Transformar timestamp em data atual

echo "<p>Transformar timestamp em data atual:" . date("d/m/Y",time()) . "</p>";


//Transformar a data atual em timestap

echo "<p>Transformar a data atual em timestap:" . strtotime("2023-01-29") . "</p>";

//Somar 10 dias em uma data
$data = "2021-02-05";
$nova_data = strtotime($data) + (86400 * 100);
echo "<p>Somar 10 dias em uma data:" . date("d/m/Y",$nova_data) . "</p>";

//Subtrair 10 dias em uma data

$data = "2021-02-05";
$nova_data = strtotime($data) - (86400 * 10);
echo "<p>Subtrair 10 dias em uma data:" . date("d/m/Y",$nova_data) . "</p>";

//Converter o timestamp pro banco de dados
echo "<p>Converter o timestamp pro banco de dados:" . date("Y/m/d H:i:s",time()) . "</p>";

//Descobrir dia da semana de uma data

echo "<p>Descobrir dia da semana de uma data:" . date("D",$nova_data) . "</p>";





?>