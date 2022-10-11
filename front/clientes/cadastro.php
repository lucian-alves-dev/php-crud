<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="/flex/flex.css">
    <link rel="stylesheet" href="/flex/flex-style.css">
</head>
<body class="flex-col space-default-40">
    <header class="box-square flex-row children-center space-20">
        Bem vindo, <?php echo $_SESSION['admin']['nome']; ?>!
    </header>    
    <div class="flex-col grow">

        <h1>Cadastro de Cliente</h1>

        <fieldset>
            <legend>Dados</legend>
            <form class="flex-row" method="post" action="/back/clientes/cadastro.php">
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="text" name="cpf" placeholder="CPF" required>
                <input type="date" name="data_nascimento" placeholder="Data de Nascimento" required>
                <button type="submit" class="button primary">Salvar</button>
            </form>
        </fieldset>

    </div>
    <footer class="box-square flex-row children-center  space-20">
        Lucian Alves 2022
    </footer>
</body>
</html>