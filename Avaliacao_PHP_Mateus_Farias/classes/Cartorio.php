<?php 

class Cartorio {
    private $nomeCartorio;
    private $tabeliao;

    public function __costruct($nomeCartorio, $tabeliao)
    {
        $this->nomeCartorio = $nomeCartorio;
        $this->tabeliao = $tabeliao;
    }

    public function emitir($documento)
    {
        return 'Documento emitido';
    }
}