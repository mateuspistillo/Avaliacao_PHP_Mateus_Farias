<?php 

class Certidao extends Documento{
    protected $registroCertidao;
    protected $declarantes;
    protected $tipoCertidao;
    public static $cont;

    public function __construct($nomes, $tabeliao, $dataEmissao, $declarantes, $tipoCertidao)
    {
        parent::__construct($nomes, $tabeliao, $dataEmissao);
        self::$cont++;
        $this->registroCertidao = self::$cont;
        $this->declarantes = $declarantes;
        $this->tipoCertidao = $tipoCertidao;
    }  
}