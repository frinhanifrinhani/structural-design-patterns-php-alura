<?php

use Alura\DesignPattern\DadosExtinsecosPedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

require 'vendor/autoload.php';

$pedidos = [];
$dados = new DadosExtinsecosPedido( md5('nome'), new DateTimeImmutable());

for ($i = 0; $i < 10000; $i++){
    $pedido = new Pedido();
    $pedido->dados = $dados;
    $pedido->orcamento = new Orcamento();

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();
