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
<body class="flex-col children-center space-30">
    <fieldset class="text-center">
        <legend>Login</legend>
        <form class="flex-col space-30" method="post" action="/back/login.php">
            <input type="text" name="login" placeholder="Login" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button class="button primary">Entrar</button>
        </form>
    </fieldset>
</body>
</html>