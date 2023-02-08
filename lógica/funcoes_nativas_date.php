<?php

echo time() . "</br>";

echo date('d/m/Y H:i:s') . "</br>";

echo date('Y/m/d H:i:s') . "</br>";




$data = '2023-02-08';
$time = strtotime($data);
echo date('d/m/Y', $time);
