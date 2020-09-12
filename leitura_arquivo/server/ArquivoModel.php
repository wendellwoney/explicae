<?php


class ArquivoModel
{
    private $_arquivo;
    private $_leitura;

    public function __construct($arquivo)
    {
        $this->_arquivo = $arquivo;
        $this->carregaArquivo();
    }

    private function carregaArquivo()
    {
        $arquivo = fopen($this->_arquivo, "r") or die("Não é possivel ler o arquivo selecionado!");
        while(!feof($arquivo)) {
            $this->_leitura .= fgets($arquivo) . "<br>";
        }
        fclose($arquivo);
    }

    public function ler()
    {
        return $this->_leitura;
    }
}