<?php
require_once "Controller.php";

class AddClientController implements Controller
{

    public function handle()
    {
        $pdo = ConnectionCreator::createConnection();
        require_once __DIR__. "/../entitys/Client.php";
        require_once __DIR__. "/../repository/userRepository.php";
        $clientRepository = new \repository\userRepository($pdo);
            $nome = $_POST["nome"];
            $cpf = $_POST['cpf'];
                $cpfClear = $this->clearCPF($cpf);
              $tipoConta = $_POST['tipoConta'];
              $clientRepository->add($nome,$cpfClear,$tipoConta);
              header("location: /verClientes");
    }
    public  function clearCPF(string $cpf):string
    {

        $cpf = trim($cpf);
        $cpf = str_replace(array('.','-','/'), "", $cpf);
        return $cpf;
    }

}