<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};
use Alura\DesignPattern\Relatorio\{OrcamentoExportado,PedidosExportado};
use Alura\DesignPattern\Relatorio\{ArquivoXmlExportado, ArquivoZipExportado};


/** exportar orcamento xml
$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoXmlExportado = new ArquivoXmlExportado('orcamento');

echo $orcamentoXmlExportado->salvar($orcamentoExportado);

*/


$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoZipExportado = new ArquivoZipExportado('orcamento.array');

echo $orcamentoZipExportado->salvar($orcamentoExportado);