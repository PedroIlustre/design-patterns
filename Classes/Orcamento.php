<?php

namespace Classes;

class Orcamento{
    private $valor;

    function __construct($novoValor) {
        $this->valor = $novoValor;
    }

    public function getValor(){
        return $this->valor();
    }

    public function setValor($valor){
        $this->valor = $valor;
    }
}