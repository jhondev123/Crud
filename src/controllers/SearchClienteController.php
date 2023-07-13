<?php

class SearchClienteController implements Controller
{

    public function handle()
    {
        $pdo = ConnectionCreator::createConnection();
        require_once __DIR__ . "/../repository/userRepository.php";

        $repository = new \repository\userRepository($pdo);
        $clientes = $repository->searchAll();

        require_once __DIR__ . "/../../views/verClientes.php";
    }
}