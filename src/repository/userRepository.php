<?php

namespace repository;
use PDO;
require_once __DIR__ . "/../entitys/Client.php";
class userRepository
{
    public function __construct(private PDO $pdo)
    {
    }

    public function add($nome,$cpf,$tipoConta)
    {
        $sql = "INSERT INTO cliente (nome, cpf,tipoPessoa) VALUES (?,?,?);";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $nome);
        $statement->bindValue(2, $cpf);
        $statement->bindValue(3, $tipoConta);
        $statement->execute();

    }

    public function searchAll():array
    {
        $sql = "SELECT * FROM cliente";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $clientes = $statement->fetchAll();
        return $clientes;
    }

    public function searchById($id):array
    {
        $sql = "SELECT * FROM cliente WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1,$id);
        $statement->execute();
        $clientes = $statement->fetch();
        return $clientes;
    }

    public function update(Client $client,$id):bool
    {
        $sql = "UPDATE cliente SET nome = ?, cpf = ? WHERE id = ?;";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $client->nome);
        $statement->bindValue(2, $client->cpf);
        $statement->bindValue(3, $id);

        if( $statement->execute()){
            return true;
        }else{
            return false;
        }
    }


    public function delete($id)
    {
        $sql = "DELETE FROM cliente WHERE id = ?;";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();

    }
}