<?php 
require '../model/Usuario.class.php';
require '../model/UsuarioDAO.class.php';

class UsuarioController {
    function logar() {
        try {
            $dao = new UsuarioDAO();
            $usuario = $dao->fetchByLoginAndSenha($_POST['login'], $_POST['senha']);
            echo $usuario->getNome() . " logado";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    function cadastrar() {
        try {
            $usuario = new Usuario($_POST['nome'], $_POST['login'], $_POST['senha']);
            echo $usuario->getNome();
            $dao = new UsuarioDAO();
            $dao->save($usuario);
            echo $usuario->getNome()." salvo com sucesso";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

