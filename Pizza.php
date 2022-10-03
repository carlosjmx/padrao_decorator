<?php 

namespace padraoDecorator; 

abstract class Pizza {

    protected string $descricao = 'descrição não definida';
    protected float $preco;

    abstract public function getDescricao(): string;

    abstract public function getPreco(): float;
 
    
 
}