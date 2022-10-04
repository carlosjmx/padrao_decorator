<?php 

namespace padraoDecorator;

class BordaRequeijao extends AcrescimoDecorator{

    private float $precoBorda;

    public function setPrecoBorda(float $preco){

        $this->precoBorda = $preco;
    }
  
    public function getDescricao(): string
    {
        return $this->pizza->getDescricao().' + borda recheada de requeijão'; 
    }

    public function getPreco(): float
    {
        return $this->pizza->getPreco() + $this->precoBorda;
    }
 
}