<?php

abstract class Contrato extends Documento{
    private $registroContrato;
    private $testemunhas;
    private $objetoContrato;
    private $dataRegistro;

    public function __construct($nomes, $tabeliao, $dataEmissao, $registroContrato, $testemunhas, $objetoContrato, $dataRegistro)
    {
        parent::__construct($nomes, $tabeliao, $dataEmissao);
        $this->testemunhas = $testemunhas;
        $this->objetoContrato = $objetoContrato;
        $this->dataRegistro = $dataRegistro;
    }  
}