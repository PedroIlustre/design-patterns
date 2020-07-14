<?php
namespace Classes;

class ICMS implements Imposto{
    public function calcula($Orcamento){
        return $Orcamento->getValor() * 0.05;
    }
}