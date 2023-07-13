<?php

namespace traits;

trait ClearCPF
{
    public  function clearCPF(string $cpf):string
    {

        $cpf = trim($cpf);
        $cpf = str_replace(array('.','-','/'), "", $cpf);
            return $cpf;
    }
}