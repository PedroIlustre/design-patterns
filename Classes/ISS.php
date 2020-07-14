<?php
namespace Classes;

class ISS implements Imposto{
    public function calcula($Orcamento){
        return $Orcamento->getValor() * 0.1;
    }
}