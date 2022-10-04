<?php

use padraoDecorator\BordaRequeijao;
use padraoDecorator\MassaIntegral;
use padraoDecorator\PizzaCalabresa;
use padraoDecorator\PizzaQueijo;

require_once "vendor/autoload.php";

$pizzaQueijo = new PizzaQueijo();
$BordaRequeijao = new BordaRequeijao($pizzaQueijo);
$BordaRequeijao->setPrecoBorda(10);

echo $BordaRequeijao->getDescricao(). " valor de R$". $BordaRequeijao->getPreco();
echo "<br/>";

$pizzaCalabresa = new PizzaCalabresa();
$massaIntegral = new MassaIntegral($BordaRequeijao);
$massaIntegral->setPrecoMassa(10);

echo $massaIntegral->getDescricao(). " - Total de R$". $massaIntegral->getPreco();
