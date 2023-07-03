<?php
class Evento {
    private $id;
    private $nome;
    private $dataCriacao;
    private $discricao;
    private $preco;
    private $img;
    private $dataEvento;
    private $path;
    
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($ev) {
        $sql = "INSERT INTO evento (nome, descricao, preco, path, dataEvento) VALUES 
        ('{$ev['nome']}', '{$ev['descricao']}', '{$ev['preco']}', '{$ev['path']}', '{$ev['dataEvento']}')";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            echo "Erro: $sql<br>".$this->conn->error."<br>";
            return false;
        }
    }

    public function readEventos($page) {
        $offset = $page * 5;
        $sql = "SELECT * FROM evento LIMIT 10 OFFSET $offset";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
}
?>