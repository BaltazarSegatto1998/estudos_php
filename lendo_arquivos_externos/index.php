<?php
$texto = file_get_contents('texto.txt');
$texto = explode("\n", $texto);


echo "PARAGRAFOS: ".count($texto);
