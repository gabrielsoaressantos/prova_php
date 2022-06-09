<?php

class Usuario {
    private $nome, $login, $senha;

    function __construct($nome, $login, $senha) {
        if ($nome == "" or $login == "" or $senha == "") {
            throw new Exception("Este usuário é inválido. Todo usuário deve possuir nome, login e senha");
        }
    
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
    }

    function getNome() {
        return $this->nome;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

}