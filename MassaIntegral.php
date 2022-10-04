<?php 

namespace padraoDecorator;

class MassaIntegral extends AcrescimoDecorator{

    private float $precoMassa;

    public function setPrecoMassa(float $preco){

        $this->precoMassa = $preco;

    }
 
    
    public function getDescricao(): string
    {
        return $this->pizza->getDescricao() ." + Massa integral ";
    }

    public function getPreco(): float
    {
        return $this->pizza->getPreco() + $this->precoMassa;
    }
}