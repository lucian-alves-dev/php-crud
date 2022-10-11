<?php include $_SERVER['DOCUMENT_ROOT'] . '/back/clientes/listagem.php'; ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo</title>
    <link rel="stylesheet" href="/flex/flex.css">
    <link rel="stylesheet" href="/flex/flex-style.css">
</head>
<body class="flex-col space-default-40">
    <header class="box-square flex-row children-center space-20">
        Bem vindo, <?php echo $_SESSION['admin']['nome']; ?>!
    </header>    
    <div class="flex-col grow">

        <div class="flex-row space-between children-vcenter no-space">
            <h1>Listagem de Clientes</h1>
            <a href="/front/clientes/cadastro.php" class="button primary">Cadastro</a>
        </div>

        <fieldset>
            <legend>Filtros</legend>
            <form class="flex-row">
                <input type="text" name="nome" placeholder="Nome">
                <input type="text" name="cpf" placeholder="CPF">
                <input type="date" name="data_nascimento" placeholder="Data de Nascimento">
                <button type="submit" class="button primary">Buscar</button>
            </form>
        </fieldset>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clientes as $c) { ?>
                    <tr>
                        <td><?php echo $c['id']; ?></td>
                        <td><?php echo $c['nome']; ?></td>
                        <td><?php echo $c['cpf']; ?></td>
                        <td><?php echo $c['data_nascimento']; ?></td>
                        <td width="100">
                            <a href="/front/editar.php?id=<?php echo $c['id'] ?>">Editar</a><br>
                            <a href="/back/excluir.php?id=<?php echo $c['id'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
    <footer class="box-square flex-row children-center  space-20">
        Lucian Alves 2022
    </footer>
</body>
</html>