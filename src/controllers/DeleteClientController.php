<?php

class DeleteClientController implements Controller
{

    public function handle()
    {
        $pdo = ConnectionCreator::createConnection();
        require_once __DIR__. "/../entitys/Client.php";
        require_once __DIR__. "/../repository/userRepository.php";
        $clientRepository = new \repository\userRepository($pdo);
        $id = $_GET['id'];
        var_dump($id);
        $clientRepository->delete($id);

        header("location: /verClientes");
    }
}