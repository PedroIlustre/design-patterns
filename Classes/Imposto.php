<?php
namespace Classes;

interface Imposto {
    public function calcula(Orcamento $Orcamento);
}