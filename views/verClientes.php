<?php

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver clientes cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>

<table class="table">
    <thead>
    <tr>

        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">Tipo Conta</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($clientes as $cliente):?>
    <tr>
        <td><?= $cliente['nome'];?></td>
        <td><?= $cliente['cpf']; ?></td>
<?php
if ($cliente['tipoPessoa']===1){
    $tipo = "pessoa jurídica";
}else{
    $tipo = "pessoa física";
}
?>
        <td><?= $tipo ?></td>
        <td><a href="/atualizar?id=<?= $cliente['id']?>">editar</a></td>
        <td><a href="/excluir?id=<?= $cliente['id']?>">excluir</a></td>

    </tr>

<?php endforeach;?>
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>