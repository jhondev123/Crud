<?php

return [
    'GET|/' => HomeController::class,
    'GET|/cadastro' =>AddClientFormController::class,
    'POST|/cadastro' => AddClientController::class,
    'GET|/atualizar' => UpdateClientFormController::class,
    'POST|/atualizar' => UpdateClientController::class,
    'GET|/verClientes' => SearchClienteController::class,
    'GET|/excluir' => DeleteClientController::class,
];