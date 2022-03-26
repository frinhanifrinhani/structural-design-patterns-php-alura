<?php

use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistoOrcamento;

require 'vendor/autoload.php';

$registroOrcamento = new RegistoOrcamento(new CurlHttpAdapter());
$registroOrcamento->registrar(new Orcamento());

