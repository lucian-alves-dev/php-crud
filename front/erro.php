<?php http_response_code(404); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
    <link rel="stylesheet" href="/flex/flex.css">
    <link rel="stylesheet" href="/flex/flex-style.css">
</head>
<body class="flex-col children-center space-30">

    <style>
        h1 {
            font-size: 250%;
            font-weight: bold;
            color: red;
        }
    </style>

    <h1>ERRO!</h1>
    <div class="msg"><?php echo $_REQUEST['msg']; ?></div>
    <a class="button primary" href="/">Voltar ao login</a>

</body>
</html>