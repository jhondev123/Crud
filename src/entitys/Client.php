<?php

class Client
{
    public function __construct(public string $nome,public string $cpf,public int $tipoConta)
    {
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getTipoConta()
    {
        return $this->tipoConta;
    }
}