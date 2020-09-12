<?php


class LoteriaModel
{
    public $_totalNumeros;

    public function __construct($totalNumeros = 6)
    {
        $this->_totalNumeros = $totalNumeros;
    }

    public function sortrear()
    {
        return self::numeros();
    }

    public function aposta($quantidade = 1)
    {
        $apostas = [];
        for ($i = 0; $i < $quantidade; $i++) {
            $saida = false;
            do{
                $aposta = self::numeros();
                if(!in_array($aposta, $apostas)) {
                    $saida = true;
                }
            }while (!$saida);
            $apostas[] = $aposta;
        }

        return $apostas;
    }

    private function numeros()
    {
        $arrayNumeros = [];
        for ($i = 0; $i < $this->_totalNumeros; $i++) {
            $saida = false;
            do {
                $numeroSorteado = rand(1, 60);
                if(!in_array($numeroSorteado, $arrayNumeros)) {
                    $saida = true;
                }
            } while (!$saida);

            $arrayNumeros[] = $numeroSorteado;
        }
        sort($arrayNumeros);
        return $arrayNumeros;
    }
}
