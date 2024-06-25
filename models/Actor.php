<?php
class Actor
{
    private string $nome;
    private string $cognome;

    public function __construct(string $_nome, string $_cognome)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
    }


}