<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/flex/flex.css">
    <link rel="stylesheet" href="/flex/flex-style.css">
</head>
<body class="flex-col children-center space-30 flex-flavor-1">
    <fieldset class="text-center">
        <legend>Login</legend>

        <form class="flex-col space-30" method="post" action="/back-end/login.php">
            <label class="flex-col space-5">
                <small>Login</small>
                <input type="text" name="login" required>
            </label>
            <label class="flex-col space-5">
                <small>Senha</small>
                <input type="password" name="senha" required>
            </label>
            <button class="button primary">Entrar</button>
        </form>

    </fieldset>
</body>
</html>