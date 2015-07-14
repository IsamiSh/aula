<?php

function somar($x, $y) {
    echo 'iniciou';
    RETURN $x+$y."<br>";
    echo 'terminou';
}

$valor = somar(10, 2);
echo $valor;

$array = [1, 2, 3, 5, 6, 8, 90];

$nome = 'Eduardo';

$function = function($x) use($nome) {
    echo $x."<br>";
    echo $nome."<br>";
};

array_walk($array, $function);
