<?php
rename('teste.txt', 'teste2.txt'); //renomei


rename('teste2.txt', 'pasta/teste2.txt'); // move

copy('pasta/teste2.txt', 'teste.txt');
