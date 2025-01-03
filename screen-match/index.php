<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem vindo(a) ao ScreenMatch\n";

$filme = new Filme();
$filme->nome = "Thor Ragnarok";
$filme->anoDelancamento = 2021;
$filme->genero = "Super-Heroi";

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo $filme->media();