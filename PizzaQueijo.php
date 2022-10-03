<?php 

namespace padraoDecorator;

class PizzaQueijo extends Pizza{

    public function __construct(){ 
        $this->descricao = 'Deliciosa Pizza de Queijo';
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getPreco(): float
    {
        return 28;
    }
 
}