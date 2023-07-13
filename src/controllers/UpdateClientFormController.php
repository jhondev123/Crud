<?php

class UpdateClientFormController implements Controller
{

    public function handle()
    {
        $pdo = ConnectionCreator::createConnection();
        require_once __DIR__ . "/../repository/userRepository.php";

        $repository = new \repository\userRepository($pdo);
        $id = $_GET['id'];
        $clientes = $repository->searchById($id);
        require_once __DIR__ . "/../../views/editarCliente.php";
    }
}