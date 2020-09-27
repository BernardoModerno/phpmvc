<?php

class Contato
{
    public function index()
    {
        echo "index do contato";
    }

    public function email($nome = '', $email = '', $cpf = '')
    {
        echo $nome."<br>".$email."<br>".$cpf;
    }

    public function telefone()
    {
        echo "37 98989-9999";
    }
}
