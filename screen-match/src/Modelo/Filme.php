<?php

class Filme {
    private string $nome;
    private int $anoDelancamento;
    private string $genero;
    private float $nota;
    private array $notas =  [];

    function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);

        return $somaNotas / $quantidadeDeNotas;
    }
}