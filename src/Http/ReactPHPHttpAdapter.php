<?php


namespace Alura\DesignPattern\Http;


class ReactPHPHttpAdapter implements HttpAdapter
{

    public function post(string $url, array $data = []): void
    {
        // instaciar o react php
        // preparar os dados
        // fazer a requisição

        echo "React PHP";
    }
}