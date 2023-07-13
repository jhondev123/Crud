
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<body>

<form method="post" ">
    <label for="nome"class="form-label">Nome</label>
    <input type="text" name="nome" id="nome"class="form-control"required>

    <label for="cpf"class="form-label">CPF</label>
    <input type="text" name="cpf" id="cpf"class="form-control"required>

    <label for="Tipo da conta"class="form-label">Tipo da conta</label>
    <select name="tipoConta"class="dropdown"required>
        <option value="0"class="dropdown-item">Pessoa física</option>
        <option value="1"class="dropdown-item">Pessoa jurídica</option>
    </select>
    <input type="submit"class="btn btn-primary">

</form>
<script>
    const input = document.querySelector('#cpf')
    input.addEventListener('keypress',() =>{
        let inputLength = input.value.length
        if (inputLength === 3 || inputLength === 7){
            input.value += '.'
        }else if(inputLength === 11){
            input.value += '-'
        }
    })
</script>
</body>
</html>
