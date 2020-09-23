<?php

abstract class Documento {
    protected $nomes;
    protected $tabeliao;
    protected $cartorio;
    protected $dataEmissao;

    public function __construct($nomes, $tabeliao, $dataEmissao)
    {
        $this->nomes = $nomes;
        $this->tabeliao = $tabeliao;
        $this->dataEmissao = $dataEmissao;
    }    

    public function registrar (Documento $documento){
        echo 'Nome do Tabelião: ' . $this->nome . '<br>';
    }
}