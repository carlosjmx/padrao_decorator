<?php 

namespace padraoDecorator;

class PizzaCalabresa extends Pizza {

    public function __construct(){
        $this->descricao = "deliciosa pizza de calabresa";
    }
    
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getPreco(): float
    {
        return 25;
    }
 
}