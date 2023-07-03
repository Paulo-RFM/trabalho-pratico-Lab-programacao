<?php

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }


    public function create($post) {
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES 
        ('{$post['nome']}', '{$post['email']}', '{$post['senha']}')";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            echo "Erro: $sql<br>".$this->conn->error."<br>";
            return false;
        }
    }

    public function read() {
        $sql = "SELECT * FROM usuario";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function readPag($page) {
        $offset = $page * 5;
        $sql = "SELECT * FROM usuario LIMIT 10 OFFSET $offset";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function readOne($id) {
        $sql = "SELECT * FROM usuario WHERE ID=$id";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getNumRegistros() {
        $sql = "SELECT count(ID) as total FROM usuario";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function update($post) {
        $sql = "UPDATE usuario 
                SET Nome = '{$post['nome']}', 
                    Email = '{$post['email']}', 
                    senha = '{$post['senha']}' 
                WHERE ID = {$post['ID']}";
        $result = $this->conn->query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM usuario WHERE ID = $id";
        $result = $this->conn->query($sql);
    }



}

?>