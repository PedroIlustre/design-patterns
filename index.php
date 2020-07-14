<?php

use Classes\{CalculadoraDeImpostos,Orcamento};

spl_autoload_register(function ($class) {
    require_once($class . '.php');
});

$reforma = new Orcamento(500);
$calculadora = new CalculadoraDeImpostos();
$calculadora->calculaICMS($reforma);