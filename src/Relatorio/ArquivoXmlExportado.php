<?php


namespace Alura\DesignPattern\Relatorio;


class ArquivoXmlExportado implements ArquivoExportado
{

    private string $nomeElementoPai;

    public function __construct(string $nomeElementoPai)
    {
        $this->nomeElementoPai = $nomeElementoPai;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $elementoXml = new \SimpleXMLElement("<{$this->nomeElementoPai  } />");

        foreach ($conteudoExportado->conteudo() as $item => $value ){
            $elementoXml->addChild($item,$value);
        }

        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml_');
        $elementoXml->asXML($caminhoArquivo);

        return $caminhoArquivo;

    }
}