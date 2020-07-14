<?php
namespace Classes;

class CalculadoraDeImpostos {
    public function calculaICMS(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.5;
    }
}