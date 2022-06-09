<?php
class UsuarioDAO {
    function fetchByLoginAndSenha($login, $senha) {
        try {
            $conn = $this->connect();
            $query = "SELECT nome, login, senha FROM usuarios where login = :login and senha = :senha";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();

            $data = $stmt->fetchAll();

            if (empty($data)) {
                throw new Exception("Não encontrado");
            }

            $returnedUser = new Usuario($data[0]["nome"], $data[0]["login"], $data[0]["senha"]);

            return $returnedUser;
        } catch (PDOException $e) {
            throw new Exception("Ocorreu um erro interno e não foi possível buscar");
        }
    }

    function save($usuario) {
        try {
            $conn = $this->connect();
        
            $query = "INSERT INTO usuarios (nome, login, senha) VALUES (:nome, :login, :senha);";
            $stmt = $conn->prepare($query);

            $nome = $usuario->getNome();
            $login = $usuario->getLogin();
            $senha = $usuario->getSenha();

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();

        } catch (PDOException $e) {
            throw new Exception("Ocorreu um erro interno e não foi possível inserir");
        }
    }

    private function connect() {
        return new PDO('mysql:host=localhost;dbname=pweb', "root", "");
    }

}