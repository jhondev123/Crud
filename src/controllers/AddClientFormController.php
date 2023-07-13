<?php
require_once "Controller.php";
class AddClientFormController implements Controller
{

    public function handle()
    {
      require_once __DIR__ . "../../../views/cadastro.php";
    }
}