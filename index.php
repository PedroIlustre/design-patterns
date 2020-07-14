<?php

use Classes\{CalculadoraDeImpostos,Orcamento,ICMS,ISS};

spl_autoload_register(function ($class) {
    require_once($class . '.php');
});

$reforma = new Orcamento(500);

$calculadora = new CalculadoraDeImpostos();
echo 'ICMS <br>';
echo $calculadora->calcula($reforma, new ICMS());
echo '<br>';
echo 'ISS<br>';
echo $calculadora->calcula($reforma, new ISS());