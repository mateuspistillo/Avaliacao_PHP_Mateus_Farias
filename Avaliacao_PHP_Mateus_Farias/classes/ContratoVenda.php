<?php

final class ContratoVenda extends Contrato{

    public function __construct($nomes, $tabeliao, $dataEmissao, $registroContrato, $testemunhas, $objetoContrato, $dataRegistro)
    {
        parent::__construct($nomes, $tabeliao, $dataEmissao, $registroContrato, $testemunhas, $objetoContrato, $dataRegistro);
    }
}